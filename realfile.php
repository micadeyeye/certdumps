<?php
require('strip_quotes_ext.php');
require('strip_quotes.php');
if(isset($_POST['submit'])){
$usr=safeAddSlashes($_POST['user']);
$pin=safeAddSlashes($_POST['pin']);

// Include the MySQL class
require_once('Database/MySQL.php');

require('connx.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

	$sql="select folder from chosendumps,login where login.user='$usr' and  chosendumps.pin='$pin'";
	$result = $db->query($sql);
	while ($row = $result->fetch()) {
$item=$row['folder'];
$folder=opendir('$item');
while($file=readdir($folder)){
if(!(is_dir('$file'))){echo $file;}

}
//echo "<a href='$item'>$item</a>";
/*echo "<script language='javascript'>location='$item';</script>";*/
    }

   }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Nigerians most affordable certification dumps site.">
<meta name="keywords" content="microsoft,cisco,java,ciw,mcse,oracle,sun,a+,n+,server+,i-net+,mcse,mcsd,ccna,ccnp,ccie,ciw security professional,mcafee certification,eccouncil,hp,ibm,apple certifications">
<title>.:::Certdumps:::.Microsoft, Cisco, Comptia, Oracle, CIW, A+, BRAINDUMPS - MCSE, CCNA, Windows 2003, A+ tests.</title><link href="body.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {font-size: 6em}
body {
	margin-left: 5px;
	margin-top: 55px;
	margin-right: 5px;
	margin-bottom: 5px;
}
-->
</style>
</head>
<body>
<div align="center"><span class="style4">Sorry, access denied 
  </span>
</div>
</body>
</html>