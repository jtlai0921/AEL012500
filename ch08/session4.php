<?php
  session_start();								//啟用Session功能
  $font_size = $_POST['sel_font_size'];			//將文字大小設為核取的級數
  $_SESSION['font_size'] = $font_size;			//並將此值記錄於Session變數   
?>
<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <basefont size=<?php echo $font_size; ?>>
    <p>您選擇的文字大小為<?php echo $font_size; ?>級</p>
    <p>再度變更文字大小，請<a href="session3.php">點取此處</a></p>
  </body>
</html>
