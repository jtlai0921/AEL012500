<?php
  $image = exif_thumbnail($_GET["picName"], $width, $height, $type);
  if ($image != false)
  {
    header("Content-type:" . image_type_to_mime_type($type));
    echo $image;
    exit();
  }
?>