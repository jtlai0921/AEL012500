<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
      $handle = fopen("poetry2.txt", "ab");			//開啟檔案
      if ($handle) 											//若成功開啟檔案，就寫入指定內容
      {
        $contents .= "\r\n";								//指定寫入檔案的內容，包括換行符號
        $contents .= "<i>鳳凰臺上鳳凰遊，鳳去臺空江自流。<\i>\r\n";
        $contents .= "<i>吳宮花草埋幽徑，晉代衣冠成古邱。<\i>\r\n";
        $contents .= "<i>三山半落青又外，二水中分白鷺洲。<\i>\r\n";
        $contents .= "<i>總為浮雲能蔽日，長安不見使人愁。<\i>";
        $num = fwrite($handle, $contents); 		//寫入檔案
        fclose($handle);									//關閉檔案
        echo "成功寫入".$num."個位元組";		//寫入完畢顯示成功訊息
      }
      else
       echo "開啟檔案失敗";
    ?>
  </body>
</html>
