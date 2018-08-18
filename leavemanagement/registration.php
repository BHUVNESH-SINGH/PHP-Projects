<?php
include('header.php');
?>
<!-- / header -->

	</div>
</div>
	<script language="javascript" type="application/javascript">
function check()
{
 if(document.signup.username.value=="")
  {
    alert("Plese Enter Emp/User Id");
	document.signup.username.focus();
	return false;
  }
  if(document.signup.firstname.value=="")
  {
    alert("Plese Enter firstname");
	document.signup.firstname.focus();
	return false;
  }
  if(document.signup.lastname.value=="")
  {
    alert("Plese Enter lastname");
	document.signup.lastname.focus();
	return false;
  }
   if(document.signup.password.value=="")
  {
    alert("Plese Enter Your Password");
	document.signup.password.focus();
	return false;
  } 
    if(document.signup.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.signup.email.focus();
	return false;
  }
  e=document.signup.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.signup.email.focus();
			return false;
		}
  if(document.signup.mobileno.value=="")
  {
    alert("Plese Enter Your mobile No");
	document.signup.mobileno.focus();
	return false;
  }
  if (document.signup.company.value=="")
{
alert("Please Enter Your Company name.");
document.signup.company.focus();
return false;
}
if (document.signup.domain.value=="")
{
alert("Please Enter Your Domain name.");
document.signup.domain.focus();
return false;
}
if (document.signup.smartcard.value=="")
{
alert("Please Enter Your Smartcard no.");
document.signup.smartcard.focus();
return false;
}
  return true;
  }
  </script>
<div class="body2">
	<div class="main">
<!-- content -->
		<section id="content">
			<div class="marg_top wrapper">
				<article class="col1">
					<div class="box1_out">
						<div class="box1">
							<h2>Effective Solutions</h2>
							<p class="pad_bot1">
								At vero eos et accusamus<br>et iusto odio dignissimos<br>ducimus qui.
							</p>
							<a href="index.php" class="button"><span><span>Go back</span></span></a>
							<img src="images/img1.png" class="img" alt="">
						</div>
					</div>
					<div class="box1_bot"><div class="box1_bot_left"><div class="box1_bot_right"></div></div></div>
				</article>
				<article class="col1r">
					<div class="box1_out">
						<div class="box12">
						<form action="signup.php" name="signup" id="signup" method="post" enctype="multipart/form-data" onsubmit="return check();">
						
						<table class="registr">
						<br/>
							<tr height="50">
								<td width="150">
									Login/Emp Id:
								</td>
								<td>
									<input type="text" name="username" id="username"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									First Name:
								</td>
								<td>
									<input type="text" name="firstname" id="firstname"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									Last Name:
								</td>
								<td>
									<input type="text" name="lastname" id="lastname"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									Password:
								</td>
								<td>
									<input  type="password" name="password" id="password"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									Email:
								</td>
								<td>
									<input type="text" id="email" name="email" class="txtbx"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									Mobileno:
								</td>
								<td>
									<input type="text" id="mobileno" name="mobileno" class="txtbx"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									Company:
								</td>
								<td>
									<input  type="text" name="company" id="company"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									Domain:
								</td>
								<td>
									<input  type="text" name="domain" id="domain"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									Smart Card No:
								</td>
								<td>
									<input  type="text" name="smartcard" id="smartcard"/>
								</td>
							</tr>
							<tr height="50">
								<td>
									
								</td>
								<td>
									<input  type="submit" class="submit" value="submit"/>
								</td>
							</tr>
							
						</table>
						<span><span></span></span>
						<!--<a href="index.php" class="button"><span><span>Go back</span></span></a>-->
						
						</form>
						</div>
					</div>
					<div class="box1_bot"><div class="box1_bot_left"><div class="box1_bot_right"></div></div></div>
				</article>
				<!--<article class="col1">
					<div class="box1_out">
						<div class="box1">
							<h2>Registration</h2>
							<p class="pad_bot1">
								New User can<br>Register<br>here.
							</p>
							<a href="registration.php" class="button"><span><span>Signup</span></span></a>
							<img src="images/img1.png" class="img" alt="">
						</div>
					</div>
					<div class="box1_bot"><div class="box1_bot_left"><div class="box1_bot_right"></div></div></div>
				</article>-->
				
				
				<!--<br/><br/>
							Username:<input type="text" name="username" id="username"/>
							<br/><br/><br/><br/>
							First Name:<input type="text" name="firstname" id="firstname"/>
							<br/><br/><br/><br/>
							Last Name:<input type="text" name="lastname" id="lastname"/>
							<br/><br/><br/><br/>
							Password:<input  type="password" name="password" id="password"/>
							<br/><br/><br/>
							Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="email" name="email" class="txtbx"/>
							<br/><br/><br/>
							Mobileno:<input type="text" id="mobileno" name="mobileno" class="txtbx"/>
							<br/><br/><br/>
							
							<br/><br/>
							<input type="submit" class="button" name="submit" value="submit"/><span><span></span></span>-->