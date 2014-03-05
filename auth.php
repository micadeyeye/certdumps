<?php
// Include the MySQL class
require_once('Database/MySQL.php');


require('connx.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);


	
	if((isset($_POST['login']))||(isset($_POST['formsubmit']))){
	
	//for entries supplied through request page

	if(isset($_POST['formsubmit'])){
		$pwd=safeAddSlashes($_POST['npwd']);
	}else{	$pwd=safeAddSlashes($_POST['pswd']);
}
	//end of entries through request page
	
	
	

$email=safeAddSlashes($_POST['email']);
$email=strtolower($email);
if((isset($email))&&(isset($pwd))){

	$sql_sum=mysql_query("select count(*) from login where user='$email' and pwd='$pwd'") or trigger_error("Couldn't find sum of items");
	$result_sum = mysql_result($sql_sum,0,0);
	$total=$result_sum;
	if($total!=0){$member='YES';
	$sql="select fullnames from login where user='$email' and pwd='$pwd'";
	$result = $db->query($sql);
		$row = $result->fetch();
$_SESSION['fullnames']=$row['fullnames'];
	}
else{
$sql_sum=mysql_query("select count(*) from login where user='$email'") or trigger_error("Couldn't find sum of items");
	$result_sum = mysql_result($sql_sum,0,0);
	$total=$result_sum;
		if($total!=0){$member='NO';}else{$member='NEW';}
	}


if(isset($_SESSION['email'])){
$_SESSION=array();
session_destroy();
 session_save_path("/home/users/web/b590/ez.asmicom/cgi-bin/tmp");
session_start();}
	$_SESSION['email']=safeAddSlashes($_POST['email']);
		$_SESSION['pwd']=$pwd;
	$_SESSION['signin']=$member;


//for admiminstator only
//if(($total!=0)&&($email=="admin")){header("location: list.php");}


}
    }//end of login test
?>