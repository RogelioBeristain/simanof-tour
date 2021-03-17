<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Entities\TypePayment;

class SimanofPayment extends Model
{
     public function type_payment()
    {
        return $this->belongsTo(TypePayment::class);
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
