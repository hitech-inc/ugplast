<?php

namespace App\Repositories;

use App\Models\advantages;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class advantagesRepository
 * @package App\Repositories
 * @version March 3, 2018, 6:27 am UTC
 *
 * @method advantages findWithoutFail($id, $columns = ['*'])
 * @method advantages find($id, $columns = ['*'])
 * @method advantages first($columns = ['*'])
*/
class advantagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'img',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return advantages::class;
    }
}
