<?php
  header("Content-type: text/html; charset=utf-8");
  setcookie("UserName", "小丸子", time() + 24 * 60 * 60);
  setcookie("UserAge", 10, time() + 24 * 60 * 60);
?>