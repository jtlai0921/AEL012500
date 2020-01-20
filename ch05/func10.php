<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      function Add()
      {
        $Result += 1;				//將區域變數Result的值加1
        echo $Result.'<br>'; 		//在網頁上顯示區域變數Result的值
      } 
      Add();							//呼叫函式
      Add();							//呼叫函式
    ?>
  </body>
</html>
