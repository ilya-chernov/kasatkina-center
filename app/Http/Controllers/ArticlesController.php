<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }



    public function viewArticle($code) {
        $article = Article::where('code', $code)->firstOrFail();
        $attachment = Attachment::find($article['coverImgUrl']);
        if($attachment) {
            $article['coverImgUrl'] = $attachment->fullPath();
        }

        return view('articles.view', ['article' => $article]);
    }
}
