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

        <br>
        <br>

        <p>2/24</p>

        <?php
        $var = '高橋';
        print '[値]'.$var.',';
        print '[型]'.gettype($var).'<br>';

        $var = 180;
        print '[値]'.$var.',';
        print '[型]'.gettype($var).'<br>';

        ?>

        <br><br>

        <p>【プレビュー】</p>

        <br>

        <h1><!-- 変数を代入(変数 = 他の変数) --></h1>
        <?php
        $num = 40;
        print '$num = '.$num.'<br>';

        $num += 25;
        print '$num = '.$num.'<br>';

        $str = '福岡';
        print '$str = '.$str.'<br>';

        $str .= '支店';
        print '$str = '.$str.'<br>'; 
        ?>

        <br><br>

        <p>【プレビュー】</p>

        <br>

        <?php
        /* 定数の定義(define(識別子, 値);) */
        define('PI', 3.14);

        $radius = 7;
        $area = PI * $radius * $radius;
        print '半径が'.$radius.'cmの面積は'.$area.'㎠です'.'<br>';
        ?>

        <br><br>

        <?php
        $old = 25;
        if ($old >= 20) {
          print '年齢は２０歳以上です';
        }
        ?>

        <?php
        $tosi = 30;
        ?>
        <?php if ($tosi <= 30): ?>
          <p><?php print '年齢は３０歳以下です';?></p>
        <?php endif ?>

        <br><br>

        <?php
        if (True) {
          print '条件式にTRUEが記述されているので常に実行されます';
        }
        ?>

        <br><br>

        <?php
        $num_comparison = 20;
        if ($num_comparison == 20) {
          print "変数の値は20と等しい<br>";
        }
        ?>

        <?php
        $var1 = 208;
        if ($var1 == 208) {
          print '変数の値は208と等しい<br>';
        }

        $var1 = 12;
        $var2 = '12';
        if ($var1 == $var2) {
          print "12 == '12'はTRUEです<br>";
        }

        $var1 = 'Tokyo';
        if ($var1 == 'Tokyo') {
          print '変数の値はTokyoと等しい<br>';
        }

        $num_operator = '20';
        if ($num_operator !== 20) {
          print '変数の値は数値20と等しくない<br>';
        }

        $var_test = 208;
        if ($var_test === 208) {
          print '変数の値は数値の208です<br>';
        }

        $var_test = 12;
        $var_test2 = '12';
        if ($var_test === $var_test2) {
          print "12 === '12'はTRUEです<br>";
        } else {
          print "12 === '12'はFALSEです<br>";
        }

        $var_test = 'Tokyo';
        if ($var_test === 'Tokyo') {
          print '変数$var_testの値は文字列のTokyoです<br>';
        } else {
          print '変数$var_testの値は文字列のTokyoではありません<br>';
        }

        ?>

        <?php
        print $num;
        print '<br>';
        $num = 30;
        if ($num >= 30) {
          print '変数numの値は30以上<br>';
        } else {
          print '変数numの値は30よりも小さい<br>';
        }
        print $num;
        print '<br>';
        
        ?>

        <?php

        print $var1;
        print '<br>';
        $var1 = 21;
        print '<br>';
        if ($var1 < 30) {
          print '変数の値は３０より小さい<br>';
        }

        $var1 = 'Tokyo';
        $var2 =  'Osaka';
        if ($var1 > $var2) {
          print 'TokyoはOsakaより大きい<br>';
        } else {
          print 'TokyoはOsakaより小さい<br>';
        }

        $old = 25;
        $pref = '東京';
        if ($old >= 20 && $pref == '東京') {
          print '東京出身で20歳以上です<br>';
        }

        $math = 45;
        $english = 82;
        if ($math > 50 || $english > 50) {
          print '合格です<br>';
        } else {
          print '残念ながら不合格です<br>';
        }

        $math = 42;
        $english = 39;
        print '数学:'.$math.',英語:'.$english.'<br>';
        if ($math > 50 || $english > 50) {
          print '合格です<br>';
        } else {
          print '不合格です<br>';
        }

        $math = 45;
        $english = 82;
        if ($math < 50 xor $english < 50) {
          print '補習です<br>';
        }

        $math = 45;
        $english = 82;
        if ($math < 50 xor $english < 50) {
          print '補習を受けて下さい<br>';
        }

        $pref = '大阪';
        if(!($pref == '東京')) {
          print '東京以外にお住いの方<br>';
        }

        $old = 18;
        if ($old >= 20)
          print '20歳以上です<br>';
        else
          print '20歳未満です<br>';

        print '年齢:'.$old.'<br>';
        if ($old >= 20) {
          print '年齢は20歳以上です<br>';
        } else {
          print '年齢は20歳未満です<br>';
        }

        $old = 45;
        print '年齢:'.$old.'<br>';
        if ($old >= 20) {
          print '年齢は20歳以上です<br>';
        } else {
          print '年齢は20歳未満です<br>';
        }

        $domain = 'jp';
        if ($domain == 'in') {
          print 'インドのトップレベルドメイン<br>';
        } elseif ($domain == 'cn') {
          print '中国のトップレベルドメイン<br>';
        } elseif ($domain == 'jp') {
          print '日本のトップレベルドメイン<br>';
        } else {
          print '不明です<br>';
        }

        $pref = '千葉';
        if ($pref == '東京') {
          print "住まいは{$pref}です<br>";
        } elseif ($pref == '大阪') {
          print "住まいは{$pref}です<br>";
        } elseif ($pref == '京都') {
          print "住まいは{$poref}です<br>";
        } elseif ($pref == '福岡') {
          print "住まいは{$pref}です<br>";
        } elseif ($pref == '千葉') {
          print "住まいは{$pref}です<br>";
        } else {
          print "住まいは未記入です<br>";
        }

        switch ($pref) {
        case '東京':
          print "住まいは{$pref}です<br>";
          break;
        case '大阪':
          print "住まいは{$pref}です<br>";
          break;
        case '京都':
          print "住まいは{$pref}です<br>";
          break;
        case '福岡':
          print "住まいは{$pref}です<br>";
          break;
        case '千葉':
          print "住まいは{$pref}です<br>";
          break;
        default:
          print "住まいは未記入です<br>";
        }

        $number = 7;    
        switch ($number) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
          print "{$number}です<br>";
          break;
        default:
          print '数値は1～8以外です';
        }

        $domain = 'cn';
        print 'ドメイン:'.$domain.'<br>';
        switch ($domain) {
        case 'in':
          print 'インドのトップレベルドメイン<br>';
          break;
        case 'cn':
          print '中国のトップレベルドメイン<br>';
          break;
        case 'jp':
          print '日本のトップレベルドメイン<br>';
          break;
        default:
          print '不明です';
        }

        print '<br><br>';

        print '【プレビュー】<br>';


        
        $lang = 'En';
        $msg = $lang == 'jp' ? 'こんにちは' : 'Hello';
        print $msg.'<br>';

        $lang ='Jp';
        print $lang == 'Jp' ? 'こんにちは' : 'Hello';
        print '<br>';

        $num = 0;
        while ($num < 2) {
          print "num=".$num;
          $num += 1;
          print '<br>';  
        }

        $num = 0;
        while ($num < 3) {
          print 'num = '.$num.'<br>';
          $num += 1;
        }

        $i = 0;
        while ($i < 3) {
          $j = 0;
          while ($j < 3) {
            print '(i, j)=('.$i.','.$j.')<br>';
            $j += 1;
          }
          $i += 1;
        }

        print '<br>';

        $count = 1;
        $sum =0;
        while ($count <= 100) {
          $sum += $count;

          if ($sum > 1000) {
            print '1000を越えたので count ='.$count.'で終了します<br>';
            break;
          }
          $count += 1;
        }

        print 'sum= '.$sum;
        print '<br><br>';




        print '【プレビュー】<br>';
        print '-----------------<br>';

        $i = 1;
        while ($i < 5) {
          $j = 1;

          /* breakによって抜けるループ */
          while ($j < 5) {
            if ($i * $j > 15) {
              break;
            }
            $j += 1;
          }
          /* breakによって抜けるループ ここまで*/

          $i += 1;
        }
        /* $i = 5, $j = 4 */
        print $i.'<br>';
        print $j.'<br>';

        print '-----------------<br>';

        $i = 1;

        /* breakによって抜けるループ */
        while ($i < 5) {
          $j = 1;

          while ($j < 5) {
            if ($i * $j > 15) {
              break 2;
            }
            $j += 1;
          }
          $i += 1;
        }
        /* breakによって抜けるループ ここまで*/

        /* $i = 4, $j = 4 */
        print $i.'<br>';
        print $j.'<br>';

        print '-----------------<br>';

        $count = 1;
        $sum =0;
        
        while ($count <= 100) {
          $sum += $count;

          if ($sum > 1000) {
            print '1000を越えたので count = '.$count.'で終了します<br>';
            break;
          }

          $count += 1;
        }
        print 'sum = '.$sum.'<br>';

        print '-----------------<br>';


        $count = 0;
        $sum = 0;
        while ($count < 100) {
          $count += 1;
          if ($count % 2 == 0) {
            continue;
          }
          $sum = $count;
        }
        print '変数sum = '.$sum.'<br>';

        print '<br><br>';


        print '【プレビュー】<br>';
        print '-----------------<br>';

        $count1 = 0;
        $sum = 0;

        while ($count1 < 10) {
          $count1 += 1;
          $count2 = 0;

          while ($count2 < 10) {
            $count2 += 1;
            if ($count1 * $count2 > 30) {
              continue 2;
            }
            $sum += $count1 * $count2;
          }
        }
        print 'sum = '.$sum.'<br>';
        print '-----------------<br>';

        $count1 = 0;
        $sum = 0;

        while ($count1 < 2) {
          $count1 += 1;
          $count2 = 0;

          while($count2 < 2) {
            $count2 += 1;
            if ($count1 * $count2 > 2) {
              continue 2;
            }
            $sum += $count1 * $count2;
          }
        }
        print 'sum = '.$sum.'<br>';
        print '-----------------<br>';

        

        print '<br>';
        print '【プレビュー】<br>';
        
        $num = 0;
        do {
          print 'num = '.$num.'<br>';
          $num += 1;
        } while ($num < 3);

        print '-----------------<br>';

        for ($sum = 0; $sum < 2; $sum++) {
          print $sum.'<br>';
        }

        for ($x = 0, $y = 10; $x < 10; $x ++, $y --) {
          print '$x = '.$x.',$y = '.$y.'<br>';
        }

        print '<br>';
        print '【プレビュー】<br>';

        for ($i = 0, $j = 0; $i < 3; $i++, $j--) {
          print '$i = '.$i.', $j = '.$j.'<br>';
        }


        $preflist = array('東京', '大阪', '名古屋', '博多');

        foreach ($preflist as $pref) {
          print $pref.'<br>';
        }

        print '-----------------<br>';

        $ary = array(0, 1, 2, 3, 4, 5);
        print $ary[1].'<br>';
        unset($ary[4]);
        
        foreach ($ary as $value) {
          print $value.', ';
        }

        print '<br>';
        print '-----------------<br>';

        $pricelist = array(80, 100, 120);

        foreach ($pricelist as $value) {
          $value *= 1.05;
          print $value.', ';
        }
        unset($value);

        print '<br>';
        print '-----------------<br>';

        foreach ($pricelist as $value) {
          print $value.', ';
        }

        print '<br>';
        print '-----------------<br>';
        print '【プレビュー】<br>';
        print '-----------------<br>';

        $menulist = array('スパイスカレー' => 950, 'マンゴーラッシー' => 400);

        foreach ($menulist as $key => $value) {
          print $key.'は'.$value.'円です<br>';
        }

        print '-----------------<br>';

        $pricelist = array(80, 100, 120);

        foreach ($pricelist as &$value) {
          $value *= 1.05;
          print $value.'<br>';
          // unset($value);
        }

        print '-----------------<br>';
        print $value.'<br>';
        unset($value);

        print '-----------------<br>';

        foreach ($pricelist as $value) {
          print $value.'<br>';
        }

        print '<br>';       

        $result[0] = 85;
        $result[1] = 92;
        $result[2] = 68;

        print '-----------------<br>';
        print '【for文】<br>';

        for ($i = 0; $i < 3; $i++) {
          print $result[$i].'<br>';
        }

        print '-----------------<br>';
        print '【foreach文】<br>';

        foreach ($result as $val) {
          print $val.'<br>';
        }

        
        print '<br>';

        $result['eigo'] = 72;
        $result['suugaku'] = 82;

        $name[0] = '山田';
        $name[1] = '高橋';

        print $name[0].'<br>';
        print $name[1].'<br>';

        print $result['eigo'].'<br>';

        print_r($result);
        print '<br>';
        print $result[0].'<br>';


        print '<br>';
        print '【プレビュー】<br>';
        print '-----------------<br>';

        
        $color['イチゴ'] = '赤';
        $color['メロン'] = '緑';
        $color['バナナ'] = '黄';

        print_r($color).'<br>';



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
