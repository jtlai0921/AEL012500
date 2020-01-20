<html>
  <body>
    <?php
      $path = $_SERVER['PHP_SELF'];
      echo basename($path).'<br>';				//顯示目前網頁的檔案名稱
      echo basename($path, '.php').'<br>';		//顯示目前網頁的檔案名稱，但排除副檔名
    ?>
  </body>
</html>
