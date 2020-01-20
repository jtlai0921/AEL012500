<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得欄位清單</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
      $link = create_connection();
	  
      $sql = "SHOW COLUMNS FROM price";
      $field_list = execute_sql("product", $sql, $link);
			
      echo "<p>price 資料表包含以下欄位：</p>";
      while ($row = mysql_fetch_assoc($field_list))
        echo $row["Field"] . " | ";

      mysql_free_result($field_list);
      mysql_close($link);
    ?> 
  </body>
</html>