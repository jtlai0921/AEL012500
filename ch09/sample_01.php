<?php 
  $points = array(160, 120, 290, 150, 260, 200, 105, 250, 100, 150);

  $im = imagecreatetruecolor(500, 300);
  $background = imagecolorallocate($im, 255, 255, 204);
  $red = imagecolorallocate($im, 255, 0, 0);
  $green = imagecolorallocate($im, 0, 255, 0);
  $black = imagecolorallocate($im, 0, 0, 0);

  //填滿背景色彩
  imagefill($im, 0, 0, $background);
   
  //繪製弧線
  imagearc($im, 120, 50, 80, 70, 50, 200, $red);
    
  //繪製橢圓形
  imageellipse($im, 430, 30, 50, 50, $red);
  imageellipse($im, 430, 100, 40, 60, $green);   
   
  //填滿矩形
  imagefilledrectangle($im, 320, 150, 370, 200, $red);
     
  //填滿多邊形色彩
  imagefilledpolygon($im, $points, 5, $green);
    
  //繪製文字
  $imInfo = "圖片寬度 " . imagesx($im) ." 像素，高度 " . imagesy($im) . " 像素";  
  imagettftext($im, 12, 0, 320, 37, $red, "simhei.ttf", "圓形--->");
  imagettftext($im, 12, 0, 320, 107, $red, "simhei.ttf", "橢圓形--->");
  imagettftext($im, 10, 0, 280, 290, $black, "simhei.ttf", $imInfo);  

  //輸出圖片
  header("Content-type: image/png");
  imagepng($im);
   
  //釋放影像佔用的記憶體
  imagedestroy($im);
?>