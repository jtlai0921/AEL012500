<HTML>
	<HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	</HEAD>	
  <BODY>
    <?php
      function CalculateSum($StartNum, $EndNum)
      {
        return ($StartNum + $EndNum) * ($EndNum - $StartNum + 1) / 2;
      }
      echo '1累加到100的總和為'.CalculateSum(1, 100);       
    ?>
  </BODY>
</HTML>