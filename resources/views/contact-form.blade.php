<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="サイトの概要文が入ります。">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AND-1｜お問い合わせ</title>

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
    @vite('resources/css/contact-form.css')
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
            <li class="nav-item min"><a href="{{ route('top') }}#sec-contact" class="nav-contact">お問い合わせ</a></li>
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
          <p class="sp-none nav-contact"><a href="{{ route('top') }}#sec-contact">お問い合わせ</a></p>
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
      <article class="page-title">
        <h1>CONTACT</h1>
        <p>お問い合わせ</p>
      </article>
      <div class="link-list">
        <a href="{{ route('top') }}">TOP</a>
        <div class="link-arrow"></div>
        <p>お問い合わせ</p>
      </div>

      <article class="form-box">
        <p class="form-title">メールでお問い合わせ</p>

        {{-- メール送信成功 --}}
        @if (session('success'))
          <p style="color: green;">{{ session('success') }}</p>
        @endif

        <form action="{{ route('contact.confirm') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-item">
              <label for="company">会社名<span class="required">必須</span></label>
              <input type="text" id="company" name="company" required>
            </div>

            <div class="form-item">
              <label for="section">部署名<span class="nullable">任意</span></label>
              <input type="text" id="section" name="section">
            </div>

            <div class="form-item">
              <label for="name">お名前<span class="required">必須</span></label>
              <input type="text" id="name" name="name" required>
            </div>

            <div class="form-item">
              <label for="location">会社の所在地<span class="nullable">任意</span></label>
              <input type="text" id="location" name="location">
            </div>

            <div class="form-item">
              <label for="mail">メールアドレス<span class="required">必須</span></label>
              <input type="email" id="mail" name="mail" required>
            </div>

            <div class="form-item">
              <label for="telephone">電話番号<span class="required">必須</span></label>
              <input type="tel" id="telephone" name="telephone" required>
            </div>

            <div class="form-item">
              <label for="sector">業種<span class="nullable">任意</span></label>
              <input type="text" id="sector" name="sector">
            </div>

            <div class="form-item message">
              <label for="message">お問い合わせ内容<span class="required">必須</span></label>
              <textarea id="message" name="message" required></textarea>
            </div>

            <p class="agree">
              <a href="{{ route('policy.privacy') }}"><span class="policy-link">プライバシーポリシー</span></a>に同意の上、送信ください。
            </p>
            <p class="check">
              <input type="checkbox" name="privacy" required>
              プライバシーポリシーに同意する
            </p>

            <div class="to-confirm">
              <button class="btn-confirm" type="submit">確認画面へ</button>
            <div>
        </form>
      </article>
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
