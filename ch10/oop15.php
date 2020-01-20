<?php
  namespace my\name; 			//在全域範圍內定義my\name命名空間
  class MyClass {}				//在\my\name命名空間內定義MyClass類別
  function Myfunction() {}		//在\my\name命名空間內定義Myfunction函式
  const MYCONST = 1;			//在\my\name命名空間內定義MYCONST常數
  $X = new \my\name\MyClass;	//建立MyClass類別的物件，寫成$X = new MyClass;亦可
  $Y = \my\name\MYCONST;		//定義Y為常數MYCONST，寫成$Y = MYCONST;亦可
  echo $Y;						//顯示Y的値
?>
