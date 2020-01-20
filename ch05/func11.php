<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      function Add()
      {
        static $Result;				//使用static將Result定義為靜態變數
        $Result += 1;				//將靜態變數Result的值加1
        echo $Result.'<br>'; 		//在網頁上顯示靜態變數Result的值
      } 
      Add();							//呼叫函式
      Add();							//呼叫函式
    ?>
  </body>
</html>
