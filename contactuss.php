<?PHP 
$msg="";
$succ="";
$full_name="";
$city		=	"";
$mob_no		=	"";
$code		=	"";
$email		=	"";
$message	=	"";
$mobile_no="";
if(isset($_POST['submit_x']))
{
	$full_name	=	$_POST['full_name'];
	$city		=	$_POST['city'];
	$mob_no		=	$_POST['mob_no'];
	$code		=	$_POST['code'];
	$email		=	$_POST['email'];
	$message	=	$_POST['message'];
	$mobile_no=$code." ".$mob_no;


$sendto = "info@vastuyogindia.com";
$subject = "New Enquiry";
//$message = 'Test message using PHP mail()';
$message_body= "Name of sender: $full_name  \nCity: $city \nMobile No: $mobile_no \nEmail Address: $email  \nMessage: $message";

if($email!="")
{
$header = "From:".$email."\n";
}
else
{
	$header = "From:webmaster@vastuyogindia.com"."\n";
	}

$header .= "Content-Type: text/html; charset=iso-8859-1\n";


// Send

ini_set("sendmail_from","webmaster@".$_SERVER["SERVER_NAME"]);


$email_feed="info@vastuyogindia.com";
$headers= 'From: '.$email_feed."\r\n" ;
$feed_subject="Thank you for enquiry";
$feed_body='Thank you for enquiry we will get back to you soon.';




$mail=@mail($sendto,$subject,$message_body,$header);



 

$feedback_mail=@mail($email,$feed_subject,$feed_body,$headers);


	
		if($mail!="" || $feedback_mail!="")
		{
			$succ.="Mail sent successfully.";
		}


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Vastuyog Housing Corporation</title>

<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#000000; }
-->
</style>
<script language="javascript">
function valid_contact()
{
   var full_name=document.form.full_name.value;
	var full_name=full_name.replace(/^[\s]+/g," ");
	if(full_name=="")
		{         
			alert("Please Enter Full Name");
			document.form.full_name.focus();
			return false;
		
		}
		else
		if(full_name.length<5)
		{         
			alert("Invalid Input");
			document.form.full_name.focus();
			return false;
		
		}
        
         var message=document.form.message.value;
	var message=message.replace(/^[\s]+/g," ");
	if(message=="")
		{         
			alert("Please Enter Message");
			document.form.message.focus();
			return false;
		
		}
}
function cleartext()
{
	document.getElementById("full_name").value="";
	document.getElementById("city").value="";
	document.getElementById("mob_no").value="";
	document.getElementById("email").value="";
	document.getElementById("message").value="";
}
</script>
</head>

<body  >
<table width="370" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td height="8" align="left" valign="top"></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="super_text"><table width="100%" border="0" cellspacing="0" cellpadding="0">
         
          <tr>
            <td align="left" valign="top" class="super_text"><form method="post" name="form" id="form" >
              <table border="0" >
                <tr>
                  <td colspan="3" ><?PHP echo "<font color=\"red\">$msg $succ </font>";?></td>
                </tr>
                <tr>
                  <td width="110" height="30" align="right" valign="top" class="style3"  >Full Name</td>
				  <td width="5"></td>
                  <td width="250" align="left" valign="top" ><input   name="full_name" type="text" class="style1" id="full_name" style="width: 250px;" tabindex="1"  autocomplete="off" value="<?php echo $full_name;?>" /></td>
                </tr>
				<tr>
                  <td height="30" align="right" valign="top" class="style3" >City </td>
				  <td ></td>
                  <td align="left" valign="top" ><input   name="city" type="text" class="style1" id="city" style="width: 250px;" tabindex="2" autocomplete="off" value="<?php echo $city;?>" /></td>
                </tr>
                <tr>
                  <td height="30" align="right" valign="top" class="style3" >Mobile No</td>
				  <td ></td>
                  <td valign="top" ><input type="text" name="code" value="<?PHP echo "+91";?>" size="1" tabindex="3" />
                   
                  <input name="mob_no" type="text" class="style1" id="mob_no" tabindex="3" onblur="intOnly(this);" onchange="intOnly(this);" onkeyup="intOnly(this);"   style="width: 212px;" maxlength="10" autocomplete="off" value="<?php echo $mob_no;?>" /></td>
                  <script language="JavaScript" type="text/javascript">
					function intOnly(i)
					{
						if(i.value.length>0)
						{
							i.value = i.value.replace(/[^\d]+/g, '');
						}
					}
					        </script>
                </tr>
                <tr>
                  <td height="30" align="right" valign="top" class="style3" >E-mail</td>
				  <td ></td>
                  <td align="left" valign="top" ><input name="email" type="text" class="style1" id="email" style="width: 250px;" tabindex="4"  autocomplete="off"  value="<?php echo $email;?>"  /></td>
                </tr>
				
                <tr>
                  <td align="right" valign="middle" class="style3" >Message</td>
				  <td></td>
                  <td align="left" valign="top" ><textarea name="message" cols="20" rows="2" class="style1" id="message" style="height: 80px; width: 250px;" tabindex="5"><?php echo $message;?></textarea></td>
                </tr>
                <tr>
                  <td height="5"align="right" valign="middle" class="style3" ></td>
				  <td ></td>
                  <td align="left" valign="top" ></td>
                </tr>
                <tr>
                  <td ></td>
				  <td></td>
                  <td ><input name="submit" value="Submit" onclick="javascript:return valid_contact();" id="submit" tabindex="6" class="buttons2" src="Images/submit.gif"  border="0" type="image" />
                            <input src="images/reset.gif"  border="0" name="reset" value="Reset" type="image" class="buttons2" onclick="cleartext();" />                 </td>
                </tr>
              </table>
            </form></td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="9" align="left" valign="top"></td>
      </tr>
</table>
</body>
</html>
