<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      $Scores = array(85, 60, 54, 91, 100, 77);
      $MaxScore = 0;
      $MinScore = 100;

      //使用迴圈找出最高分
      foreach($Scores as $Value)
        if ($Value > $MaxScore) $MaxScore = $Value;

      //使用迴圈找出最低分
      foreach($Scores as $Value)
        if ($Value < $MinScore) $MinScore = $Value;

      echo "最高分為$MaxScore<BR>";
      echo "最低分為$MinScore<BR>";
    ?>
  </body>
</html>
