<?php

namespace App\Repositories;

use App\Models\Tarifs;
use App\Repositories\BaseRepository;

/**
 * Class TarifsRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:20 pm UTC
*/

class TarifsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'KMFORFAIT',
        'MODELOC',
        'COUTBASE'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tarifs::class;
    }
}
