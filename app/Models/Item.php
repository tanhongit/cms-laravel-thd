<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * @package App\Models
 * @version March 29, 2021, 3:42 am UTC
 *
 * @property integer $user_id
 * @property integer $course_id
 * @property boolean $is_free
 * @property string $thumbnail
 * @property integer $view_count
 * @property string $url
 * @property string $title
 * @property string $description
 */
class Item extends Model
{
    use SoftDeletes;

    public $table = 'items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'is_free',
        'thumbnail',
        'view_count',
        'url',
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'course_id' => 'integer',
        'is_free' => 'boolean',
        'thumbnail' => 'string',
        'view_count' => 'integer',
        'url' => 'string',
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'view_count' => 'required'
    ];

    
}
