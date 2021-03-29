<?php

namespace App\Repositories;

use App\Models\CourseUser;
use App\Repositories\BaseRepository;

/**
 * Class CourseUserRepository
 * @package App\Repositories
 * @version March 29, 2021, 3:42 am UTC
*/

class CourseUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'category_id',
        'user_account_id',
        'paid_date',
        'expiry_date',
        'plan',
        'paid_amount',
        'status'
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
        return CourseUser::class;
    }
}
