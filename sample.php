<?php
  $a = '100' + '25';
  $b = 15 +30;
  $c = $a ;
  $x = 3.145e2;
  $title = '中カッコは変数を明確にするため';
  $data1 = 'クォートで変換され方が変わる\t『{$title}』';
  $data2 = "バックスラッシュｔは空白タブ\n『{$title}』";
  $data3 = "バックスラッシュはダブルクォート<br />内でのみ\n変換される(変換されなかった)\nnn122";
  $title = 'sample';
  $anker = 'sample.php';
  $msg = <<<EOD
  {$data1}はうまく変換されていない。しかしながらそれもまたよし。<br />
  {$title}は表示されるか確認確認
  EOD;
?>


<!DOCTYPE html>
<head>
  <meta charaset="utf-8" >
  <title><?php print $title; ?></title>
</head>
<header>
  <h>サンプル</h>
  <nav>
    <ul>
      <li><a href=<?= $anker; ?>>home</a></li>
      <li><a href=<?= $anker; ?>>home</a></li>
      <li><a href=<?= $anker; ?>>home</a></li>
    </ul>
  </nav>
</header>
<div class="sitebody">
  <div class="navigation">
    <li><a href=<?= $anker; ?>>home</a></li>
    <li><a href=<?= $anker; ?>>home</a></li>
    <li><a href=<?= $anker; ?>>home</a></li>
  </div>
  <div class="main">
      <div>
      <?php echo $c; ?></br>
      <?php print $c; ?></br>
      <?php print $x; ?></br>
      <?php print 'He\'s great teacher';?></br>
      <?php print $data1; ?></br>
      <?php print $data2; ?></br>
      <?php print $data3;?><br>
      <h><?php echo $msg; ?></br></h>
      <h><?php if( $a >= 100 && $a <=110  ){
        print '$aは100以上です';
      }elseif ( $a = 99 ){
        print '$aは99以下です';
      }else {
        print '$aに値が存在しない';
      }; ?></h>
      
  </div>
</body>
</html>