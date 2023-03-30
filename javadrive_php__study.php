<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>javadrive_php__study</title>
    <meta name="description" content="サイトの説明">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">

    <!-- slickのCSS slickを入れる場合に記述-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">


    <!--Google Fonts設定-->
    <link rel=link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!--Font Awesome読み込み-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--css読み込み-->
    <link rel="stylesheet" href="css/javadrive_php__study.css">
    
    
    <!--＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿-->
    <!--Google の CDNを使用-->
    <!--(CDNを経由する方法であればjQueryをダウンロードする必要がない　バージョンが変わることがあるので注意すること)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--jsファイル読み込み--（すべてのjsファイルを読み込む書いた順に実行される意識を持つこと）-->  
    <script src="js/<!--jsファイル名-->" defer></script>
  </head>

  <body>
    <!--#header-------------------------->
    <header id="header">
      <div class="logo">
        <a href="#"></a>
      </div>
    </header>

    <!--.container----------------------->
    <div class="container">
      <!--main----------------------------->
      <main>

      <?php
      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';
      print '<br>';
      ?>

      <br><br><br>
      <p> -----------------</p>
      <!-- これ以下は消してOK -->


      
      <!-- /* 配列の初期化 使い始める前の変数（値を入れる箱）に初期値（最初の値）を設定する行為を「変数の初期化」と言います。
      $var = array(); */ -->

      <?php
      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';
      ?>

      <?php
      $math = 35;
      $english = 65;
      $japanese = 80;
      $social_studies = 60;
      $science = 75;
      $music = 95;
      $physical_education = 100;

      check('数学', $math);
      check('英語', $english);
      check('国語', $japanese);
      check('社会', $social_studies);
      check('理科', $science);
      check('音楽', $music);
      check('体育', $physical_education);

      
      function check($subject, $score) {
        print $subject.'：'.$score.'点';
        print '<br>';
        if ($score >= 85) {
          print 'よく出来ました';
        } elseif ($score >= 60) {
          print '惜しい！';
        } elseif ($score >= 40) {
          print 'もう少し頑張りましょう';
        } else {
          print '補習です';
        }
        print '<br>';
        print '-----------------<br>';
      }
      ?>

      <?php
      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';
      ?>

      <!-- 関数の定義
function 関数名(引数1, 引数2, ...){
  実行される処理1;
  実行される処理2;
}

関数の呼び出し
関数名(引数1, 引数2, ...);

関数から返された値を変数に代入
変数 = 関数名(引数1, 引数2, ...);

その他
関数は関数呼び出しよりも前で定義しても後で定義しても構いません。
 -->

      <?php
      print '定義前に関数を呼び出す<br>';
      hello();
      print '<br>';
      print '-----------------<br>';

      // 関数の定義
      function hello() {
        print 'hello';
      }

      print '定義後に関数を呼び出す<br>';
      hello();
      print '<br>';
      print '-----------------<br>';
      ?>

      <?php
      // 関数の呼び出し
      hello();
      print '<br>';
      print '-----------------<br>';
      ?>

      <?php
      // 関数の定義
      function alphabet() {
        print 'HIJKLMN ←【関数 alphabet】';
      }

      /* 関数の呼び出し */
      print 'ABCDEFG<br>';
      alphabet();
      print '<br>';
      print 'OPQRSTU<br>';
      print 'VWXYZ<br>';
      print '-----------------<br>';
      ?>


      <!-- ------------------------------------------------------------- -->


      <?php
      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';
      ?>

      <?php
      function display1($value1, $value2) {
        if ($value1 + $value2 == 7) {
          print '値は７です';
        }
      }

      display1(3, 4);
      ?>

      <br>

      <?php
      function display2($value3, $value4) {
        if ($value3 + $value4 == 10) {
          print '値は10です';
        } else {
          print '値は10ではありません';
        }
      }

      display2(7, 7);
      ?>

      <br>

      <?php
      print '<br>';
      print '【プレビュー】<br>';
      ?>

      <p>【1】-----------------</p>
  
      <?php
      print 'こんにちは高橋さん、';
      print 'お元気ですか。<br>';

      print 'こんにちは大野さん、';
      print 'お元気ですか。<br>';
      ?>

      <p>【2】-----------------</p>

      <?php
      function greeting_2() {
        print 'お元気ですか。';
        print '<br>';
      }

      print 'こんにちは高橋さん、';
      greeting_2();

      print 'こんにちは大野さん、';
      greeting_2();
      ?>

      <p>【3】-----------------</p>

      <?php
      function greeting_3($name) {
        print "こんにちは{$name}さん、";
        print 'お元気ですか。';
        print '<br>';
      }

      greeting_3('高橋');
      greeting_3('大野');
      ?>

      <p>【4】-----------------</p>

      <?php
      function greeting_4($name) {
        print 'こんにちは'.$name.'さん、お元気ですか。<br>';
      }

      greeting_4('高橋');
      greeting_4('大野');      
      ?>

      <br><br><br>
      <?php
      print '<br>';
      print '【プレビュー】<br>';
      ?>

      <!--引数を使って関数に値を渡す 複数の引数 ここからスタート-->
      <?php

      ?>






      <br><br><br>
      <!-- テスト -->
      <?php
      function attendance_at_work($greeting) {
        return 'おはようございます';
      }

      $good_morning = attendance_at_work('おはようございます');

      print $good_morning;
      // print $greeting;
      print '<br>';
      print '-----------------<br>';
      ?>
      <!-- テスト終 -->
      
      
        
      </main>
        
      
      <!--#footer-------------------------->
      <footer id="footer" class="wrapper">
        <p class="copyright">&copy; <!--サイトタイトル--></p>
      </footer>
    </div>
  </body>
</html>

<!-- http://localhost/javadrive_php__study -->

<!-- 関数の定義と呼び出しからスタート -->

<!-- 変数の前に「&」を付けることで要素の値に対する参照を設定することができます。 -->
<!-- PHPのコーディング規約に
インデントは半角スペース4つというルールがある

組み込み関数 アウトプット

関数を作るには「function 関数名(){ 処理 }」という書き方をします。
関数名は自由につけることが出来ます
関数は「関数名()」というように()をつけて呼び出すことができます

配列と関数
変数定数-->