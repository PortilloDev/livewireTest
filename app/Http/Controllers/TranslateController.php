<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function index()
    {
        $articles = Article::all(); 
        return view('translate', compact('articles'));
    }
}
