<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      function add_prefix(&$value, $key, $prefix)
      {
        $value = "$prefix: $value";
      }
      
      function print_result($value, $key) 
      {
        echo "$key. $value<br>";
      }

      $colors = array('red', 'green', 'blue', 'yellow');
      echo '加上前置文字之前<br>';
      array_walk($colors, 'print_result'); 
      
      array_walk($colors, 'add_prefix', 'color');
      echo '加上前置文字之後<br>';
      array_walk($colors, 'print_result'); 
    ?>
  </body>
</html>
 
