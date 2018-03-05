<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class advantages
 * @package App\Models
 * @version March 3, 2018, 6:27 am UTC
 *
 * @property string title
 * @property string body
 * @property string img
 * @property string url
 */
class advantages extends Model
{
    use SoftDeletes;

    public $table = 'advantages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'img',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'img' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'img' => 'required'
    ];

    
}
