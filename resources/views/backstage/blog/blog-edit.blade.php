@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{asset('css/index-create.css')}}">
@endsection
@section('main')
    <!-- 新增消息 -->
    <section class="article">
      <div class="container">
        <form action="/blog/update/{{$article->id}}" method="POST">
            @csrf
          <p class="article-title">編輯文章</p>
          <div class="row">
            <label for="">輸入標題</label>
            <input type="text" id="title" name="title" value="{{$article->title}}">
          </div>
          <div class="row custom">
            <label for="">輸入文章內容</label>
            <textarea name="content" id="content" cols="30" rows="15">
                {{$article->content}}
          </textarea>
          </div>
          <div class="row btn ">
            <button type="submit">編輯文章</button>
            <a href="/blog">取消</a>
          </div>
        </form>
      </div>
    </section>
@endsection
