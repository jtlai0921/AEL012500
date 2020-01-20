<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得執行 SELECT 陳述式時，被影響的記錄及欄位數目。</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
			
      $link = create_connection();
      $sql = "SELECT * FROM price WHERE category = '主機板'";
      $result = execute_sql("product", $sql, $link);
			
      echo "category = 「主機板」 的記錄有 " . mysql_num_rows($result) . " 筆";
      echo "，包含 " . mysql_num_fields($result) . " 個欄位。";
			
      mysql_close($link);
    ?> 
  </body>
</html>