<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $exif = exif_read_data("images/pic1.jpg");
      if (!$exif)
      {
        echo("這個檔案沒有 exif 標頭資訊");
      }
      else
      {
        foreach ($exif as $key => $value) 
        {
          echo "$key: $value<br>";
        }        
      }
    ?>
  </body> 
</html> 
 
