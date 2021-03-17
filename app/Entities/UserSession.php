<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;
class UserSession extends Model
{
      public function user()
    {
        return $this->belongsTo(User::class);
    }
}
