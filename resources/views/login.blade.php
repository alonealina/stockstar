@extends('layouts.app_admin')
 
@section('title', 'ログイン')
 
@section('content')

<div class="login_form" id="login_form">
  <img src="{{ asset('img/login_logo.png') }}" class="login_logo" alt="">
  {{-- エラーメッセージ --}}
  @if (isset($login_error))
    <div id="error_explanation" class="text-danger">
      <ul>
        <li>メールアドレスまたはパスワードが一致しません。</li>
      </ul>
    </div>
  @endif
  
  {{-- フォーム --}}
  <form action="{{ url('admin_login') }}" method="post">
    @csrf  
    <div class="form-group">
      <div class="login_form_name">Login ID</div>
      <input type="text" class="form-control" id="user_email" name="login_id">
    </div>     
    <div class="form-group">
    <div class="login_form_name">Password</div>
      <input type="password" class="form-control" id="user_password" name="password">
    </div>     
    <input type="submit" value="Login" class="btn login_button">  
  </form>
</div>


<script>
  var list = document.getElementById('flexible-list-main');
  var form = document.getElementById('login_form');
  list.style.height = window.innerHeight + 'px';
  list.style.position = 'relative';
  form.style.position = 'absolute';
  form.style.top = '50%';
  form.style.left = '50%';
  form.style.transform = 'translateY(-50%) translateX(-50%)';

</script>
@endsection