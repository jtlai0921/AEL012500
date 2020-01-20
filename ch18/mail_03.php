<?php
  //指定收件者
  $to = "jerry.php@m2k.com.tw";

  //指定郵件主旨
  $subject = "=?utf-8?B?" . base64_encode("HTML 格式測試信") . "?=";
  $from_name = "=?utf-8?B?" . base64_encode("小綿羊") . "?=";

  //指定郵件內容
  $message = "
    <html>
      <head>
        <title></title>
      </head>
      <body bgcolor='#FFFFCC'>
        <p><strong>這是一封 HTML 格式的郵件</strong></p>
        <p><font color='Blue'>您可以使用任何 HTML 標籤</font></p>
      </body>
    </html>
  ";
	
  //若要傳送 HTML 格式的郵件，須指定 Content-type 標頭資訊
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "To: Jerry<jerry.php@m2k.com.tw>, Jean<jean.php@m2k.com.tw>\r\n";
  $headers .= "From: $from_name <grace.php@m2k.com.tw>\r\n";
  $headers .= "Cc: ping.php@m2k.com.tw\r\n";
  $headers .= "Bcc: liyu.php@m2k.com.tw\r\n";
	
  //傳送郵件
  mail($to, $subject, $message, $headers);
?>