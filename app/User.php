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

class User extends Authenticatable
{
    use HasApiTokens,Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_img',
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


    public function get_roles(){
        $roles = [];
        foreach ($this->getRoleNames() as $key => $role) {
            $roles[$key] = $role;
        }

        return $roles;
    }

    public static function sendMail($content,$email)
    {
        Mail::to($email)->send(new ClaimMail($content));
    }
    
    public static function sendMailR($content,$email)
    {
        Mail::to($email)->send(new ClaimMailR($content));
    }
    public static function profile($uid){
        $profile = Profile::where('user_id',$uid)->first();
        return $profile;
    }
}
