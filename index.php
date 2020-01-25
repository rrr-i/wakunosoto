<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>template</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  </head>
  <body class="onLoad">
    <?php
      $prm = $_GET['prm'];
    ?>
      <div id="wrapper">
      <!-- <div class="load">
        <img src="./materials/svg/green-2.svg" alt="">
      </div> -->
        <section class="firstView">
          <div class="square"><a href="#jump"></a></div>
          <!-- <div class="paint">
            <img src="./materials/svg/red.svg" alt="red">
            <img src="./materials/svg/blue.svg" alt="blie">
            <img src="./materials/svg/yellow.svg" alt="yellow">
            <img src="./materials/svg/green.svg" alt="green">
          </div> -->
          <div class="logo-wrap">
            <div class="logo-Svg">
              <img src="./materials/logo/logo.svg" alt="logo">
            </div>
            <!-- <span class="logo-border"></span> -->
            <div class="logo-caption">
              <p class="title">wakunosoto</p>
              <!-- <p class="title">塗り絵<small>の</small>美術館</p> -->
              <p class="sub-title">スマホで、できないことがココにある。</p>
              <p class="sub-title">もっと触って、また行きたい。</p>
              <p class="sub-title">子供でも、アイデアはある。</p>
            </div>
            <!-- <div class="logo-caption">
              <p>塗り絵　<small>×</small>　美術館</p>
              <p>固定概念という枠に捉われない</p>
              <p>デジタルではなく、アナログを感じる</p>
            </div> -->
          </div>
        </section>
        <section id="jump" class="content">
          <div class="concept">
            <h2>wakunosotoミュージアムって？</h2>
              <p>スマートフォンの定着化による、子供達の知育手段がデジタルに特化し始めている。</p>
              <p>子供自身がもっとアナログに触れて、五感で感じたことを大事に伸ばしてもらうこと、大人たちも子供のアイデアに共感して気付きを得て欲しい。</p>
              <p>真っ白な美術館の壁や床、オブジェクト等に様々な道具や紙を配置して、</p>
              <p>アナログな素材・重さ・匂い・肌触りを感じてもらう。</p>
          </div>
          <div class="whatdoing">
            <h2>何をするところ？</h2>
            <p>美術館は、静かに見て回るもの、好きな作品に感化される場所でしかないので、もっと自分で描いて動いて感じる場所が欲しかった。</p>
            <p>美術館にオブジェクトや壁に紙を設置して、いろいろな道具で描いて触れる事で五感で楽しむことを体験するサービス。</p>
          </div>
        </section>
        <div class="video">
          <video src="./materials/movie/2294-1080.mp4" muted autoplay loop></video>
        </div>
        <section class="service">
          <div>
            <h3>サービス内容</h3>
            <div class="service_first">
              <h3>かべに描く！</h3>
            </div>
            <div class="service_second">
              <h3>ものに描く！</h3>
            </div>
            <div class="service_third">
              <h3>じゆうに描く！</h3>
            </div>
            <div class="official_site">
              <p>公式サイト</p>
            </div>
          </div>
        </section>
        <section class="rules">
          <div>
            <h3>wakunosotoミュージアムでの、きまりごと。</h3>
            <div class="rules-box rules-1">
              <span>わ</span>
              <div class="rules-caption">
                <h4>わたしの作品は、みんなの作品。</h4>
                <p>せっかく描いた絵が他の人に塗られた。
                悲しくて怒りたくなる。<br>
                でも、みんなの場所はみんなの絵。
                みんなで作ることを楽しもう。</p>
              </div>
            </div>
            <div class="rules-box rules-2">
              <span>く</span>
              <div class="rules-caption">
                <h4>くだらない、が、おもしろい。</h4>
                <p>こんなくだらない落書きなんて、
                こんなへたくそな絵なんて、
                こんな魅力がないデッサンなんて。<br>
                上手がぜんぶ、正義じゃない。</p>
              </div>
            </div>
            <div class="rules-box rules-3">
              <span>の</span>
              <div class="rules-caption">
                <h4>のびのび描こう。</h4>
                <p>「ダメ！」なんて言うことない。
                だってどこに描いても怒られないんだもの。<br>
                いっぱい描いて、いっぱい染めて、
                自分の色を着て帰ろう。</p>
              </div>
            </div>
            <div class="rules-box rules-4">
              <span>そと</span>
              <div class="rules-caption">
                <h4>外には、なんでもある。</h4>
                <p>いつも通る道、やるゲーム、見る絵本。
                一歩踏み出して、外を見てみよう。<br>
                ほら、みんながみんな違うから。
                「自分だけ」を見つけよう。</p>
              </div>
            </div>
          </div>
        </section>
        <div class="gallery">
          <h4>gallery</h4>
          <img src="./materials/img/gallery.jpg" alt="">
        </div>
        <footer class="access">
          <address></address>
          <div class="map"></div>
          <div class="footer-logoSvg">
            <img src="./materials/logo/logo.svg" alt="logo">
          </div>
          <small>©︎copyright wakunosotoミュージアム公式</small>
        </footer>

        <?php if( isset ($prm) ): ?>
          <!-- URL: /$prm=php -->
          <?php if ( $prm == 'php' ): ?>
          <?php endif; ?>
        <?php endif; ?>

      </div><!--endWrap-->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>