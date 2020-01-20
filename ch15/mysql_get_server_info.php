<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得 MySQL 資料庫的版本資訊</title>
  </head>
  <body>
    <?php
      $link = mysql_connect("localhost", "root", "mypassword");
      echo '$link 連線主機的資料庫版本為： ' . mysql_get_server_info($link);
      mysql_close($link);
    ?> 
  </body>
</html>