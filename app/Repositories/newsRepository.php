<?php

namespace App\Repositories;

use App\Models\news;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class newsRepository
 * @package App\Repositories
 * @version March 3, 2018, 6:38 am UTC
 *
 * @method news findWithoutFail($id, $columns = ['*'])
 * @method news find($id, $columns = ['*'])
 * @method news first($columns = ['*'])
*/
class newsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return news::class;
    }
}
