@extends('layouts.app')

@section('content')

<div id="service1">
    <div class="service1_title">
        <div class="title_1">Service</div>
        <div class="title_2">事業案内</div>
    </div>
</div>

<nav class="service_list_bar">
    <ul>
        <li class="service_system"><a>システム開発事業</a></li>
        <li class="service_block"><a>ブロックチェーンサービス開発</a></li>
        <li class="service_it"><a>ITコンサルティング</a></li>
        <li class="service_esti"><a>資産運用のコンサルティング</a></li>
        <li class="service_enter"><a>エンターテイメント</a></li>
    </ul>
</nav>

<div id="service2">


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
        <div class="service2_title block_title td3s none">
            <div class="title_1">Blockchain Service</div>
            <div class="title_2">ブロックチェーンサービス開発</div>
        </div>
        <div class="service2_content block_content td4s none">
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
        <div class="service2_title it_title td3s none">
            <div class="title_1">IT Consulting</div>
            <div class="title_2">ITコンサルティング</div>
        </div>
        <div class="service2_content it_content td4s none">
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
        <div class="service2_title esti_title td3s none">
            <div class="title_1">Asset Management</div>
            <div class="title_2">資産運用のコンサルティング</div>
        </div>
        <div class="service2_content esti_content td4s none">
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
        <div class="service2_title enter_title td3s none">
            <div class="title_1">Entertainment</div>
            <div class="title_2">エンターテイメント</div>
        </div>
        <div class="service2_content enter_content td4s none">
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
            <div class="service3_text1 td3s">
            金融系システムの設計・開発
            </div>
            <div class="service3_text2 td4s">
            金融系システムはユーザビリティーの重要性が大きく、正確性と<br>
            安全性が非常に重要。当社は高い技術をベースにして顧客の資産を<br>
            管理運用する際のセキュリティーとUI／UXを高めることに重点を<br>
            おいて来ました。各種金融サービスにおける課題発見から解決まで<br>
            ワンストップで管理しています。
            </div>
        </div>
        <img src="../../img/system1.png" class="service_img1">
        <img src="../../img/system2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td3s">
            制御系のシステム設計・開発
            </div>
            <div class="service3_text4 td4s">
            顧客・ユーザーは各種のハードウェアで様々なソフトウェアを<br>
            使用しています。それらのソフトウェアを同時に制御しつつ今<br>
            まで以上の利便性を求め実現するための制御系システム開発も<br>
            弊社の得意分野です。「どうしたらもっと便利になるのか」を<br>
            実現します。
            </div>
        </div>
    </div>

    <div class="block_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td3s">
            情報の偽装や不正確性を無くす
            </div>
            <div class="service3_text2 td4s">
            ブロックチェーン技術は中央集権的な情報保持を無くし、<br>
            よりオープンで正確な情報伝達を可能にしています。<br>
            この特徴をより理解し活用すれば世界中の企業や人々が今まで<br>
            以上にアクティブに交流することが可能になり、ビジネス面で<br>
            の可能性を飛躍させることが出来ます。
            </div>
        </div>
        <img src="../../img/block1.png" class="service_img1">
        <img src="../../img/block2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td3s">
            より自由な消費活動を実現する
            </div>
            <div class="service3_text4 td4s">
            ブロックチェーンと聞くと第一に「暗号通貨」をイメージする<br>
            ことでしょう。そして「怪しい・怖い」というイメージも付き<br>
            まとうのではないでしょうか？<br>
            <br>
            実は本来はその逆なのです。ブロックチェーンを活用すること<br>
            で法定通貨取引よりもより安全で自由な消費活動が可能です。<br>
            StockStarはそれを実現します。
            </div>
        </div>
    </div>

    <div class="it_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td3s">
            「どうしたら良いのか」に応える
            </div>
            <div class="service3_text2 td4s">
            ITテクノロジーとは情報通信技術であります。ユーザー間での<br>
            情報伝達をより有益で活用できる状態にすることが大きな役割<br>
            ですが、今ではそれ以上に企業や個人の様々なビジネスや生活<br>
            で活用できる「利便性」が求められます。StockStarは<br>
            「どうしたら良くなるのか？」を常に考え提供します。
            </div>
        </div>
        <img src="../../img/it1.png" class="service_img1">
        <img src="../../img/it2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td3s">
            より戦略的なIT活用を実現します
            </div>
            <div class="service3_text4 td4s">
            ITコンサルとは関連する戦略策定、事例/動向調査、業務改革、<br>
            システム導入支援等を通じて、お客様のパフォーマンス向上に<br>
            貢献するサービスです。「何を目的として」「求められる結果<br>
            は何か」を最重要ポイントして常に考察しビジネスや資産運用<br>
            等に関して、対市場戦略をITを活用して実践します。
            </div>
        </div>
    </div>

    <div class="esti_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td3s">
            全ては情報収集と理解から始まります
            </div>
            <div class="service3_text2 td4s">
            世の中には非常に多くの資産運用商品が存在します。<br>
            ですがその内容は非常に分かりずらく十分に理解しているユー<br>
            ザーは残念ながら少ないです。更に、そのような情報の正確性<br>
            を確かめる術を持っていないユーザーも多いのが現実です。<br>
            StockStarはより有益で正確な情報収集を提供します。
            </div>
        </div>
        <img src="../../img/esti1.png" class="service_img1">
        <img src="../../img/esti2.png" class="service_img2">
        <div class="service_div2">
            <div class="service3_text3 td3s">
            技術力があるから運用力が高まります
            </div>
            <div class="service3_text4 td4s">
            StockStarは高いレベルのエンジニアとのアライアンスを保持<br>
            しています。現代の有効な運用資産にはIT技術は欠かすことが<br>
            出来ません。弊社はこの分野において技術力を武器に資産運用<br>
            のBestWayをシステムとして開発・運用しユーザーに安心した<br>
            資産運用が可能な環境を提供します。未来を創造するパートナー<br>
            でありたいと願っています。
            </div>
        </div>
    </div>

    <div class="enter_content2" hidden>
        <div class="service_div1">
            <div class="service3_text1 td3s">
                より面白いエンターテイメントをIT技術で
            </div>
            <div class="service3_text2 td4s">
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
            <div class="service3_text3 td3s">
                エンターテイメントに新たな価値を創造する
            </div>
            <div class="service3_text4 td4s">
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
<nav class="footer_content" style="top:3310px;">
@endsection

@section('script')
<script src="{{ asset('js/service.js') }}"></script>
<script src="{{ asset('js/service_sp.js') }}"></script>
@endsection





@section('content_sp')


<div id="service1_sp">
    <div class="service1_title">
        <div class="title_1_sp">Service</div>
        <div class="title_2_sp">事業案内</div>
    </div>
</div>

<nav class="service_list_bar_sp">
    <ul>
        <li class="service_system_sp"><a>システム開発事業</a></li>
        <li class="service_block_sp"><a>ブロックチェーンサービス開発</a></li>
        <li class="service_it_sp"><a>ITコンサルティング</a></li>
        <li class="service_esti_sp"><a>資産運用のコンサルティング</a></li>
        <li class="service_enter_sp"><a>エンターテイメント</a></li>
    </ul>
</nav>

<div id="service2_sp">


    <img src="../../img/logo.png" class="service_logo_sp">

    <div class="service2_system_sp" hidden>
        <div class="service2_title system_title_sp none">
            <div class="title_1_sp">System Development</div>
            <div class="title_2_sp">システム開発事業</div>
        </div>
        <div class="service2_content system_content_sp none">
            <div class="service2_content1_sp">安心で使い易いシステムを求めて</div>
            <div class="service2_content2_sp">
                StockStarは自社エンジニアスタッフと共にグローバルなエンジニアチームを<br>
                構成しています。顧客・ユーザーの「こうしたい！」を実現するだけでなく、<br>
                弊社から「こうしたらどうですか？」という問題解決への提案を心がけています。
            </div>
        </div>
    </div>

    <div class="service2_block_sp" hidden>
        <div class="service2_title block_title_sp td3s none">
            <div class="title_1_sp">Blockchain Service</div>
            <div class="title_2_sp">ブロックチェーンサービス開発</div>
        </div>
        <div class="service2_content block_content_sp td4s none">
            <div class="service2_content1_sp">安心な情報保持をブロックチェーンで実現</div>
            <div class="service2_content2_sp">
                暗号通貨が非常に多くの業界で使用され多くのサービスを生み出しています。<br>
                StockStarではブロックチェーン技術を活用した様々なサービス開発を<br>
                行っています。今後の世界にとって重要な技術である<br>
                ブロックチェーンテクノロジーを活用しましょう。
            </div>
        </div>
    </div>

    <div class="service2_it_sp" hidden>
        <div class="service2_title it_title_sp td3s none">
            <div class="title_1_sp">IT Consulting</div>
            <div class="title_2_sp">ITコンサルティング</div>
        </div>
        <div class="service2_content it_content_sp td4s none">
            <div class="service2_content1_sp">企業・ユーザーの「Need」と「Want」を解決する</div>
            <div class="service2_content2_sp">
                現在では全ての人々が何かしらの環境で「ITテクノロジー」を活用しています。<br>
                ですが一般市民にとっては分かりずらいものであります。弊社は高い技術力を<br>
                ベースにして顧客・ユーザーが必要とする技術を提供し「こうしたい！」という<br>
                希望を実現します。
            </div>
        </div>
    </div>

    <div class="service2_esti_sp" hidden>
        <div class="service2_title esti_title_sp td3s none">
            <div class="title_1_sp">Asset Management</div>
            <div class="title_2_sp">資産運用のコンサルティング</div>
        </div>
        <div class="service2_content esti_content_sp td4s none">
            <div class="service2_content1_sp">資産運用のコンサルティング</div>
            <div class="service2_content2_sp">
                将来や未来を見据えた資産運用は非常に重要なアクションであり正確性が<br>
                求められます。毎年の利益や利率に注目するあまりに自分自身のレベルや<br>
                リスク管理を超えた資産運用をよく目にします。<br>
                StockStarはユーザーの状況に合わせた資産運用コンサルティングを約束します。
            </div>
        </div>
    </div>

    <div class="service2_enter_sp" hidden>
        <div class="service2_title enter_title_sp td3s none">
            <div class="title_1_sp">Entertainment</div>
            <div class="title_2_sp">エンターテイメント</div>
        </div>
        <div class="service2_content enter_content_sp td4s none">
            <div class="service2_content1_sp">毎日に「ワクワク」を提供したいのがStockStarです</div>
            <div class="service2_content2_sp">
                皆様のパートナーでありたいと願う弊社は、常に皆様と何かを「楽しみたい」と<br>
                思っています。生活の中で「何かが変わるキッカケ」を創造できる集団でいたい<br>
                と願っています。さあ、何で一緒に楽しみましょうか？
            </div>
        </div>
    </div>

</div>

<div id="service3_sp">
    <div class="system_content2_sp" hidden>
        <div class="service_div1_sp">
            <div class="service3_text1_sp td3s">
            金融系システムの設計・開発
            </div>
            <div class="service3_text2_sp td4s">
            金融系システムはユーザビリティーの重要性が大きく、正確性と<br>
            安全性が非常に重要。当社は高い技術をベースにして顧客の資産を<br>
            管理運用する際のセキュリティーとUI／UXを高めることに重点を<br>
            おいて来ました。各種金融サービスにおける課題発見から解決まで<br>
            ワンストップで管理しています。
            </div>
        </div>
        <img src="../../img/system1.png" class="service_img1_sp">
        <div class="service_div2_sp">
            <div class="service3_text3_sp td3s">
            制御系のシステム設計・開発
            </div>
            <div class="service3_text4_sp td4s">
            顧客・ユーザーは各種のハードウェアで様々なソフトウェアを<br>
            使用しています。それらのソフトウェアを同時に制御しつつ今<br>
            まで以上の利便性を求め実現するための制御系システム開発も<br>
            弊社の得意分野です。「どうしたらもっと便利になるのか」を<br>
            実現します。
            </div>
        </div>
        <img src="../../img/system2.png" class="service_img2_sp">
    </div>

    <div class="block_content2_sp" hidden>
        <div class="service_div1_sp">
            <div class="service3_text1_sp td3s">
            情報の偽装や不正確性を無くす
            </div>
            <div class="service3_text2_sp td4s">
            ブロックチェーン技術は中央集権的な情報保持を無くし、<br>
            よりオープンで正確な情報伝達を可能にしています。<br>
            この特徴をより理解し活用すれば世界中の企業や人々が今まで<br>
            以上にアクティブに交流することが可能になり、ビジネス面で<br>
            の可能性を飛躍させることが出来ます。
            </div>
        </div>
        <img src="../../img/block1.png" class="service_img1_sp">
        <div class="service_div2_sp">
            <div class="service3_text3_sp td3s">
            より自由な消費活動を実現する
            </div>
            <div class="service3_text4_sp td4s">
            ブロックチェーンと聞くと第一に「暗号通貨」をイメージする<br>
            ことでしょう。そして「怪しい・怖い」というイメージも付き<br>
            まとうのではないでしょうか？<br>
            <br>
            実は本来はその逆なのです。ブロックチェーンを活用すること<br>
            で法定通貨取引よりもより安全で自由な消費活動が可能です。<br>
            StockStarはそれを実現します。
            </div>
        </div>
        <img src="../../img/block2.png" class="service_img2_sp">
    </div>

    <div class="it_content2_sp" hidden>
        <div class="service_div1_sp">
            <div class="service3_text1_sp td3s">
            「どうしたら良いのか」に応える
            </div>
            <div class="service3_text2_sp td4s">
            ITテクノロジーとは情報通信技術であります。ユーザー間での<br>
            情報伝達をより有益で活用できる状態にすることが大きな役割<br>
            ですが、今ではそれ以上に企業や個人の様々なビジネスや生活<br>
            で活用できる「利便性」が求められます。StockStarは<br>
            「どうしたら良くなるのか？」を常に考え提供します。
            </div>
        </div>
        <img src="../../img/it1.png" class="service_img1_sp">
        <div class="service_div2_sp">
            <div class="service3_text3_sp td3s">
            より戦略的なIT活用を実現します
            </div>
            <div class="service3_text4_sp td4s">
            ITコンサルとは関連する戦略策定、事例/動向調査、業務改革、<br>
            システム導入支援等を通じて、お客様のパフォーマンス向上に<br>
            貢献するサービスです。「何を目的として」「求められる結果<br>
            は何か」を最重要ポイントして常に考察しビジネスや資産運用<br>
            等に関して、対市場戦略をITを活用して実践します。
            </div>
        </div>
        <img src="../../img/it2.png" class="service_img2_sp">
    </div>

    <div class="esti_content2_sp" hidden>
        <div class="service_div1_sp">
            <div class="service3_text1_sp td3s">
            全ては情報収集と理解から始まります
            </div>
            <div class="service3_text2_sp td4s">
            世の中には非常に多くの資産運用商品が存在します。<br>
            ですがその内容は非常に分かりずらく十分に理解しているユー<br>
            ザーは残念ながら少ないです。更に、そのような情報の正確性<br>
            を確かめる術を持っていないユーザーも多いのが現実です。<br>
            StockStarはより有益で正確な情報収集を提供します。
            </div>
        </div>
        <img src="../../img/esti1.png" class="service_img1_sp">
        <div class="service_div2_sp">
            <div class="service3_text3_sp td3s">
            技術力があるから運用力が高まります
            </div>
            <div class="service3_text4_sp td4s">
            StockStarは高いレベルのエンジニアとのアライアンスを保持<br>
            しています。現代の有効な運用資産にはIT技術は欠かすことが<br>
            出来ません。弊社はこの分野において技術力を武器に資産運用<br>
            のBestWayをシステムとして開発・運用しユーザーに安心した<br>
            資産運用が可能な環境を提供します。未来を創造するパートナー<br>
            でありたいと願っています。
            </div>
        </div>
        <img src="../../img/esti2.png" class="service_img2_sp">
    </div>

    <div class="enter_content2_sp" hidden>
        <div class="service_div1_sp">
            <div class="service3_text1_sp td3s">
                より面白いエンターテイメントをIT技術で
            </div>
            <div class="service3_text2_sp td4s">
                オンラインゲームやVR、様々な分野で最新技術が活用されユー<br>
                ザーの毎日を楽しませています。最近ではNFTを活用したオンラ<br>
                インゲームも非常に高い人気を博しています。今以上のエンター<br>
                テイメントが世界に発信され続けると思いますが弊社もその<br>
                「ワクワク」を作りたいと思います。
            </div>
        </div>
        <img src="../../img/enter1.png" class="service_img1_sp">
        <div class="service_div2_sp">
            <div class="service3_text3_sp td3s">
                エンターテイメントに新たな価値を創造する
            </div>
            <div class="service3_text4_sp td4s">
                弊社が研究開発しているブロックチェーン分野では新しい価値の<br>
                創造がエンターテイメントのフィールドでも生み出されています。<br>
                「見たいもの」「読みたいもの」「聞きたいもの」「遊びたいも<br>
                の」を自由な空間で自由な時間に楽しめるユーザーメリットと<br>
                同時にアーティストや作家が保持する権利と利益を守る、それを<br>
                StockStarは実現していきます。
            </div>
        </div>
        <img src="../../img/enter2.png" class="service_img2_sp">
    </div>
</div>

@endsection

@section('footer_px_sp')
<nav class="footer_content_sp" style="top:3290px;">
@endsection
