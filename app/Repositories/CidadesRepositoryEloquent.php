<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CidadesRepository;
use App\\Cidades;
use App\Validators\CidadesValidator;

/**
 * Class CidadesRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CidadesRepositoryEloquent extends BaseRepository implements CidadesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cidades::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
