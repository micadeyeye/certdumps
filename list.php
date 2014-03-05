<?php

// Include Magic Quotes filter
require('strip_quotes_ext.php');
require('strip_quotes.php');
 session_save_path("/home/users/web/b590/ez.asmicom/cgi-bin/tmp");
session_start();
$loginstatus=$_SESSION['signin'];
if($loginstatus!='YES'){header("location: index.php");}


// Include the MySQL class
require_once('Database/MySQL.php');

require('connx.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
if((isset($_POST['chuser']))&&(!empty($_POST['memail']))){
$memail=safeAddSlashes($_POST['memail']);
$sql="select * from chosendumps,login where login.user='$memail' and  chosendumps.user='$memail'";
}
else{
$memail="";
$sql="select * from chosendumps,login where chosendumps.status='NOT YET' and chosendumps.user=login.user";}

//unregister members
	if(isset($_POST['unregister'])){
session_unregister('memail');
session_unregister('pin');
session_unregister('folder');
}
	//for the form submission
	
	if(isset($_POST['submitpin'])){
	$memail=safeAddSlashes($_POST['memail']);
		$pin=safeAddSlashes($_POST['pin']);
$folder=safeAddSlashes($_POST['folder']);
	$item=safeAddSlashes($_POST['exdumps']);
	$status=safeAddSlashes($_POST['status']);
	
	//REGISTER ALL VARIABLES IN SECTION
	$_SESSION['memail']=$memail;
	$_SESSION['pin']=$pin;
	$_SESSION['folder']=$folder;
	//update his database
		
$sql="UPDATE
     chosendumps 
SET
folder='$folder',
pin='$pin',
status='$status' 
where user='$memail' and itemlist='$item'";
// Perform a query getting back a MySQLResult object
//echo $sql; 
$db->query($sql);

$sql="select * from chosendumps,login where login.user='$memail'";
	}
		$result = $db->query($sql);

	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name=keywords" content="microsoft,cisco,java,ciw,mcse,oracle,sun,a+,n+,server+,i-net+,mcse,mcsd,ccna,ccnp,ccie,ciw security professional,mcafee certification,eccouncil,hp,ibm,apple certifications"><title>ADMINISTRATOR PAGE</title>
<link href="body.css" rel="stylesheet" type="text/css">
</head>

<body class="tbtext">
<div align="center">ADMINISTRATOR
</div>
<hr width="100%" size="2" noshade>
<table>
  <tr><td valign="top">
<table><tr><td><form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<table width="100%"  border="1" cellpadding="0" cellspacing="0">
<tr><td colspan="2" align="center"><input name="unregister" type="submit" id="unregister" value="Approve new member">
	   </td>
	 </tr>
  <tr>
    <td>E-mail address </td>
			<td>
			  <?php if(!empty($_SESSION['memail'])){echo $memail;}else{echo "<input name='memail' type='text' id='memail' value=''>";}?>
		    </td></tr><tr>    <td> Folder name </td>
    <td> 			  <?php if(!empty($_SESSION['folder'])){echo $folder;}else{echo "<input name='folder' type='text' id='folder' value=''>";}?>
</td>

  </tr><tr><td>Exam Dumps</td>
    <td><input name="exdumps" type="text" id="exdumps"></td>
  </tr><tr>
    <td>Status      </td>
    <td><select name="status">
      <option value="CONFIRMED">CONFIRMED</option>
      <option value="NOT YET">NOT YET</option>
    </select></td></tr><tr>
    <td>Download Pin</td>
    <td>			  <?php if(!empty($_SESSION['pin'])){echo $pin;}else{echo "<input name='pin' type='text' id='pin' value='";


//random pin generation
	srand((double)microtime()*1000000);
	$letters=range('A','Z');
	$numbers=range(0,9);
	$chars=array_merge($letters, $numbers);
	$randstring='';
	for($i=0;$i<8;$i++) {
	shuffle($chars);
	$randstring.=$chars[0];
	    }//close of loop
		echo $randstring;
		echo "'>";}?>
      </td></tr><tr>
    <td>Update Action</td><td><input name="submitpin" type="submit" id="submitpin" value="Submit"></td></tr>
	 </table>
</form></td></tr><tr><td><form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<table  border="0" cellspacing="0" cellpadding="5">
<tr>
  <td align="center"><strong>Streamline Members</strong></td>
    <td>email:-</td>
    <td><input name="memail" type="text" id="memail" size="30"></td>
    <td><input name="chuser" type="submit" id="chuser" value="Display"></td>
	   
  </tr>
</table>
</form>
<form action="pwdreminder.php" method="post">
<hr width="100%" noshade size="1">
<table cellpadding="2" cellspacing="2" align="center"><tr><td colspan="2" align="center">
<strong>Change Admin Password</strong></td></tr>
<tr><td align="right">Old Password</td><td align="left"> 
<input name="oldpwd" type="password" class="inputsize" id="user" value="">
</td></tr><tr><td align="right">
New Password </td><td align="left">
<input name="npwd" type="password" class="inputsize" id="user" value="">
</td></tr><tr><td align="right">
Confirm New Password</td><td align="left">
<input name="cpwd" type="password" class="inputsize" id="user" value="">
</td></tr><tr><td colspan="2" align="center">
<input name="chgpwdsubmit" type="submit" class="tbtext_but" id="login" value="Change">
</td></table>
<hr width="100%" noshade size="1">

</form></td></tr></table>

<p align="center"><a href='automail.php'>Send a Broadcast mail</a></p>
<p align="center"><a href='logout.php?logout=true'>log out</a></p>
</td><td>
<div align="center"><strong>NEW MEMBERS
</strong></div>
<hr width="100%" size="2" noshade>
<div class="scroll" style="overflow:scroll;width:540px; height:350px; ">
<?php

	
		echo "<table border=1 cellspacing=0 cellpadding=0>";
echo "<tr><td>email add</td><td>Exam code</td><td>Price</td><td>Status</td><td>Payment mode</td></tr>";
while ($row = $result->fetch()) {
    echo "<tr><td>".$row['user']."</td>";
    	    echo "<td>".$row['itemlist']."</td>";
    echo "<td>".$row['cost']."</td>";
	    echo "<td>".$row['status']."</td>";
echo "<td>".$row['paymentmode']."</td></tr>";
}
echo "</table>";

?>
</div>
<hr width="100%" size="2" noshade>
<div align="center"><strong>CONFIRMED PAYMENTS
</strong></div>
<hr width="100%" size="2" noshade>

<div class="scroll" style="overflow:scroll;width:540px; height:140px; ">
<?php

$sql="select * from chosendumps,login where chosendumps.status='CONFIRMED' and chosendumps.user=login.user";
$result = $db->query($sql);
	
		echo "<table border=1 cellspacing=0 cellpadding=0>";
echo "<tr><td>email add</td><td>Exam code</td><td>Price</td><td>Status</td><td>Payment mode</td></tr>";
while ($row = $result->fetch()) {
    echo "<tr><td>".$row['user']."</td>";
    	    echo "<td>".$row['itemlist']."</td>";
    echo "<td>".$row['cost']."</td>";
	    echo "<td>".$row['status']."</td>";
echo "<td>".$row['paymentmode']."</td></tr>";
}
echo "</table>";

?>
</div>


</td></tr></table>
</body>
</html>
