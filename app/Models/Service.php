<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Service model
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
    ];

    /**
     * Get the employees associated with the service.
     *
     * @return Illuminate\Support\Collection
     */
    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    /**
     * Get the currency associated with the service.
     *
     * @return App\Models\Currency
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
