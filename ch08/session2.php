<?php session_start(); ?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      if (!isset($_SESSION[Count]))
        $_SESSION[Count] = 1;
      else
        $_SESSION[Count]++;
      echo "這是您在同一個瀏覽器第{$_SESSION[Count]}次載入本網頁！";
    ?>
  </body>
</html>