<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Capability model
 *
 * @property integer    $id
 * @property string     $name
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Capability extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the roles that owns the capability.
     *
     * @return Illuminate\Support\Collection
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
