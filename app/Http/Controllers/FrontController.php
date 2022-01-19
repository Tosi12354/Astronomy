<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index() {

        return view('backstage.blod.index-create');
    }
    public function news() {
        
        $articles = DB::table('articles')->get();

        return view('backstage.blod.index-news', compact('articles'));
    }
}
