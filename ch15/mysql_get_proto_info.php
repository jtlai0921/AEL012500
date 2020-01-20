<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得 MySQL 資料庫協定的版本資訊</title>
  </head>
  <body>
    <?php
      $link = mysql_connect("localhost", "root", "mypassword");
      echo '$link 資源變數的協定版本為： ' . mysql_get_proto_info($link);
      mysql_close($link);
    ?> 
  </body>
</html>