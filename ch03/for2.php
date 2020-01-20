  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      for ($i = 2; $i <= 100; $i+=2)
        $sum = $sum + $i; 			//也可以寫成$sum += $i;
      echo '2到100之間所有偶數的總和為'.$sum;
    ?>
  </body>
</html>
