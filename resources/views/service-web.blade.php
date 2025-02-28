<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="サイトの概要文が入ります。">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AND-1｜Web開発</title>

    <meta http-equiv="Cache-Control" content="no-store"> <!-- キャッシュ無効 -->

    <!-- フォント：Noto Sans JP -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Shippori+Mincho&display=swap" rel="stylesheet">

    <!-- フォント：Noto Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Noto+Serif+JP:wght@200..900&family=Shippori+Mincho&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="./img/favicon.ico"> <!-- ファビコン -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/destyle.css')
    @vite('resources/css/service-web.css')
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
            <li class="nav-item min"><a href="{{ route('top') }}#sec-news">ニュース</a></li>
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
                  <a href="#sec-news">- 　最新情報</a>
                </p>
              </div>
            </div>
          </ul>
          <div class="cover"></div>
        </div>
      </nav>
    </header>

    <main id="main">
      <div class="link-list">
        <a href="{{ route('top') }}">TOP</a>
        <div class="link-arrow"></div>
        <a href="{{ route('top') }}#sec-service">サービス紹介</a>
        <div class="link-arrow"></div>
        <p>Web開発</p>
      </div>
      <section class="sec-point">
        <div class="sec-title">
          <h1>AND-1Web開発の特徴</h1>
          <p>POINT</p>
        </div>
        <figure class="web-img">
          <img src="{{ asset('images/web.png') }}" alt="webイラスト">
        </figure>
        <article class="point-box">
          <figure class="point-img">
            <img src="{{ asset('images/test_img.jpg') }}" alt="モバイルファースト">
          </figure>
          <article>
            <p class="point-title"><span>01</span>モバイルファーストの開発</p>
            <p class="point-text">2023年の調査（総務省）によるとスマートフォンを使ってインターネットを利用する人の割合は全体の70%を超えていると言われています。 <br>当社ではスマートフォンからデザインをすることにより、見やすいWebサイトの発を行っています。</p>
          </article>
        </article>
        <article class="point-box">
          <figure class="point-img">
            <img src="{{ asset('images/test_img.jpg') }}" alt="モバイルファースト">
          </figure>
          <article>
            <p class="point-title"><span>02</span>動画の活用</p>
            <p class="point-text">なぜWebサイトに動画が有効なのか？どんなメリットがあるのか？を10秒程度の動画にまとめてあります。ご覧ください。</p>
          </article>
        </article>
        <article class="point-box">
          <figure class="point-img">
            <img src="{{ asset('images/test_img.jpg') }}" alt="モバイルファースト">
          </figure>
          <article>
            <p class="point-title"><span>03</span>AI（人工知能）の搭載</p>
            <p class="point-text">当社ではAIの活用にも力を入れており、Webサイトへ搭載も積極的に行っております。AIを活用する事によって、さまざまなユーザーからの問い合わせへの対応なども行っております。</p>
          </article>
        </article>
      </section>

      <section class="sec-flow">
        <figure class="flow-img">
          <img src="{{ asset('images/kaihatu_tejyun.png') }}" alt="flowイラスト">
        </figure>
        <div class="sec-title">
          <h1>開発のながれ</h1>
          <p>FLOW</p>
        </div>
        <div class="step-line"></div>

        <article class="flow-item">
          <div class="step-num"><p>STEP<br><span>01</span></p></div>
          <div>
            <p class="item-title">ヒアリング</p>
            <p class="item-text">お客様のご要望や現状の課題、問題点を把握します。</p>
          </div>
        </article>
        <article class="flow-item">
          <div class="step-num"><p>STEP<br><span>02</span></p></div>
          <div>
            <p class="item-title">ご提案</p>
            <p class="item-text">ヒアリングの結果から解決案をご提案します。</p>
          </div>
        </article>
        <article class="flow-item">
          <div class="step-num"><p>STEP<br><span>03</span></p></div>
          <div>
            <p class="item-title">ご契約</p>
            <p class="item-text">契約書をご記入頂き、ご契約となります。</p>
          </div>
        </article>
        <article class="flow-item">
          <div class="step-num"><p>STEP<br><span>04</span></p></div>
          <div>
            <p class="item-title">設計</p>
            <p class="item-text">要件に基づいて設計を行います。</p>
          </div>
        </article>
        <article class="flow-item">
          <div class="step-num"><p>STEP<br><span>05</span></p></div>
          <div>
            <p class="item-title">制作</p>
            <p class="item-text">コーディング作業を行います。</p>
          </div>
        </article>
        <article class="flow-item">
          <div class="step-num"><p>STEP<br><span>06</span></p></div>
          <div>
            <p class="item-title">テスト</p>
            <p class="item-text">実際の環境に合わせて成果物のテスト行います。</p>
          </div>
        </article>
        <article class="flow-item">
          <div class="step-num"><p>STEP<br><span>07</span></p></div>
          <div>
            <p class="item-title">確認・導入</p>
            <p class="item-text">お客さまにご確認いただき、サービスの公開または導入になります。</p>
          </div>
        </article>
      </section>
    </main>

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
              <a href="#main">
                <div class="to-top"></div>
              </a>
            </div>
          </div>
        </div>
      <article>
    </footer>

    {{-- <script src="js/main.js"></script> --}}
  </body>
</html>
