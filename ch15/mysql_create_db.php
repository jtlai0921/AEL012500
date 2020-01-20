<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>建立資料庫</title>
  </head>
  <body>
    <?php
      $link = mysql_connect("localhost", "root", "mypassword") or die("建立資料連接失敗");

      if (mysql_create_db("test_database"))
      {
        echo "成功建立指定之資料庫";
      }
      else
      {
        echo "無法建立指定之資料庫";
      }
			
      mysql_close($link);
    ?> 
  </body>
</html>