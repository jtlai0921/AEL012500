<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
	</head>	
  <body>
    <?php
      class ParentClass
      {
        protected $Field1;
        function __construct($Value)
        {
          $this->Field1 = $Value;
          echo '建立物件時成功將Field1的值設定為'.$this->Field1.'<br>';
        } 
        function __destruct()
        {
          $this->Field1 = 0;
          echo '釋放物件時成功將Field1的值設定為'.$this->Field1.'<br>';
        }
      }
      class ChildClass extends ParentClass
      {
        protected $Field2;
        function __construct($Value)
        {
          $this->Field2 = $Value;
          echo '建立物件時成功將Field2的值設定為'.$this->Field2.'<br>';
        } 
        function __destruct()
        {
          $this->Field2 = 0;
          echo '釋放物件時成功將Field2的值設定為'.$this->Field2.'<br>';
        }
      }
      $MyObject = new ChildClass(100);
      $MyObject = NULL;
    ?>
  </body>
</html>