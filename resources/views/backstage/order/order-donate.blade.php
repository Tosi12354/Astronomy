@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index-order.css') }}">
@endsection
@section('main')
    <!-- 新增消息 -->
    <section class="article" style="width: 100%;">
        <div class="container">
            <form action="/store" method="POST">
                @csrf
                <p class="article-title">
                    ~歡迎贊助~</br>
                    親愛的使用者 您好：</br>
                    謝謝您對一起看星星的支持，
                    也歡迎透過打賞讓我們有動力一直持續下去。

                    在網頁上都有客服電子郵件信箱。
                    若您是對一起看星星有使用上的問題或建議，
                    歡迎您在工作天週一~週五9:00~18:00與我們聯絡。</br>

                    客服信箱：cisthepp56@gmail.com.tw</br>
                    收到您的來信後，我們將儘快為您服務。謝謝！</br>
                    祝 平安順心
                    一起看星星客服部 敬上</p>
                <p class="article-title">感謝贊助</br> 金額一次 150 NT</p>
                <div class="row">
                    <label for="">輸入名字</label>
                    <input type="text" id="name" name="name" value="">
                </div>
                <div class="row custom">
                    <label for="">輸入信箱</label>
                    <input type="text" id="email" name="email" value="">
                </div>
                <div class="row btn ">
                    <button type="submit">贊助</button>
                    <a href="/" class="delete">取消</a>
                </div>
                @If (Auth::check())
                <div class="function-area">
                    <a class="create-msg" href="/data">贊助者資料</a>
                </div>
                @endif
            </form>
        </div>
    </section>
@endsection
