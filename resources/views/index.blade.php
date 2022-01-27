@extends('layouts.app')

@section('content')

<div id="content1">

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
<img src="../../img/bg4.png" class="bg4">
<div id="content4">
    
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
            <div class="detail_title">資本金</div>
            <div class="detail_content">100万円</div>
        </div>
        <div class="company_column1">
            <div class="detail_title mt10">東京本社</div>
            <div class="detail_content">〒107-0062 東京都港区六本木七丁目7番７号<br>トライセブンロッポンギ８F</div>
        </div>
        <div class="content4_line"></div>
    </div>
    <div class="button_red google_map">
        <a href="">Google map</a><img src="../../img/yazi.png" class="yazi">
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
            <div class="detail_title">名称</div>
            <div class="detail_content">株式会社StockStar　（株式会社ストックスター）</div>
        </div>
        <div class="news_column">
            <div class="detail_title">代表者</div>
            <div class="detail_content">代表取締役CEO　小林 宏至</div>
        </div>
        <div class="news_column">
            <div class="detail_title">設立</div>
            <div class="detail_content">2020年10月1日</div>
        </div>
        <div class="news_column">
            <div class="detail_title">資本金</div>
            <div class="detail_content">100万円</div>
        </div>
        <div class="news_column">
            <div class="detail_title mt13">東京本社</div>
            <div class="detail_content">〒107-0062 東京都港区六本木七丁目7番７号<br>トライセブンロッポンギ８F</div>
        </div>
        <div class="content5_line"></div>
        <div class="button_red more">
            <a href="">More</a><img src="../../img/yazi.png" class="yazi">
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
<nav class="footer_content" style="top:6350px;">
@endsection

@section('script')
<script src="{{ asset('js/app.js') }}"></script>
@endsection