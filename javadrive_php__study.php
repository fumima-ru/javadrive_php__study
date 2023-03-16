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

      
      /* キーには負の数も指定することが可能 */
      /* キーは連続した整数である必要はない */
      /* キーが整数で構成された文字列の場合は整数として扱われる */
      /* キーが「07」のような文字列の場合は文字列として扱われる */
      /* キーが小数の場合 小数点以下は切り捨てられる */

      print '【プレビュー】<br>';

      $var1[0] = 15;
      $var1[2] = 'Osaka';
      $var1[-2] = 2500;
      $var1[3] = 3;
      $var1[4.5] = 4.5;


      $var2['yamada'] = 17;
      $var2['suzuki'] = 55;
      $var2['aicti'] = 'nagoya';

      $var3['7'] = 70;
      $var3['07'] = 70;

      print_r($var1);
      print '<br>';
      print_r($var2);
      print '<br>';
      print_r($var3);
      print '<br>';

      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';


      $drink = 'coffee';
      $food = 'curry';

      $var4[$drink] = 450;
      $var4[$food] = 900;


      print 'キーを指定して要素の中に含まれる値を取り出す<br>';

      print $var4[$drink].'<br>';
      print $var4[$food].'<br>';

      print '-----------------<br>';
      print '配列に含まれる要素の一覧を出力<br>';

      print_r($var4);
      print '<br>';

      print '-----------------<br>';
      print 'キーの文字列に変数を記述して変数展開する<br>';

      $val5["price_$drink"] = 470;
      $val5["price_$food"] = 920;
      print_r($val5);
      print '<br>';

      print '-----------------<br>';
      print '定義された定数をキーとして指定する<br>';

      define("SHOP","fumima_ru_cafe");
      $address[SHOP] = 'Osaka';

      print SHOP.'<br>';
      print '所在地 : '.$address[SHOP].'<br>';
      
      print_r(SHOP);
      print '<br>';
      print_r($address);
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

<!-- 繰り返し処理
foreach文でキーと値を取り出すからスタート -->

<!-- 変数の前に「&」を付けることで要素の値に対する参照を設定することができます。 -->
