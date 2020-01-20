<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得執行 UPDATE 陳述式時，被影響的記錄數目。</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
			
      $link = create_connection();		
      $sql = "UPDATE price SET url = 'www.westerndigital.com' WHERE url = 'www.wdc.com'";
      $result = execute_sql("product", $sql, $link);
			
      echo "執行 UPDATE 陳述式時，共有 " . mysql_affected_rows($link) . " 筆記錄受影響";
			
      mysql_close($link);
    ?> 
  </body>
</html>