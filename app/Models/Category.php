<?php

namespace App\Models;

use App\Models\Product;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Class Category
 * @package App\Models
 * @version March 6, 2018, 11:38 am UTC
 *
 * @property string Name
 * @property string slug
 * @property string Category
 * @property string Picture
 * @property string Description
 * @property integer parent_id
 * @property integer _lft
 * @property integer _rgt
 */
class Category extends Model
{
    use SoftDeletes;
    use NodeTrait;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Name',
        'Slug',
        'Category',
        'Picture',
        'Description',
        'parent_id',
        '_lft',
        '_rgt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Name' => 'string',
        'Slug' => 'string',
        'Category' => 'string',
        'Picture' => 'string',
        'Description' => 'string',
        'parent_id' => 'integer',
        '_lft' => 'integer',
        '_rgt' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required',
    ];


    public function products() 
    {
        return $this->hasMany(Product::class);
    }

    public static function dropdown() 
    {
        return self::pluck('Name', 'id')->all();
    }


    public static function select() 
    {
        $res = self::withDepth()->having('depth', '=', 0)->get();
        //dd($res);
        return ['' => 'Верхний уровень'] + $res->pluck('Name', 'id')->all();
    }

    // public static function select() 
    // {
    //     $res = [];

    //     $roots = self::withDepth()->having('depth', '=', 0)->get();

    //     foreach ($roots as $root) 
    //     {
    //         $children = [];

    //         if ($root->hasChildren())
    //         {
    //             $categories = self::descendantsOf($root->id);
    //             $children = $categories->pluck('Name', 'id')->all();
    //         }

    //         $res[$root->Name] = $children;
    //     }
        
    //     $res = ['' => 'Верхний уровень'] + $res;
    //     dd($roots);
    //     return $res;
    // }

    public static function groupedSelect() 
    {
        $res = [];

        $roots = self::withDepth()->having('depth', '=', 0)->get();
//dd($roots);
        
        foreach ($roots as $root) 
        {
            $children = [];

            if ($root->hasChildren())
            {
                $categories = self::descendantsOf($root->id);
                $children = $categories->pluck('Name', 'id')->all();
            }

            $res[$root->Name] = $children;
        }
//dd($res);
        return $res;
    }

    public function getChildren()
    {
        //$children = self::where('parent_id', $this->id)->get(); //получаю всех детей средствами laravel
        return self::descendantsOf($this->id); //получаю всех детей средствами библиотеки nestedset, descendantsOf это метод nestedset. Self это значит обращаться к самому себе, т.е. к моделе, классу Category
    }
    
}
