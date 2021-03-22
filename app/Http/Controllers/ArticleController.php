<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function home()
    {
        $articles = Article::all();
        return view('home', ['articles' => $articles]);
    }
    public function create(Request $req)
    {
        //$user = Auth::user();//
        $img_path = time() . '.' . $req->img_path->extension();
        $req->img_path->move(public_path('images/upload'), $img_path);
        

        Article::create([
            'judul' => $req->judul,
            'konten_singkat' => $req->konten_singkat,
            'image'=> $img_path,
            'author_id'=>"desy"
        ]);
        return redirect(route('article.home'));
    }
    public function detail(Request $req, $id)
    {
        $article = Article::find($id);
        return view('detail', ['article' => $article]);

    }
}