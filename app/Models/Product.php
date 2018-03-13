<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version March 5, 2018, 10:39 am UTC
 *
 * @property string Title
 * @property string Body
 * @property string Img
 * @property string Url
 * @property string Slug
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Title',
        'Body',
        'Img',
        'Url',
        'Slug',
        'mm',
        'kg',
        'price',
        'diametr_mm',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Title' => 'string',
        'Body' => 'string',
        'Img' => 'string',
        'Url' => 'string',
        'Slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'Title' => 'required',
        // 'Body' => 'required',
        // 'Img' => 'required'
    ];

    
}
