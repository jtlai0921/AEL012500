<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $imageType = exif_imagetype("images/pic1.jpg");
      if (!$imageType)
        echo "這個檔案不是圖片";
      elseif ($imageType == IMAGETYPE_JPEG)
        echo "這張圖片的格式為JPG";
    ?>
  </body>
</html> 
