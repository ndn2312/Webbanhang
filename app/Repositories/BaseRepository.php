<?php

namespace App\Repositories;

use App\Models\Province;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Models\Base;
use Illuminate\Database\Eloquent\Model;


/**
 * Class UserService
 * @package App\Services
 */
class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    
    public function __construct(Model $model){
        $this->model =$model;
    }

    public function all(){
        return $this->model->all();
    }
}