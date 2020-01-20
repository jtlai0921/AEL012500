<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
	  class Employee
      {
        public $Name;
		function __construct($Str) 
        {
          $this->Name = $Str;          
        }        
      }
      $Obj1 = new Employee('小紅豆');
      $Obj2 = new Employee('小紅豆');
	  $Obj3 = $Obj1;
	  if($Obj2 == $Obj1) echo '$Obj2的成員與値均和$Obj1相同'.'<br>';
	  else echo '$Obj2的成員或値和$Obj1不同'.'<br>';
      if($Obj2 === $Obj1) echo '$Obj2和$Obj1指向相同的案例'.'<br>';
	  else echo '$Obj2和$Obj1指向不同的案例'.'<br>';
	  if($Obj3 === $Obj1) echo '$Obj3和$Obj1指向相同的案例'.'<br>';
	  else echo '$Obj3和$Obj1指向不同的案例'.'<br>';
    ?>
  </body>
</html>
