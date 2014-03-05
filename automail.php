<?php

 session_save_path("/home/users/web/b590/ez.asmicom/cgi-bin/tmp");
session_start();
$loginstatus=$_SESSION['signin'];
if($loginstatus!='YES'){header("location: index.php");}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>AUTO-MAIL BROADCAST</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<style type="text/css">
<!--
body {
	font-family: "Trebuchet MS", "MS Sans Serif", "Arial Narrow";
	font-size: 14px;
}
input, textarea {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
	border: thin solid #999999;
	font-style: normal;
	line-height: normal;
}
.text_1 {
	font-family: "Trebuchet MS", "MS Sans Serif", "Arial Narrow";
	color: #996633;
}
-->
</style>
</head>

<body>

<table align="center" width="462" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="462" height="71" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="462" height="71" align="center"><strong>Auto-mail Generator</strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="533" valign="top"><form action="http://www.ngportal.net/automail.php" method="post" name="automail"><table width="100%"  border="0" cellspacing="2" cellpadding="2">
     <tr><td>Subject</td><td><input name="subject" type="text" id="subject" size="50"></td></tr> <tr>
        <td>Appended Content</td>
        <td rowspan="2"><textarea name="message" cols="50" rows="6" id="message"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?php
		if((isset($_POST['broadcast'])) && !empty($_POST['message'])){
		$sendmessage = $_POST['message'];
						$sendsubject = $_POST['subject'];
require('connx.php');
		require('Database/MySQL.php');
		$dbconx = new mysql($host,$dbUser,$dbPass,$dbName);
		$sql = 'select chosendumps.user,chosendumps.itemlist,login.fullnames from chosendumps left join login on login.user=chosendumps.user order by chosendumps.user';
		$result = $dbconx->query($sql);

//initializing the user email address
$_SESSION['ini_email']='';

while($row = $result->fetch()){
$fullnames = $row['fullnames'];
//check if user has more than one dump

$email=$row['user'];
	$sql_1="select itemlist from chosendumps where chosendumps.user='$email'";
	$result_1 = $dbconx->query($sql_1);
	$items="";
	while ($row_1 = $result_1->fetch()) {
//    echo $row['itemlist'].", ";
	$spitems=$row_1['itemlist'];
	$items=$items.$spitems.", ";
}//end of while check
//removing last ','
$strg_len = strlen($items);
//echo $strg_len;
$strg_new_len = $strg_len-2;
$items = substr($items,0,$strg_new_len);
//end of check

		if($fullnames!=''){$name = "Dear ".$fullnames.",\n";}else{$name = "Hello,\n";}


		$attach = $name . $sendmessage;
		$attach=strip_tags($attach);

		//preventing mail flooding 
		$present_email=$row['user'];
		if($present_email != $_SESSION['ini_email']){
        mail($email,"$subject","$attach");
		
//		sleep(20);
		

//      echo $row['fullnames'].'='.$row['user'].$items.'<br>';
            }
			//closing if statement for flood prevention
			
$_SESSION['ini_email'] = $present_email;


		}//close while loop
		
        mail("contacts@ngportal.com","$subject","$attach");
        mail("ngportal@yahoogroups.com","$subject","$attach");


		
		echo "<strong class='text_1'>message sent</strong>";
				}//close if condition
		
		
		
		
		?></td>
        <td align="center"><input name="broadcast" type="submit" id="broadcast" value="BroadCast"></td>
      </tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
