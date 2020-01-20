<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      try
      {
        open_folder("C:\\book");									//試圖開啟不存在的資料夾
      }
      catch(Exception $ex)											//捕捉可能產生的例外
      {
        echo '錯誤訊息：'.$ex->getMessage().'<br>';		//顯示例外的錯誤訊息
        echo '錯誤代碼：'.$ex->getCode().'<br>'; 			//顯示例外的錯誤代碼
        echo '檔案路徑：'.$ex->getFile().'<br>'; 				//顯示例外的檔案路徑
        echo '錯誤行數：'.$ex->getLine().'<br>'; 			//顯示例外的錯誤行數
      }

      function open_folder($folder)
      {
        if (file_exists($folder)) 											//檢查資料夾是否存在
          opendir($folder); 											//存在的話就加以開啟
        else
          throw new Exception('欲開啟的資料夾不存在');	//不存在的話就丟出例外
      } 
    ?>
  </body>
</html>
