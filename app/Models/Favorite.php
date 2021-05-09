<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Favorite model
 *
 * @property integer    $id
 * @property integer    $favoritable_id
 * @property string     $favoritable_type
 * @property integer    $user_id
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Favorite extends Model
{
    use HasFactory;

    /**
     * Field name prefix to use in polymorphic relationships.
     */
    const POLYMORPHIC_FIELD = 'favoritable';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'favoritable_id',
        'favoritable_type',
        'user_id'
    ];

    /**
     * Get the parent favoritable model (employee, provider or service).
     *
     * @return mixed
     */
    public function favoritable()
    {
        return $this->morphTo();
    }

}
