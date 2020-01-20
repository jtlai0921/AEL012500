<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $handle = fopen("poetry1.txt", "r");		//開啟檔案
      while (!feof($handle)) 							//讀取全部內容
      {
        $line = nl2br(fgets($handle));
        echo $line;			
      }
      fclose($handle);											
    ?>
  </body>
</html>
