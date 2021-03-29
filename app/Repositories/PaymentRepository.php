<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\BaseRepository;

/**
 * Class PaymentRepository
 * @package App\Repositories
 * @version March 29, 2021, 3:42 am UTC
*/

class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Payment::class;
    }
}
