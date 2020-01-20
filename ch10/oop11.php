<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      abstract class Payroll
      {
        public $EmpName;
        abstract public function Payment($Hours, $PayRate);
      }
      class BonusPayroll extends Payroll
      {
        public function Payment($Hours, $PayRate)	
        {
          return $Hours * $PayRate + 5000;
        }
      }
      echo '加上獎金之後的薪資為'.BonusPayroll::Payment(100, 80).'<br>';
    ?>
  </body>
</html> 
