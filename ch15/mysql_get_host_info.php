<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得 MySQL 主機的資訊</title>
  </head>
  <body>
    <?php
      $link = mysql_connect("localhost", "root", "mypassword");
      echo '$link 連線主機為： ' . mysql_get_host_info($link);
      mysql_close($link);
    ?> 
  </body>
</html>