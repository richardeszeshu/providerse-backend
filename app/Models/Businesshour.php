<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Businesshour model
 *
 * @property integer    $id
 * @property integer    $employee_id
 * @property integer    $weekday
 * @property string     $open_time
 * @property string     $close_time
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class Businesshour extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'weekday',
        'open_time',
        'close_time'
    ];
}
