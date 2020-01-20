<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      class Employee
      {
        public $Name;						//定義名稱為Name的屬性以存放員工的名字
        function __construct($Str) 			//透過建構函式指派員工的名字並顯示說明訊息
        {
          $this->Name = $Str; 
          echo '已經建立名字為'.$this->Name.'的物件！';
        }
        function __destruct()				//透過解構函式清除員工的名字並顯示說明訊息
        {
          $this->Name = NULL; 				
          echo '這個物件已經被釋放！';		 
        }        		
      }
      $Obj = new Employee('小紅豆'); 		//建立物件 (會自動執行建構函式)
	  $Obj = NULL;							//釋放物件 (會自動執行解構函式)
    ?>
  </body>
</html>
