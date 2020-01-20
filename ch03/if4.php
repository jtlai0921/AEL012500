<html>
  <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">   	
  </head>
  <body>
    <?php
      $number = 3;		    			//假設變數number的值為3
      if ($number == 1)		  			//若變數number的值為1
        echo 'ONE';
      elseif ($number == 2)			//若變數number的值為2
        echo 'TWO';
      elseif ($number == 3)			//若變數number的值為3
        echo 'THREE';
      elseif ($number == 4)			//若變數number的值為4
        echo 'FOUR';
      elseif ($number == 5)			//若變數number的值為5
        echo 'FIVE';
      else  			         		//若變數number為1-5以外的數字
        echo '數值超過範圍！';
   ?>
  </body>
</html>
