<?php

namespace App\Repositories;

use App\Models\Etat-Contrat;
use App\Repositories\BaseRepository;

/**
 * Class Etat-ContratRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:20 pm UTC
*/

class Etat-ContratRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'LIBETATCONT'
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
        return Etat-Contrat::class;
    }
}
