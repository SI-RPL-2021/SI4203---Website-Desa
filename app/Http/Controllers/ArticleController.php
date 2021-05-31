<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
        // dd($req);

    // class="form-group">
    // {!! Form::label('file', 'File:') !!}
    // <p>{!! $attatchment->file !!}</p>
    
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