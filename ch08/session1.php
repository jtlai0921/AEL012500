<?php 
  header("Content-type: text/html; charset=utf-8");		//指定網頁編碼方式為UTF-8
  session_start();
  echo "Session ID為" . session_id() . "<br>";
  if (!isset($_SESSION['Count']))
    $_SESSION['Count'] = 1;
  else
    $_SESSION['Count']++;
  echo "這是您在本瀏覽器第{$_SESSION['Count']}次載入本網頁！";  
?>
