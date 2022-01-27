@extends('layouts.app')

@section('content')

<div id="news1">
    <div class="news1_title">
        <div class="title_1">News</div>
        <div class="title_2">ニュース</div>
    </div>
</div>

<div id="news2">

    <div class="news_detail">
        <div class="news_line"></div>
            <div class="news_detail_content">
                <div class="news_detail_date">{{ $news['notice_date'] }}</div>
                <div class="news_detail_title">{{ $news['title'] }}</div>
                <div class="news_detail_text">{!! nl2br(e($news['content'])) !!}</div>
            </div>
        <div class="news_line"></div>
        <a href="{{ route('news') }}"><img src="../../img/back_button.png" class="back_button"></a>
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
<nav class="footer_content" style="top:2000px;">
@endsection

@section('script')
<script src="{{ asset('js/vision.js') }}"></script>
@endsection