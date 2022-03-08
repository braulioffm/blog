<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function profile(){
        //$profile = Profile::where('user_id', $this->id)->first(); //se necesita colocar el "use" para incluir la clase de esta forma

        //return $profile;

        //return $this->hasOne(Profile::class); 

        //Relacion uno a uno
        return $this->hasOne('App\Models\Profile'/* ,'foreign_key','local_key'*/); //2do y  3er parametro son para especificar el nombre de llave foranea y primaria respectivamente, en caso de no haberlo hecho por convencion
    }

    //Relacion uno a muchos
    public function posts() {
        return $this->hasMany('App\Models\Post');
    }

    //Relacion uno a muchos
    public function videos() {
        return $this->hasMany('App\Models\Video');
    }

    //Relacion uno a muchos
    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }    

    //Relacion muchos a muchos
    public function roles() {
        return $this->belongsToMany('App\Models\Role');
    }

    //Relacion uno a uno polimorfica
    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}
