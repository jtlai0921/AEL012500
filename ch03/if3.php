<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $score = 85;
      if ($score >= 90)
        echo '優等！';
      elseif ($score < 90 && $score >= 80)
        echo '甲等！';
      elseif ($score < 80 && $score >= 70)
        echo '乙等！';
      elseif ($score < 70 && $score >= 60)
        echo '丙等！';
      else
        echo '不及格！';
     ?>
  </body>
</html>
