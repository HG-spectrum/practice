<!DOCTYPE html>
  <head>
    <meta charaset="utf-8">
    <title>計算</title>
  </head>
  <body>
    <p>
    <?php require_once "culc2.php";
    print "$name";?>氏名</p>
    <p>住所<?php print "$address";?></p>
    <p>給与<?php print "$salary";?>円</p>
    <p>公的年金<?php print "$pension1";?>円</p>
    <p>その他<?php print "$other";?>円</p>
    <p>配当<?php print "$dividend";?>円</p>
    <p>一時所得<?php print "$temp";?>円</p>
    <p>所得合計<?php print "$data1"?></p>
    <p>保険料控除<?php print "$insurance";?>円</p>
    <p>配偶者控除<?php print "$spouse";?>円</p>
    <p>扶養控除<?php print "$support";?>円</p>
    <p>基礎控除<?php print "$basic";?>円</p>
    <p>雑損控除<?php print "$misce";?>円</p>
    <p>医療費控除<?php print "$medic";?>円</p>
    <p>控除等合計<?php print "$data2"?></p>
    <a href="culc.php">ホーム</a>
  </body>
</html>