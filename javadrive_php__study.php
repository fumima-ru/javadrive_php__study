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
        <p>
          <?php echo "こんにちは<br>"; ?>
          <?php echo 'お元気ですか？'; ?>
        </p>

        <p>
        <?php
        $area = "大田区";
        echo "東京都".$area."<br>";
        echo "東京都{$area}";
        ?>
        </p>

        <p>
        <?php
        echo "私の名前は\"本田\"です<br>";
        echo '私の名前は\'近藤\'です<br>';
        ?>
        </p>

        
        <?php
        echo "こんにちは!\nお元気ですか<br>";
        ?>
        
        <br>
        
        <?php
        echo <<<LABEL
        こんにちは<br>
        私の名前は本田です
        LABEL;
        ?>
        <br>

        <?php echo <<<END
        I'm a student.
        I go to "school" by bus.
        END;
        ?>

        <p>
          <?php
          print 18;
          print '<br>';
          echo -3.14E-2;
          ?>
        </p>

        <?php
        echo 8+3, "<br>";

        echo 6-2, "<br>";
        
        echo 4*7, "<br>";
        
        echo 12/4, "<br>";
        
        echo 5%3, "<br>";
        
        ?>

        <?php
        echo "8 + 3 = ", 8 + 3, '<br>';
        echo "6 - 2 = ", 6 - 2, '<br>';
        echo "4 * 7 = ", 4 * 7, '<br>';
        echo "12 / 4 = ", 12 / 4, '<br>';
        echo "5 % 3 = ", 5 % 3, '<br>';

        echo 4/2*2, '<br>';
        echo 5+4*3, '<br>';
        echo (5+4)*3, '<br>';
        echo 2*((5+3)*4-(4+5)/3), '<br>';

        echo "5 + 3 * 4 = ", 5 + 3 * 4, '<br>';
        echo "(5 + 3) * 4 = ", (5 + 3) * 4, '<br>';
        ?>

      </main>
        
      </main>
      
      <!--#footer-------------------------->
      <footer id="footer" class="wrapper">
        <p class="copyright">&copy; <!--サイトタイトル--></p>
      </footer>
    </div>
  </body>
</html>

<!-- http://localhost/javadrive_php__study -->

<!-- 数値と四則演算
演算の際の型変換からスタート -->

<!-- 私の特性なのか
コツコツ積み重ねて力をつけていくやり方の方が
スキルが身に付くように感じています
ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
今日もPHPを学んでいます
自身で新しいwebサイトを作成していましたが
そこで感じたことは
まだまだ理解が足りないということでした

基礎の部分を
今までとは違う角度から
学び直しています

芋虫が蛹をすっ飛ばして蝶にはなれないように
スキル習得には順序があるな～と感じました

たまたま出来たでは再現性が低いと感じるので
シッカリ意味を理解した上で
分かりやすく美しいコードを書けるように
今は焦らずコツコツやっていこうと思います

#2_20_2023
#プログラミング
#プログラマー
#プログラマー女子!?
#プログラマー初心者
#アウトプット
#computerprogrammer
#javascript
#jquery
#html
#css
#ブログ
#codestep
#模写
#progate
#プロゲート
#pexels
#サーバー
#エックスサーバー
#アップロード
#ポートフォリオ
#git
#github
#vscode
#タスク管理
#プロジェクト管理
#php
#


 -->

