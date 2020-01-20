<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>  
  <body>
    <?php
      class Class1									//定義父類別
      { 
        public $Field1 = 0;
        public $Field2 = 0;
        public $Field3 = 0;
        function __construct()				//定義父類別的建構函式
        {
          $this->Field1 = 1;
        }
      }
      class Class2 extends Class1			//定義繼承自Class1的子類別
      {
        function __construct()				//定義子類別的建構函式
        {
          parent::__construct();			//呼叫父類別Class1的建構函式
          $this->Field2 = 1;
        }
      }
      class Class3 extends Class2			//定義繼承自Class2的子類別
      {
        function __construct()				//定義子類別的建構函式
        {
          parent::__construct();			//呼叫父類別Class2的建構函式
          $this->Field3 = 1;
        }
      }
	  $MyObject = new Class1();
      echo $MyObject->Field1.$MyObject->Field2.$MyObject->Field3;
    ?>
  </body>
</html>
