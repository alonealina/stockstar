@extends('layouts.app')

@section('content')

<div id="content1">
    <video src="../../img/bg_movie.mp4" autoplay loop muted playsinlin class="bg_movie"></video>
    <div class="content1_logo">
        <img src="../../img/logo_star.png" class="logo_star">
        <img src="../../img/logo_text.png" class="logo_text">
    </div>
</div>

<div id="content2">
    <div class="content2_all">
        <div class="content2_title none">
            <div class="title_1">Vision</div>
            <div class="title_2">ビジョン</div>
        </div>
        <div class="content2_text none">
            <div class="content2_text_1">テクノロジーで顧客の未来を明るく照らす</div>
            <div class="content2_text_2">"Brighten the future of customers with technology."</div>
            <div class="content2_text_3">StockStarは全く新しい何かを発想する為に存在しています。</div>
            <div class="button_red view_all">
                <a href="{{ route('vision') }}">View all</a><img src="../../img/yazi.png" class="yazi">
            </div>
        </div>
    </div>
</div>
<div id="content3">
    <div class="content3_all">
        <div class="content3_title none">
            <div class="title_1">Service</div>
            <div class="title_2">事業案内</div>
        </div>
        <ul class="services none">
            <a class="" href="{{ route('service') }}#system"><li>
                <img src="../../img/service1.png" class="service_img">
                システム開発事業
            </li></a>
            <a class="" href="{{ route('service') }}#block"><li>
                <img src="../../img/service2.png" class="service_img">
                ブロックチェーンサービス開発
            </li></a>
            <a class="" href="{{ route('service') }}#it"><li>
                <img src="../../img/service3.png" class="service_img">
                ITコンサルティング
            </li></a>
            <a class="" href="{{ route('service') }}#esti"><li>
                <img src="../../img/service4.png" class="service_img">
                資産運用のコンサルティング
            </li></a>
            <a class="" href="{{ route('service') }}#enter"><li>
                <img src="../../img/service5.png" class="service_img">
                エンターテイメント
            </li></a>
        </ul>

    </div>
</div>
<div id="content4">
    <div id="company"></div>
    <div class="content4_title">
        <div class="title_1">Company</div>
        <div class="title_2">会社概要</div>
    </div>
    <div class="company_detail">
        <div class="content4_line"></div>
        <div class="company_column1">
            <div class="detail_title">名称</div>
            <div class="detail_content">株式会社StockStar　（株式会社ストックスター）</div>
        </div>
        <div class="company_column1">
            <div class="detail_title">代表者</div>
            <div class="detail_content">代表取締役CEO　小林 宏至</div>
        </div>
        <div class="company_column1">
            <div class="detail_title">設立</div>
            <div class="detail_content">2020年10月1日</div>
        </div>
        <div class="company_column2">
            <div class="detail_title mt38">事業内容</div>
            <div class="detail_content">
                １）システム開発<br>
                ２）ブロックチェーンサービス開発<br>
                ３）ITコンサルティング<br>
                ４）資産運用のコンサルティング<br>
                ５）エンターテイメント
            </div>
        </div>
        <div class="company_column1">
            <div class="detail_title mt10">東京本社</div>
            <div class="detail_content">〒107-0062 東京都港区六本木七丁目7番７号<br>トライセブンロッポンギ８F</div>
        </div>
        <div class="content4_line"></div>
    </div>
    <div class="button_red google_map">
        <a href="https://goo.gl/maps/fQkxoL6mP3Qd8weT6">Google map</a><img src="../../img/yazi.png" class="yazi">
    </div>

</div>

<div id="content5">
    <div class="content5_all">
        <div class="content5_title none">
            <div class="title_1">News</div>
            <div class="title_2">お知らせ</div>
        </div>
    </div>

    <div class="news_list none">
        <div class="content5_line"></div>
        <div class="news_column">
            <a href="{{ route('news.detail', ['id' => $news[0]['id']]) }}" class="news_a">
                <div class="news_date">{{ isset($news[0]['notice_date']) ? $news[0]['notice_date'] : null }}</div>
                <div class="news_content">{{ isset($news[0]['title']) ? $news[0]['title'] : null }}</div>
            </a>
        </div>

        <div class="news_column">
            <a href="{{ route('news.detail', ['id' => $news[1]['id']]) }}" class="news_a">
                <div class="news_date">{{ isset($news[1]['notice_date']) ? $news[1]['notice_date'] : null }}</div>
                <div class="news_content">{{ isset($news[1]['title']) ? $news[1]['title'] : null }}</div>
            </a>
        </div>

        <div class="news_column">
            <a href="{{ route('news.detail', ['id' => $news[2]['id']]) }}" class="news_a">
                <div class="news_date">{{ isset($news[2]['notice_date']) ? $news[2]['notice_date'] : null }}</div>
                <div class="news_content">{{ isset($news[2]['title']) ? $news[2]['title'] : null }}</div>
            </a>
        </div>

        <div class="news_column">
            <a href="{{ route('news.detail', ['id' => $news[3]['id']]) }}" class="news_a">
                <div class="news_date">{{ isset($news[3]['notice_date']) ? $news[3]['notice_date'] : null }}</div>
                <div class="news_content">{{ isset($news[3]['title']) ? $news[3]['title'] : null }}</div>
            </a>
        </div>

        <div class="news_column">
            <a href="{{ route('news.detail', ['id' => $news[4]['id']]) }}" class="news_a">
                <div class="news_date">{{ isset($news[4]['notice_date']) ? $news[4]['notice_date'] : null }}</div>
                <div class="news_content">{{ isset($news[4]['title']) ? $news[4]['title'] : null }}</div>
            </a>
        </div>

        <div class="content5_line2"></div>
        <div class="button_red more">
            <a href="{{ route('news') }}">More</a><img src="../../img/yazi.png" class="yazi">
        </div>
    </div>
</div>

<img src="../../img/bg6.png" class="bg6">
<div id="content6">
    <div class="content6_title none">
        <div class="title_1">Contact</div>
        <div class="title_2">お問い合わせ</div>
    </div>
    <form class="contact_form">
        お名前                    
        <input class="form_text" placeholder="" name="name" type="text">
        返信用メールアドレス                    
        <input class="form_text" placeholder="" name="mail" type="text">
        電話番号                    
        <input class="form_text" placeholder="" name="tel" type="text">
        お問い合わせ内容                    
        <input class="form_textarea" placeholder="" name="content" type="textarea">
        <div class="button_red send">
            <a href="">Send</a><img src="../../img/yazi.png" class="yazi">
        </div>
    </form>
</div>

@endsection

@section('footer_px')
<nav class="footer_content" style="top:5650px;">
@endsection

@section('script')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/app_sp.js') }}"></script>
@endsection


@section('content_sp')

<div id="content1">
    <!-- <video src="../../img/bg_movie.mp4" autoplay loop muted playsinlin class="bg_movie"></video> -->
    <div class="content1_logo">
        <img src="../../img/logo_star.png" class="logo_star_sp">
        <img src="../../img/logo_text.png" class="logo_text_sp">
    </div>
</div>
<div id="content2_sp">
    <div class="content2_all_sp">
        <div class="content2_title_sp none">
            <div class="title_1_sp">Vision</div>
            <div class="title_2_sp">ビジョン</div>
        </div>
        <div class="content2_text_sp none">
            <div class="content2_text_1_sp">テクノロジーで顧客の未来を明るく照らす</div>
            <div class="content2_text_2_sp">"Brighten the future of<br>customers with technology."</div>
            <div class="content2_text_3_sp">StockStarは全く新しい何かを<br>発想する為に存在しています。</div>
            <div class="button_red view_all_sp">
                <a href="{{ route('vision') }}">View all</a><img src="../../img/yazi.png" class="yazi">
            </div>
        </div>
    </div>
</div>

<div id="content3_sp">
    <div class="content3_all_sp">
        <div class="content3_title_sp none">
            <div class="title_1_sp">Service</div>
            <div class="title_2_sp">事業案内</div>
        </div>
        <ul class="services_sp none">
            <a class="" href="{{ route('service') }}#system"><li>
                <img src="../../img/service1.png" class="service_img">
                <div class="service_name_sp">システム開発事業</div>
            </li></a>
            <a class="" href="{{ route('service') }}#block"><li>
                <img src="../../img/service2.png" class="service_img">
                ブロックチェーン<br>サービス開発
            </li></a>
            <a class="" href="{{ route('service') }}#it"><li>
                <img src="../../img/service3.png" class="service_img">
                <div class="service_name_sp">ITコンサルティング</div>
            </li></a>
            <a class="" href="{{ route('service') }}#esti"><li>
                <img src="../../img/service4.png" class="service_img">
                資産運用の<br>コンサルティング
            </li></a>
            <a class="" href="{{ route('service') }}#enter"><li>
                <img src="../../img/service5.png" class="service_img">
                <div class="service_name_sp">エンターテイメント</div>
            </li></a>
        </ul>

    </div>
</div>


<div id="content4_sp">
    <div id="company"></div>
    <div class="content4_title_sp">
        <div class="title_1_sp">Company</div>
        <div class="title_2_sp">会社概要</div>
    </div>
    <div class="company_detail_sp">
        <div class="content4_line"></div>
        <div class="company_column1">
            <div class="detail_title_sp">名称</div>
            <div class="detail_content_sp">株式会社StockStar　（株式会社ストックスター）</div>
        </div>
        <div class="company_column1">
            <div class="detail_title_sp">代表者</div>
            <div class="detail_content_sp">代表取締役CEO　小林 宏至</div>
        </div>
        <div class="company_column1">
            <div class="detail_title_sp">設立</div>
            <div class="detail_content_sp">2020年10月1日</div>
        </div>
        <div class="company_column2">
            <div class="detail_title_sp mt38">事業内容</div>
            <div class="detail_content_sp">
                １）システム開発<br>
                ２）ブロックチェーンサービス開発<br>
                ３）ITコンサルティング<br>
                ４）資産運用のコンサルティング<br>
                ５）エンターテイメント
            </div>
        </div>
        <div class="company_column1">
            <div class="detail_title_sp mt10">東京本社</div>
            <div class="detail_content_sp">〒107-0062 東京都港区六本木七丁目7番７号<br>トライセブンロッポンギ８F</div>
        </div>
        <div class="content4_line"></div>
    </div>
    <div class="button_red google_map_sp">
        <a href="https://goo.gl/maps/fQkxoL6mP3Qd8weT6">Google map</a><img src="../../img/yazi.png" class="yazi">
    </div>
</div>


<div id="content5_sp">
    <div class="content5_all_sp">
        <div class="content5_title_sp none">
            <div class="title_1_sp">News</div>
            <div class="title_2_sp">お知らせ</div>
        </div>
    </div>

    <div class="news_list_sp none">
        <div class="content5_line_sp"></div>
        <div class="news_column_sp">
            <div class="news_date_sp">{{ isset($news[0]['notice_date']) ? $news[0]['notice_date'] : null }}</div>
            <div class="news_content_sp">{{ isset($news[0]['title']) ? $news[0]['title'] : null }}</div>
        </div>
        <div class="news_column_sp">
            <div class="news_date_sp">{{ isset($news[1]['notice_date']) ? $news[1]['notice_date'] : null }}</div>
            <div class="news_content_sp">{{ isset($news[1]['title']) ? $news[1]['title'] : null }}</div>
        </div>
        <div class="news_column_sp">
            <div class="news_date_sp">{{ isset($news[2]['notice_date']) ? $news[2]['notice_date'] : null }}</div>
            <div class="news_content_sp">{{ isset($news[2]['title']) ? $news[2]['title'] : null }}</div>
        </div>
        <div class="news_column_sp">
            <div class="news_date_sp">{{ isset($news[3]['notice_date']) ? $news[3]['notice_date'] : null }}</div>
            <div class="news_content_sp">{{ isset($news[3]['title']) ? $news[3]['title'] : null }}</div>
        </div>
        <div class="news_column_sp">
            <div class="news_date_sp">{{ isset($news[4]['notice_date']) ? $news[4]['notice_date'] : null }}</div>
            <div class="news_content_sp">{{ isset($news[4]['title']) ? $news[4]['title'] : null }}</div>
        </div>
        <div class="content5_line2_sp"></div>
        <div class="button_red more_sp">
            <a href="{{ route('news') }}">More</a><img src="../../img/yazi.png" class="yazi">
        </div>
    </div>
</div>

<img src="../../img/bg6_sp.png" class="bg6">
<div id="content6">
    <div class="content6_title_sp none">
        <div class="title_1_sp">Contact</div>
        <div class="title_2_sp">お問い合わせ</div>
    </div>
    
    <form class="contact_form_sp none">
        お名前                    
        <input class="form_text" placeholder="" name="name" type="text">
        返信用メールアドレス                    
        <input class="form_text" placeholder="" name="mail" type="text">
        電話番号                    
        <input class="form_text" placeholder="" name="tel" type="text">
        お問い合わせ内容                    
        <input class="form_textarea" placeholder="" name="content" type="textarea">
        <div class="button_red send">
            <a href="">Send</a><img src="../../img/yazi.png" class="yazi">
        </div>
    </form>
</div>

@endsection