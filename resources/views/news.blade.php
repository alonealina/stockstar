@extends('layouts.app')

@section('content')

<div id="news1">
    <div class="news1_title">
        <div class="title_1">News</div>
        <div class="title_2">ニュース</div>
    </div>
</div>

<div id="news2">

    <div class="news_list_index">
        <div class="news_line"></div>
        @foreach($news as $key => $news_array)
        <a href="{{ route('news.detail', ['id' => $news_array['id']]) }}">
            <div class="all_news">
                <div class="all_news_date">{{ $news_array['notice_date'] }}</div>
                <div class="all_news_title">
                    {{ $news_array['title'] }}
                </div>
            </div>
        </a>
        @if($end -1 != $key)
        <div class="news_line2"></div>
        @endif
        @endforeach
        <div class="news_line"></div>
        <div class="news_paginate">
        {{ $news->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <div class="latest_news_list">
        <div class="latest_news_text">最近の投稿</div>
        <div class="news_line2"></div>
        @foreach($latest_news as $latest_key => $latest)
        <a href="{{ route('news.detail', ['id' => $latest['id']]) }}">
            <div class="latest_news">
                <div class="latest_news_date">{{ $latest['notice_date'] }}</div>
                <div class="latest_news_title">
                    {{ $latest['title'] }}
                </div>
            </div>
            @if ($latest_key !== array_key_last($latest_news))
            <div class="latest_news_line"></div>
            @endif
        </a>
        @endforeach
    </div>

    
</div>


@endsection

@section('footer_px')
<nav class="footer_content" style="top:1700px;">
@endsection

@section('script')
<script src="{{ asset('js/vision.js') }}"></script>
@endsection