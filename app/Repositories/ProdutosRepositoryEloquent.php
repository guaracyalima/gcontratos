<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Produtos;
//use App\Validators\ProdutosValidator;

/**
 * Class ProdutosRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ProdutosRepositoryEloquent extends BaseRepository implements ProdutosRepository
{



    public function lists($id, $nome = ['*'] )
    {
        return $this->model->lists( 'nome', 'id');
    }


    public function model()
    {
        return Produtos::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


}
