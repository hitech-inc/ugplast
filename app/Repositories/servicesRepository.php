<?php

namespace App\Repositories;

use App\Models\services;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class servicesRepository
 * @package App\Repositories
 * @version March 3, 2018, 6:22 am UTC
 *
 * @method services findWithoutFail($id, $columns = ['*'])
 * @method services find($id, $columns = ['*'])
 * @method services first($columns = ['*'])
*/
class servicesRepository extends BaseRepository
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
        return services::class;
    }
}
