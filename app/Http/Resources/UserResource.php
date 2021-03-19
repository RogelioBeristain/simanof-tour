<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'first_name'=> $this->first_name,
            'last_name'=> $this->last_name,
            'email'=> $this->email,
            'url_picture' => $this->url_picture,
            'phone'=>$this->phone,
            'gender'=>$this->gender,
            'type_account'=>$this->type_account,
            'birthday'=>$this->birthday,
            'identity'=>$this->user_identity,
            'payments'=>$this->payments,
        ];
    }
}
