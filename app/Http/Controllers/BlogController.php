<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    // 最新消息
    public function index() {

        $articles = DB::table('articles')->get(); // 到 articles 撈資料

        return view('backstage.blog.blog', compact('articles'));
    }
    // 新增文章
    public function create() {

        return view('backstage.blog.blog-create');
    }
    // 文章儲存
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

    // 編輯資料
    public function edit($id) {

        $article = Article::find($id);
        return view('backstage.blog.blog-edit', compact('article'));
    }

    // 更新資料
    public function update($id, Request $request) {

        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save(); // save() 是更新
        return redirect('/blog');
    }

    // 刪除資料
    public function delete($id) {
        
        Article::find($id)->delete();
        return redirect('/blog');
    }
}
