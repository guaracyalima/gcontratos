<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EstadosRepository;
use App\\Estados;
use App\Validators\EstadosValidator;

/**
 * Class EstadosRepositoryEloquent
 * @package namespace App\Repositories;
 */
class EstadosRepositoryEloquent extends BaseRepository implements EstadosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Estados::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
