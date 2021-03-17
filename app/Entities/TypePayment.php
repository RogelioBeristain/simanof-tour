<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TypePayment extends Model
{
      public function Payments()
    {
        return $this->hasMany(SimanofPayment::class);
    }
}
