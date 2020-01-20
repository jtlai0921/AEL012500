<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得欄位清單</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
      $link = create_connection();
      $field_list = mysql_list_fields("product", "price", $link);
			
      echo "<p>price 資料表包含以下欄位：</p>";
      for ($i = 0; $i < mysql_num_fields($field_list); $i++)
        echo mysql_field_name($field_list, $i) . " | ";

      mysql_free_result($field_list);
      mysql_close($link);
    ?> 
  </body>
</html>