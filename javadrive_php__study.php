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
関数は関数呼び出しよりも前で定義しても後で定義しても構いません。 -->


<!-- 関数から値を返すにはreturn文を使います。書式は次の通りです。

return 戻り値;

戻り値を保存するには「変数 = 関数名(引数)」のように変数に対して格納
戻り値には数値や文字列などの他に配列など全ての値を指定可能

ーーーーーーーーーーーーーーーーーーーーーーーーー

関数の中でreturn文が実行されると戻り値を返すと共に関数内の処理をそこで終了します。つまりreturn文が実行されると処理は関数を呼び出した元に処理が移ります。

戻り値として指定できる値は1つだけ
ただし配列も指定が可能なので配列を使うことで実質的に複数の値を返すことも可能です。 -->

      <!-- 戻り値を使って関数から値を返す ここから-->
      <!--  -->


      <?php
      function plus($num1, $num2) {
        $variables_in_functions = $num1 + $num2;
        /* return文【return 戻り値;】 */
        return $variables_in_functions;
      }

      /* 関数の呼び出し【関数名();】 */
      print '加算の結果は'.plus(10, 10).'です。<br>';

      /* 関数を呼び出して変数に格納【変数 = 関数名();】*/
      $return_variables_in_functions = plus(5, 5);
      print '加算の結果は'.$return_variables_in_functions.'です。<br>';
      ?>



      
<!-- 次にやること　print 'return実行後の処理は実行されない'; 
　　　　　　　　　　return文を複数記述-->

<!-- その次　配列を返す -->








      <?php
      /* function average3($num5, $num6) {
        global $result3;
        echo $result3;
      }

      $result3 = ($num5 + $num6) / 2;
      /* スコープ外の変数 */
      /* print $result3;
      print '<br>';

      average3(6, 30); */
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