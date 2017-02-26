<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PagamentosRepository;
use App\Pagamentos;
use App\Validators\PagamentosValidator;

/**
 * Class PagamentosRepositoryEloquent
 * @package namespace App\Repositories;
 */
class PagamentosRepositoryEloquent extends BaseRepository implements PagamentosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Pagamentos::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
