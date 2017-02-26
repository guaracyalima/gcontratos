<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ReceitasRepository;
use App\Receitas;
use App\Validators\ReceitasValidator;

/**
 * Class ReceitasRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ReceitasRepositoryEloquent extends BaseRepository implements ReceitasRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Receitas::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
