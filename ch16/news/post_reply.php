<?php
  require_once("dbtools.inc.php");
	
  $author = $_POST["author"];
  $subject = $_POST["subject"]; 
  $content = $_POST["content"]; 
  $current_time = date("Y-m-d H:i:s");
  $reply_id = $_POST["reply_id"];

  //建立資料連接
  $link = create_connection();
	
  //執行 SQL 命令
  $sql = "INSERT INTO reply_message(author, subject, content, date, reply_id) 
          VALUES ('$author', '$subject', '$content', '$current_time', '$reply_id')";
  $result = execute_sql("news", $sql, $link);

  //關閉資料連接
  mysql_close($link);  
  
  //將網頁重新導向
  header("location:show_news.php?id=" . $reply_id);
  exit();
?>