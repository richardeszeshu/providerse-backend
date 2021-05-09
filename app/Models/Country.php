<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Country model
 *
 * @property integer    $id
 * @property string     $name
 * @property string     $code
 * @property boolean    $is_eu_member
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'is_eu_member'
    ];
}
