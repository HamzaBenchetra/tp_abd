<?php

namespace App\Repositories;

use App\Models\Agence;
use App\Repositories\BaseRepository;

/**
 * Class AgenceRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:20 pm UTC
*/

class AgenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'NOMAG',
        'NBREMPLOYES',
        'NUMPAYS'
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
        return Agence::class;
    }
}
