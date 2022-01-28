@extends('layouts.app_admin')

@section('content')

<a href=""><img src="../../img/newslist_button.png" class=""></a>


<div class="news_list">
    <div class="news_list_column border_bottom_column">
        <div class="news_list_date">
            <div class="news_item_left">NEWS一覧</div>
        </div>
        <div class="news_list_title">
            <div class="news_item_name"></div>
        </div>
        <div class="news_list_status">
            <div class="news_item_name_10px">ステータス</div>
        </div>
        <div class="news_list_buttonlist">
            <div class="news_item_name_10px">操作</div>
        </div>
    </div>
    <form id="form" name="regist_form" action="" method="post" enctype="multipart/form-data">
        @if($errors->has('title'))
        <div class="comment_error">{{ $errors->first('title') }}</div>
        @endif
        @if($errors->has('content'))
        <div class="comment_error">{{ $errors->first('content') }}</div>
        @endif

        @csrf
        <div class="flex_form_item flex_notice_title">
            <div class="felx_form_title">タイトル</div>
            <div class="felx_form_content">
                {{ Form::text('title', old('title'), ['class' => 'notice_title_input', 'maxlength' => 20]) }}
            </div>
        </div>

        <div class="flex_form_item">
            <div class="felx_form_title">内容</div>
            <div class="felx_form_content">
                {{ Form::textarea('content', old('content'), ['class' => 'form-control notice_content_input', 'rows' => 10, 'maxlength' => 3000]) }}
            </div>
        </div>

        <div class="regist_button">
            <a href="#" onclick="clickRegistButton()">お知らせを登録する</a>
        </div>
    </form>
</div>


@endsection


@section('content_ipad')

@endsection

