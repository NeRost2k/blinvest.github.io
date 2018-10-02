<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1251" />
<link href="/files/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<title>Добро пожаловать в Solid Option LTD!</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/files/styles.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="/files/scripts.js"></script>
</head>
<body>

<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users"));
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0"));

$money	= 0.00;
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= 0.00;
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users")) + cfgSET('fakeusers');
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0")) + cfgSET('fakeactiveusers');

$money	= cfgSET('fakewithdraws');
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= cfgSET('fakedeposits');
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
	$nu	= mysql_fetch_array(mysql_query("SELECT login FROM users ORDER BY id DESC LIMIT 1"));
?>
<?php
	$nd	= mysql_fetch_array(mysql_query("SELECT * FROM deposits ORDER BY id DESC LIMIT 1"));
?>
<?php
	$no	= mysql_fetch_array(mysql_query("SELECT * FROM output ORDER BY id DESC LIMIT 1"));
?>







<div id="header">
	<div class="left"><a href="/"><img src="/img/tpl/logo.png" width="203" height="75" border="0" alt="logo"></a></div>
	<div class="right">
        <div class="krug"><br><img style="float: left; margin-right:1px; margin-top:0px;" src="/img/tpl/paid.png" width="50" height="50" border="0" alt="Payout"><div style="no-repeat right; margin-left: 60px; margin-top:5px;">Paid<br /><span style="margin-left:-22px; color:#1d8768; font-size: 17px;">$<?php print $money; ?></span></div></div>
		<div class="krug"><br><img style="float: left; margin-right:1px; margin-top:0px;" src="/img/tpl/deposits.png" width="50" height="50" border="0" alt="Payout"><div style="no-repeat right; margin-left: 60px; margin-top:5px;">Invested<br /><span style="margin-left:-22px; color:#1d8768; font-size: 17px;">$<?php print $depmoney; ?></span></div></div>
		<div class="krug"><br><img style="float: left; margin-right:1px; margin-top:0px;" src="/img/tpl/investors.png" width="50" height="50" border="0" alt="Payout"><div style="no-repeat right; margin-left: 55px; margin-top:5px;">Investors<br /><span style="margin-left:-15px; color:#1d8768; font-size: 17px;"><?php print $cwm; ?></span></div></div>
		<div class="flags">
			<a href="/?lang=en"><img src="/img/uk.png" width="24" height="24" border="0" alt="English" title="English"></a>
			<a href="/?lang=ru"><img src="/img/ru.png" width="24" height="24" border="0" alt="Русский" title="Русский"></a>
		</div>
	</div>
	<div class="right" >
		<div id="menu">
			<ul>
				<li><a href="/"><img style="float: center; margin-top:2px; margin-bottom: 0px;" src="/img/home.png" width="32" height="32" border="0" alt="home "><br/><div style="margin-top:-23px; margin-bottom: 0px; margin-left: 0px;">Home</div></a></li>
				<li><a href="/about"><img style="float: center; margin-top:2px; margin-bottom: 0px;" src="/img/about.png" width="32" height="32" border="0" alt="about "><br/><div style="margin-top:-23px; margin-bottom: 0px; margin-left: 0px;">About us</div></a></li>
				<li><a href="/investments"><img style="float: center; margin-top:3px; margin-bottom: 0px;" src="/img/investments.png" width="32" height="32" border="0" alt="investments "><br/><div style="margin-top:-23px; margin-bottom: 0px; margin-left: 0px;">Investments</div></a></li>
				<li><a href="/rules"><img style="float: center; margin-top:2px; margin-bottom: 0px;" src="/img/agreement.png" width="32" height="32" border="0" alt="agreement "><br/><div style="margin-top:-23px; margin-bottom: 0px; margin-left: 0px;">Rules</div></a></li>
				<li><a href="/faq"><img style="float: center; margin-top:2px; margin-bottom: 0px;" src="/img/faq.png" width="32" height="32" border="0" alt="faq "><br/><div style="margin-top:-23px; margin-bottom: 0px; margin-left: 0px;">FAQ</div></a></li>
				<li><a href="/news"><img style="float: center; margin-top:2px; margin-bottom: 0px;" src="/img/news.png" width="32" height="32" border="0" alt="news "><br/><div style="margin-top:-23px; margin-bottom: 0px; margin-left: 0px;">News</div></a></li>
				<li><a href="/answers"><img style="float: center; margin-top:2px; margin-bottom: 0px;" src="/img/reviews.png" width="32" height="32" border="0" alt="answers "><br/><div style="margin-top:-23px; margin-bottom: 0px; margin-left: 0px;">Reviews</div></a></li>
				<li><a href="/contacts"><img style="float: center; margin-top:2px; margin-bottom: 0px;" src="/img/contactus.png" width="32" height="32" border="0" alt="contactus "><br/><div style="margin-top:-23px; margin-bottom: 0px; margin-left: 0px;"></div>Contact</div></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="clear"></div>
<div id="cont">
	<div id="content">
	<div style="width: 970px; height: 335px; float: left; background: url('/img/tpl/ht.jpg'); border: 1px solid; margin-top: 0px; margin-bottom: 20px; margin-right: 20px; border-color: #ffffff #cccccc #cccccc #ffffff;">
<div style="font-size: 30px; color: #1d8768; margin-top: 29px; margin-left: 325px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);">INVESTING IN Binary Options</div>
<div style="font-size: 14px; color: #635d5d; margin-top: 35px; margin-left: 380px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); line-height: 18px;">Invest in trading binary options and enjoy all the advantages
one of the most liquid <br>markets are not trading on their own.<br/><br/>

Trade on your account will be managed by experienced traders <br>and your potential
wherein gain is not limited. <br/><br/>


 Trusting means our traders, you are guaranteed to get back nested <br/> amount, and the profit potential is much higher than bank interest.</div>
<div><input style="border: 1px solid rgba(0, 0, 0, 0.18); border-radius: 1px; background-color: #29a380; padding: 7px; cursor: pointer; font-size: 16px; color: #ffffff; margin-top: 30px; margin-left: 700px; text-shadow: #333333 0.5px 0.5px 0.5px;" onclick="top.location.href='/registration/';" type="button" value="Start Registration"></div>
<div align="center" style="font-size: 18px; color: #ffffff; margin-top: -260px; margin-left: -740px; text-shadow: #333333 0.5px 0.5px 0.5px; line-height: 20px;">Investment<br/>New<br/>generation!</div>
</div>

</div>
<div class="clear"></div>
	<div id="content">
		<div class="right" style="width: 265px;">
						<div class="block">


	<?php

if(!$login) {
?>

	<h3>Client account</h3>
					<table align="center" cellpadding="1" cellspacing="0">
	<form method="POST" action="/login/">
	<tr>
		<td style="padding-left: 5px;">Login</td>
		<td style="padding-left: 5px;">Password</td>
	</tr>
	<tr>
		<td><input type="text" name="user" size="11"></td>
		<td><input type="password" name="pass" size="11"></td>
	</tr>
	<tr>
		<td style="padding-left: 2px;"><a href="/registration">Registration</a><br /><a href="/reminder">Forgot Password?</a></td>
		<td align="right"><input type="submit" value="Enter" /></td>
	</tr>
	</form>
	</table>

<?php
} else {

?>

<h3>Client account</h3>
				<p align="center"><b>Welcome</b> <b style="color: #1d8768;"><br/><?php print"$login"; ?></b>!<br />
				<div style='border: 1px solid #1d8768; border-radius: 1px; border-color: #ffffff #cccccc #cccccc #ffffff; padding: 7px; font-size:15px;'> Balance:: $<b><?php print"$balance"; ?></b></div></p>
				<div class="clear"></div><a href="/enter"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:1px; margin-top:-4px;" src="/img/enter.png" width="24" height="24" border="0" alt="enter ">Fill up balance</a></div>
				<a href="/deposit"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:2px; margin-left:-1px ; margin-top:-4px;" src="/img/newdeposit.png" width="24" height="24" border="0" alt="newdeposit ">Open deposit</a></div><a href="/deposits"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:1px; margin-top:-4px;" src="/img/deposits.png" width="24" height="24" border="0" alt="deposits ">Your deposits</a></div><a href="/transfer"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:1px; margin-top:-4px;" src="/img/transfer.png" width="24" height="24" border="0" alt="transfer ">Funds transfer</a></div><a href="/withdrawal"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:1px; margin-top:-4px;" src="/img/withdrawal.png" width="24" height="24" border="0" alt="withdrawal ">Withdrawals</a></div><a href="/ref"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:1px; margin-top:-4px;" src="/img/affiliate.png" width="24" height="24" border="0" alt="ref ">Affiliate program</a></div><a href="/stat"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:1px; margin-top:-4px;" src="/img/stat.png" width="24" height="24" border="0" alt="stat ">Statistics</a></div><a href="/profile"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:1px; margin-top:-4px;" src="/img/profile.png" width="24" height="24" border="0" alt="profile ">Your profile</a></div>

				<!--<a href="/reviews"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:1px; margin-top:-4px;" src="/img/addareview.png" width="24" height="24" border="0" alt="addareview ">Добавить отзыв</a></div>-->

				<a href="/exit.php"><div class="authmenu"; style="text-shadow: #333333 0.5px 0.5px 0.5px;"><img style="float: left; margin-right:3px; margin-left:-3px;  margin-top:-4px;" src="/img/logout.png" width="24" height="24" border="0" alt="logout ">Exit</a></div>

<?php

}

?>
</div>
			<div class="br"></div>
			<div class="block">
				<h3>Partner</h3>
				<center><img src="/img/iqlogo.png" width="235" height="45" border="0" alt="iqlogo"><br><!--<a href="/video">Смотреть Видео</a>--></center>
			</div>
			<div class="br"></div>
			<div class="block">
				<h3>Statistics</h3>
				<table width="100%" >
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Official opening:</td>
		<td align="center"><font color="#29a380"><?php print date("d.m.Y", cfgSET('datestart')); ?></font></td>
	</tr>
	<tr align="center" height="25">
		<td>Users:</td>
		<td align="center"><font color="#29a380"><?php print $cusers; ?></font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Investors:</td>
		<td align="center"><font color="#29a380"><?php print $cwm; ?></font></td>
	</tr>
	<tr align="center" height="25">
		<td>Users Online:</td>
		<td align="center"><font color="#29a380"><?php print intval(mysql_num_rows(mysql_query("SELECT id FROM users WHERE go_time > ".intval(time() - 1200))) + cfgSET('fakeonline')); ?></font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Invested:</td>
		<td align="center"><font color="#29a380">$<?php print $depmoney; ?></font></td>
	</tr>
	<tr align="center" height="25">
		<td>Paid:</td>
		<td align="center"><font color="#29a380">$<?php print $money; ?></font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>New user:</td>
		<td align="center"><font color="#29a380"><?php print $nu['login']; ?></font></td>
	</tr>
	<tr align="center" height="25">
		<td>New investment:</td>
		<td align="center"><font color="#29a380">$ <br/>(<?php print $nd['sum']; ?>)</font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>New payment:</td>
		<td align="center"><font color="#29a380">$ <br/>(<?php print $no['sum']; ?>)</font></td>
	</tr>
</table>			</div>
			<div class="br"></div>
			<div class="block">
<h3>Payment Systems</h3>
				<center><img style="margin-top:1px; margin-bottom: 1px;" src="/img/ps.png" width="235" height="33" border="0" alt="Ps"></center>
			</div>
			<div class="br"></div>

		<div style="margin-bottom:6px;"></div>
		</div>
		<div class="left">
			<div class="block" style="width: 650px;">


			<?php
	defined('ACCESS') or die();
	if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {
		print "<h1>".$title."</h1><hr />";
		include "../".$page."/".$page.".php";
	} else {
		include "includes/errors/404.php";
	}
?>







</div>
<div>
<div style="width: 211px; float: left; background-color: #f4f4f4; border: 1px solid; margin-top: 20px; margin-right: 20px; border-color: #ffffff #cccccc #cccccc #ffffff;">
 <div style="background-color: #008558; border-radius: 1px; border-bottom: 1px solid #0f5225; padding: 10px; text-align: center; line-height: 20px; color: #ffffff; font-size: 18px; text-shadow: #333333 0.5px 0.5px 0.5px;">START - 198%</div>
 <div style="background-color: #29a380; border-top: 8px solid #29a380; border-bottom: 1px solid #008558; height: 50px; line-height: 20px; text-shadow: #333333 0.5px 0.5px 0.5px; text-align: center; font-size: 18px; color: #ffffff; margin-top: 1px; font-weight: bol;">44 days<br/> 4.50% per day</div>
<table width="100%" >
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Minimum amount:</td>
		<td align="center"><font color="#29a380">$10.00</font></td>
	</tr>
	<tr align="center" height="25">
		<td>Maximum amount:</td>
		<td align="center"><font color="#29a380">$250.00</font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>The term of the deposit:</td>
		<td align="center"><font color="#29a380">44 дней</font></td>
	</tr>
	<tr align="center" height="25">
		<td>Percentage of the day:</td>
		<td align="center"><font color="#29a380">4.50%</font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Total revenue:</td>
		<td align="center"><font color="#29a380">198%</font></td>
	</tr>
	</table>
 <p align="center"><input style="border: 1px solid rgba(0, 0, 0, 0.18); border-radius: 1px; background-color: #29a380; padding: 7px; cursor: pointer; color: #ffffff; text-shadow: #333333 0.5px 0.5px 0.5px; text-transform: uppercase;" onclick="top.location.href='/newdeposit/';" type="button" value="Open deposit"></p>
</div>
<div style="width: 211px; float: left; background-color: #f4f4f4; border: 1px solid; margin-top: 20px; margin-right: 20px; border-color: #ffffff #cccccc #cccccc #ffffff;">
  <div style="background-color: #008558; border-radius: 1px; border-bottom: 1px solid #0f5225; padding: 10px; text-align: center; line-height: 20px; color: #ffffff; font-size: 18px; text-shadow: #333333 0.5px 0.5px 0.5px;">BUSINESS - 250%</div>
 <div style="background-color: #29a380; border-top: 8px solid #29a380; border-bottom: 1px solid #008558; height: 50px; line-height: 20px; text-shadow: #333333 0.5px 0.5px 0.5px; text-align: center; font-size: 18px; color: #ffffff; margin-top: 1px; font-weight: bol;">50 days<br/> 5% per day</div>
 <table width="100%" >
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Minimum amount:</td>
		<td align="center"><font color="#29a380">$50.00</font></td>
	</tr>
	<tr align="center" height="25">
		<td>Maximum amount:</td>
		<td align="center"><font color="#29a380">$500.00</font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>The term of the deposit:</td>
		<td align="center"><font color="#29a380">50 days</font></td>
	</tr>
	<tr align="center" height="25">
		<td>Percentage of the day:</td>
		<td align="center"><font color="#29a380">5%</font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Total revenue:</td>
		<td align="center"><font color="#29a380">250%</font></td>
	</tr>
	</table>
 <p align="center"><input style="border: 1px solid rgba(0, 0, 0, 0.18); border-radius: 1px; background-color: #29a380; padding: 7px; cursor: pointer; color: #ffffff; text-shadow: #333333 0.5px 0.5px 0.5px; text-transform: uppercase;" onclick="top.location.href='/newdeposit/';" type="button" value="Open deposit"></p>
</div>
<div style="width: 211px; float: left; background-color: #f4f4f4; border: 1px solid; margin-top: 20px; margin-right: 20px; border-color: #ffffff #cccccc #cccccc #ffffff;">
 <div style="background-color: #008558; border-radius: 1px; border-bottom: 1px solid #0f5225; padding: 10px; text-align: center; line-height: 20px; color: #ffffff; font-size: 18px; text-shadow: #333333 0.5px 0.5px 0.5px;">EXPERT - 308%</div>
 <div style="background-color: #29a380; border-top: 8px solid #29a380; border-bottom: 1px solid #008558; height: 50px; line-height: 20px; text-shadow: #333333 0.5px 0.5px 0.5px; text-align: center; font-size: 18px; color: #ffffff; margin-top: 1px; font-weight: bol;">56 days<br/> 5.50% per day</div>
 <table width="100%" >
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Minimum amount:</td>
		<td align="center"><font color="#29a380">$100.00</font></td>
	</tr>
	<tr align="center" height="25">
		<td>Maximum amount:</td>
		<td align="center"><font color="#29a380">$1000.00</font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>The term of the deposit:</td>
		<td align="center"><font color="#29a380">56 days</font></td>
	</tr>
	<tr align="center" height="25">
		<td>Percentage of the day:</td>
		<td align="center"><font color="#29a380">5.50%</font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Total revenue:</td>
		<td align="center"><font color="#29a380">308%</font></td>
	</tr>
	</table>
 <p align="center"><input style="border: 1px solid rgba(0, 0, 0, 0.18); border-radius: 1px; background-color: #29a380; padding: 7px; cursor: pointer; color: #ffffff; text-shadow: #333333 0.5px 0.5px 0.5px; text-transform: uppercase;" onclick="top.location.href='/newdeposit/';" type="button" value="Open deposit"></p>
</div>


</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div id="footer">
<div id="content">
<div>
<div class="left" style="margin-top:10px; width: 265px;">
<h3 style="color: #ffffff;">Site Map</h3>
<ul class="left" style="margin-top:-2px;">
<li><a style = "color: #ffffff;" href = "/"> Home </a> </li>
<li><a style = "color: #ffffff;" href = "/about"> About Us </a> </li>
<li><a style = "color: #ffffff;" href = "/investments"> Investment </a> </li>
<li><a style = "color: #ffffff;" href = "/partner"> Partnership </a> </li>
<li><a style = "color: #ffffff;" href = "/security"> Security </a> </li>
<li><a style = "color: #ffffff;" href = "/rules"> Rules </a> </li>
</ul>
<ul class = "left" style = "margin-top: -2px;">
<li> <a style = "color: #ffffff;" href = "/faq"> FAQ </a> </li>
<li> <a style = "color: #ffffff;" href = "/news"> News </a> </li>
<li> <a style = "color: #ffffff;" href = "/answers"> Reviews </a> </li>
<li> <a style = "color: #ffffff;" href = "/contacts"> Contact </a> </li>
<li> <a style = "color: #ffffff;" href = "/login"> Login </a> </li>
<li> <a style = "color: #ffffff;" href = "/registration"> Registration </a> </li>
</ul>
</div>
<div class="left" style="margin-top:10px; margin-left: 25px; width: 200px;">
<h3 style="color: #ffffff;">Certificate</h3>
<div style="text-align: center;"><a href="/certificate"><img style="border: 1px solid rgba(0, 0, 0, 0.18);" src="/img//certificate.jpg" width="143" height="100" alt=""></a></div>
</div>
<div class="left" style="margin-top:10px; margin-left: 25px; width: 200px;">
<h3 style="color: #ffffff;">Contacts</h3>
<p><b>Contact us by E-mail</b><br/>E-mail: <a style='color: #ffffff;' href='mailto:solid.option.ltd@gmail.com'> rrrrrrr</a></p>
<p><b>On Skype and Telephone</b><br/>Skype: <a style='color: #ffffff;' href='skype:solid.option.ltd?add'>yyyyyyy</a><br/>Tel: <a style='color: #ffffff;' href='skype:+442042189021'>+8999909999999</a></p>
</div>
<div class="left" style="margin-top:210px; margin-left: -710px;">
&copy; 2015 BS-ltd . All rights reserved.</div>
<div class="right" style="margin-top:30px;">
		<img src="/img/footermap.png" width="220" height="115" border="0" alt="">
		<div style="margin-top:35px;"><img src="/img/secure.png" width="205" height="70" border="0" alt=""></div>
	</div>
	</div>
	<!-- Start SiteHeart code -->
<script>
(function(){
var widget_id = 750383;
_shcp =[{widget_id : widget_id}];
var lang =(navigator.language || navigator.systemLanguage
|| navigator.userLanguage ||"en")
.substr(0,2).toLowerCase();
var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
var hcc = document.createElement("script");
hcc.type ="text/javascript";
hcc.async =true;
hcc.src =("https:"== document.location.protocol ?"https":"http")
+"://"+ url;
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
<!-- End SiteHeart code -->
</div>
</div>
</body>
</html>