<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blocks
 * @package App\Models
 * @version March 3, 2018, 6:12 am UTC
 *
 * @property string title
 * @property string body
 * @property string url
 */
class Blocks extends Model
{
    use SoftDeletes;

    public $table = 'blocks';
    

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
        'url' => 'required'
    ];

    
}
