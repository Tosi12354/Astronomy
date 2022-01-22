@extends('layouts.backstage-template')
@section('css')
<link rel="stylesheet" href="{{asset('css/index-information2.css')}}">
@endsection
@section('main')
    <section class=" info  text-white">
      <div class="container">
        <p class="my-5 text-white ">天文情報</p>
        <div class="info-boxes">
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm text-warning">01</p>
              <p class="day-dd">04</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine">
              <h4 class="info-title my-2">象限儀座流星群極大</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span class="info-text mt-2 text-left text-white-50">年度三大流星群之一，ZHR~110。輻射點午夜後升起，但當晚月相近下弦，觀察條件不佳。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-1.jpg')}}" width="90%" alt="">
              </div>
            </div>

          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm text-warning">03</p>
              <p class="day-dd">20</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">春分與黃道光</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
              </div>
              <span class="info-text mt-2 text-left text-white-50">太陽直射赤道，春分前後可於日沒後1~2小時的西方天空看見黃道光。</span>
              <div>
              <img class="my-3" src="{{asset('img/info/天文大事紀-2-1.png')}}" width="90%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm text-warning">05</p>
              <p class="day-dd">26</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">今年最大滿月</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span
                class="info-text mt-2 text-left text-white-50">月球於19:14到達望的位置，屆時視直徑達33.0'，距地球35萬7460.951公里，為今年最大滿月。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-3.jpg')}}" width="90%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm text-warning">05</p>
              <p class="day-dd">26</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">月全食</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
              </div>
              <span
                class="info-text mt-2 text-left text-white-50">臺灣可見月出帶食，月出時刻為18:31、食既19:09、食甚19:19、生光19:28、復圓20:52、半影食終21:51，自月出起本影食歷時2時21分。本次月食最大食分為1.016。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-4.jpg')}}" width="60%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm text-warning">08</p>
              <p class="day-dd">02</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">土星衝</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span
                class="info-text mt-2 text-left text-white-50">土星與太陽相距180度，為一年中最接近地球的時段。當日視亮度0.2等，在摩羯座，視直徑18.60"。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-5.jpg')}}" width="70%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm text-warning">08</p>
              <p class="day-dd">13</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">英仙座流星群極大</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span
                class="info-text mt-2 text-left text-white-50">年度三大流星群之一，ZHR~100。在觀測條件好的狀況下，熟練地觀測者每小時可觀測到８０顆以上的流星。由於極大期剛好在暑假期間，是個會讓許多人關注的流星雨。一般而言出現的時期為７月１７日到８月２４日之間，極大期在８月１３日。而流星數從８月的中旬開始增加。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-6.jpg')}}" width="90%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm text-warning">08</p>
              <p class="day-dd">20</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">木星衝</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span
                class="info-text mt-2 text-left text-white-50">木星與太陽相距180度，為一年中最接近地球的時段。當日視亮度-2.9等，在摩羯座，視直徑49.12"。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-7.jpg')}}" width="70%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm text-warning">09</p>
              <p class="day-dd">23</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">秋分與黃道光</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
              </div>
              <span class="info-text mt-2 text-left text-white-50">太陽直射赤道，秋分前後可於日出前1~2小時的東方天空看見黃道光。</span>
              <div>
              <img class="my-3" src="{{asset('img/info/天文大事紀-2.png')}}" width="100%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm2 text-warning">11</p>
              <p class="day-dd">19</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">月偏食</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span
                class="info-text mt-2 text-left text-white-50">臺灣可見月出帶食，月出時刻為17:03、食甚17:03、復圓18:47、半影食終20:06，自月出起本影食歷時1時44分。本次月食最大食分為0.979。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-8.jpg')}}" width="60%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm2 text-warning">12</p>
              <p class="day-dd">14</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">雙子座流星群極大</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span
                class="info-text mt-2 text-left text-white-50">年度三大流星群之一，ZHR~150。每年都流星數多且非常的穩定，在觀測條件好的狀況下，熟練地觀測者每小時觀測到１００顆以上的流星的情況並不罕見。
                在１４日的晚上為最佳的觀測時機，極大期在當晚的２０時左右，在月亮出現前，預估一小時會出現約５０顆流星數。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-9.jpg')}}" width="90%" alt="">
              </div>
            </div>
          </div>
          <div class="info-box my-5">
            <div class="info-day mx-2">
              <p class="day-mm2 text-warning">12</p>
              <p class="day-dd">19</p>
            </div>
            <div class="info-decor mr-5"></div>
            <div class="info-card" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine"
              data-aos-delay="500">
              <h4 class="info-title my-2">今年的最小滿月</h4>
              <div class="info-recommend text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span
                class="info-text mt-2 text-left text-white-50">月球於12:35到達望的位置，視直徑僅29.3'，距地球40萬5934.567公里，為今年最小滿月。</span>
              <div>
                <img class="my-3" src="{{asset('img/info/天文大事紀-3-1.jpg')}}" width="90%" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
