<!DOCTYPE html>
  <head>
    <meta charaset="utf-8">
    <title>計算</title>
  </head>
  <body>
    <?php
      $date=$_POST['date'];
      $name=$_POST['name'];
      $address=$_POST['address'];
      $salary=$_POST['salary'];
      $pension1=$_POST['pension1'];
      $other=$_POST['other'];
      $dividend=$_POST['dividend'];
      $temp=$_POST['temp'];
      $insurance=$_POST['insurance'];
      $spouse=$_POST['spouse'];
      $support=$_POST['support'];
      $basic=$_POST['basic'];
      $misce=$_POST['misce'];
      $medic=$_POST['medic'];

      $data1 = $salary + $pension1 + $other + $dividend + $temp;
      $data2 = $insurance + $spouse + $support + $basic + $misce + $medic;
      $data3 = $data1 - $data2;
      ?>
    <h1>確定申告計算ページ</h1>
    <p>氏名<?php print "$name";?></p>
    <p>住所<?php print "$address";?></p>

    <h2>所得</h2>
    <p>給与<?php print "$salary";?>円</p>
    <p>公的年金<?php print "$pension1";?>円</p>
    <p>その他<?php print "$other";?>円</p>
    <p>配当<?php print "$dividend";?>円</p>
    <p>一時所得<?php print "$temp";?>円</p>
    <p>所得合計<?php print "$data1"?></p>

    <h2>控除等</h2>
    <p>保険料控除<?php print "$insurance";?>円</p>
    <p>配偶者控除<?php print "$spouse";?>円</p>
    <p>扶養控除<?php print "$support";?>円</p>
    <p>基礎控除<?php print "$basic";?>円</p>
    <p>雑損控除<?php print "$misce";?>円</p>
    <p>医療費控除<?php print "$medic";?>円</p>
    <p>控除等合計<?php print "$data2"?></p>

    <h2>税金の計算</h2>
    <p>課税所得<?php print "$data3";?></p>
    <p>hgjiei</p>
    <?php 
    print "$data1-$data2=$data3";
    ?>
    <footer>
      <a href="culc.php">ホーム</a>
      <a href="culc3.php">ページ３</a>
    </footer>
  </body>
</html>