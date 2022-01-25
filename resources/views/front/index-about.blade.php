@extends('layouts.backstage-template')
@section('css')
<link rel="stylesheet" href="{{asset('css/index-about.css')}}">
@endsection
@section('main')
    <div class="jumbotron jumbotron-fluid p-0 m-0">
      <img src="{{asset('img/about01.png')}}" class="img-fluid" alt="Responsive image" alt="">
    </div>
    <section class="about ">
      <div class="about01">
        <div class="about01-img">
          <img src="{{asset('img/about02.jpg')}}" width="100%" alt="">
        </div>
        <div class="about01-text text-white">
          <span><h4>關於我們</h4>主要是推廣大家在閒暇之時，
            多多親近大自然，與家人朋友一同聚。<br>
            抬頭仰望著天空，那裡總是有滿天的星斗。<br>
            靜謐中，請欣賞如同寶石閃耀的星星，
            度過一段放鬆的時光。<br>
          </span>
        </div>
      </div>
      <div class="container">
        <p class="p-title my-4">觀星活動</p>
        <div class="contain">
          <img class="my-3" src="{{asset('img/about03.webp')}}" width="100%" alt="">
          <span>觀星活動邀請天文老師搭配節慶解說不同的天文故事與專業的觀星解說，
            使用天體望遠鏡進行正統的星空觀察。<br>
            活動將一邊觀看四季星空中上演的各式篇章，一邊學習星空觀察奧妙，
            即便是第一次參加星空觀察的人也能樂在其中。<br>
            請來「一起看星星」，與夜空中流洩的銀河與流星共同度過一個特別的夜晚。</span>
          <h4 class="mt-4 text-black ">為了能看見美麗的星空</h4>
          <div class="row ">
            <div class="col-12 col-md-6 mb-3">
              <div class="text-success my-2">
                <i class="fas fa-star"></i>
                查看月亮
              </div>
              <span
                class="text-black">若天色夠暗，連星星發出的淡淡微小美麗光芒都可看見，因此盡可能挑月色影響最小的日子前來，就越可能觀賞滿天的星斗。若您以觀察星空為造訪此處的首要目的，請一定要安排接近農曆月初的日子前來會比較理想。</span>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <div class="text-success my-2">
                <i class="fas fa-star"></i>
                充分讓雙眼習慣黑暗
              </div>
              <span
                class="text-black">即便專程來享受星空，若沒確實做好防寒對策，便無法好好欣賞星空。在雙手、脖子周圍、耳朵及頭部等重點部位，都要做好萬全防護喔。觀察星空的良好條件＝黑暗，因此若有準備頭燈等工具也會很不錯。</span>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 mb-3">
              <div class="text-success my-2">
                <i class="fas fa-star"></i>
                做好萬全的防寒對策、夜間對策
              </div>
              <span
                class="text-black">從明亮的飯店室內上到屋頂後，並無法一下看到期待中的星星。由於星光非常微淡，所以若想盡情欣賞滿天的星斗，便需要黑暗中待上一段時間讓雙眼習慣才行。請您最少需要忍耐10分鐘後，再試著仰望星空。</span>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <div class="text-success my-2">
                <i class="fas fa-star"></i>
                期待放晴的夜晚
              </div>
              <span
                class="text-black">由於山間的氣候瞬息萬變，因此即便是晴朗的晚上，也可能碰上偏偏只有導覽時間轉陰，星星被雲擋住而看不見的狀況。因此，只要天氣晴朗，請您多多走到戶外，欣賞美麗的星空。</span>
            </div>
          </div>

        </div>
    </section>
    <div class="container contact p-0 my-5 ">
        <div class="contact-l">
          <img src="{{asset('img/contact.jpg')}}" width="100%" alt="">
        </div>
        <div class="contact-r">
          <h4 class="text-center my-4">聯絡我們</h4>
          <p>親愛的觀星愛好者您好 : <br>
            謝謝您對一起看星星的支持，歡迎參與各式活動，
            可以透過打賞讓我們有動力一直持續下去。
            <br>
            若您是對一起看星星有使用上的問題或建議，
            可以透過客服電話與電子郵件與我們聯絡。
            <br>
            我們會在工作天週一~週五9:00~18:00，盡快回覆。<br>
            客服信箱 : cisthepp56@gmail.com.tw
            <br>
            <br>
            一起看星星客服部 敬上
          </p>
        </div>
    </div>
@endsection
