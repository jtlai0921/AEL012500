<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      function ExpValue($X)
      {
        $Result[0] = $X;
        $Result[1] = $X * $X;
        $Result[2] = $X * $X * $X;
        return $Result;
      }

      $ReturnArray = ExpValue(10);
      foreach($ReturnArray as $Value)
        echo $Value.'<br>';
    ?>
  </body>
</html>
