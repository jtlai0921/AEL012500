<?php
  header("Content-type: text/html; charset=utf-8");		//指定網頁編碼方式為UTF-8		
  setcookie("Words[0]", "墾丁");
  setcookie("Words[1]", "春吶");
  setcookie("Words[2]", "真好玩");
  if (isset($_COOKIE['Words']))
    foreach ($_COOKIE['Words'] as $key => $value)
      echo "$key : $value <br>";    
?> 
 