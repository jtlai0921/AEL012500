<html>
  <head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
  <body>
    <?php
      function tour()
      {
        if (func_num_args() == 0)
          echo '沒有指定地點！';
        else
          for($i = 0; $i < func_num_args(); $i++) echo func_get_arg($i).'<br>';
      }
      tour('台北', '台中', '高雄');
    ?>
  </body>
</html>
