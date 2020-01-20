<?php
  header("Content-type: text/html; charset=utf-8");		//指定網頁編碼方式為UTF-8
  ob_start();
  echo "Hello World!";
  setcookie("UserName", "小丸子", time() + 24 * 60 * 60);
  setcookie("UserAge", 10, time() + 24 * 60 * 60);
  ob_end_flush();
?>