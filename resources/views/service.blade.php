@extends('layouts.app')

@section('content')

<div id="service1">
    <div class="service1_title">
        <div class="title_1">Service</div>
        <div class="title_2">事業案内</div>
    </div>
</div>

<div id="service2">

    <nav class="service_list_bar service_list_bar_pc">
        <ul>
            <li class="service_system"><a>システム開発事業</a></li>
            <li class="service_block"><a>ブロックチェーンサービス開発</a></li>
            <li class="service_it"><a>ITコンサルティング</a></li>
            <li class="service_esti"><a>資産運用のコンサルティング</a></li>
            <li class="service_enter"><a>エンターテイメント</a></li>
        </ul>
    </nav>

    <img src="../../img/logo.png" class="service_logo">

    <div class="service2_system" hidden>
        <div class="service2_title system_title none">
            <div class="title_1">System Development</div>
            <div class="title_2">システム開発事業</div>
        </div>
        <div class="service2_content system_content none">
            <div class="service2_content1">安心で使い易いシステムを求めて</div>
            <div class="service2_content2">
                StockStarは自社エンジニアスタッフと共にグローバルなエンジニアチームを<br>
                構成しています。顧客・ユーザーの「こうしたい！」を実現するだけでなく、<br>
                弊社から「こうしたらどうですか？」という問題解決への提案を心がけています。
            </div>
        </div>
    </div>

    <div class="service2_block" hidden>
        <div class="service2_title block_title td6s none">
            <div class="title_1">Blockchain Service</div>
            <div class="title_2">ブロックチェーンサービス開発</div>
        </div>
        <div class="service2_content block_content td7s none">
            <div class="service2_content1">安心な情報保持をブロックチェーンで実現</div>
            <div class="service2_content2">
                暗号通貨が非常に多くの業界で使用され多くのサービスを生み出しています。<br>
                StockStarではブロックチェーン技術を活用した様々なサービス開発を<br>
                行っています。今後の世界にとって重要な技術である<br>
                ブロックチェーンテクノロジーを活用しましょう。
            </div>
        </div>
    </div>

    <div class="service2_it" hidden>
        <div class="service2_title it_title td6s none">
            <div class="title_1">IT Consulting</div>
            <div class="title_2">ITコンサルティング</div>
        </div>
        <div class="service2_content it_content td7s none">
            <div class="service2_content1">企業・ユーザーの「Need」と「Want」を解決する</div>
            <div class="service2_content2">
                現在では全ての人々が何かしらの環境で「ITテクノロジー」を活用しています。<br>
                ですが一般市民にとっては分かりずらいものであります。弊社は高い技術力を<br>
                ベースにして顧客・ユーザーが必要とする技術を提供し「こうしたい！」という<br>
                希望を実現します。
            </div>
        </div>
    </div>

    <div class="service2_esti" hidden>
        <div class="service2_title esti_title td6s none">
            <div class="title_1">Asset Management</div>
            <div class="title_2">資産運用のコンサルティング</div>
        </div>
        <div class="service2_content esti_content td7s none">
            <div class="service2_content1">資産運用のコンサルティング</div>
            <div class="service2_content2">
                将来や未来を見据えた資産運用は非常に重要なアクションであり正確性が<br>
                求められます。毎年の利益や利率に注目するあまりに自分自身のレベルや<br>
                リスク管理を超えた資産運用をよく目にします。<br>
                StockStarはユーザーの状況に合わせた資産運用コンサルティングを約束します。
            </div>
        </div>
    </div>

    <div class="service2_enter" hidden>
        <div class="service2_title enter_title td6s none">
            <div class="title_1">Entertainment</div>
            <div class="title_2">エンターテイメント</div>
        </div>
        <div class="service2_content enter_content td7s none">
            <div class="service2_content1">毎日に「ワクワク」を提供したいのがStockStarです</div>
            <div class="service2_content2">
                皆様のパートナーでありたいと願う弊社は、常に皆様と何かを「楽しみたい」と<br>
                思っています。生活の中で「何かが変わるキッカケ」を創造できる集団でいたい<br>
                と願っています。さあ、何で一緒に楽しみましょうか？
            </div>
        </div>
    </div>

</div>

<div id="service3">
    <div class="system_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td6s">
                より面白いエンターテイメントをIT技術で
            </div>
            <div class="service3_text2 td7s">
                オンラインゲームやVR、様々な分野で最新技術が活用されユー<br>
                ザーの毎日を楽しませています。最近ではNFTを活用したオンラ<br>
                インゲームも非常に高い人気を博しています。今以上のエンター<br>
                テイメントが世界に発信され続けると思いますが弊社もその<br>
                「ワクワク」を作りたいと思います。
            </div>
        </div>
        <img src="../../img/system1.png" class="service_img1">
        <img src="../../img/system2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td6s">
                エンターテイメントに新たな価値を創造する
            </div>
            <div class="service3_text4 td7s">
                弊社が研究開発しているブロックチェーン分野では新しい価値の<br>
                創造がエンターテイメントのフィールドでも生み出されています。<br>
                「見たいもの」「読みたいもの」「聞きたいもの」「遊びたいも<br>
                の」を自由な空間で自由な時間に楽しめるユーザーメリットと<br>
                同時にアーティストや作家が保持する権利と利益を守る、それを<br>
                StockStarは実現していきます。
            </div>
        </div>
    </div>

    <div class="block_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td6s">
                より面白いエンターテイメントをIT技術で
            </div>
            <div class="service3_text2 td7s">
                オンラインゲームやVR、様々な分野で最新技術が活用されユー<br>
                ザーの毎日を楽しませています。最近ではNFTを活用したオンラ<br>
                インゲームも非常に高い人気を博しています。今以上のエンター<br>
                テイメントが世界に発信され続けると思いますが弊社もその<br>
                「ワクワク」を作りたいと思います。
            </div>
        </div>
        <img src="../../img/block1.png" class="service_img1">
        <img src="../../img/block2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td6s">
                エンターテイメントに新たな価値を創造する
            </div>
            <div class="service3_text4 td7s">
                弊社が研究開発しているブロックチェーン分野では新しい価値の<br>
                創造がエンターテイメントのフィールドでも生み出されています。<br>
                「見たいもの」「読みたいもの」「聞きたいもの」「遊びたいも<br>
                の」を自由な空間で自由な時間に楽しめるユーザーメリットと<br>
                同時にアーティストや作家が保持する権利と利益を守る、それを<br>
                StockStarは実現していきます。
            </div>
        </div>
    </div>

    <div class="it_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td6s">
                より面白いエンターテイメントをIT技術で
            </div>
            <div class="service3_text2 td7s">
                オンラインゲームやVR、様々な分野で最新技術が活用されユー<br>
                ザーの毎日を楽しませています。最近ではNFTを活用したオンラ<br>
                インゲームも非常に高い人気を博しています。今以上のエンター<br>
                テイメントが世界に発信され続けると思いますが弊社もその<br>
                「ワクワク」を作りたいと思います。
            </div>
        </div>
        <img src="../../img/it1.png" class="service_img1">
        <img src="../../img/it2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td6s">
                エンターテイメントに新たな価値を創造する
            </div>
            <div class="service3_text4 td7s">
                弊社が研究開発しているブロックチェーン分野では新しい価値の<br>
                創造がエンターテイメントのフィールドでも生み出されています。<br>
                「見たいもの」「読みたいもの」「聞きたいもの」「遊びたいも<br>
                の」を自由な空間で自由な時間に楽しめるユーザーメリットと<br>
                同時にアーティストや作家が保持する権利と利益を守る、それを<br>
                StockStarは実現していきます。
            </div>
        </div>
    </div>

    <div class="esti_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td6s">
                より面白いエンターテイメントをIT技術で
            </div>
            <div class="service3_text2 td7s">
                オンラインゲームやVR、様々な分野で最新技術が活用されユー<br>
                ザーの毎日を楽しませています。最近ではNFTを活用したオンラ<br>
                インゲームも非常に高い人気を博しています。今以上のエンター<br>
                テイメントが世界に発信され続けると思いますが弊社もその<br>
                「ワクワク」を作りたいと思います。
            </div>
        </div>
        <img src="../../img/esti1.png" class="service_img1">
        <img src="../../img/esti2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td6s">
                エンターテイメントに新たな価値を創造する
            </div>
            <div class="service3_text4 td7s">
                弊社が研究開発しているブロックチェーン分野では新しい価値の<br>
                創造がエンターテイメントのフィールドでも生み出されています。<br>
                「見たいもの」「読みたいもの」「聞きたいもの」「遊びたいも<br>
                の」を自由な空間で自由な時間に楽しめるユーザーメリットと<br>
                同時にアーティストや作家が保持する権利と利益を守る、それを<br>
                StockStarは実現していきます。
            </div>
        </div>
    </div>

    <div class="enter_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td6s">
                より面白いエンターテイメントをIT技術で
            </div>
            <div class="service3_text2 td7s">
                オンラインゲームやVR、様々な分野で最新技術が活用されユー<br>
                ザーの毎日を楽しませています。最近ではNFTを活用したオンラ<br>
                インゲームも非常に高い人気を博しています。今以上のエンター<br>
                テイメントが世界に発信され続けると思いますが弊社もその<br>
                「ワクワク」を作りたいと思います。
            </div>
        </div>
        <img src="../../img/enter1.png" class="service_img1">
        <img src="../../img/enter2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td6s">
                エンターテイメントに新たな価値を創造する
            </div>
            <div class="service3_text4 td7s">
                弊社が研究開発しているブロックチェーン分野では新しい価値の<br>
                創造がエンターテイメントのフィールドでも生み出されています。<br>
                「見たいもの」「読みたいもの」「聞きたいもの」「遊びたいも<br>
                の」を自由な空間で自由な時間に楽しめるユーザーメリットと<br>
                同時にアーティストや作家が保持する権利と利益を守る、それを<br>
                StockStarは実現していきます。
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer_px')
<nav class="footer_content" style="top:3010px;">
@endsection

@section('script')
<script src="{{ asset('js/service.js') }}"></script>
@endsection