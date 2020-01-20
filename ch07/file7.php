<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>	
  <body>
    <?php
      $filename = "poetry1.txt";
      $handle = fopen($filename, "r");		//開啟檔案
      if ($handle)										//若成功開啟檔案，就讀取全部內容
      {
        $contents = nl2br(fread($handle, filesize($filename)));
        fclose($handle);
        echo $contents;
      }
      else
        echo "開啟檔案失敗！";	
    ?>
  </body>
</html>
