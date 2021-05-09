<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Address model
 *
 * @property integer    $id
 * @property integer    $addressable_id
 * @property string     $addressable_type
 * @property string     $type
 * @property integer    $country_id
 * @property string     $providence
 * @property string     $city
 * @property string     $address
 * @property string     $postal_code
 * @property array      $location
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Address extends Model
{
    use HasFactory;

    /**
     * Field name prefix to use in polymorphic relationships.
     */
    const POLYMORPHIC_FIELD = 'addressable';

    /**
     * Type of billing address.
     */
    const TYPE_BILLING = 1;

    /**
     * Type of shipping address.
     */
    const TYPE_SHIPPING = 2;

    /**
     * Type of site address.
     */
    const TYPE_SITE = 3;

    /**
     * Type of residence address.
     */
    const TYPE_RESIDENCE = 4;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'addressable_id',
        'addressable_type',
        'type',
        'country_id',
        'providence',
        'city',
        'address',
        'postal_code',
        'location'
    ];

    /**
     * Usable types.
     *
     * @var array
     */
    protected $types = [
        self::TYPE_BILLING => 'billing',
        self::TYPE_SHIPPING => 'shipping',
        self::TYPE_SITE => 'site',
        self::TYPE_RESIDENCE => 'residence'
    ];

    /**
     * Convert location to array.
     *
     * @return array
     */
    public function getLocationAttribute()
    {
        $coordinates = unpack('x/x/x/x/corder/Ltype/dlat/dlon', $this->attributes['location']);

        return [
            'lat' => $coordinates['lat'],
            'lon' => $coordinates['lon']
        ];
    }

    /**
     * Convert location to POINT if necessary.
     *
     * When $location is array, it must to contain lat and lon in this order.
     *
     * @param array|string $location
     */
    public function setLocationAttribute($location)
    {
        if (is_array($location) && array_keys($location) == ['lat', 'lon']) {
            $location = DB::raw("(ST_GeomFromText('POINT(" . $location['lat'] . " " . $location['lon'] . ")'))");
        }

        $this->attributes['location'] = $location;
    }

    /**
     * Get translated name of the address's type.
     *
     * @return string
     */
    public function getTypeNameAttribute()
    {
        return __('address.types.'.$this->types[$this->attributes['type']]);
    }

    /**
     * Get the parent addressable model (user, employee or provider).
     *
     * @return mixed
     */
    public function addressable()
    {
        return $this->morphTo();
    }

    /**
     * Get the country associated with the address.
     *
     * @return App\Models\Country
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
