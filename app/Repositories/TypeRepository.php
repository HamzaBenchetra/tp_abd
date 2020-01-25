<?php

namespace App\Repositories;

use App\Models\Type;
use App\Repositories\BaseRepository;

/**
 * Class TypeRepository
 * @package App\Repositories
 * @version January 25, 2020, 6:21 pm UTC
*/

class TypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'LIBTYPE'
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
        return Type::class;
    }
}
