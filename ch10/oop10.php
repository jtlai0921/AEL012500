<html>
	<head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>	
  <body>
    <?php
      class Payroll
      {
        public $Name;
        public function Payment($Hours, $PayRate)
        {
          return $Hours * $PayRate;
        } 
      }
      class BonusPayroll extends Payroll
      {
        public function Payment($Hours, $PayRate)		//覆蓋父類別的方法
        {
          return $Hours * $PayRate + 5000;
        }
      }
  
      echo '尚未加上獎金的薪資為'.Payroll::Payment(100, 80).'<br>';
      echo '加上獎金之後的薪資為'.BonusPayroll::Payment(100, 80).'<br>';
    ?>
  </body>
</html>