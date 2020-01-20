<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $city = array('Japan' => '東京', 'Taiwan' => '台北', 'USA' => '紐約');
      foreach ($city as $key => $value)
        echo '鍵：'.$key.'；值：'.$value.'<br>';
    ?>
  </body>
</html>
