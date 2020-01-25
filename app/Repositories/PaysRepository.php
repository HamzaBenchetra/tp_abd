<?php

namespace App\Repositories;

use App\Models\Pays;
use App\Repositories\BaseRepository;

/**
 * Class PaysRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:20 pm UTC
*/

class PaysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'NOMPAYS',
        'NBHANITANTS'
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
        return Pays::class;
    }
}
