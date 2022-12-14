<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index() {
        return view('articles.index', [
            'articles' => DB::table('articles')->get()
        ]);
    }

    public function article(Article $article) {
        return view('articles.article', [
            'article' => $article
        ]);
    }

}
