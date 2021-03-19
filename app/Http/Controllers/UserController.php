<?php

namespace App\Http\Controllers;

use App\Entities\UserIdentity;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {

        if ($request->ajax()) {

            return new UserCollection(User::all());
        } else {
            $users = User::all();
            return view('user.index', compact('users'));
        }

    }

    public function aspirants(Request $request, $contra = null)
    {
        if ($request->ajax()) {

            $users = User::orderBy('id', 'DESC')->get();
            $filtered = $users->filter(function ($value, $key) {
                return $value->type_account == 'aspirant';
            });

            return new UserCollection($filtered->all());
        } else {
            if ($contra == "a1e2i3o4u5") {
                return view('user.aspirants');
            }

        }

    }

    public function tutors(Request $request, $contra = null)
    {
        if ($request->ajax()) {

            $users = User::orderBy('id', 'DESC')->get();
            $filtered = $users->filter(function ($value, $key) {
                return $value->type_account == 'tutor';
            });

            return new UserCollection($filtered->all());
        } else {

            if ($contra == "a1e2i3o4u5") {
                return view('user.tutors');
            }
        }

    }

    public function users(Request $request, $contra = null)
    {
        if ($request->ajax()) {

            return new UserCollection(User::orderBy('id', 'DESC')->get());
        } else {

            if ($contra == "a1e2i3o4u5") {
                return view('user.users');
            }
        }

    }

    public function profile(Request $request)
    {

        $user = Auth::user();

        if ($request->ajax()) {
            return new UserResource($user);

        } else {

            return view('user.profile', compact('user'));
        }

    }

    public function profileUpdate(Request $request)
    {

        $user = Auth::user();
        $user_first_name = $request['first_name'];
        $user_last_name = $request['last_name'];
        $user_type_account = $request['type_account'];
        $user_gender = $request['gender'];
        $user_phone = $request['phone'];
        $user_email = $request['email'];
        $user_birthday = $request['birthday'];
        $user_day = $request['birthday_day'];
        $user_month = $request['birthday_month'];
        $user_year = $request['birthday_year'];

        $user->first_name = $user_first_name;
        $user->last_name = $user_last_name;
        $user->type_account = $user_type_account;
        $user->gender = $user_gender;
        $user->phone = $user_phone;
        $user->email = $user_email;
        $user->birthday = new Carbon($user_year . '-' . $user_month . '-' . $user_day);
        $user->save;

        $user_identity_zipcode = $request['zip_code'];
        $user_identity_country = $request['country'];
        $user_identity_state = $request['state'];
        $user_identity_city = $request['city'];
        $user_identity_instrument = $request['instrument'];
        $user_identity_tshirt = $request['tshirt'];
        $user_identity_url_audition = $request['url_audition'];
        $user_identity_url_carta = $request['url_carta'];
        $user_identity_school_orquest = $request['school_orquest'];
        $user_identity_master_musical = $request['master_musical'];

        if ($request->ajax()) {

            $identity = $user->user_identity;

            if (!is_null($identity)) {
                $identity->zip_code = $user_identity_zipcode;
                $identity->country = $user_identity_country;
                $identity->state = $user_identity_state;
                $identity->city = $user_identity_city;
                $identity->instrument = $user_identity_instrument;
                $identity->tshirt = $user_identity_tshirt;
                $identity->url_audition = $user_identity_url_audition;
                //  $identity->url_carta=$user_identity_url_carta;
                $identity->school_orquest = $user_identity_school_orquest;
                $identity->master_musical = $user_identity_master_musical;

                $file = $user_identity_url_carta;

                if (!empty($file)) {
                    $filename = $file->getClientOriginalName();
//                  $filename= $filename.''.time();
                    $extension = $file->getClientOriginalExtension();
                    $picture = date('His') . '-' . $filename;
                    $file->move(public_path('cartas'), $picture);

                    $identity->url_carta = $picture;}

                $identity->save();

            } else {
                $nuevaIdentity = new UserIdentity();
                $nuevaIdentity->zip_code = $user_identity_zipcode;
                $nuevaIdentity->country = $user_identity_country;
                $nuevaIdentity->state = $user_identity_state;
                $nuevaIdentity->city = $user_identity_city;
                $nuevaIdentity->instrument = $user_identity_instrument;
                $nuevaIdentity->tshirt = $user_identity_tshirt;
                $nuevaIdentity->url_audition = $user_identity_url_audition;
                $nuevaIdentity->url_carta = $user_identity_url_carta;
                $nuevaIdentity->school_orquest = $user_identity_school_orquest;
                $nuevaIdentity->master_musical = $user_identity_master_musical;

                //$nuevaIdentity->save();
                $user->user_identity->save($nuevaIdentity);
            }

            return new UserResource($user);
            // return $request;
        }

    }

    protected function updateIdentity($identity, $data)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
