<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index() {
    	$articles = DB::table('articles')
    				->get();

        return view('index')->with('articles', $articles);
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function article() {
        return view('admin.articles.index');
    }
}
