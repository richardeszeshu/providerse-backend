<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Role model
 *
 * @property integer    $id
 * @property string     $name
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Role extends Model
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
     * Get the capabilities associated with the role.
     *
     * @return Illuminate\Support\Collection
     */
    public function capabilities()
    {
        return $this->hasMany(Capability::class);
    }
}
