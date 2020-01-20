<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $number = 3;				//假設變數number的值為3
      switch($number)
      {
        case 1:      			//當變數number的值為1時
          echo 'ONE';
          break;
        case 2:    				//當變數number的值為2時
          echo 'TWO';
          break;
        case 3:    				//當變數number的值為3時
          echo 'THREE';
          break;
        case 4:    				//當變數number的值為4時
          echo 'FOUR';
          break;
        case 5:    				//當變數number的值為5時
          echo 'FIVE';
          break;
        default:    			//當變數number的值為1-5以外的數字時
          echo '數值超過範圍！';
      }
    ?>
  </body>
</html>
