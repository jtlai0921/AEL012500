<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $greet = function($name)
      {
        printf("Hello %s\r\n", $name);
      };

      $greet("World!");
      $greet("PHP!");
    ?> 
  </body>
</html>  