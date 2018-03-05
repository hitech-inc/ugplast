<?php

namespace App\Repositories;

use App\Models\sliders;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class slidersRepository
 * @package App\Repositories
 * @version March 3, 2018, 6:31 am UTC
 *
 * @method sliders findWithoutFail($id, $columns = ['*'])
 * @method sliders find($id, $columns = ['*'])
 * @method sliders first($columns = ['*'])
*/
class slidersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'url',
        'slidertext',
        'img'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return sliders::class;
    }
}
