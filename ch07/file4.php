<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $file = scandir("C:\\wamp", 1);
      foreach($file as $value)
        if ($value != "." && $value != "..") echo $value . " ";
    ?> 
  </body>
</html>
