<?PHP
$_SESSION['signin']='NO';
$tyform=<<<EOD
<HR WIDTH="100%" NOSHADE SIZE="1">
<table width="50%" border="0" align="center">
        <tr>
          <td>E-mail</td>
          <td><input name="email" type="text"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="pswd" type="password"></td>
        </tr>
		
        <tr>
          <td height="28" align="center"><input name="reset" type="reset" value="Reset"></td>
          <td align="center"><input name="login" type="submit" value="Submit"></td>
       
	   </tr>
		    </table><STRONG><u>Reasons for redirection</u></STRONG>
			<ul>
  <li>It has been observed that you already have an account with us, hence please login.<br><a href="pwdreminder.php">Click here to retrieve your password</a>.</li>
<li>Or, there is an account with that email so use another email<br><a href="order.php">Click here to make your order</a>.</li>
		</ul>
EOD;
echo $tyform;
?>