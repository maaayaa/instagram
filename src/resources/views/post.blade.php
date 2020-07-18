@extends('layouts.app')

@section('content')
<div class="row justify-content-center container">
    <div class="col-md-10">
      <form method='POST' action="" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
            <div class="form-group">
                <label for="file1">写真</label>
                <input type="file" id="file1" name='image' class="form-control-file">
              </div>
              <div class="form-group">
              <label>コメント</label>
                <textarea class='description form-control' name='body' placeholder='コメントを入力'></textarea>
              </div>
              
              <input type='submit' class='btn btn-primary' value='投稿'>
            </div>
        </div>
      </form>
    </div>
</div>
@endsection