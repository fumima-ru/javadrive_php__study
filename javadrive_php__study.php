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

      <?php
      class Television1 {
        private $channelNo1;

        function init($channel) {
          $this -> channelNo1 = $channel;
        }

        function getChannel1() {
          return $this -> channelNo1;
        }
      }

      $tv = new Television1();
      $tv -> init(7);
      print $tv -> getChannel1().'です<br>';
        
      ?>

      <?php
      class Television2 {
        private $channelNo2;

        function __construct($channel2) {
          $this -> channelNo2 = $channel2;
        }

        function getChannel2() {
          return $this -> channelNo2;
        }
      }

      $tv2 = new Television2(10);
      print $tv2 -> getChannel2().'です<br>';
      ?>

      <?php
      print '<br>';
      print '【プレビュー】<br>';
      print '-----------------<br>';
      ?>

      <?php
      class Fruits {
        private $name;
        private $color;
        private $arrival_quantity;

        function __construct($name, $color, $arrival_quantity) {
          $this -> name = $name;
          $this -> color = $color;
          $this -> arrival_quantity = $arrival_quantity;
          $this -> print();
        }

        private function print() {
          print $this -> name.'は'.$this -> color.'色です。<br>';
          print $this -> arrival_quantity.'個入荷しました。<br>';
        }

        function getValue() {
          return [$this -> name, $this -> color, $this -> arrival_quantity];
        }
      }

      /* オブジェクトを生成 */
      $apple = new Fruits('りんご', '赤', 1);

      /* print_r関数で要素の一覧を出力 */
      print_r ($apple -> getValue());
      print '<br>';

      /* 配列を変数に代入 キーを指定して要素を出力 */
      $apple_array = $apple -> getValue();
      print '１つ目の要素：'.$apple_array[0].'<br>';
      print '２つ目の要素：'.$apple_array[1].'<br>';
      print '３つ目の要素：'.$apple_array[2].'<br>';
      print '<br>';
      print '------------------------------------------------<br>';

      $grape = new Fruits('ぶどう', '紫', 5);
      print_r ($grape -> getValue());


      print '<br>';
      print '------------------------------------------------<br>';

      $banana = new Fruits('ばなな', '黄', 10);
      print_r ($banana -> getValue());
      print '<br>';
      print '------------------------------------------------<br>';
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