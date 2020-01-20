<?php
  require_once("dbtools.inc.php");
	
  //取得表單資料
  $card_id = $_POST["card_id"];
  $subject = $_POST["subject"];
  $from_name = $_POST["from_name"];
  $from_email = $_POST["from_email"];
  $to_name = $_POST["to_name"]; 
  $to_email = $_POST["to_email"]; 
  $music = $_POST["music"]; 
  $style = $_POST["style"];
  $size = $_POST["size"];
  $color = $_POST["color"];
  $message = $_POST["message"];
  $date = date("Y-m-d H:i:s");
	
  //建立資料連接
  $link = create_connection();
	
  //執行 INSERT INTO 陳述式來將賀卡內容寫入 card_message 資料表
  $sql = "INSERT INTO card_message (card_id, subject, from_name, from_email, 
          to_name, to_email, music, style, size, color, message, date) 
          VALUES ('$card_id', '$subject', '$from_name', '$from_email', 
          '$to_name', '$to_email', '$music', '$style', '$size', '$color', 
          '$message', '$date')";
  $result = execute_sql("ecard", $sql, $link);

  //執行 SELECT 陳述式取出剛才加入記錄的 id 欄位
  $sql = "SELECT id FROM card_message WHERE subject='$subject' AND date='$date'";
  $result = execute_sql("ecard", $sql, $link);

  //取得 id 欄位的值
  $id = mysql_result($result, 0, "id");

  //關閉資料連接
  mysql_free_result($result);
  mysql_close($link);  
  
  //設定檢視電子賀卡的網址
  $current_url = "http://" . $_SERVER["REMOTE_ADDR"] . $_SERVER["PHP_SELF"];
  $get_ecard_url = str_replace("ecard.php", "get_ecard.php", $current_url);
  $get_ecard_url .= "?id=$id&subject=" . urlencode($subject);
  
  //指定郵件內容
  $message = "<h1 align='center'>翠墨資訊電子賀卡站</h1>";
  $message .= "<p>親愛的【" . $to_name . "】：</p>";
  $message .= "<p>【" . $from_name . "】透過本站寄給您一張電子賀卡</p>";
  $message .= "<p>您可以到以下網址觀看您的卡片：</p>";
  $message .= "<p align='center'><a href='$get_ecard_url'>";
  $message .= "按此可以觀看卡片</a></p>";
  $message .= "<p align='right'>寄件日期：$date</p>"; 
  
  $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
  $from_name = "=?utf-8?B?" . base64_encode($from_name) . "?=";
  $to_name = "=?utf-8?B?" . base64_encode($to_name) . "?=";
	
  //若要傳送 HTML 格式的郵件，須指定 Content-type 標頭資訊
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: $from_name<$from_email>\r\n";
  $headers .= "To: $to_name<$to_email>\r\n";

  //傳送郵件
  mail($to_email, $subject, $message, $headers);
?>