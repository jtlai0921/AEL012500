<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得資料表清單</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
      $link = create_connection();
	  
      $sql = "SHOW TABLES FROM product";
      $table_list = mysql_query($sql, $link);

      echo "<p>product 資料庫包含以下資料表：</p>";
      while ($row = mysql_fetch_object($table_list))
        echo "$row->Tables_in_product<br>";
						
      mysql_free_result($table_list);
      mysql_close($link);
    ?>
  </body>
</html>