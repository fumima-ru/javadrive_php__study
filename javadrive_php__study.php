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

      <?php
      $var1[] = 100;
      $var1[] = 'Tokyo';

      print_r($var1);
      print '<br>';
      ?>

      <p>-----------------</p>

      <?php
      print_r($var1);
      print '<br>';
      ?>

      <p>-----------------</p>

      <?php
      $var2[10] = 100;
      $var2['Takoyaki'] = 12;
      $var2[7] = 70;
      $var2[] = 'Osaka';

      print_r($var2);
      print '<br>';
      ?>

      <p>-----------------</p>

      <?php
      $var3['apple'] = 1;
      $var3['banana'] = 2;
      $var3[] = 3;

      print_r($var3);
      print '<br>';
      ?>

      <p>-----------------</p>

      <?php
      $var4[-7] = 700;
      $var4[-100] = 10000;
      $var4[] = 20;
      $var4[] = 500;

      print_r($var4);
      print '<br>';
      ?>

      <p>-----------------</p>
      
      <?php
      for ($i = 10; $i < 17; $i++) {
        $var5[] = $i * 10;
      }

      print_r($var5);
      print '<br>';
      print $var5[3];
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
<!-- キーの自動付与
キーを指定しない場合は整数のキーが自動で付与される
整数のキーが1つも存在しない場合は0から付与
付与される整数のキーはキーとして割り当てられている最大の整数に1を加えたもの





✕負の整数のキーしか存在しなかった場合、自動で付与されるキーは0となります

🍋Lemanさん会議おつっす～ -->