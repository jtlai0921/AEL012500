<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>顯示所有記錄</title>
  </head>
  <body>
    <h1 align="center">零組件報價表</h1>
    <?php
      require_once("dbtools.inc.php");
      $link = create_connection();
      $sql = "SELECT * FROM PRICE WHERE category = '主機板'";
      $result = execute_sql("product", $sql, $link);
			
      echo "<table border='1' align='center'><tr align='center'>";
      for ($i = 0; $i < mysql_num_fields($result); $i++)
        echo "<td>" . mysql_fetch_field($result, $i)->name. "</td>";		
      echo "</tr>";
	
      while ($row = mysql_fetch_array($result, MYSQL_NUM))
			{
        echo "<tr>";			
        for($i = 0; $i < mysql_num_fields($result); $i++)
          echo "<td>$row[$i]</td>";					

        echo "</tr>";				
      }
      echo "</table>" ;
      mysql_free_result($result);
      mysql_close($link);
    ?> 
  </body>
</html>