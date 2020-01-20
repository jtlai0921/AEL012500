<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      $Msg = "Hello, This is outside of Func1().";		//設定全域變數Msg的值
      echo $Msg.'<br>'; 										//顯示全域變數Msg的值
      Func1();         										//呼叫Func1() 函式
      echo $Msg.'<br>';     								//顯示全域變數Msg的值

      function Func1()
      {
        $Msg = "Hello, This is inside of Func1().";		//設定另一個同名區域變數Msg的值
        echo $Msg.'<br>';   								//顯示區域變數Msg的值
      }
    ?>
  </body>
</html>
