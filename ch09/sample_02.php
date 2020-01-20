<?php
  $src1 = imagecreatefromjpeg("images/pic1.jpg");
  $src2 = imagecreatefromjpeg("images/pic2.jpg");
    
  //建立新的空圖片  
  $newImg_w = (imagesx($src1) + imagesx($src2)) * 0.5;
  $newImg_h = imagesy($src1) * 0.5; 
  $newImg = imagecreatetruecolor($newImg_w, $newImg_h);  

  //進行複製並縮圖
  imagecopyresized($newImg, $src1, 0, 0, 0, 0, $newImg_w * 0.5, $newImg_h, imagesx($src1), imagesy($src1));
  imagecopyresized($newImg, $src2, imagesx($src1) * 0.5, 0, 0, 0, $newImg_w * 0.5, $newImg_h, imagesx($src2), imagesy($src2));  
   
  //輸出圖片
  imagepng($newImg, "images/pic3.png");
   
  //釋放影像佔用的記憶體
  imagedestroy($src1);
  imagedestroy($src2);  
  imagedestroy($newImg); 
?>