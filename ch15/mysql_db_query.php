<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>執行 SELECT 陳述式</title>
  </head>
  <body>
    <?php
      $link = mysql_connect("localhost", "root", "mypassword")
        or die("無法建立連接<br><br>" . mysql_error());
								
      $sql = "SELECT * FROM PRICE WHERE category = '主機板'";
      $result = mysql_db_query("prodcut", $sql);

      mysql_close();
    ?> 
  </body>
</html>