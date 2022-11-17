<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\View\View;
use App\Repositories\ArticleRepository;
use App\Http\Resources\ArticleResource;

class AdminController extends Controller
{

    public function index(ArticleRepository $articleRepository) {
        $articles = $articleRepository->getAllByPagination(6);
        return new ArticleCollection($articles);
//        return View('app/admin/index', compact('articles'));
    }

    public function edit(Request $request) {
        $id = $request->get('id');
        $article = Article::find($id);
        return view('app/admin/editAdmin', compact('article'));
    }
}
