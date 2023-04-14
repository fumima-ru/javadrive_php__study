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
      <!-- クラス内のメンバメソッドと引数 -->
      <!-- クラス名はアッパーキャメルケース -->
      

      <?php
      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';
      ?>

      <?php
      class Character {
        public $characterName;
        public $color;
        public $favorite;

        private function selfIntroduction() {
          print '名前：'.$this -> characterName.'<br>';
          print '色：'.$this -> color.'<br>';
          print $this -> favorite.'が大好きです<br>';
          print '-----------------------------------------------------------<br>';
        }

        function setProfile($name, $color, $favorite) {
          $this -> characterName = $name;
          $this -> color = $color;
          $this -> favorite = $favorite;
          $this -> selfIntroduction();
        }

      }

      $rilakkuma = new Character();
      $rilakkuma -> setProfile('リラックマ', '茶色', 'ホットケーキ、オムライス、プリン、だんご' );

      $korilakkuma = new Character();
      $korilakkuma -> setProfile('コリラックマ', '白', 'いちご、リンゴ、さくらんぼ');
      ?>

      <?php
      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';
      ?>


      <h1>【お手本】</h1>
      <?php
      $tv = new TelevisionOrigin();

      $tv -> setChannelOrigin(20);
      print '現在のチャンネルは'.$tv -> getChannelOrigin().'です<br>';

      $tv -> setChannelOrigin(10);
      print '現在のチャンネルは'.$tv -> getChannelOrigin().'です<br>';

      class TelevisionOrigin {
        private $channelNo = 8;

        const MAX_CHANNEL = 12;
        const MIN_CHANNEL = 1;
        const ERROR_MSG = 'チャンネルは1から12の間で設定してください<br>';
        
        function setChannelOrigin($channel_origin) {
          if (($channel_origin >= self::MIN_CHANNEL) and ($channel_origin <= self::MAX_CHANNEL)) {
            $this -> channelNo = $channel_origin;
          } else {
            print self::ERROR_MSG;
          }
        }

        function getChannelOrigin() {
          return $this -> channelNo;
        }
      }
      ?>

      <h1>【テスト】</h1>
      <?php
      class Television {
        private $channelNo = 10;

        // 定数名は大文字で記述
        const MIN_CHANNEL = 1;
        const MAX_CHANNEL = 12;
        const ERROR_MSG = 'チャンネルは'.self::MIN_CHANNEL.'から'.self::MAX_CHANNEL.'の間で設定してください<br>';

        function setChannel($channel) {
          if (($channel >= self::MIN_CHANNEL) and ($channel <= self::MAX_CHANNEL)) {
            $this -> channelNo = $channel;
            print '現在のチャンネルは'.$this -> channelNo.'です<br>';
          } else {
            print self::ERROR_MSG;
            print '現在のチャンネルは'.$this -> channelNo.'です<br>';
          }
        }
      }

      $tv = new Television();

      $tv -> setChannel(7);
      $tv -> setChannel(70);
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


<!-- 変数の前に「&」を付けることで要素の値に対する参照を設定することができます。 -->
<!-- PHPのコーディング規約に
インデントは半角スペース4つというルールがある-->