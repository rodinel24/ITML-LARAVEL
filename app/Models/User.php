<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //'name',
        'email',
        'password',
        // 'role',
        'fname',
        'lname',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //displaying the fname and lname to layout.blade
    public function getFnameAttribute($value)
    {
        return Str::of($value)->title();
    }
    public function getLnameAttribute($value)
    {
        return Str::of($value)->title();
    }

    public function getRoleAttribute($value)
    {
        return $value;
    }

    // //start counter of total active users
    // public function getIdAttribute($value)
    // {

    //     $value = Model::where('role' , '0')->count();
    //         return $value;


    // }

    //  //start counter of total active users
    //  public function getEmailAttribute($value)
    //  {

    //      $value = Model::where('role' , '1')->count();
    //          return $value;


    //  }


    // //start counter of total accounts of admin
    //  public function getRoleAttribute($value)
    //  {

    //     return  $value=Model::where('role' , '1')->count();

    //  }


}
