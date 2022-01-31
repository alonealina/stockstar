@extends('layouts.app')

@section('content')

<div id="mail">
    <div class="mail_title">
        <div class="title_1">Contact</div>
        <div class="title_2">お問い合わせ</div>
    </div>
    <div class="mail_content">
        お問い合わせを受け付けました。<br>
        ご回答まで３営業日ほど頂いております。<br>
        回答まで少々お待ち頂けますと幸いです。
    </div>

    <div class="button_red top">
        <a href="/">Top</a><img src="../../img/yazi.png" class="yazi">
    </div>
</div>

@endsection

@section('footer_px')
<nav class="footer_content" style="top: 90%;">
@endsection


@section('content_sp')
<div id="mail_sp">
    <div class="mail_title">
        <div class="title_1_sp">Contact</div>
        <div class="title_2_sp">お問い合わせ</div>
    </div>
    <div class="mail_content_sp">
        お問い合わせを受け付けました。<br>
        ご回答まで３営業日ほど頂いており<br>
        ます。回答まで少々お待ち頂けます<br>
        と幸いです。
    </div>

    <div class="button_red top_sp">
        <a href="/">Top</a><img src="../../img/yazi.png" class="yazi">
    </div>

</div>

@endsection

@section('footer_px_sp')
<nav class="footer_content_sp" style="top:90%;">
@endsection
