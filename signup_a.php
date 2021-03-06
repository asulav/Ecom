<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #login
        {
	        background:url('img/signup_form_already_signed_up.jpg') no-repeat;
	        z-index:100;
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="home.html">LiveStock</a>
	</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id = "homenav">
		<li><a href="home.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="product.php">Products</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a></li>
        <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="padder">
	<div id="formContainer">
		<form id="login" action="send_info.php" method="POST">
			<ul>
				<li><input type="name" size="17" name="firstname" id="first" placeholder="First Name" required="true" title="Must be text only." pattern="[a-zA-Z|-]+"></li>
				<li><input type="name" name="lastname" id="lastName" placeholder="Last Name" required="true" title="Must be text only." pattern="[a-zA-Z|-]+"></li>
			</ul>
			<ul>
				<li><input type="addr" size="17"  name="address" id="addr" placeholder="Address" required="true" title="Must be numeric characters followed by text only." pattern="[0-9]+[ ][a-zA-Z ]+"></li>
				<li><input type="zip" pattern="[0-9]{5}" name="zip" id="zip" placeholder="Zip Code" required="true" title="Must be exactly 5 numeric characters."></li>
			</ul>
			<ul>
				<li><input type="city" name="city"  id="city" placeholder="City" required="true" title="Must be text only." pattern="[a-zA-z ]+"></li>
				<!-- <li><input type="state"  pattern="[a-zA-z]{2}" name="state" id="state" placeholder="State" required="true" title="Please use state abbreviation."></li> -->
				<li><select  type="state" name="state" id="state" required="true">
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
				<li></select>
				<li><input type="country"  pattern="[a-zA-z]{3}" name="country" id="country" placeholder="Country" required="true" title="Please use your 3 character country code."></li>						
			</ul>
			<input id="address" name="email"  type="email" placeholder="Email" required="true" title="Valid email address: one or more characters, followed by an @, followed by one or more characters, a '.' and 2 or more characters for domain." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
			<input id="con_address" type="Confirm Email" placeholder="Confirm Email" required="true" title="Must be the same as above." oninput="checkEmail(this)">
			<script language='javascript' type='text/javascript'>
			function checkEmail(input) {
				if (input.value != document.getElementById('address').value) {
					input.setCustomValidity('Emails Must Match.');
				} else {
					input.setCustomValidity('');
					}
			}
			</script>						
			<input type="text" name="username" id="username" placeholder="Username" required="true" pattern=".{6,}" title="Must be six or more characters">
			<input type="password"  name="password" id="password" placeholder="Password" required="true" title="Your password must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
			<input type="password" name="Password" id="con_Password" placeholder="Confirm Password" title="Must be the same as above." required="true" oninput="checkPass(this)">
			<script language='javascript' type='text/javascript'>
			function checkPass(input) {
				if (input.value != document.getElementById('password').value) {
					input.setCustomValidity('Passwords Must Match.');
				} else {
					input.setCustomValidity('');
				}	
			}
			</script>
			<div id="inner_content">
				<ul>
					<li><label id="term" for = "terms" style"color:#2f5597">I agree to the <button type="button" id="mybtn" data-toggle="modal" data-target="#myModal">terms and conditions</button></label></li>
						<span style="display:inline-block; width: 20px;"></span>
					<li><input type="checkbox" name="terms" id="terms" value = "true" required></li>
				</ul>
			</div>
			<input type="submit" name="submit" value="Sign Up" />			
		</form>
	</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Terms &amp; Conditions</h4>
		</div>
	<div class="modal-body">
		<h1>Conditions of Use</h1>
			<p>Welcome to our online store! <strong>LiveStock</strong> and its associates provide their services to you subject to the following conditions. If you visit or shop within this website, you accept these conditions. Please read them carefully.
			<h2 style="text-align:center">PRIVACY</h2>
			Please review our Privacy Notice, which also governs your visit to our website, to understand our practices.
			<h2 style="text-align:center">ELECTRONIC COMMUNICATIONS</h2>
			When you visit <strong>LiveStock</strong> or send e-mails to us, you are communicating with us electronically. You consent to receive communications from us electronically. We will communicate with you by e-mail or by posting notices on this site. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.
			<h2 style="text-align:center">COPYRIGHT</h2>				
			All content included on this site, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations, and software, is the property of <strong>LiveStock</strong> or its content suppliers and protected by international copyright laws. The compilation of all content on this site is the exclusive property of <strong>LiveStock</strong>, with copyright authorship for this collection by <strong>LiveStock</strong>, and protected by international copyright laws.
			<h2 style="text-align:center">TRADE MARKS</h2>				
			<strong>LiveStock</strong> trademarks and trade dress may not be used in connection with any product or service that is not <strong>LiveStock</strong>, in any manner that is likely to cause confusion among customers, or in any manner that disparages or discredits <strong>LiveStock</strong>. All other trademarks not owned by <strong>LiveStock</strong> or its subsidiaries that appear on this site are the property of their respective owners, who may or may not be affiliated with, connected to, or sponsored by <strong>LiveStock</strong> or its subsidiaries.
			<h2 style="text-align:center">LICENSE AND SITE ACCESS</h2>
			<strong>LiveStock</strong> grants you a limited license to access and make personal use of this site and not to download (other than page caching) or modify it, or any portion of it, except with express written consent of <strong>LiveStock</strong>. This license does not include any resale or commercial use of this site or its contents: any collection and use of any product listings, descriptions, or prices: any derivative use of this site or its contents: any downloading or copying of account information for the benefit of another merchant: or any use of data mining, robots, or similar data gathering and extraction tools. This site or any portion of this site may not be reproduced, duplicated, copied, sold, resold, visited, or otherwise exploited for any commercial purpose without express written consent of <strong>LiveStock</strong>. You may not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of <strong>LiveStock</strong> and our associates without express written consent. You may not use any meta tags or any other "hidden text" utilizing <strong>LiveStock</strong>'s name or trademarks without the express written consent of <strong>LiveStock</strong>. Any unauthorized use terminates the permission or license granted by <strong>LiveStock</strong>. You are granted a limited, revocable, and nonexclusive right to create a hyperlink to the home page of <strong>LiveStock</strong> so long as the link does not portray <strong>LiveStock</strong>, its associates, or their products or services in a false, misleading, derogatory, or otherwise offensive matter. You may not use any <strong>LiveStock</strong> logo or other proprietary graphic or trademark as part of the link without express written permission.
			<h2 style="text-align:center">YOUR MEMBERSHIP ACCOUNT</h2>
			If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. If you are under 18, you may use our website only with involvement of a parent or guardian. <strong>LiveStock</strong> and its associates reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in their sole discretion.
			<h2 style="text-align:center">REVIEWS, COMMENTS, EMAILS, AND OTHER CONTENT</h2>
			Visitors may post reviews, comments, and other content: and submit suggestions, ideas, comments, questions, or other information, so long as the content is not illegal, obscene, threatening, defamatory, invasive of privacy, infringing of intellectual property rights, or otherwise injurious to third parties or objectionable and does not consist of or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings, or any form of "spam." You may not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of a card or other content. <strong>LiveStock</strong> reserves the right (but not the obligation) to remove or edit such content, but does not regularly review posted content. If you do post content or submit material, and unless we indicate otherwise, you grant <strong>LiveStock</strong> and its associates a nonexclusive, royalty-free, perpetual, irrevocable, and fully sublicensable right to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, and display such content throughout the world in any media. You grant <strong>LiveStock</strong> and its associates and sublicensees the right to use the name that you submit in connection with such content, if they choose. You represent and warrant that you own or otherwise control all of the rights to the content that you post: that the content is accurate: that use of the content you supply does not violate this policy and will not cause injury to any person or entity: and that you will indemnify <strong>LiveStock</strong> or its associates for all claims resulting from content you supply. <strong>LiveStock</strong> has the right but not the obligation to monitor and edit or remove any activity or content. <strong>LiveStock</strong> takes no responsibility and assumes no liability for any content posted by you or any third party.
			<h2 style="text-align:center">RISK OF LOSS</h2>
			All items purchased from <strong>LiveStock</strong> are made pursuant to a shipment contract. This basically means that the risk of loss and title for such items pass to you upon our delivery to the carrier.
			<h2 style="text-align:center">PRODUCT DESCRIPTIONS</h2>
			<strong>LiveStock</strong> and its associates attempt to be as accurate as possible. However, <strong>LiveStock</strong> does not warrant that product descriptions or other content of this site is accurate, complete, reliable, current, or error-free. If a product offered by <strong>LiveStock</strong> itself is not as described, your sole remedy is to return it in unused condition. 
			DISCLAIMER OF WARRANTIES AND LIMITATION OF LIABILITY THIS SITE IS PROVIDED BY <strong>LiveStock</strong> ON AN "AS IS" AND "AS AVAILABLE" BASIS.<strong>LiveStock</strong> MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THIS SITE OR THE INFORMATION, CONTENT, MATERIALS, OR PRODUCTS INCLUDED ON THIS SITE. YOU EXPRESSLY AGREE THAT YOUR USE OF THIS SITE IS AT YOUR SOLE RISK. TO THE FULL EXTENT PERMISSIBLE BY APPLICABLE LAW, <strong>LiveStock</strong> DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. <strong>LiveStock</strong> DOES NOT WARRANT THAT THIS SITE, ITS SERVERS, OR E-MAIL SENT FROM <strong>LiveStock</strong> ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. <strong>LiveStock</strong> WILL NOT BE LIABLE FOR ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF THIS SITE, INCLUDING, BUT NOT LIMITED TO DIRECT, INDIRECT, INCIDENTAL, PUNITIVE, AND CONSEQUENTIAL DAMAGES. CERTAIN STATE LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, EXCLUSIONS, OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MIGHT HAVE ADDITIONAL RIGHTS. 
			<h2 style="text-align:center">APPLICABLE LAW</h2>
			By visiting <strong>LiveStock</strong>, you agree that the laws of the state of Virginia, United States, without regard to principles of conflict of laws, will govern these Conditions of Use and any dispute of any sort that might arise between you and <strong>LiveStock</strong> or its associates.
			<h2 style="text-align:center">DISPUTES</h2>
			Any dispute relating in any way to your visit to <strong>LiveStock</strong> or to products you purchase through <strong>LiveStock</strong> shall be submitted to confidential arbitration in Virginia, United States, except that, to the extent you have in any manner violated or threatened to violate <strong>LiveStock</strong>'s intellectual property rights, <strong>LiveStock</strong> may seek injunctive or other appropriate relief in any state or federal court in the state of Virginia, United States, and you consent to exclusive jurisdiction and venue in such courts. Arbitration under this agreement shall be conducted under the rules then prevailing of the American Arbitration Association. The arbitrators award shall be binding and may be entered as a judgment in any court of competent jurisdiction. To the fullest extent permitted by applicable law, no arbitration under this Agreement shall be joined to an arbitration involving any other party subject to this Agreement, whether through class arbitration proceedings or otherwise.
			<h2 style="text-align:center">SITE POLICIES, MODIFICATION, AND SEVERABILITY</h2>
			Please review our other policies, such as our Shipping and Returns policy, posted on this site. These policies also govern your visit to <strong>LiveStock</strong>. We reserve the right to make changes to our site, policies, and these Conditions of Use at any time. If any of these conditions shall be deemed invalid, void, or for any reason unenforceable, that condition shall be deemed severable and shall not affect the validity and enforceability of any remaining condition.
			<h2 style="text-align:center">QUESTIONS:</h2>
			Questions regarding our Conditions of Usage, Privacy Policy, or other policy related material can be directed to our support staff by clicking on the "Contact Us" link in the site menu. Or you can email us at: str8ht@virginia.edu</p>
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>
<footer class="footer">
  <div class="container">
  &copy; LiveStock 2017 | All Rights Reserved | <a href="terms.html">Terms &amp; Conditions</a> | <a href="sitemap.html">Sitemap</a> | <strong>Break Away From The Herd.</strong>
    </div>
</footer>	
</body>
</html>
