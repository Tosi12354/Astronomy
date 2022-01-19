<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index() {

        $articles = DB::table('articles')->get(); // 到 articles 撈資料

        return view('backstage.blog.blog', compact('articles'));
    }

    public function create() {

        return view('backstage.blog.blog-create');
    }

    public function store(Request $request) {
        // 直接用DB操控資料庫
        // DB::table('articles')->insert([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     "created_at" =>  \Carbon\Carbon::now(),
        //     "updated_at" => \Carbon\Carbon::now(),
        // ]);

        // 用 model 來操控資料庫
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('/blog');
    }
}
