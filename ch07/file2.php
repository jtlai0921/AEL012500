<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $path = $_SERVER['PHP_SELF'];
      $path_parts = pathinfo($path);
      echo '目前網頁的路徑：'.$path.'<BR>';
      echo '分割出來的路徑名稱：'.$path_parts['dirname'].'<br>';
      echo '分割出來的檔案名稱：'.$path_parts['basename'].'<br>';
      echo '分割出來的副檔名：'.$path_parts['extension'].'<br>';
    ?>
  </body>
</html>
