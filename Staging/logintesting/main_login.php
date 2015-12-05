
<html>
    
<body>
    
    <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
            <form name="form1" method="post" action="checklogin.php">
        <td>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
            <td colspan="3"><strong>Member Login </strong></td>
        </tr>
        <tr>
            <td width="78">Username</td>
            <td width="6">:</td>
            <td width="294"><input name="myusername" type="text" id="myusername"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="mypassword" id="mypassword"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Login"></td>
        </tr>
    </table>
        </td>
            </form>
        </tr>
    </table>

</body>

</html>

<?php

$url=https://project-3-lizsan708.c9users.io/Staging/logintesting/register.php;

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
?>