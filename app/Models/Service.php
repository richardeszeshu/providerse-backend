<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Service modedl
 *
 * @property integer    $id
 * @property string     $name
 * @property string     $description
 * @property float      $price
 * @property float      $special_price
 * @property integer    $currency_id
 * @property integer    $length
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Service extends Model
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
        'price',
        'special_price',
        'currency_id',
        'length'
    ]
}
