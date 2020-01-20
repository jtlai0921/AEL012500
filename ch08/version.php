<?php
  $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
  
  if (stripos($user_agent, "iphone") != false) 
    $url = "iPhone.php";
  else if (stripos($user_agent, "ipad") != false) 
    $url = "iPad.php";	
  else if (stripos($user_agent, "android") != false) 
    $url = "Android.php";
  else
    $url = "PC.php";
  
  header("Location: $url");
  exit();
?>