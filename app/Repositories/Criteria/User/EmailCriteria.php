<?php
namespace App\Repositories\Criteria\User;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;

class EmailCriteria extends Criteria
{
    private $keyword;

    public function __construct($keyword)
    {
        $this->keyword = $keyword;
    }

    public function apply($model, Repository $repository)
    {
        $model = $model->where('email', 'LIKE', '%' . $this->keyword . '%');

        return $model;
    }
}
