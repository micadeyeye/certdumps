<?php


Class logout {
function logout($val) {

if(isset($val)){
//echo $val;
 session_save_path("/home/users/web/b590/ez.asmicom/cgi-bin/tmp");
session_start();
//if(isset($_SESSION['email'])){echo "session  registered";}
$_SESSION=array();
session_destroy();
echo "<script language='javascript'>location='index.php';</script>";
       }//end if

     }//end method

}//end logout class

//initialize logout
if(isset($_GET['logout'])){
$logout_val=$_GET['logout'];
new logout($logout_val);
}
?>


