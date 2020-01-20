<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>顯示欄位資訊</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
		  
      $link = create_connection();
      $sql = "SELECT * FROM PRICE WHERE category = '主機板'";
      $result = execute_sql("product", $sql, $link);
			
      echo "<table width='400' border='1'><tr align='center'>";
      echo "<td>欄位名稱</td><td>資料型態</td><td>欄位長度</td></tr>";
			
      $i = 0;
      while ($i < mysql_num_fields($result))
      {
        echo "<tr>";
        echo "<td>" . mysql_field_name($result, $i) . "</td>";
        echo "<td>" . mysql_field_type($result, $i) . "</td>";
        echo "<td>" . mysql_field_len($result, $i) . "</td>";								
        echo "</tr>";
        $i++;
      }
      echo "</table>" ;
			
      mysql_close($link);
    ?> 
  </body>
</html>