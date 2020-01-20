<HTML>
  <HEAD>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8"> 	
    <TITLE>快樂信託網路銀行</TITLE>
  </HEAD>
  <BODY BACKGROUND="rose1.jpg">
    <P><IMG SRC="bank1.jpg"></P>
    <?php if (!isset($_POST["Send"])) { ?>
    <FORM METHOD="POST" ACTION="calculate2.php">
      <INPUT TYPE="HIDDEN" NAME="Send" VALUE="TRUE">
      <FIELDSET> 
        <LEGEND>個人資料</LEGEND>        
        請輸入姓名&nbsp;&nbsp;：<INPUT TYPE="TEXT" NAME="UserName" SIZE="30"><BR>
        請輸入E-Mail：<INPUT TYPE="TEXT" NAME="UserMail" SIZE="30"><BR>
      </FIELDSET><BR>
      <FIELDSET>
        <LEGEND>計算存款本利和</LEGEND> 
        請輸入本金（如&nbsp;500000）：<INPUT TYPE="TEXT" NAME="UserCache" SIZE="20"><BR>
        請輸入年利率（如&nbsp;0.05）：<INPUT TYPE="TEXT" NAME="UserRate" SIZE="20"><BR>
        請輸入月數（如&nbsp;11）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：<INPUT TYPE="TEXT" NAME="UserMonth" SIZE="20"><BR>
      </FIELDSET><BR> 
      <INPUT TYPE="SUBMIT" VALUE="開始計算">   
      <INPUT TYPE="RESET" VALUE="重新輸入">                     
    </FORM>
    <?php 
      }
      else
      {
        $Name = $_POST["UserName"];
        $Rate = $_POST["UserRate"]; 
        $Cache = $_POST["UserCache"];
        $Month = $_POST["UserMonth"];
        $Total = $Cache + $Cache * $Rate * $Month / 12;
    ?> 
    <P><FONT COLOR="Green"><I><B><?php echo $Name; ?></B></I></FONT>，您好！</P>
    當本金為<FONT COLOR="Blue"><?php echo $Cache; ?></FONT>、
    年利率為<FONT COLOR="Blue"><?php echo $Rate; ?></FONT>、
    月數為<FONT COLOR="Blue"><?php echo $Month; ?></FONT>時，
    本利和將為<FONT COLOR="Blue" SIZE="4"><I><B><?php echo $Total; ?></B></I></FONT>。
    <?php } ?>
  </BODY> 
</HTML>