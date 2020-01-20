<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      error_reporting(0);											//關閉所有錯誤報告
      set_error_handler('error_handler');					//設定錯誤處理程式
        
      open_folder("C:\\book");									//試圖開啟不存在的資料夾
      
      function open_folder($folder)
      {
        if (file_exists($folder))
          opendir($folder);
        else
          trigger_error('欲開啟的資料夾不存在', E_USER_ERROR);	//觸發一個錯誤
      } 
    
      function error_handler($errno, $errmsg, $filename, $linenum)	//定義錯誤處理程式
      {
        echo '錯誤代碼：'.$errno.'<br>';					//參數 $errno代表錯誤代碼
        echo '錯誤訊息：'.$errmsg.'<br>';					//參數 $errmsg代表錯誤訊息
        echo '檔案路徑：'.$filename.'<br>';				//參數 $filename代表檔案路徑
        echo '錯誤行數：'.$linenum.'<br>';				//參數 $linenum代表錯誤行數
      }
    ?>
  </body>
</html>
