<?php
  
  $points = array(410, 50, 340, 80, 310, 20, 355, 50);

  $im = imagecreatetruecolor(500, 300);
  $background = imagecolorallocate($im, 255, 255, 180);
  $red = imagecolorallocate($im, 255, 0, 0);
  $green = imagecolorallocate($im, 0, 255, 0);
  $black = imagecolorallocate($im, 0, 0, 0);

  //填滿背景色彩
  imagefill($im, 0, 0, $background);
   
  //繪製弧線
  imagearc($im, 30, 200, 80, 70, 270, 90, $black);
    
  //繪製橢圓形
  imageellipse($im, 30, 30, 50, 50, $red);
  imageellipse($im, 30, 100, 40, 60, $green);   
   
  //填滿矩形
  imagefilledrectangle($im, 320, 150, 370, 200, $green);
     
  //填滿多邊形色彩
  imagefilledpolygon($im, $points, 4, $red);
    
  //繪製文字
  $imInfo = "圖片寬度 " . imagesx($im) ." 像素，高度 " . imagesy($im) . " 像素";  
  imagettftext($im, 12, 0, 60, 37, $black, "simhei.ttf", "<---圓形");
  imagettftext($im, 12, 0, 60, 107, $black, "simhei.ttf", "<---橢圓形");
  imagettftext($im, 10, 0, 280, 290, $red, "simhei.ttf", $imInfo);  

  //輸出圖片
  header("Content-type: image/png");
  imagepng($im);
   
  //釋放影像佔用的記憶體
  imagedestroy($im);
?>