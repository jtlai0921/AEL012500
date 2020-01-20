<?php
  $Name = $_POST["UserName"];
  $Rate = $_POST["UserRate"]; 
  $Cache = $_POST["UserCache"];
  $Month = $_POST["UserMonth"];
  $Total = $Cache + $Cache * $Rate * $Month / 12;
?> 
<HTML>
  <HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <TITLE>快樂信託網路銀行確認網頁</TITLE>
  </HEAD>
  <BODY BACKGROUND="rose2.jpg">
    <P><IMG SRC="bank2.jpg"></P>
    <P><FONT COLOR="Green"><I><B><?php echo $Name; ?></B></I></FONT>，您好！</P>
    當本金為<FONT COLOR="Blue"><?php echo $Cache; ?></FONT>、
    年利率為<FONT COLOR="Blue"><?php echo $Rate; ?></FONT>、
    月數為<FONT COLOR="Blue"><?php echo $Month; ?></FONT>時，
    本利和將為<FONT COLOR="Blue" SIZE="4"><I><B><?php echo $Total; ?></B></I></FONT>。
    <P><A HREF="快樂銀行.htm">回上頁</A></P>
  </BODY> 
</HTML>