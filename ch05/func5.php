<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      function Convert2F($DegreeC)
      {
        return $DegreeC * 1.8 + 32;
      }
      echo '攝氏30度可以轉換為華氏'.Convert2F(30).'度';
    ?>
  </body>
</html>
