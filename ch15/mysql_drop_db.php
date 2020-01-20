<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>刪除資料庫</title>
  </head>
  <body>
    <?php
      $link = mysql_connect("localhost", "root", "mypassword") or die("建立資料連接失敗");

      if (mysql_drop_db("test_database"))
      {
        echo "成功刪除指定之資料庫";
      }
      else
      {
        echo "無法刪除指定之資料庫";
      }
			
      mysql_close($link);
    ?> 
  </body>
</html>