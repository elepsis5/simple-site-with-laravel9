<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class articleController extends Controller
{
    public function articleIndex() {
        $articles = Article::getByPagination(10);
        return view('app.article.index', compact('articles'));
    }

    public function articleOne($slug) {
        $article = Article::getBySlug($slug);
        return view('app.article.one', compact('article'));
    }
}