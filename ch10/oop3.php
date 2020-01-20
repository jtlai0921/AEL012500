<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      class Circle
      {
        const PI = 3.14;
		public $Radius;
        public function ShowArea()
        {
          echo '圓面積為'.($this->Radius * $this->Radius * self::PI);
        }
      }
      echo '圓周率為'.Circle::PI.'<br>';
      $Obj = new Circle(); 
      $Obj->Radius = 10;
      $Obj->ShowArea();	  
    ?>
  </body>
</html>
