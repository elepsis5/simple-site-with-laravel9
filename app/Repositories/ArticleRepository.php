<?php

namespace App\Repositories;

use App\Models\Article as Model;

class ArticleRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllByPagination($quantity) {
        return Model::with('comments', 'state', 'tags')->paginate($quantity);
    }
}