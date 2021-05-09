<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Rating model
 *
 * @property integer    $id
 * @property integer    $rateable_id
 * @property string     $rateable_type
 * @property integer    $user_id
 * @property integer    $rating
 * @property string     $comment
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Rating extends Model
{
    use HasFactory;

    /**
     * Field name prefix to use in polymorphic relationships.
     */
    const POLYMORPHIC_FIELD = 'rateable';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rateable_id',
        'rateable_type',
        'user_id',
        'rating',
        'comment'
    ];

    /**
     * Get the parent rateable model (employee, provider or service).
     *
     * @return mixed
     */
    public function rateable()
    {
        return $this->morphTo();
    }

    /**
     * Get the user that owns the rating.
     *
     * @return App\Models\User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
