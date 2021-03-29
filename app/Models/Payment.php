<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models
 * @version March 29, 2021, 3:42 am UTC
 *
 * @property integer $user_id
 * @property string $name_of_depositor
 * @property string $proof_of_payment
 * @property string $refund_details
 * @property string $refund_payment_details
 * @property integer $category_id
 * @property integer $course_id
 * @property number $amount
 * @property string $status
 * @property string $mode_of_payment
 * @property string $payment_processor
 */
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'name_of_depositor',
        'proof_of_payment',
        'refund_details',
        'refund_payment_details',
        'category_id',
        'course_id',
        'amount',
        'status',
        'mode_of_payment',
        'payment_processor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name_of_depositor' => 'string',
        'proof_of_payment' => 'string',
        'refund_details' => 'string',
        'refund_payment_details' => 'string',
        'category_id' => 'integer',
        'course_id' => 'integer',
        'amount' => 'float',
        'status' => 'string',
        'mode_of_payment' => 'string',
        'payment_processor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'name_of_depositor' => 'required',
        'proof_of_payment' => 'required',
        'amount' => 'required',
        'status' => 'required'
    ];

    
}
