<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $result = 1;
      for ($i = 1; $i <= 10; $i++){
        if ($i > 6) break;
        $result = $result * $i;
      }
      echo $result;
    ?>
  </body>
</html>
