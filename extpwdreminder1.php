<?PHP
$tyform=<<<EOD
<hr width="100%" noshade size="1">
<table cellpadding="2" cellspacing="2" align="center"><tr><td colspan="2" align="center">
<strong>Want to Change Password?</strong></td></tr>
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
EOD;
echo $tyform;
?>