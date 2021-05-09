<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Provider model
 *
 * @property integer    $id
 * @property string     $name
 * @property string     $description
 * @property string     $phone
 * @property string     $vat_number
 * @property integer    $default_currency
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Provider extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'phone',
        'vat_number',
        'default_currency'
    ];
}
}
