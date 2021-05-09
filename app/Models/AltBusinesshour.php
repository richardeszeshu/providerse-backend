<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * AltBusinesshour model
 *
 * @property integer    $id
 * @property integer    $employee_id
 * @property string     $start_date
 * @property string     $end_date
 * @property string     $open_time
 * @property string     $close_time
 * @property integer    $created_at
 * @property integer    $updated_at
 */
class AltBusinesshour extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'start_date',
        'end_date',
        'open_time',
        'close_time',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'datetime:Y-m-d',
        'end_date' => 'datetime:Y-m-d'
    ];

    /**
     * Get the employee that owns the alt business hour.
     *
     * @return App\Models\Employee
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
