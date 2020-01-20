<?php
  session_start();									//啟用Session功能
  if (!isset($_SESSION['font_size']))				//檢查是否尚未記錄Session變數
  {							
    $font_size = "3";							    //是就將文大小設為預設值3級							
    $_SESSION['font_size'] = $font_size;			//並此值記錄於Session變數
  } 
  else 												
    $font_size = $_SESSION['font_size'];			//否則將文字大小設為Session變數的值
?>
<html>
   <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head> 
   <body>
     <basefont size=<?php echo $font_size; ?>>
     <form method="post" action="session4.php">
       請選擇文字大小:<br>
       <input type="radio" name="sel_font_size" value="1">1級
       <input type="radio" name="sel_font_size" value="3" checked>3級
       <input type="radio" name="sel_font_size" value="5">5級<br>
       <input type="submit" value="顯示設定結果"><br>
    </form>
  </body>
</html>
