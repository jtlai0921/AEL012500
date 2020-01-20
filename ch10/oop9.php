<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      class ParentClass									//定義父類別
      {
        public $Field1;									//定義public屬性 (能夠被繼承)
        private $Field2;								//定義private屬性 (不能被繼承)
        protected $Field3;							//定義protected屬性 (能夠被繼承)
        public function Method1(){}				//定義public方法 (能夠被繼承)
        private function Method2(){}				//定義private方法 (不能被繼承)
        protected function Method3(){}			//定義protected方法 (能夠被繼承)
      }

      class ChildClass extends ParentClass		//定義子類別
      {
        public $Field4;									//定義public屬性 (能夠被繼承)
        private $Field5;								//定義private屬性 (不能被繼承)
        protected $Field6;							//定義protected屬性 (能夠被繼承)
        public function Method4(){}				//定義public方法 (能夠被繼承)
        private function Method5(){}				//定義private方法 (不能被繼承)
        protected function Method6(){}			//定義protected方法 (能夠被繼承)
      }
    ?>
  </body>
</html>
