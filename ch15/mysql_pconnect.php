<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>建立資料連接</title>
  </head>
	<body>
    <?php
      $link = mysql_pconnect("localhost", "root", "mypassword") or die("無法建立連接");
      echo "成功建立連接";
    ?> 
  </body>
</html>