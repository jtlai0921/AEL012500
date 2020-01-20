<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
	  $farm_address=array('桃園縣觀音鄉大堀村大湖路二段131-1號', 
	                      '台中縣新社鄉中和村中興路233號', 
					      '新竹縣尖石鄉嘉樂130號',
						  '彰化縣彰化市卦山路23號'); 
	?>
    <form method="post" action="showmap.php">
	  <input type="radio" name="farm" value="<?php echo $farm_address[0]; ?>" checked>青林農場<br>
	  <input type="radio" name="farm" value="<?php echo $farm_address[1]; ?>">安妮公主的花園<br>
	  <input type="radio" name="farm" value="<?php echo $farm_address[2]; ?>">薰衣草森林<br>
	  <input type="radio" name="farm" value="<?php echo $farm_address[3]; ?>">卦山月圓<br>
	  <input type="submit" value="檢視地圖">
	</form>
  </body>
</html>