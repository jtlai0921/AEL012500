<?php
    $Name = $_POST["UserName"];
    switch($_POST["UserSex"])
    {
      case "Male":
        $Sex = "男";
        break;
      case "Female":
        $Sex = "女";
    }
    $School = $_POST["UserSchool"];
    $Interest = $_POST["UserInterest"];
    $Thought = $_POST["UserThought"];
?> 
<HTML>
    <HEAD>
		    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">      	
        <TITLE>個人小檔案確認網頁</TITLE>
    </HEAD>
    <BODY BGCOLOR="#D1EFFC">
        <CENTER><IMG SRC="profile2.jpg"></CENTER>
        <P><FONT COLOR="Blue"><B><I><?php echo $Name; ?></B></I></FONT>，您好！謝謝您填寫個人資料表，您輸入的資料如下：</P>
        <P>性別：<FONT COLOR="Blue"><?php echo $Sex; ?></FONT></P>
        <P>最高學歷：<FONT COLOR="Blue"><?php echo $School; ?></FONT></P>
        <P>您感興趣的活動：<FONT COLOR="Blue"><?php foreach($Interest as $Value) echo $Value."&nbsp;"; ?></FONT></P>
        <P>您對哈日風的看法：<FONT COLOR="Blue"><BLOCKQUOTE><?php echo $Thought; ?></BLOCKQUOTE></FONT></P>
    </BODY> 
</HTML>