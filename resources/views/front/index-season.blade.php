@extends('layouts.backstage-template')
@section('css')
<link rel="stylesheet" href="{{asset('css/index-season.css')}}">
@endsection
@section('main')
      <section class="season">
        <div class="container">
          <p class="my-5 text-white">四季星象</p>
          <div class="contents">
            <div class="season-title">
              <div class="title title1">春<br>季<br>星<br>空</div>
              <div class="title title2">夏<br>季<br>星<br>空</div>
              <div class="title title3">秋<br>季<br>星<br>空</div>
              <div class="title title4">冬<br>季<br>星<br>空</div>
            </div>
            <div class="season-info text-white-50">
              <div class="season-box my-3">
                <h3 class="text-white my-3">春</h3>
                <div>
                <img src="{{asset('img/seasons/season1-1.jpg')}}" width="100%" alt="">
                </div>
                <p class="skill text-white  my-2">辨認的方法</p>
                <h4>春季大曲線</h4>
                <span>春季的夜晚，先在北方的天空找到北斗七星，沿著北斗七星杓柄的曲線向南延伸，首先會發現牧夫座的0等橙色星-大角星，再往下延伸可以找到室女座的白色1等星-角宿一。依此順序所畫出的大曲線，我們稱為「春季大曲線」。</span>
                <h4>春季大三角</h4>
                <span>連接牧夫座的大角，室女座的角宿一和獅子座的尾巴 - 五帝座一，會形成一個大三角形，稱為「春季大三角」。</span>
                <h4>春季大鑽石</h4>
                <span>將牧夫座的大角，室女座的角宿一，獅子座的五帝座一，和獵犬座的常陳一連接起來，會形成一個像鑽石的圖案，稱為「春季大鑽石」。</span>
                <h4>春季大鐮刀(春季大問號)</h4>
                <span>將獅子座頭部6顆星和胸口的軒轅十四連接起來，會形成一個鐮刀圖案，也像一個左右相反的大問號，稱為「春季大鐮刀」。</span>
              </div>
              <div class="season-box my-3">
                <h3 class="text-white my-3">夏</h3>
                <div>
                <img src="{{asset('img/seasons/season1-2.jpg')}}" width="100%" alt="">
                </div>
                <p class="skill text-white  my-2">辨認的方法</p>
                <h4>夏季大三角</h4>
                <span>在夏天的夜晚，抬頭看天空，可以看見三顆明亮的星星，分別是天琴座的織女星，天鷹座的牛郎星和天鵝座的天津四，這三顆星星所組成的大三角形，我們稱為「夏季大三角」。夏季大三角很像一個直角三角形，位於直角上的白色織女星，是全天第五亮星，距離地球約26光年，與牛郎星隔著銀河相望，兩者相距約16光年。牛郎星又名河鼓二，左右相伴著河鼓一、河鼓三這二顆星，就像牛郎用扁擔扛著他的一對兒女，所以牛郎星又稱為「扁擔星」。天鵝座看起來像一個十字架，高掛在北方的天空，所以有「北十字星」之稱。朝著天鵝座的鵝頭方向看去，可以看見一抹淡淡的雲氣，那就是我們所熟知的銀河。</span>
              </div>
              <div class="season-box my-3">
                <h3 class="text-white my-3">秋</h3>
                <div>
                <img src="{{asset('img/seasons/season1-3.jpg')}}" width="100%" alt="">
                </div>
                <p class="skill text-white  my-2">辨認的方法</p>
                <h4>飛馬座四邊形</h4>
                <span>秋夜中大約往正頭頂的天空，可以看見一個由四顆星所組成的四邊形，稱為「飛馬座四邊形」。朝南方觀測時，室宿二與室宿一的連線往南延伸，會找到一顆亮星-南魚座的北落師門；壁宿二與壁宿一的連線往南延伸，可以找到鯨魚座的土司空。這二條連線反向北方延伸，交會的地方大約就是北極星的位置。四邊形短邊是馬腹，長邊是馬背，馬頭朝向西方。飛馬的後腿連接著仙女座，仙女的腳下就是她的愛人-英仙座。仙女座的北方是她的母親仙后座，仙后座旁邊的五邊形，則是國王仙王座。</span>
                <h4>秋季大三角</h4>
                <span>南魚座的北落師門，鯨魚座的土司空和鳳凰座的火鳥六這三顆星所組成的大三角形，稱為「秋季大三角」，因為接近南邊的天空，所以又稱「南天三角形」。</span>
              </div>
              <div class="season-box my-3">
                <h3 class="text-white my-3">冬</h3>
                <div>
                <img src="{{asset('img/seasons/season1-4.jpg')}}" width="100%" alt="">
                </div>
                <p class="skill text-white  my-2">辨認的方法</p>
                <h4>冬季大三角</h4>
                <span>大犬座的天狼星，小犬座的南河三和獵戶座的參宿四這三顆星所組成的大三角形，稱為「冬季大三角」。</span>
                <h4>冬季大橢圓</h4>
                <span>大犬座的天狼星、小犬座的南河三、雙子座的北河二、御夫座的五車二、金牛座的畢宿五和獵戶座的參宿七，這六顆星所組成大橢圓形，稱為「冬季大橢圓」。</span>
                <h4>冬夜的王者 - 獵戶座</h4>
                <span>冬季最容易辨認的星座，非獵戶座莫屬。獵戶座腰帶的三連星，讓人一眼就認出；上方的參宿四和參宿五2星，構成了獵戶的兩個肩膀，下方的參宿六與參宿七，則構成了獵戶的雙腳。腰帶三連星下方有一團白色的雲氣，便是著名的火鳥星雲M42，是星星誕生的地方。</span>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
