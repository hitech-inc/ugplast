<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class sliders
 * @package App\Models
 * @version March 3, 2018, 6:31 am UTC
 *
 * @property string title
 * @property string body
 * @property string url
 * @property string slidertext
 * @property string img
 */
class sliders extends Model
{
    use SoftDeletes;

    public $table = 'sliders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'url',
        'slidertext',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'url' => 'string',
        'slidertext' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'url' => 'required',
        'slidertext' => 'required'
    ];

    
}
