<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

// Necesario para usar Passport
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    // Necesario para usar Passport
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * Soft deletes.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'activation_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'activation_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the work experiences for the user.
     */
    public function workExperiences()
    {
        return $this->hasMany('App\WorkExperience');
    }

    /**
     * Get the studies for the user.
     */
    public function studies()
    {
        return $this->hasMany('App\Study');
    }

    /**
     * Get the presentation letters for the user.
     */
    public function presentationLetters()
    {
        return $this->hasMany('App\PresentationLetter');
    }
}
