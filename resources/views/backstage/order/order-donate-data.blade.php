@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index-donate.css') }}">
@endsection
@section('main')
    <section class="donate">
      <div class="container">
        <p class="my-5 text-white ">Donate</p>
        <div class="contents">
          <div class="tabs ">
            <div class="tab w-25">姓名</div>
            <div class="tab w-75">信箱</div>
          </div>
          @foreach ($orders as $item)
          <div class="donate-info d-flex p-1">
            <span>{{$item->id}}</span>
            <h2 class="donate-name w-25">{{$item->name}}</h2>
            <span class="donate-email w-75 ">{{$item->email}}</span>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </section>
@endsection
