<?php
  header("Content-type: text/html; charset=utf-8");
  if (!isset($_SERVER['PHP_AUTH_USER']))
  {
	header('WWW-Authenticate: Basic realm="快樂網站"');
    echo "抱歉！您沒有輸入密碼！";
    exit();
  }
  else
  {
    echo "{$_SERVER['PHP_AUTH_USER']}您好！<br>";
    echo "您輸入的密碼為{$_SERVER['PHP_AUTH_PW']}！";
  }
?>
