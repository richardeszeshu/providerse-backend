<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * User model
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $email_verified_at
 * @property integer $language_id
 * @property string $phone
 * @property string $password
 * @property string $remember_token
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'language_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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
     * Get the bookings associated with the user.
     *
     * @return Illuminate\Support\Collection
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
