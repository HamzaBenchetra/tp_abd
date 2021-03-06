<?php

namespace App\Repositories;

use App\Models\ModeLocation;
use App\Repositories\BaseRepository;

/**
 * Class ModeLocationRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:20 pm UTC
*/

class ModeLocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'DESCMODELOC'
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
        return ModeLocation::class;
    }
}
