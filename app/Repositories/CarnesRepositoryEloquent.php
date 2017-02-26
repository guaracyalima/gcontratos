<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CarnesRepository;
use App\Carnes;
use App\Validators\CarnesValidator;

/**
 * Class CarnesRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CarnesRepositoryEloquent extends BaseRepository implements CarnesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Carnes::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function lists($id, $colum = ['*'])
    {
        return $this->model->lists('id');
    }
}
