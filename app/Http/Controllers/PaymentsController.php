<?php

namespace App\Http\Controllers;

use App\Entities\SimanofPayment;
use App\Entities\TypePayment;
use App\Http\Resources\SimanofPaymentCollection;
use App\PaypalConfig;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalHttp\HttpException;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');


class PaymentsController extends Controller
{
    private $entorno;
    private $data_config;

    public function __contructor()
    {
        $this->entorno = App::environment();
        $this->data_config = PaypalConfig::all()->find(1);
    }

    public function config(Request $request)
    {
        if ($this->entorno == "production") {

            $clientId = $this->data_config['client_id_production'];
            $clientSecret = $this->data_config['client_secret_production'];

            return json_encode($clientId);
        } else {

            $clientId = $this->data_config['client_id_sandbox'];
            $clientSecret = $this->data_config['client_secret_sandbox'];
            return json_encode($clientId);

        }

    }
    /**
     * Cambiar el nombre del metodo
     */
    public function payAuditionCreate(Request $request)
    {
        if ($this->entorno == "production") {

            $clientId = $this->data_config['client_id_production'];
            $clientSecret = $this->data_config['client_secret_production'];
            $environment = new ProductionEnvironment($clientId, $clientSecret);
            $client = new PayPalHttpClient($environment);

        } else {

            $clientId = $this->data_config['client_id_sandbox'];
            $clientSecret = $this->data_config['client_secret_sandbox'];
            $environment = new SandboxEnvironment($clientId, $clientSecret);
            $client = new PayPalHttpClient($environment);
        }

        $request = new OrdersCreateRequest();

        $request->prefer('return=representation');
        $request->body =
        array(
            "intent" => "CAPTURE",

            "purchase_units" => array(
                0 => array(
                    'amount' => array(
                        'custom_id' => 'Audition-Tour',
                        'currency_code' => 'USD',
                        'value' => '30.00',
                    ),
                ))
            ,
            'application_context' => array(
                'return_url' => 'http://tour.simanof.com/',
                'cancel_url' => 'http://tour.simanof.com/',
                'user_action' => 'PAY_NOW',

            ));

        try {
            // Call API with your client and get a response for your call
            return json_encode($response = $client->execute($request));

            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            //  print_r($response);
        } catch (HttpException $ex) {
            /* echo $ex->statusCode;
        print_r($ex->getMessage()); */
        }
    }
    /**
     * Cambiar el nombre del metodo
     */
    public function payAuditionApprove(Request $request)
    {
        if ($this->entorno == "production") {

            $clientId = $this->data_config->client_id_prodution;
            $clientSecret = $this->data_config->client_secret_prodution;
            $environment = new ProductionEnvironment($clientId, $clientSecret);
            $client = new PayPalHttpClient($environment);

        } else {

            $clientId = $this->data_config->client_id_sandbox;
            $clientSecret = $this->data_config->client_secret_sandbox;
            $environment = new SandboxEnvironment($clientId, $clientSecret);
            $client = new PayPalHttpClient($environment);
        }

        //  return $request->body["orderID"];
        $request = new OrdersCaptureRequest($request->body["orderID"]);

        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($request);

            $pago = new SimanofPayment();

            $pago->total = $response->purchase_units[0]->payments->captures[0]->amount->value; //1
            $pago->total_tour = ($response->purchase_units[0]->payments->captures[0]->seller_receivable_breakdown->net_amount->value);
            $pago->fee = ($response->purchase_units[0]->payments->captures[0]->seller_receivable_breakdown->paypal_fee->value);
            $pago->currency_code = ($response->purchase_units[0]->payments->captures[0]->amount->currency_code);
            $pago->status = json_encode($response->purchase_units[0]->payments->captures[0]->status);
            $pago->date_register = new Carbon($response->purchase_units[0]->payments->captures[0]->create_time);
            $pago->country_code = json_encode($response->payer->address->country_code);
            $pago->zip_code = json_encode($response->purchase_units[0]->shipping->address->postal_code);
            $pago->full_name = json_encode($response->purchase_units[0]->shipping->name->full_name);
            $pago->order_id = json_encode($response->id);
            $pago->capture_id = json_encode($response->purchase_units[0]->payments->captures[0]->id);
            $pago->paypal_email = json_encode($response->payer->email_address);
            $pago->payer_id = json_encode($response->payer->payer_id);
            $pago->type_payment_id = 1; //14
            $pago->save();
            $user = Auth::user();

            $type_payment = TypePayment::find(1);

            $user->payments->save($pago);
            $type_payment->payments()->save($pago);

            #$response=$response->result->purchase_units[0]->payments->captures[0]->seller_receivable_breakdown->net_amount['value'];

            return json_encode($response);
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            // print_r($response);
        } catch (HttpException $ex) {

        }
    }
    public function payments(Request $request, $password = null)
    {
        if ($request->ajax()) {

            return new SimanofPaymentCollection(SimanofPayment::orderBy('id', 'DESC')->get());
        } else {

            if ($password == "a1e2i3o4u5") {
                return view('user.payments');
            }
        }
    }
}
