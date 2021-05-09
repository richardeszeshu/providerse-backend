<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Image class
 *
 * @property integer    $id
 * @property integer    $imageable_id
 * @property string     $imageable_type
 * @property string     $type
 * @property string     $path
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Image extends Model
{
    use HasFactory;

    /**
     * Field name prefix to use in polymorphic relationships.
     */
    const POLYMORPHIC_FIELD = 'imageable';

    /**
     * Type of profile image.
     */
    const TYPE_PROFILE = 1;

    /**
     * Type of reference image.
     */
    const TYPE_REFERENCE = 2;

    /**
     * Type of featured image.
     */
    const TYPE_FEATURED = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imageable_id',
        'imageable_type',
        'type',
        'path'
    ];

    /**
     * Usable types.
     *
     * @var array
     */
    protected $types = [
        self::TYPE_PROFILE => 'profile',
        self::TYPE_REFERENCE => 'reference',
        self::TYPE_FEATURED => 'featured'
    ];

    /**
     * Get translated name of the image's type.
     *
     * @return string
     */
    public function getTypeNameAttribute()
    {
        return __('image.types.'.$this->types[$this->attributes['type']]);
    }

    /**
     * Get the parent imageable model (user, employee, provider or service).
     *
     * @return mixed
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
