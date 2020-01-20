<html>
  <head>
    <title>線上投票</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript">
      function check_data()
      {		
        var id = document.myForm.id.value;
        var tab = "ABCDEFGHJKLMNPQRSTUVWXYZIO";
        var A1 = new Array (1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3 );
        var A2 = new Array (0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5 );
        var Mx = new Array (9,8,7,6,5,4,3,2,1,1);
				
        //將身份證字號的英文字母轉換為大寫
        id = id.toUpperCase();				
				
        //驗證身份證字號是否為 10 碼
        if (id.length != 10)
        {
          alert("身份證字號共有 10 碼");
          return false;
        }

        //驗證身份證字號的第一碼是否為英文字母
        var i = tab.indexOf(id.charAt(0));
        if (i == -1)
        {
          alert("身份證字號第一碼為英文字母");
          return false;
        }
				
        //驗證身份證字號進階規則
        var sum = A1[i] + A2[i] * 9;
        var v;
        for (i = 1; i < 10; i++)
        {
          v = parseInt(id.charAt(i));
          if (isNaN(v))
          {
            alert("身份證字號末九碼必須為數字");							
            return false;		
          }
					
          sum = sum + v * Mx[i];
        }
   			
        if (sum % 10 != 0)
        {
          alert("不合法的身份證字號");
          return false;
        }

        //此部份用來驗證瀏覽者是否有選擇候選人
        for (var i = 0;i < document.myForm.elements.length; i++)
        {
          var e = document.myForm.elements[i];
          if (e.name == "name" && e.checked == true )
          {
            var found = true;
            break;          
          }
        }
				
        if (found != true)
        {
          alert("您沒有選擇候選人");
          return false;				
        }				
				
        myForm.submit();
      }
    </script>		
  </head>
  <body bgcolor="#FFE6CC">
    <p align="center"><img src="title_1.jpg"></p>
    <form name="myForm" action="vote.php" method="post" >
      <table width="75%" align="center" border="2" bordercolor="#999999">
        <tr bgcolor="#0033CC"> 
          <td align="center"><font color="#FFFFFF">候選人</font></td>
          <td align="center"><font color="#FFFFFF">候選人介紹</font></td>
        </tr>
          <?php
            require_once("dbtools.inc.php");
						
            //建立資料連接
            $link = create_connection();
														
            //執行 Select 陳述式取得候選人資料
            $sql = "SELECT * FROM candidate";
            $result = execute_sql("vote", $sql, $link);
						
            echo "<tr>";
            for ($i = 0; $i < mysql_num_rows($result); $i++)
            {
              echo "<td bgcolor='#CCFFCC'> ";
              echo "<input type='radio' name='name' value='" . 
                    mysql_result($result, $i, "name") . "'>";
              echo mysql_result($result, $i, "name") . "</td>";
              echo "<td bgcolor='#FFCCCC'>" . mysql_result($result, $i, "introduction") . "</td>";
              echo "</tr>";
            }
												
            //關閉資料連接
            mysql_close($link);
          ?>
        <tr bgcolor="#FFFF99"> 
          <td colspan="2" align="right">請輸入您的身份證字號： 
          <input type="text" name="id" size="10"></td>
        </tr>
      </table>
      <p align="center"> 
        <input type="button" value="投票" onClick="check_data()">
        <input type="reset" value="重新設定">
        <input type="button" value="推薦候選人"
          onclick="javascript:window.open('recommend.htm','_self')">
        <input type="button" value="觀看投票結果"
          onclick="javascript:window.open('result.php','_self')">
      </p>
    </form>
  </body>
</html>