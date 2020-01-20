<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      //使用二維陣列Scores存放每位學生在每一輪比賽的得分及總得分
      $Scores = array(array(5, 7.7, 8, 0),  array(8.8, 5.8, 8, 0), 
                   array(6, 9, 8.1, 0),  array(7.6, 8.5, 9.5, 0), 
                   array(9, 9, 9.2, 0),  array(4, 6.3, 7.9, 0), 
                   array(8.2, 7, 9.6, 0), array(9.1, 8.5, 8.9, 0));

      //計算每位學生的總得分並存放在二維陣列
      for($i = 0; $i <= 7; $i++)
      {
        $subTotal = 0;        				//將用來暫存每位學生總得分的變數subTotal歸零
        for($j = 0; $j <= 2; $j++)				//將每一輪比賽的得分累計暫存在變數subTotal
          $subTotal += $Scores[$i][$j];
        $Scores[$i][3] = $subTotal; 		//將累計出來的總得分存放在二維陣列
      }

      //變數Result是要顯示在網頁上的字串
      for($i = 0; $i <= 7; $i++)
        $Result = $Result.'第'.($i + 1).'個學生的總得分為'.$Scores[$i][3].'<br>';
      echo $Result;
    ?>
  </body>
</html>
