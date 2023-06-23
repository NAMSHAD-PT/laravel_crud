<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'student';
    // protected $fillable =[
    //     'name','email','phone','Rg_Number','gender','course'
    // ];
    // protected $guarded=[];
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'Rg_Number',
        'gender',
        'course',
    ];


    public static function getGenderOptions()
    {
        return [
            'Male' => 'Male',
            'Female' => 'Female',
        ];
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

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
}
