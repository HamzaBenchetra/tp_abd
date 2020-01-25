<?php

namespace App\Repositories;

use App\Models\Ville;
use App\Repositories\BaseRepository;

/**
 * Class VilleRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:21 pm UTC
*/

class VilleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'VILLECLI'
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
        return Ville::class;
    }
}
