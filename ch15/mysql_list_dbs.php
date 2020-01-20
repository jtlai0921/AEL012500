<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>取得資料庫清單</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
      $link = create_connection();
      $db_list = mysql_list_dbs($link);
			
      echo "<p>MySQL 資料庫伺服器擁以下資料庫：</p>";
      while ($row = mysql_fetch_object($db_list))
        echo "$row->Database<br>";													

      mysql_free_result($db_list);
      mysql_close($link);
    ?>
  </body>
</html>