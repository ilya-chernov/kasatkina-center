<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function index() {
        return view('articles.index');
    }

    public function viewArticle($code) {
        $article = Article::where('code', $code)->first();
        return view('articles.view', ['article' => $article]);
    }
}
