<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;
use App\Mail\ClaimMail;
use App\Mail\ClaimMailR;
use Mail;

class Profile extends Authenticatable
{
    protected $table='profile';

}
