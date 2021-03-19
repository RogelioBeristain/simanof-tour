<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SimanofPaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id ,
            'total'=>$this->total ,
            'total_tour'=>$this->total_tour ,
            'fee'=>$this->fee ,
            'currency_code'=>$this->currency_code,
            'status'=>$this->status,
            'date_register'=>$this->date_register,
            'country_code'=>$this->country_code,
            'zip_code'=>$this->zip_code,
            'full_name'=>$this->full_name,
            'paypal_email'=>$this->paypal_email,
            'order_id'=>$this->order_id,
            'payer_id'=>$this->payer_id,
            'capture_id'=>$this->capture_id,
            'type_payment_id'=>$this->type_payment_id,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'user_id'=>$this->user_id,
            'user'=>$this->user,
        ];
    }
}
