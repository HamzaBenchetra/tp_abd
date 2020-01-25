<?php

namespace App\Repositories;

use App\Models\Contrat;
use App\Repositories\BaseRepository;

/**
 * Class ContratRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:20 pm UTC
*/

class ContratRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'DATECONT',
        'CAUTION',
        'KMDEP',
        'KMRET',
        'ETATCONT',
        'NUMCLI',
        'IMMAT',
        'MODELOC'
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
        return Contrat::class;
    }
}
