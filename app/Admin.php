<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;
//Notification for Seller
// use App\Notifications\SellerResetPasswordNotification;
//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    //Mass assignable attributes
    protected $fillable = [
        'name', 'password',
      ];
      //hidden attributes
      protected $hidden = [
         'password', 'remember_token',
      ];
      //Send password reset notification
      public function sendPasswordResetNotification($token)
      {
        //   $this->notify(new SellerResetPasswordNotification($token));
      }
}
