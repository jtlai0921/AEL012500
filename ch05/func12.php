<html>
 <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
 <body>
   <?php
     function CircleArea($R)
     {
       echo "半徑為 $R 的圓面積為".($R * $R * 3.1416)."<br>";
     } 
     function SquareArea($L)
     {
       echo "長度為 $L 的正方形面積為".($L * $L)."<br>";
     } 
     $func = 'CircleArea';
     $func(10);						//會執行函式呼叫CircleArea(10);
     $func = 'SquareArea';
     $func(10); 						//會執行函式呼叫SquareArea(10);
   ?>
 </body>
</html>
