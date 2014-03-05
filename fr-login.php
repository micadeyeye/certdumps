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
		    </table>
EOD;
echo $tyform;
?>