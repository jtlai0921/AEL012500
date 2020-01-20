<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>		
  <body>
    <?php
      $filename = basename($_SERVER['PHP_SELF']);
      echo '目前網頁的建立時間：'.gmdate("Y-m-d H:i:s", filectime($filename)).'<br>';
      echo '目前網頁的最後存取時間：'.gmdate("Y-m-d H:i:s", fileatime($filename)).'<br>';
      echo '目前網頁的修改時間：'.gmdate("Y-m-d H:i:s", filemtime($filename)).'<br>';
      echo '目前網頁的檔案大小：'.filesize($filename).'位元組';	
    ?>
  </body>
</html>