<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>顯示錯誤代碼及訊息</title>
  </head>
  <body>
    <?php
      $link = @mysql_connect("localhost", "root", "mypassword1")
			  or die("無法建立連接<br><br>" . mysql_errno() . " " . mysql_error());
      echo "成功建立連接";
      mysql_close($link);
    ?> 
  </body>
</html>