<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class StockstarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('release_flg', '1')->orderBy('updated_at', 'desc')->take(5)->get();;

        return view('index', [
            'news' => $news,
        ]);
    }

}
