<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ParcelasRepository;
use App\Parcelas;
use App\Validators\ParcelasValidator;

/**
 * Class ParcelasRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ParcelasRepositoryEloquent extends BaseRepository implements ParcelasRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Parcelas::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
