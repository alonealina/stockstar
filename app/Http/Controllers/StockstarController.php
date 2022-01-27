<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class StockstarController extends Controller
{

    public function index()
    {
        $news = News::where('release_flg', '1')->orderBy('updated_at', 'desc')->take(5)->get();;

        return view('index', [
            'news' => $news,
        ]);
    }

    public function news()
    {
        $latest_news = News::where('release_flg', '1')->orderBy('updated_at', 'desc')->take(5)->get()->toArray();
        $news = News::where('release_flg', '1')->orderBy('updated_at', 'desc')->paginate(10);
        $end = count($news);
        return view('news', [
            'latest_news' => $latest_news,
            'news' => $news,
            'end' => $end,
        ]);
    }

    public function news_detail($id)
    {
        $latest_news = News::where('release_flg', '1')->orderBy('updated_at', 'desc')->take(5)->get()->toArray();
        $news = News::find($id);
        return view('news_detail', [
            'latest_news' => $latest_news,
            'news' => $news,
        ]);
    }

}
