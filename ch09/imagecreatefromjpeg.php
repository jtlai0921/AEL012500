<?php
  $im = imagecreatefromjpeg("images/pic_01.jpg");
  $textcolor = imagecolorallocate($im, 255, 0, 0);  
    
  //加入文字
  imagestring($im, 5, 500, 400, "Photo By Jerry", $textcolor);

  //輸出圖片
  header("Content-type: image/png");
  imagepng($im);
   
  //釋放影像佔用的記憶體
  imagedestroy($im);
?>