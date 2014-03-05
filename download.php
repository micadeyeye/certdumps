<?php
// Include Magic Quotes filter
require('strip_quotes_ext.php');
require('strip_quotes.php');
 session_save_path("/home/users/web/b590/ez.asmicom/cgi-bin/tmp");
session_start();
if(isset($_POST['email'])){
$email=safeAddSlashes($_POST['email']);
}
else{$email=$_SESSION['email'];}

		include('auth.php');
		
		// Include the MySQL class
require_once('Database/MySQL.php');

require('connx.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Nigerians most affordable certification dumps site.">
<meta name="keywords" content="microsoft,cisco,java,ciw,mcse,oracle,sun,a+,n+,server+,i-net+,mcse,mcsd,ccna,ccnp,ccie,ciw security professional,mcafee certification,eccouncil,hp,ibm,apple certifications">
<title>.:::Certdumps:::.Microsoft, Cisco, Comptia, Oracle, CIW, A+, BRAINDUMPS - MCSE, CCNA, Windows 2003, A+ tests.</title><script language="JavaScript">
<!--






<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->
</script>
<script language="javascript">
<!--
function jump(xpage){
location=eval('xpage');
}
//--></script>
<link href="body.css" rel="stylesheet" type="text/css">
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
</head>

<body bgcolor="#ffffff" link="#333366" vlink="#330099" onLoad="MM_preloadImages('images/ORDER_r2_c2_f2.gif','images/HOME_r2_c2_f2.gif','images/SAMPLES_r2_c2_f2.gif','images/LINKS_r2_c2_f2.gif','images/FORUM_r2_c2_f2.gif')">
<table width="744" border="0" align="center" cellpadding="0" cellspacing="0" class="tb_style">
  <!--DWLayoutTable-->
  <tr>
    <td height="130" colspan="3" valign="top"><table border="0" cellpadding="0" cellspacing="0" class="tbtext">
      <tr><td><img src="oth_images/bttrheader.gif" width="744" height="118"></td>
    </tr>
	<tr height="11" bgcolor="#FFFFFF"><td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>    <td width="65%"><?php if((!empty($_SESSION['email']))&&($_SESSION['signin']=='YES')){echo "Welcome <b>". $email."</b> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<a class='style1' href='logout.php?logout=true'><b>log out</b></a>";}?></td>
<td width="35%" align="right"><?php
if(isset($_SESSION['signin'])){
if($_SESSION['signin']=="YES"){
echo "<a class='style1' href='download.php'><b>Link to Download Page</b></a>";}
else{echo  "<b>Members only:</b>&nbsp;<a class='style1' href='pwdreminder.php?fr-login=true'><b>Click here to login</b></a>";}}
else{echo  "<b>Members only:</b>&nbsp;<a class='style1' href='pwdreminder.php?fr-login=true'><b>Click here to login</b></a>";}

?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
</td></tr></table></td>
  </tr>
  <tr>
    <td height="190" colspan="2" valign="top">
	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" width="168">
  <!-- fwtable fwsrc="navigation bar.png" fwbase="navigation bar.gif" fwstyle="Dreamweaver" fwdocid = "807826532" fwnested="0" -->
  <tr>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="15" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="10" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="7" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="37" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="34" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="7" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="11" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="7" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="22" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="17" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
  </tr>
  <tr>
    <td colspan="11"><img name="navigation20bar_r1_c1" src="images/navigation%20bar_r1_c1.gif" width="168" height="12" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="12" border="0"></td>
  </tr>
  <tr>
    <td colspan="3"><img name="navigation20bar_r2_c1" src="images/navigation%20bar_r2_c1.gif" width="32" height="3" border="0" alt=""></td>
    <td rowspan="2" colspan="2"><a href="index.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('navigation20bar_r2_c4','','images/navigation%20bar_r2_c4_f2.gif','navigation20bar_r3_c2','','images/navigation%20bar_r3_c2_f2.gif',1);"><img name="navigation20bar_r2_c4" src="images/navigation%20bar_r2_c4.gif" width="38" height="12" border="0" alt=""></a></td>
    <td rowspan="3" colspan="6"><img name="navigation20bar_r2_c6" src="images/navigation%20bar_r2_c6.gif" width="98" height="28" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="3" border="0"></td>
  </tr>
  <tr>
    <td rowspan="22"><img name="navigation20bar_r3_c1" src="images/navigation%20bar_r3_c1.gif" width="15" height="175" border="0" alt=""></td>
    <td><img name="navigation20bar_r3_c2" src="images/navigation%20bar_r3_c2.gif" width="10" height="9" border="0" alt=""></td>
    <td rowspan="22"><img name="navigation20bar_r3_c3" src="images/navigation%20bar_r3_c3.gif" width="7" height="175" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="9" border="0"></td>
  </tr>
  <tr>
    <td rowspan="2"><img name="navigation20bar_r4_c2" src="images/navigation%20bar_r4_c2.gif" width="10" height="18" border="0" alt=""></td>
    <td colspan="2"><img name="navigation20bar_r4_c4" src="images/navigation%20bar_r4_c4.gif" width="38" height="16" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="16" border="0"></td>
  </tr>
  <tr>
    <td rowspan="3" colspan="6"><a href="order.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('navigation20bar_r5_c4','','images/navigation%20bar_r5_c4_f3.gif','navigation20bar_r6_c2','','images/navigation%20bar_r6_c2_f3.gif',1);"><img name="navigation20bar_r5_c4" src="images/navigation%20bar_r5_c4.gif" width="97" height="13" border="0" alt=""></a></td>
    <td rowspan="4" colspan="2"><img name="navigation20bar_r5_c10" src="images/navigation%20bar_r5_c10.gif" width="39" height="29" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0"></td>
  </tr>
  <tr>
    <td><img name="navigation20bar_r6_c2" src="images/navigation%20bar_r6_c2.gif" width="10" height="9" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="9" border="0"></td>
  </tr>
  <tr>
    <td rowspan="3"><img name="navigation20bar_r7_c2" src="images/navigation%20bar_r7_c2.gif" width="10" height="21" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0"></td>
  </tr>
  <tr>
    <td colspan="6"><img name="navigation20bar_r8_c4" src="images/navigation%20bar_r8_c4.gif" width="97" height="16" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="16" border="0"></td>
  </tr>
  <tr>
    <td rowspan="3" colspan="7"><a href="parent_sites.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('navigation20bar_r9_c4','','images/navigation%20bar_r9_c4_f4.gif','navigation20bar_r10_c2','','images/navigation%20bar_r10_c2_f4.gif',1);"><img name="navigation20bar_r9_c4" src="images/navigation%20bar_r9_c4.gif" width="119" height="15" border="0" alt=""></a></td>
    <td rowspan="16"><img name="navigation20bar_r9_c11" src="images/navigation%20bar_r9_c11.gif" width="17" height="121" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="3" border="0"></td>
  </tr>
  <tr>
    <td><img name="navigation20bar_r10_c2" src="images/navigation%20bar_r10_c2.gif" width="10" height="9" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="9" border="0"></td>
  </tr>
  <tr>
    <td rowspan="3"><img name="navigation20bar_r11_c2" src="images/navigation%20bar_r11_c2.gif" width="10" height="18" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="3" border="0"></td>
  </tr>
  <tr>
    <td colspan="7"><img name="navigation20bar_r12_c4" src="images/navigation%20bar_r12_c4.gif" width="119" height="13" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="13" border="0"></td>
  </tr>
  <tr>
    <td rowspan="3" colspan="5"><a href="exam_centres.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('navigation20bar_r13_c4','','images/navigation%20bar_r13_c4_f5.gif','navigation20bar_r14_c2','','images/navigation%20bar_r14_c2_f5.gif',1);"><img name="navigation20bar_r13_c4" src="images/navigation%20bar_r13_c4.gif" width="90" height="13" border="0" alt=""></a></td>
    <td rowspan="12" colspan="2"><img name="navigation20bar_r13_c9" src="images/navigation%20bar_r13_c9.gif" width="29" height="93" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0"></td>
  </tr>
  <tr>
    <td><img name="navigation20bar_r14_c2" src="images/navigation%20bar_r14_c2.gif" width="10" height="9" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="9" border="0"></td>
  </tr>
  <tr>
    <td rowspan="3"><img name="navigation20bar_r15_c2" src="images/navigation%20bar_r15_c2.gif" width="10" height="22" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0"></td>
  </tr>
  <tr>
    <td colspan="5"><img name="navigation20bar_r16_c4" src="images/navigation%20bar_r16_c4.gif" width="90" height="19" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="19" border="0"></td>
  </tr>
  <tr>
    <td rowspan="3" colspan="3"><a href="contact.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('navigation20bar_r17_c4','','images/navigation%20bar_r17_c4_f6.gif','navigation20bar_r18_c2','','images/navigation%20bar_r18_c2_f6.gif',1);"><img name="navigation20bar_r17_c4" src="images/navigation%20bar_r17_c4.gif" width="72" height="13" border="0" alt=""></a></td>
    <td rowspan="4" colspan="2"><img name="navigation20bar_r17_c7" src="images/navigation%20bar_r17_c7.gif" width="18" height="30" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
  </tr>
  <tr>
    <td><img name="navigation20bar_r18_c2" src="images/navigation%20bar_r18_c2.gif" width="10" height="9" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="9" border="0"></td>
  </tr>
  <tr>
    <td rowspan="3"><img name="navigation20bar_r19_c2" src="images/navigation%20bar_r19_c2.gif" width="10" height="22" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="3" border="0"></td>
  </tr>
  <tr>
    <td colspan="3"><img name="navigation20bar_r20_c4" src="images/navigation%20bar_r20_c4.gif" width="72" height="17" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="17" border="0"></td>
  </tr>
  <tr>
    <td rowspan="4"><img name="navigation20bar_r21_c4" src="images/navigation%20bar_r21_c4.gif" width="1" height="31" border="0" alt=""></td>
    <td rowspan="3" colspan="3"><a href="links.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('navigation20bar_r22_c2','','images/navigation%20bar_r22_c2_f7.gif',1);"><img name="navigation20bar_r21_c5" src="images/navigation%20bar_r21_c5.gif" width="78" height="13" border="0" alt=""></a></td>
    <td rowspan="4"><img name="navigation20bar_r21_c8" src="images/navigation%20bar_r21_c8.gif" width="11" height="31" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0"></td>
  </tr>
  <tr>
    <td><img name="navigation20bar_r22_c2" src="images/navigation%20bar_r22_c2.gif" width="10" height="9" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="9" border="0"></td>
  </tr>
  <tr>
    <td rowspan="2"><img name="navigation20bar_r23_c2" src="images/navigation%20bar_r23_c2.gif" width="10" height="20" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0"></td>
  </tr>
  <tr>
    <td colspan="3"><img name="navigation20bar_r24_c5" src="images/navigation%20bar_r24_c5.gif" width="78" height="18" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="18" border="0"></td>
  </tr>
</table>
</td>
  </tr>
</table>
</td>
    <td width="570" rowspan="2" valign="top"><img src="oth_images/download.gif" width="214" height="32">
  <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbtext">
  <tr><form action="file.php" method="post">

    <td>	
	<?php

include "downloadext.php";
?>


<?php

	echo "<div align='right'><strong>Membership status: ".$member." </strong>&nbsp;&nbsp;&nbsp;";
		if($member=='YES'){
	echo "<a href='pwdreminder.php?chgpwd=true'>Change your password?</a></div><hr width=100% noshade size=1>";}
	else{echo "<a href='pwdreminder.php'>Do you forget you password?</a></div><hr width=100% noshade size=1>";}



?>	
	
Welcome <b><?php echo $email?></b>, whenever you make a request/order, we will have to go download the dump(s) from one of
our parent sites <a href="www.actualtests.com" target="_blank">actualtests</a>, and <a href="www.alpos.com" target="_blank">alpos</a>. It is done this way in order to ensure that you get the latest package or dump.  <strong>So immediately your payment is confirmed by us, it will reflect on your purchase status and the PIN would have been sent to your mailbox. </strong>Then you can instantly download your dumps. Thanks.
<strong><u>All are within 48hrs</u>.</strong>
<hr width="100%" noshade size="1">
<strong>Note:-
  </strong>

    You are advised to logout after using this site.&nbsp;&nbsp; 
  
  <b><a class="style1" href='logout.php?logout=true'>log out</a></b></td>
    <td valign="top"><div align="center"><table  border="1" cellpadding="3" cellspacing="0">
<tr><td colspan="2" align="center"><strong>Instant Download</strong></td>
</tr>
  
	<tr>
    <td>User</td>
    <td><input name="user" type="text" class="inputsize" id="user" value="<?php if(!empty($_SESSION['email'])){echo $email;}else{echo "certdumps@yahoo.com";}?>"></td>
    </tr>
  <tr>
    <td>PIN</td>
    <td><input name="pin" type="password" class="inputsize" id="pin" value="<?php if(!empty($_SESSION['email'])){echo "";}else{echo "trial";}?>"></td>
    </tr>
	<tr>
    <td colspan="2" align="right"><input name="submit" type="submit" class="tbtext_but" value="Download"></td>
    </tr>
	<tr>
    <td colspan="2" align="left"><strong><u>Demo:</u></strong><br>
      &nbsp; &nbsp;User:certdumps@yahoo.com<br> &nbsp; &nbsp;Pin:trial</td>
  </tr>
</table>
</div></td></form>
  </tr>
</table></td>
  </tr>
  <tr>
        <td width="168" rowspan="3" valign="top" bgcolor="#FFFFFF"><?php
	include "promo.php";
	?>
      <p class="tbtext">we proudly accept: <br>
  -&gt;Flashmecash <img name="flashmecash" src="oth_images/flashmecash.gif" border="0" alt="">
      <p class="tbtext">-&gt;Payment into any STB or First Atlantic Bank.</p>
      <p class="tbtext"><a href="request.php">Click here to learn more</a> </p>
    <p class="tbtext">&nbsp;</p></td>
    <td width="6" height="18">&nbsp;</td>
  </tr>
  <tr>
    <td height="185">&nbsp;</td>
    <td valign="top" class="tbtext"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
	  <td width="44%" valign="top">
	  <hr width="100%" noshade size="1">
	  <?PHP
	
		
	echo "<table border=1 cellspacing=0 cellpadding=0>";
echo "<tr bgcolor=#8E8E8E><td colspan=3><b>Your Present Purchase Status</b></td></tr>";
echo "<tr><td>Exam code</td><td>Price</td><td>Payment Confirmed</td></tr>";
if($member=='YES'){
while ($row = $result->fetch()) {
$item=$row['itemlist'];
    echo "<tr><td>".$row['itemlist']."</td>";
    echo "<td>".$row['cost']."</td>";
	    echo "<td>".$row['status']."</td></tr>";

}}
	echo "<tr bgcolor=#8E8E8E><td colspan=3><b><a href='cart.php'>Make/Edit your order</a></b></td></tr>";
echo "</table>";
  


	?></td>
        <td width="56%" valign="top"><hr width="100%" noshade size="1">
		<strong>Other Information:</strong>&nbsp;&nbsp;&nbsp;<a href='request.php'>Edit</a><HR width="100%" size="1" noshade>
		<?php
		$sql="select * from login where user='$email' and pwd='$pwd'";
	$result = $db->query($sql);
		$row = $result->fetch();
		    echo "Fullnames:".$row['fullnames']."<br>";
    echo "Telephone:".$row['telephone']."<br>";
	$_SESSION['telephone']=$row['telephone'];
	    echo "Payment mode:".$row['paymentmode']."<br>";
	
	$sql_sum=mysql_query("select sum(cost) from chosendumps where user='$email' and chosendumps.status='NOT YET'") or trigger_error("Couldn't find sum of items");
	if($member=='YES'){$result_sum = mysql_result($sql_sum,0,0);}else{$result_sum='--';}

	   echo "Total Cost: <b>#".$result_sum."</b><br>";

	?>
          
		  </td>
        
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="89">&nbsp;</td>
    <td valign="bottom"><table width="100%" border="0" cellpadding="2" cellspacing="0" class="tbtext">
      <tr>
        <td valign="bottom"><center> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="disclaimer.php">Disclaimer</a> | <a href="contact.php">Contact Us</a>  | <a href="../it-books+/login.php?logout=true">Visit IT-Books+</a></center>        <p>©2005 Designed and maintained by Asmic Computers (Nig.) Co.</p></td>
      </tr>
    </table> 
    </td>
  </tr>
  
</table>
</body>
</html>