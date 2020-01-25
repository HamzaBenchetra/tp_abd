<?php

namespace App\Repositories;

use App\Models\Modele;
use App\Repositories\BaseRepository;

/**
 * Class ModelRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:20 pm UTC
*/

class ModelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MARQUE'
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
        return Modele::class;
    }
}
