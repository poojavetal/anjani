<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Vastuyog Housing Corporation</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all"/>

<style type="text/css">
<!--
.web_text
{
	font-family: Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#a4181b;
	text-decoration:none;
	font-weight: bold;
}
.web_box {
	border: 1px solid #b9b9b9;
	width: 180px;
}

.web_buttone {
	border: 1px solid #f2f1f1;
	width: 60px;
	height: 25px;
	background-color:#a4181b;
	color: #FFFFFF;
	font-weight: bold;
	text-align: center
}

-->
</style>


</head>
<script type="text/javascript">
function validate()
{
	var imapuser = document.implogin.imapuser.value;
	var imapuser=imapuser.replace(/^[\s]+/g," ");
	if(imapuser=="")
	{
	alert("Please Select User");
	 document.implogin.imapuser.focus();
	return false;
	}
	if(imapuser!="")
	{
	var flag=1;
    var semicolon = imapuser.indexOf("@");
    if (semicolon >= 0)
	{
		//alert("The file name cannot contain semicolons");
		flag=2;
        //return false;
    }
	if(flag==1)
	{
	imapuser=imapuser+"@vastuyogindia.com";
	}
	document.implogin.imapuser.value=imapuser;
	var pass = document.implogin.pass.value;
	var pass=pass.replace(/^[\s]+/g," ");
	if(pass=="")
	{
		alert("Password is must");
	 document.implogin.pass.focus();
	 document.implogin.imapuser.value="";
	return false;
	}

	
		
	if(imapuser!="" && pass!="")
	{
		
		submit_login();
		}
	
	
	}
	
	

	
}
</script>
<body>
<form action="http://webmail.opentransfer.com/horde/imp/redirect.php" method="post"  id="implogin" name="implogin"  style="margin-bottom: 0; margin-top: 0">
<input type="hidden" name="actionID" value="105" />
<input type="hidden" name="url" value="" />
<input type="hidden" name="mailbox" value="INBOX" />
<table width="365" border="0" align="center" cellpadding="0" cellspacing="0" class="web_box">
 
  <tr>
  <td ><table width="365" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  colspan="4" align="left" valign="middle" bgcolor="#FFFFFF" class="logo_top_bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="130" align="center" valign="middle" bgcolor="#FFFFFF" class="logo_bg"><a href="index.html"><img src="images/logo.png" alt="Vastu Yog Housing Corporation" width="232" height="105" border="0" /></a></td>
      </tr>
      <tr>
        <td height="1" align="center" valign="middle" bgcolor="#b9b9b9"></td>
      </tr>
    
    </table></td>
  </tr>
    
  <tr>
    <td width="50" height="20" bgcolor="#FFFFFF"></td>
    <td colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
    <td width="86" bgcolor="#FFFFFF" class="web_text">User Name</td>
    <td width="7" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="229" bgcolor="#FFFFFF"><input type="text" class="web_box" tabindex="1" name="imapuser" value=""  autocomplete="off"/></td>
  </tr>
  <tr>
    <td height="15" bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="web_text">Password<br /></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><input type="password" class="web_box" tabindex="2" name="pass"  autocomplete="off"/></td>
  </tr>
  <tr>
    <td height="15" bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF"><span class="light">
      <input  type="submit" class="web_buttone " height="15px" name="button" tabindex="4" value="Login" onclick="return validate()" />
    </span></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
  </tr>
</table></td>
  </tr>
  
</table>


<input type="hidden" name="folders" value="INBOX" />
<input type="hidden" name="new_lang" value="en_US">
<input type="hidden" tabindex="3" name="server" value="mail.opentransfer.com">
</form>
<table align="center" border="0" width="100%">
<tr>
 <td width="100%"></td>
</tr>
</table>



</body>
</html>
