<HTML>
  <HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">  	
    <TITLE>大哥大使用意見調查表確認網頁</TITLE>
  </HEAD>
  <BODY BACKGROUND="free0.gif">
    <P><IMG SRC="free1.jpg"></P>
    <?php
      $Name = $_POST["UserName"];
      $Mail = $_POST["UserMail"];
      switch($_POST["UserAge"])
      {
        case "Age1":
          $Age = "未滿20歲";
          break;
        case "Age2":
          $Age = "20~29";
          break;
        case "Age3":
          $Age = "30~39";
          break;
        case "Age4":
          $Age = "40~49";
          break;
        case "Age5":
          $Age = "50歲以上";
      }
      $Phone = $_POST["UserPhone"];
      $Trouble = $_POST["UserTrouble"];
      $Number = $_POST["UserNumber"];
    ?>
    <P><I><?php echo $Name; ?></I>，您好！您輸入的資訊如下：</P>
      電子郵件地址：<?php echo $Mail; ?><BR>
      年齡：<?php echo $Age; ?><BR>
      曾經使用過的手機廠牌：<?php foreach($Phone as $Value) echo $Value.'&nbsp;'; ?><BR>
      使用手機時最常碰到的問題：<?php echo $Trouble; ?><BR>
      使用哪家業者的門號：<?php foreach($Number as $Value) echo $Value.'&nbsp;'; ?>
  </BODY>
</HTML>