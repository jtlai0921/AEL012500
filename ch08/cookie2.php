<?php
  header("Content-type: text/html; charset=utf-8");			//指定網頁編碼方式為UTF-8
  setrawcookie("UserName", "小丸子", time() + 24 * 60 * 60);
  setrawcookie("UserAge", 10, time() + 24 * 60 * 60);
?>