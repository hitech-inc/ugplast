<?php

namespace App\Repositories;

use App\Models\Blocks;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BlocksRepository
 * @package App\Repositories
 * @version March 3, 2018, 6:12 am UTC
 *
 * @method Blocks findWithoutFail($id, $columns = ['*'])
 * @method Blocks find($id, $columns = ['*'])
 * @method Blocks first($columns = ['*'])
*/
class BlocksRepository extends BaseRepository
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
        return Blocks::class;
    }
}
