<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
  </head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="submit" value="顯示詩句"><br><br>      
      <?php if (!isset($_POST["Send"])) { ?>
      <input type="hidden" name="Send" value="TRUE">
      <?php }
        else echo file_get_contents("poetry.txt");
      ?>                    
    </form>   
  </body> 
</html>
