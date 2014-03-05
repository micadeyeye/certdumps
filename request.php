<?php
 session_save_path("/home/users/web/b590/ez.asmicom/cgi-bin/tmp");
session_start();
session_register('email');
$email=$_SESSION['email'];


	
	
// Include the MySQL class
require_once('Database/MySQL.php');

require('connx.php');




// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);


//should redirect if member hasn't signed in 
if(isset($_SESSION['email'])){
//echo $_SESSION['signin'];
//exit;
$email=$_SESSION['email'];
	$cfmuser=mysql_query("select count(*) from login where login.user='$email'") or trigger_error("Couldn't find sum of items");
	$result_sum = mysql_result($cfmuser,0,0);
	$total=$result_sum;
if(($total!=0)&&($_SESSION['signin']=='NO')){
//it indicates that he is a member but hasn't signed in ....maybe pwd forgotten
$_SESSION['signin']='YES';
header("location: pwdreminder.php?cfmacct=true");}
}
//end redirect



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
function checkpwd(){
npwd=document.request.npwd.value;
cpwd=document.request.cpwd.value;
npwd=npwd.toString();
cpwd=cpwd.toString();
if((npwd!=cpwd)||((npwd=='')&&(cpwd==''))){alert("Your Password doesn't match");
location='request.php';}
}</script>
<link href="body.css" rel="stylesheet" type="text/css">
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
    <td width="570" rowspan="2" valign="top"><img src="oth_images/request.gif">
      <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbtext">
  <tr><form action="file.php" method="post" target="_blank">

    <td width="314">		
      <strong>Steps:</strong><ul>
        <li>Having made your <a href="order.php">order</a>, kindly fill the form below specifying your preferred payment mode.<br>
          ** 
          The charged fee<b>
          <?php 
		if(isset($_SESSION['totalsum'])){
	echo "(#".$_SESSION['totalsum'].")";}?>
          </b> can be paid at any branch of Standard Trust Bank  or  First Atlantic Bank PLC (FlashmeCash is also acceptable).</li>
	      <li>The <a href="download.php">access code</a> will be mailed to your mailbox <strong><em>after your payment is confirmed</em></strong>.</li>
	      </ul>
</td>
    <td width="256"><strong>Using Standard Trust Bank(now UBA)</strong>
      <hr>      <br>
          Please pay into:            <br>
          <hr class="tbline">	          
          Acct name: Adeyeye Oluwasegun M.<br>
    Acct no: 011-000240-45299</td>
  </form>
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
    <td valign="top"><table class="tbtext">
      <tr><FORM action="download.php" method="post" enctype="multipart/form-data" name="request"><td width="340" valign="top"><table border="0" cellpadding="0" cellspacing="0">
  <caption align="top">
  <strong>  Request Form
  </strong>
  </caption>
  <tr>
    <td>Fullnames</td>
    <td><input name="fullnames" type="text" class="inputsize" id="fullnames" value="<?php if(!empty($_SESSION['fullnames'])){echo $_SESSION['fullnames'];}else{echo "";}?>" size="27"></td>
  </tr>
  <tr>
    <td width="91">Payment Mode:</td>
    <td width="275">
	<?php
	if(isset($_SESSION['signin'])){
if((isset($_SESSION['signin']))||($_SESSION['signin']=='YES')){
$email=$_SESSION['email'];
$sql="select paymentmode,sent_file from login where user='$email'";
	$result = $db->query($sql);
		$row = $result->fetch();
$paymode=$row['paymentmode'];
	if($paymode=='First Atlantic Bank'){
$strpaymode=<<<EOD
<input name="paymentmode" type="radio" value="First Atlantic Bank"  checked>
    First Atlantic Bank 
	<input name="paymentmode" type="radio" value="Standard Trust Bank">
	STB Bank
EOD;
echo $strpaymode;
	}else{
$strpaymode=<<<EOD
<input name="paymentmode" type="radio" value="First Atlantic Bank">
    First Atlantic Bank 
	<input name="paymentmode" type="radio" value="Standard Trust Bank" checked>
	STB Bank
EOD;
echo $strpaymode;
	
	}
	
}
}else{
//if visitors hasn't logged in
$strpaymode=<<<EOD
<input name="paymentmode" type="radio" value="First Atlantic Bank">
    First Atlantic Bank 
	<input name="paymentmode" type="radio" value="Standard Trust Bank" checked>
	STB Bank
EOD;
echo $strpaymode;
}
	
	
	?>
	</td>
  </tr>  
  
  
  <tr>
    <td>Password</td>
    <td><input name="npwd" type="password" class="inputsize" id="npwd" size="27" value="<?php if(!empty($_SESSION['pwd'])){echo $_SESSION['pwd'];}else{echo "";}?>"></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><input name="cpwd" type="password" class="inputsize" id="pwd" size="27" onBlur="checkpwd();" value="<?php if(!empty($_SESSION['pwd'])){echo $_SESSION['pwd'];}else{echo "";}?>"></td>
  </tr><tr>
    <td>Telephone/GSM</td>
    <td><input name="telephone" type="text" class="inputsize" id="telephone" size="27" onBlur="checkpwd();" value="<?php if(!empty($_SESSION['telephone'])){echo $_SESSION['telephone'];}else{echo "";}?>"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="hidden" name="email" class="inputsize" value="<?php
			if(isset($_SESSION['email'])){
	echo $_SESSION['email'];}?>" size="27" onBlur="checkpwd();"> <?php
    if(isset($_SESSION['signin'])){echo "<b>".$_SESSION['email']."</b>";}
?></td>
  </tr>
  
  <tr>
    <td>Your Order </td>
    <td><?php



			if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
	$sql="select itemlist, cost from chosendumps where chosendumps.user='$email' and chosendumps.status='NOT YET'";
	$result = $db->query($sql);
	$items="";
	while ($row = $result->fetch()) {
    echo $row['itemlist'].", ";
	$spitems=$row['itemlist'];
	$items=$items.$spitems.",";
}
echo "<a href='cart.php'>Edit</a>";
$_SESSION['items']=$items;
	}//close the if statement
	?>	</td>
  </tr>
  <tr>
    <td>Total Cost = </td>
    <td><b><?php
					
	if(isset($_SESSION['signin'])){
				if((isset($_SESSION['totalsum']))||($_SESSION['signin']=='YES')){
				$sql_sum=mysql_query("select sum(cost) from chosendumps where chosendumps.user='$email' and chosendumps.status='NOT YET'") or trigger_error("Couldn't find sum of items");
	$result_sum = mysql_result($sql_sum,0,0);
	$_SESSION['totalsum']=$result_sum;
	echo "#".$result_sum;}
	}?>
	</b></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="formsubmit" type="submit" class="tbtext_but" id="formsubmit" value="Submit"></td>
  </tr>
</table></td>
      <td width="218" valign="top"><p><strong>Using First Atlantic Bank PLC.</strong>      
        <hr>
        &nbsp;You can go and pay into any First Atlantic Bank branch using the cellphone number below as account number. <br>
        Please pay into: 
        <hr class="tbline">
Acct name: Adeyeye Oluwasegun M.<br>
Acct no: 0803-067-7907<p>
Acct name: Asmic Computers Nig. Co.<br>
Acct no: 1014-3239-2501<br>


<p>       
            <strong>About FlashmeCash</strong>
        <hr>        Alternatively, if you have a FlashmeCash account with First Atlantic Bank perhaps a member of <strong><em><a href="http://www.sapphirelink.com" target="_blank">sapphire club</a></em></strong>, you can use your cellphone to pay. Kindly flash the number below.<br>
          ADEYEYE O.  M.--&gt;08030677907          <br>
            </p></td>
      </FORM></tr>
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