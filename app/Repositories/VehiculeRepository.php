<?php

namespace App\Repositories;

use App\Models\Vehicule;
use App\Repositories\BaseRepository;

/**
 * Class VehiculeRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:21 pm UTC
*/

class VehiculeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'COULEUR',
        'AGE',
        'NUMMOD',
        'NUMAG',
        'NUMTYPE',
        'NUMCAT'
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
        return Vehicule::class;
    }
}
