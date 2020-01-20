<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>開啟資料庫</title>
  </head>
  <body>
    <?php
      $link = mysql_connect("localhost", "root", "mypassword")
			  or die("無法建立連接<br><br>" . mysql_error());
		
      $db_selected = mysql_select_db("students", $link)
        or die ("無法開啟 students 資料庫<br>" . mysql_error($link));

      mysql_close($link);
    ?> 
  </body>
</html>