@extends('layouts.app')
@section('css')
<style>
  li{
    float:left;
    list-style:none;
  }
</style>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card mb50">
            <div class="card-body">
              <ul>
                <li class="">画像</li>
                <li class="">名前</li>
                <li>削除ボタン</li>
                </ul>
              
                <div class='image-wrapper'><img class='book-image' src="{{ asset('images/login.jpg') }}"></div>
                <h3 class='h3 book-title'>タイトル</h3>
                <p class='description'>
                    レビュー本文
                </p>
                <a href=""class='btn btn-secondary detail-btn'>詳細を読む</a>
            </div>
        </div>
    </div>
</div>



@endsection
