<?php
		



// If the form has been submitted from request page...
	if((isset($_POST['formsubmit']))&&(isset($_SESSION['email']))){
	$cfmuser=mysql_query("select count(*) from login where user='$email'") or trigger_error("Couldn't determine his status");
	$result_sum = mysql_result($cfmuser,0,0);
	$total=$result_sum;
	
$fullnames=safeAddSlashes($_POST['fullnames']);
$pwd=safeAddSlashes($_POST['npwd']);
$fone=safeAddSlashes($_POST['telephone']);
$pay_mode=safeAddSlashes($_POST['paymentmode']);

//update his database based on membership status i.e. new or old.


if($total!=0){
$sql="UPDATE
     login 
SET
fullnames='$fullnames',
pwd='$pwd',
telephone='$fone',
paymentmode='$pay_mode' where user='$email'
";}
else{
$sql="INSERT
     login 
SET
fullnames='$fullnames',
user='$email',
pwd='$pwd',
telephone='$fone',
paymentmode='$pay_mode'";}
// Perform a query getting back a MySQLResult object
//echo $sql; 
$db->query($sql);
$_SESSION['email']=$email;
$_SESSION['fullnames']=$fullnames;

//send a copy of the request to my mailbox
mail('sales@ngportal.com','REQUEST FOR CERTDUMPS',"'E-mail address:"
.$_SESSION['email'].",\nSent message: Please i need these dumps:-"
.$_SESSION['items'].";\nFullnames="
.$_SESSION['fullnames'].";\nTotal cost="
.$_SESSION['totalsum']."'");	

//send a copy of mail to customer
mail("'".$email."'",'CC:-REQUEST FOR CERTDUMPS',"'E-mail address:"
.$_SESSION['email'].",\nSent message: Please i need these dumps:-"
.$_SESSION['items'].";\nFullnames="
.$_SESSION['fullnames'].";\nTotal cost="
.$_SESSION['totalsum']."'");	
$_SESSION['signin']='YES';
}	//end of new user submit action


//show his status and other member logging in
if((isset($_SESSION['email']))&&(isset($_SESSION['pwd']))){
$email=$_SESSION['email'];
$pwd=$_SESSION['pwd'];}
else{
$email="";
$pwd="";}

	$sql_sum=mysql_query("select count(*) from login where user='$email' and pwd='$pwd'") or trigger_error("Couldn't find sum of items");
	$result_sum = mysql_result($sql_sum,0,0);
	$total=$result_sum;
if($total!=0){$member='YES';}
else{$member='NO';}



// Direct link to download page from cart for members...
	if(((isset($_GET['req']))&&($_GET['req']='new'))&&($_SESSION['member']='YES')){
		$email=$_SESSION['email'];
	$sql="select itemlist, cost from chosendumps where chosendumps.user='$email' and chosendumps.status='NOT YET'";
	$result = $db->query($sql);
	$items="";
	while ($row = $result->fetch()) {
	$spitems=$row['itemlist'];
	$items=$items.$spitems.",";
}
$_SESSION['items']=$items;

$sql1="select fullnames from login where login.user='$email'";
	$result = $db->query($sql1);
	$row = $result->fetch();
	$_SESSION['fullnames']=$row['fullnames'];

	//send a copy of the request to my mailbox
mail('sales@ngportal.com','ANOTHER REQUEST FOR CERTDUMPS',"'E-mail address:"
.$_SESSION['email'].",\nSent message: Please i need these dumps:-"
.$_SESSION['items'].";\nFullnames="
.$_SESSION['fullnames'].";\nTotal cost="
.$_SESSION['totalsum']."'");	

//send a copy of mail to customer
mail("'".$email."'",'CC:-ANOTHER REQUEST FOR CERTDUMPS',"'E-mail address:"
.$_SESSION['email'].",\nSent message: Please i need these dumps:-"
.$_SESSION['items'].";\nFullnames="
.$_SESSION['fullnames'].";\nTotal cost="
.$_SESSION['totalsum']."'");	

}//end of direct link to download from cart.php


	//for the shopping details in download
	$sql="select * from chosendumps where user='$email'";
	
	$result = $db->query($sql);
	
	
	?>
