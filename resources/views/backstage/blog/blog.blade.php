@extends('layouts.backstage-template')
@section('css')
<link rel="stylesheet" href="{{asset('css/index-new.css')}}">
@endsection
@section('main')
        <!-- 最新消息 -->
        <section class="news" id="news" style="width: 100%;">
            <div class="container">
                <p class="my-5 text-white ">最新消息</p>
                @If (Auth::check())
                    <div class="function-area">
                        <a class="create-msg" href="/blog/create">新增貼文</a>
                    </div>
               @endif
                <div class="contents">
                    <div class="tabs ">
                        <div class="tab">南瀛天文教育園區</div>
                        <div class="tab active">台北市立天文科學教育館</div>
                    </div>
                    @foreach ($articles as $item)
                        <div class="row content active">
                            <div class="col ">
                                <div class="card text-black-50 ">
                                    <div>
                                        <span>{{substr($item->created_at, 0, 10)}}</span>
                                        <span class="badge badge-secondary ">{{$item->title}}</span>
                                    </div>
                                    <div href="">
                                        <p class="mx-2 mb-1 text-left text-black-50">{{$item->content}}</p>
                                    </div>
                                    @If (Auth::check())
                                        <div>
                                            <a href="/blog/edit/{{$item->id}}" class="edit">編輯</a>
                                            <a href="/blog/delete/{{$item->id}}" class="delete">刪除</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$articles->links("pagination::bootstrap-4")}}
            </div>
        </section>
    </main>
    @endsection
