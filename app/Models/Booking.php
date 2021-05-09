<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// TODO lehetséges, hogy inkább audition?

/**
 * Booking model
 *
 * @property integer    $id
 * @property integer    $user_id
 * @property boolean    $accepted
 * @property integer    $accepted_by
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'accepted',
        'accepted_by'
    ];
}
