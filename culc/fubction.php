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

  $data1 = $salary + $pension1 + $other + $dividend;
  $data2 = $insurance + $spouse + $support + $basic + $misce + $medic;
?>