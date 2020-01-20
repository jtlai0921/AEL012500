<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body> 
    <?php
      class MyMath 
	  {
        public static function Cubic($X) 
	    {
          return $X * $X * $X;
        }
      }  
	
      echo '5的三次方為'.MyMath::Cubic('5');
    ?> 
  </body>
</html>
