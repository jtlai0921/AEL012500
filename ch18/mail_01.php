<?php
  //指定收件者
  $to = "jerry.php@m2k.com.tw, jean.php@m2k.com.tw";

  //指定郵件主旨
  $subject = "測試信";
  $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
  
  //指定郵件內容
  $message = "這是一封測試信\n\n若您收到此封信，表示測試成功。";

  //傳送郵件
  mail($to, $subject, $message);
?>