<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      echo ((1 + 2) * 10 / 6) . "<br>";
      echo (7 * 3 % 8) . "<br>";
      echo ((4 & 6) == 4 ? "Yes" : "No") . "<br>";
      echo (100 == "100") . "<br>";      
      echo ("ABCD" < "ABCd") . "<br>";
      echo ((5 <= 9) && (! (3 > 7))) . "<br>";
      echo (("abc" != "ABC") | (3 > 5)) . "<br>";
      echo ((5 <= 9) || (! (3 > 7))) . "<br>";
      echo (-128 >> 3) . "<br>";
    ?> 
  </body>
</html>
