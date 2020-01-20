<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      open_folder("C:\\book");								//試圖開啟不存在的資料夾
   
      function open_folder($folder)
      {
        if (file_exists($folder))								//檢查資料夾是否存在
          opendir($folder);									//存在的話就加以開啟
        else
          echo '欲開啟的資料夾不存在';				//不存在的話就顯示錯誤訊息
      } 
    ?>
  </body>
</html>
