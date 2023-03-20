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






      <?php
      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';
      ?>

      
      <!-- /* 配列の初期化 使い始める前の変数（値を入れる箱）に初期値（最初の値）を設定する行為を「変数の初期化」と言います。
      $var = array(); */ -->

      <?php

      $var1 = array('Tokyo' => '東京', 'Osaka' => '大阪', 'Fukuoka' => '福岡');
      
      print '$var1 = ';
      print_r($var1);
      print '<br>';

      print '-------------------------------------------------------------------------------<br>';

      $var2 = array('Hokkaido' => '北海道',
                    'Nagano' => '長野',
                    'Aichi' => '愛知',
      );
      
      print '$var2 = ';
      print_r($var2);
      print '<br>';

      print '-----------------------------------------------------------------------------------<br>';

      $var3['Ishikawa'] = '石川';
      $var3['Hiroshima'] = '広島';
      $var3['Ehime'] = '愛媛';

      print '$var3 = ';
      print_r($var3);
      print '<br>';

      print '------------------------------------------------------------------------------------<br>';

      $var4 = array('Japan', 'China', 'Korea');

      print '$var4 = ';
      print_r($var4);
      print '<br>';

      print '------------------------------------------------------------------<br>';

      $var5 = array(10 =>'Italy', 'France', 'Germany');

      print '$var5 = ';
      print_r($var5);
      print '<br>';

      print '--------------------------------------------------------------------------<br>';

      $var6 = ['Nigeria',
               'Senegal',
               'Ghana',
      ];

      print '$var6 = ';
      print_r($var6);
      print '<br>';

      ?>


      <br><br><br>

      <?php

      $var7 = ['Nigeria',
               'Senegal',
               'Ghana',
      ];

      print '$var7 = ';
      print_r($var7);
      print '<br>';

      $var8 = ['Nigeria',
               'Senegal',
               'Ghana',
              ];

      print '$var8 = ';
      print_r($var8);
      print '<br>';

      ?>
      
        
      </main>
        
      
      <!--#footer-------------------------->
      <footer id="footer" class="wrapper">
        <p class="copyright">&copy; <!--サイトタイトル--></p>
      </footer>
    </div>
  </body>
</html>

<!-- http://localhost/javadrive_php__study -->

<!-- 配列
多次元配列からスタート -->

<!-- 変数の前に「&」を付けることで要素の値に対する参照を設定することができます。 -->
<!--  -->