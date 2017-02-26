<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DespesasRepository;
use App\Despesas;
use App\Validators\DespesasValidator;

/**
 * Class DespesasRepositoryEloquent
 * @package namespace App\Repositories;
 */
class DespesasRepositoryEloquent extends BaseRepository implements DespesasRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Despesas::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
