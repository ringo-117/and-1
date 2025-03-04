<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="サイトの概要文が入ります。">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AND-1</title>

    <meta http-equiv="Cache-Control" content="no-store"> <!-- キャッシュ無効 -->

    <!-- フォント：Noto Sans JP -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Shippori+Mincho&display=swap" rel="stylesheet">

    <!-- フォント：Noto Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Noto+Serif+JP:wght@200..900&family=Shippori+Mincho&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="./img/favicon.ico"> <!-- ファビコン -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @vite('resources/js/slick/slick.min.js') --}}

    @vite('resources/css/destyle.css')
    @vite('resources/css/index.css')
  </head>

  <body>

    <header>
      {{-- PCヘッダー --}}
      <nav class="pc-nav">
        <div class="header">
          <a class="logo-box" href="{{ route('top') }}">
            <img class="logo-img" src="{{ asset('images/logo.png') }}" alt="AND-1ロゴ">
            <p class="header-logo">and-1</p>
          </a>
          <ul id="nav_list" class="nav-list">
            <li class="nav-item min"><a href="#">選ばれる理由</a></li>
            <li class="nav-item min"><a href="{{ route('top') }}#sec-service">サービス紹介</a></li>
            <li class="nav-item min"><a href="{{ route('top') }}#sec-solutions">ソリューション</a></li>
            <li class="nav-item min"><a href="{{ route('company.info') }}">会社情報</a></li>
            <li class="nav-item min"><a href="#sec-news">ニュース</a></li>
            <li class="nav-item min"><a href="#sec-contact" class="nav-contact">お問い合わせ</a></li>
          </ul>
        </div>
      </nav>

      {{-- SPヘッダー --}}
      <nav class="sp-nav">
        <div class="header">
          <a class="logo-box" href="{{ route('top') }}">
            <img class="logo-img" src="{{ asset('images/logo.png') }}" alt="AND-1ロゴ">
            <p class="header-logo">and-1</p>
          </a>
          <p class="sp-none nav-contact"><a href="#sec-contact">お問い合わせ</a></p>
          <div id="btn" class="btn">
            <i></i>
            <i></i>
            <i></i>
          </div>
        </div>
        <div class="container">
          <figure class="nav-img">
            <img src="{{ asset('images/test_img.jpg') }}" alt="#">
          </figure>
          <ul id="nav-list" class="nav-list">
            <div class="nav-box img-items box_01">
              <input type="checkbox" id="toggle1" class="toggle">
              <label class="title" for="toggle1">
                <div class="nav-title">
                  <p class="title-text">選ばれる理由</p>
                  <img class="icon_toggle" src="{{ asset('images/icon_toggle.png') }}" alt="トグルアイコン">
                </div>
              </label>
              <div class="content">
                <p class="nav-link">
                  <a href="#">- ダミーテキスト</a>
                </p>
              </div>
            </div>

            <div class="nav-box img-items box_02">
              <input type="checkbox" id="toggle2" class="toggle">
              <label class="title" for="toggle2">
                <div class="nav-title">
                  <p class="title-text">サービス紹介</p>
                  <img class="icon_toggle" src="{{ asset('images/icon_toggle.png') }}" alt="トグルアイコン">
                </div>
              </label>
              <div class="content">
                <p class="nav-link">
                  <a href="{{ route('service.web') }}">- 　Web開発</a>
                  <a href="#">- 　映像制作</a>
                  <a href="#">- 　福祉事業</a>
                </p>
              </div>
            </div>

            <div class="nav-box img-items box_03">
              <input type="checkbox" id="toggle3" class="toggle">
              <label class="title" for="toggle3">
                <div class="nav-title">
                  <p class="title-text">ソリューション</p>
                  <img class="icon_toggle" src="{{ asset('images/icon_toggle.png') }}" alt="トグルアイコン">
                </div>
              </label>
              <div class="content">
                <p class="nav-link">
                  <a href="{{ route('solutions.01') }}">- 　ご相談</a>
                </p>
              </div>
            </div>

            <div class="nav-box img-items box_04">
              <input type="checkbox" id="toggle4" class="toggle">
              <label class="title" for="toggle4">
                <div class="nav-title">
                  <p class="title-text">会社情報</p>
                  <img class="icon_toggle" src="{{ asset('images/icon_toggle.png') }}" alt="トグルアイコン">
                </div>
              </label>
              <div class="content">
                <p class="nav-link">
                  <a href="{{ route('company.philosophy') }}">- 　経営理念</a>
                  <a href="{{ route('company.info') }}">- 　会社概要</a>
                  <a href="#">- 　社長挨拶</a>
                </p>
              </div>
            </div>

            <div class="nav-box img-items box_05">
              <input type="checkbox" id="toggle5" class="toggle">
              <label class="title" for="toggle5">
                <div class="nav-title">
                  <p class="title-text">ニュース</p>
                  <img class="icon_toggle" src="{{ asset('images/icon_toggle.png') }}" alt="トグルアイコン">
                </div>
              </label>
              <div class="content">
                <p class="nav-link">
                  <a href="{{ route('top') }}#sec-news">- 　最新情報</a>
                </p>
              </div>
            </div>
          </ul>
          <div class="cover"></div>
        </div>
      </nav>
    </header>

    <main>
      <section id="sec-top" class="sec-top">
        <figure id="top-img" class="top-img">
          <div class="top-img-container">
            <img class="top-01 top-min" src="{{ asset('images/top/ai.png') }}" alt="topイメージ">
            <img class="top-02 top-min" src="{{ asset('images/top/file.png') }}" alt="topイメージ">
            <img class="top-03 top-min" src="{{ asset('images/top/pc.png') }}" alt="topイメージ">
            <img class="top-04 top-min" src="{{ asset('images/top/robot.png') }}" alt="topイメージ">
            <img class="top-05" src="{{ asset('images/top/top_bg.png') }}" alt="topイメージ">
            {{-- <img class="top-06" src="{{ asset('images/top_img.png') }}" alt="topイメージ"> --}}
          </div>
        </figure>

        <article class="top-text-box">
          <h1>映像の力を<br>Webへ</h1>
          <p class="top-text">
            情報革命の今の時代において動画などの映像は私たちの生活になくてはならない存在になりました。そんな私たちの生活に欠かせない映像とWebの技術、さらにはAI（人工知能）を使って、お客さまにとって最適なソリューションを提供し、共に「笑顔と喜び」の未来を創造します。
          </p>
          <button class="top-reason">選ばれる理由</button>
          <div class="news">
            <time class="news-time" datetime="2025-2-17">2025/02/17</time>
            <p class="news-text">ダミーテキストダミーテキスト</p>
            <a class="news-view" href="#"><p>view<p></a>
          </div>
        </article>
        {{-- 企業ロゴ --}}
        <article class="company-logo">
          <div class="logo-slider">
            <div class="logos text_scroll">
              <ul>
                <li><img src="{{ asset('images/company-logo.webp') }}" alt="#"></li>
              </ul>
            </div>
            <div class="logos text_scroll">
              <ul>
                <li><img src="{{ asset('images/company-logo.webp') }}" alt="#"></li>
              </ul>
            </div>
          </div>
        </article>
      </section>

      <section id="sec-service" class="sec-service">
        <div class="sec-title">
          <h2>SERVICE</h2>
          <p>サービス紹介</p>
        </div>
        <article class="ser-all">
          <article class="ser-01">
            <div class="ser-box">
              <div class="ser-img-box">
                <p>01</p>
                <img src="{{ asset('images/web.png') }}" class="ser-img" alt="#">
              </div>
              <div class="ser-text">
                <h3>Web開発</h3>
                <p>Web制作やシステム開発を通じて、ビジネス課題の解決を支援します。</p>
              </div>
            </div>
            <a href="{{ route('service.web') }}">
              <article class="ser-info-box">
                <p class="ser-info">詳しくはこちら</p>
                <img src="{{ asset('images/blue_arrow.png') }}" alt="矢印">
              </article>
            </a>
          </article>

          <article class="ser-02">
            <div class="ser-box">
              <div class="ser-img-box">
                <p>02</p>
                <div class="apng-container ser-img">
                  <img src="{{ asset('images/eizou_you.png') }}" class="apng-01">
                  <img src="{{ asset('images/eizou_bo.png') }}" class="apng-02">
                  <img src="{{ asset('images/eizou_back.png') }}" class="apng-03">
                  <img src="{{ asset('images/eizou_bg.png') }}" class="apng-04">
                </div>
              </div>
              <div class="ser-text">
                <h3>映像制作</h3>
                <p>プロモーション動画や企業PVの企画・撮影・制作を行います。</p>
              </div>
            </div>
            <a href="#">
              <article class="ser-info-box">
                <p class="ser-info">詳しくはこちら</p>
                <img src="{{ asset('images/blue_arrow.png') }}" class="ser-apng" alt="矢印">
              </article>
            </a>
          </article>

          <article class="ser-03">
            <div class="ser-box">
              <div class="ser-img-box">
                <p>03</p>
                <img src="{{ asset('images/fukusi.png') }}" class="ser-img" alt="#">
              </div>
              <div class="ser-text">
                <h3>福祉事業</h3>
                <p>社会生活に悩みを抱えた方へのサポートや技術習得を支援します。</p>
              </div>
            </div>
            <a href="#">
              <article class="ser-info-box">
                <p class="ser-info">詳しくはこちら</p>
                <img src="{{ asset('images/blue_arrow.png') }}" alt="矢印">
              </article>
            </a>
          </article>
        </article>
      </section>

      <section id="sec-solutions" class="sec-solutions">
        <h2>SOLUTIONS</h2>
        <p class="sol-text">「人材不足で困ってるんだよなぁ」<br class="sp-br">
          「お店の集客が課題なんだよね」<br>
          そんなあなたのお悩みをAND-1が解決いたします。<br class="sp-br">知識がなくても大丈夫。<br>
          私たちが1からしっかりサポートいたします。</p>
        <div id="slider" class="slider">
          <div class="slider-img-01 slider-item">
            <a href="{{ route('solutions.01') }}">
              <article class="sol-box">
                <p>商品を紹介した後にスムーズにECサイトに誘導したい。そんなことできる？</p>
                <img src="{{ asset('images/solutions_1.png') }}" alt="スーツのイラスト">
              </article>
            </a>
          </div>
          <div class="slider-img-02 slider-item">
            <a href="#">
              <article class="sol-box">
                <p>新商品を開発したんだけど、沢山の人に商品の魅力を伝えるにはどうしたらいい？</p>
                <img src="{{ asset('images/solutions_2.png') }}" alt="医者のイラスト">
              </article>
            </a>
          </div>
          <div class="slider-img-03 slider-item">
            <a href="#">
              <article class="sol-box">
                <p>イベントの集客が伸び悩んでいるんだけど、もっと来場者を増やすにはどうしたらいいの？</p>
                <img src="{{ asset('images/solutions_3.png') }}" alt="女性のイラスト">
              </article>
            </a>
          </div>
          <div class="slider-img-04 slider-item">
            <a href="#">
              <article class="sol-box">
                <p>お店を新しくオープンします。近くにも似たようなお店があるけど集客どうしたらいいかな？</p>
                <img src="{{ asset('images/solutions_4.png') }}" alt="料理人のイラスト">
              </article>
            </a>
          </div>
        </div>
      </section>

      <section id="sec-news" class="sec-news">
        <div class="sec-title">
          <h2>NEWS</h2>
          <p>ニュース</p>
        </div>
        <article class="news-content">
          <ul class="news-box">
            <li>
              <div class="news-item">
                <time datetime="2025-2-17">2025/02/17</time>
                <p>お知らせ</p>
              </div>
              <p class="news-text">ダミーテキストダミーテキスト</p>
            </li>
            <li>
              <div class="news-item">
                <time datetime="2025-2-17">2025/02/17</time>
                <p>お知らせ</p>
              </div>
              <p class="news-text">ダミーテキストダミーテキスト</p>
            </li>
            <li>
              <div class="news-item">
                <time datetime="2025-2-17">2025/02/17</time>
                <p>お知らせ</p>
              </div>
              <p class="news-text">ダミーテキストダミーテキスト</p>
            </li>
          </ul>
          <figure class="news-img">
            <img src="{{ asset('images/news.png') }}" alt="地球のイラスト">
          </figure>
        <article>
      </section>

      <section id="sec-contact" class="sec-contact">
        <div class="sec-con-title">
          <h2>CONTACT</h2>
          <p>お問い合わせ</p>
        </div>

        <article class="con-box-all">
          <article class="con-box">
            <a href="{{ route('contact.form') }}">
              <p class="sab-title">CONTACT</p>
              <article class="con-title-item">
                <p class="con-box-title">メールでお問い合わせ</p>
                <figure class="triangle-box">
                  <span class="triangle"></span>
                  <span class="triangle"></span>
                </figure>
              </article>
              <article class="con-info-box">
                <p class="con-info">詳しくはこちら</p>
                <img src="{{ asset('images/blue_arrow.png') }}" alt="矢印">
              </article>
              <figure class="con-img">
                <img src="{{ asset('images/mail.png') }}" alt="メールのイラスト">
              </figure>
            </a>
          </article>
          <article class="con-box">
            <a href="#">
              <p class="sab-title">CONTACT</p>
              <article class="con-title-item">
                <p class="con-box-title">電話でお問い合わせ</p>
                <figure class="triangle-box">
                  <span class="triangle"></span>
                  <span class="triangle"></span>
                </figure>
              </article>
              <article class="con-info-box">
                <p class="con-info">詳しくはこちら</p>
                <img src="{{ asset('images/blue_arrow.png') }}" alt="矢印">
              </article>
              <figure class="con-img">
                <img src="{{ asset('images/phone.png') }}" alt="電話のイラスト">
              </figure>
            </a>
          </article>
        </article>
      </section>

    </main>

    <footer class="footer-bg">
      <article class="footer">
        <figure class="footer-logo foot-box-01">
          <img src="{{ asset('images/logo_white.png') }}" alt="AND-1ロゴ">
          <p>AND-1</p>
        </figure>
        <article class="foot-info-box foot-box-02">
          <article>
            <p class="address">〒811-4239　福岡県遠賀郡岡垣町野間南5-1</p>
            <div class="tel">
              <img src="{{ asset('images/icon_tel.png') }}" alt="電話アイコン">
              <p>093-980-5231</p>
            </div>
          </article>
          {{-- ポリシー_スマホ版 --}}
          <p class="policy sp">
            <a href="{{ route('policy.use') }}">サイトのご利用について</a><span>|</span>
            <a href="{{ route('policy.privacy') }}">プライバシーポリシー</a><span>|</span><br>
            <a href="{{ route('policy.security') }}">セキュリティポリシー</a>
          </p>
          <a href="#sec-contact">
            <div class="contact-link">
              <P>お問い合わせ</P>
              <img src="{{ asset('images/white_arrow.png') }}" alt="矢印">
            </div>
          </a>
        </article>
        <article class="footer-link-box foot-box-03">
          <div class="footer-link footer-link-01">
            <p>選ばれる理由</p>
            <a href="#">- ダミーテキスト</a>
          </div>
          <div class="footer-link">
            <p>サービス紹介</p>
            <div>
              <a href="{{ route('service.web') }}">- Web開発</a>
              <a href="#">- 映像制作</a>
              <a href="#">- 福祉事業</a>
            </div>
          </div>
          <div class="footer-link">
            <p>ソリューション</p>
            <a href="{{ route('top') }}#sec-solutions">- ご相談</a>
          </div>
          <div class="footer-link">
            <p>会社情報</p>
            <div>
              <a href="{{ route('company.philosophy') }}">- 経営理念</a>
              <a href="{{ route('company.info') }}">- 会社概要</a>
              <a href="#">- 社長挨拶</a>
            </div>
          </div>
          <div class="footer-link">
            <p>ニュース</p>
            <a href="{{ route('top') }}#sec-news">- 最新情報</a>
          </div>
        </article>

        <div class="foot-bottom foot-box-04">
          {{-- ポリシー_タブレット版 --}}
          <p class="policy tb-pc">
            <a href="{{ route('policy.use') }}">サイトのご利用について</a><span>|</span>
            <a href="{{ route('policy.privacy') }}">プライバシーポリシー</a><span>|</span><br class="sp-tb-br">
            <a href="{{ route('policy.security') }}">セキュリティポリシー</a>
          </p>
          <div class="footer-copy">
            <P class="copy">Copyright &copy; AND-1 All rights reserved.</P>
            <div class="to-top-box">
              <a href="#sec-top">
                <div class="to-top"></div>
              </a>
            </div>
          </div>
        </div>
      <article>
    </footer>

    <!-- Slick -->
    {{-- <script type="text/javascript" src="resources/js/slick/slick.min.js"></script> --}}
    {{-- <script>
      $(document).ready(function(){
        var slider = $('.slider');

        slider.slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          pauseOnHover: false,
          pauseOnFocus: false,
          dots: true,
          arrows: false,
          speed: 3500,
          fade: true,
          autoplaySpeed: 1500,
        });
      });
    </script> --}}
    {{-- <script src="resources/js/main.js"></script> --}}
  </body>
</html>
