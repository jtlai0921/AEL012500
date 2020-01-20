<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $contents = "故人具雞黍，邀我至田家，\r\n"; 	 	//指定要寫入檔案的內容，包括換行符號
      $contents .= "綠樹村邊合，青山郭外斜，\r\n";
      $contents .= "開軒面場圃，把酒話桑麻，\r\n";
      $contents .= "待到重陽日，還來就菊花。";	
      $num = file_put_contents("poetry3.txt", $contents);	//寫入檔案
      echo "成功寫入".$num."個位元組";
    ?>
  </body>
</html>