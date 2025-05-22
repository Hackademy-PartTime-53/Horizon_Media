<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
        return view('home', compact('articles'));
    }
}
