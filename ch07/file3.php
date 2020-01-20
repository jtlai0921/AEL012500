  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $filename = basename($_SERVER['PHP_SELF']);
      echo '目前網頁的絕對路徑：'.realpath($filename);
    ?>
  </body>
</html>
