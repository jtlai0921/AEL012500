<?php
  $src = imagecreatefromjpeg($_GET["picName"]);
  $src_w = imagesx($src);
  $src_h = imagesy($src);
  
  //建立新的空圖片
  $max_thumb_size = 180;
  if($src_w > $src_h)
  {
    $thumb_w = $max_thumb_size;
    $thumb_h = intval($src_h / $src_w * $thumb_w);
  }
  else
  {
    $thumb_h = $max_thumb_size;
    $thumb_w = intval($src_w / $src_h * $thumb_h);
  }   
  $thumb = imagecreatetruecolor($thumb_w, $thumb_h);

  //進行複製並縮圖
  imagecopyresized($thumb, $src, 0, 0, 0, 0, $thumb_w, $thumb_h, $src_w, $src_h);
   
  //輸出圖片
  header("Content-type: image/jpeg");
  imagejpeg($thumb, null, 100);
   
  //釋放影像佔用的記憶體
  imagedestroy($src);
  imagedestroy($thumb);  
?>