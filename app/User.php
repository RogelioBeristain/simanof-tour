<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Entities\UserIdentity;
use App\Entities\SimanofPayment;
use App\Entities\UserSession;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'password', 'gender', 'type_account', 'birthday', 'birthday_year', 'birthday_day', 'birthday_mount',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_identity()
    {
        return $this->hasOne(UserIdentity::class);
    }

    public function payments()
    {
        return $this->hasMany(SimanofPayment::class);
    }


    public function sessions()
    {
        return $this->hasMany(UserSession::class);
    }
}
