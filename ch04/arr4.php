<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      $a = Array(0 => '台北', 1 => '紐約' );
      $b = Array(0 => '巴黎', 1 => '羅馬', 2 => '東京' );
      $c = $a + $b;
      foreach($c as $Value)
        echo $Value.'<br>'; 
    ?>
  </body>
</html>
