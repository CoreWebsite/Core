<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Linked script and shit for our page  || Start of bootraps-->
  <title> HappyCoder | Home Page</title>
  <link rel="icon" type="image/png" href="image/??.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 
    <!--  ======================================! Our Own Coded System  !============================= -->
 
 
  <link rel="stylesheet" href="StartPageStyle/nav.css" type="text/css">
  <link rel="stylesheet" href="StartPageStyle/main.css" type="text/css">
  <link rel="stylesheet" href="HC-CustomCss/HC-Style.css" type="text/css">
  <link href="style/popuplr.css" rel="stylesheet" type="text/css">
  <!-- LR = Login and Register Form Style-->
  
  
  <!-- DISABLED CODE FOR NOW! -->
  <!--  <link href="style/register.css" rel="stylesheet" type="text/css">  
  <link href="style/login.css" rel="stylesheet" type="text/css">  -->
  
  <!--  ======================================! Style of test Can be removed later =============================  -->
  
  

</head>

	<body data-offset="60" data-spy="scroll" data-target=".navbar" id="myPage">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
				</div><!-- Navigation bar/menu bar -->
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li>
							<a href="#album">Album</a>
						</li><!-- -->
						<li>
							<a href="#TimeLine">TimeLine</a>
						</li>
						<li>
							<a href="#test1">test</a>
						</li>
						<li>
							<a href="#test2">test</a>
						</li>
						<li>
							<a href="#contact">Contact</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<!--  -->
						<li>
							<a href="#" onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a>
						</li>
						<li>
							<a href="#" onclick="document.getElementById('id02').style.display='block'"><span class="glyphicon glyphicon-log-in"></span> Login</a>
						</li>
					</ul>
					<div class="modal" id="id01">
						<span class="close" onclick="document.getElementById('id01').style.display='none'" title="Close Modal">×</span>
						<form action="/action_page.php" class="modal-content animate">
							<div class="container_login">
								<label><b>Email</b></label> <input name="email" placeholder="Enter Email" required type="text"> <label><b>Password</b></label> <input name="psw" placeholder="Enter Password" required
								type="password"> <label><b>Repeat Password</b></label> <input name="psw-repeat" placeholder="Repeat Password" required type="password"> <input checked="checked" type="checkbox"> Remember
								me
								<p>
									By creating an account you agree to our <a href="#">Terms & Privacy</a>.
								</p>
								<div class="clearfix">
									<button class="signupbtn" type="submit">Sign Up</button> <button class="cancelbtn" onclick="document.getElementById('id01').style.display='none'" type="button">Cancel</button>
								</div>
							</div>
						</form>
					</div>
					<div class="modal" id="id02">
						<span class="close" onclick="document.getElementById('id02').style.display='none'" title="Close Modal">×</span>
						<form action="/action_page.php" class="modal-content animate">
							<div class="container_login">
								<label><b>Username</b></label> <input name="uname" placeholder="Enter Username" required type="text"> <label><b>Password</b></label> <input name="psw" placeholder="Enter Password"
								required="" type="password"> <button type="submit">Login</button> <button class="cancelbtn" onclick="document.getElementById('id02').style.display='none'" type="button">Cancel</button>
								<input checked="checked" type="checkbox"> Remember me <span class="psw">Forgot <a href="#">password?</a></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</nav>
        
        
        <br>
        <br>
        <br>
        <br>

<center>
<h1>Term of Use Read Please!</h1>        
</center>	
		
    <div class="HC-Row-tos">
                <div class="HC-Column-tos-left"></div>
                <div class="HC-Column-tos-Center">      	
                
                <h1>Terms of Service</h1>
<p>Last updated: March 31, 2017</p>
<p>Please read these Terms of Service (&quot;Terms&quot;, &quot;Terms of Service&quot;) carefully before using the happycoder.com website (the &quot;Service&quot;) operated by happycoders (&quot;us&quot;, &quot;we&quot;, or &quot;our&quot;).</p>
<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. This Terms of Service is licensed by <a href="https://termsfeed.com">TermsFeed</a> to happycoders.</p>
<p><strong>Accounts</strong></p>
<p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>
<p>You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</p>
<p>You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>
<p><strong>Links To Other Web Sites</strong></p>
<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by happycoders.</p>
<p>happycoders has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that happycoders shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
<p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
<p><strong>Termination</strong></p>
<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
<p>Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.</p>
<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<p><strong>Governing Law</strong></p>
<p>These Terms shall be governed and construed in accordance with the laws of Sweden, without regard to its conflict of law provisions.</p>
<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
<p><strong>Changes</strong></p>
<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 15 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
<p><strong>Contact Us</strong></p>
<p>If you have any questions about these Terms, please contact us.</p>
</div>
                <div class="HC-Column-tos-right"></div>
            </div> 





<br>
<br>
<br>


           
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Sweden</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> testtesst </p>
      <p><span class="glyphicon glyphicon-envelope"></span> testtest</p>
      <p><span></span>HappyCoder © 2017</p>
    </div>
    <div id="contact" class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
        
			<!--  ======================================! Custom Javascript for the website  !============================= -->
			<script type="text/javascript" src="/JS/jquary.js"></script>
  			<script type="text/javascript" src="/ImageJS/modernizr.js"></script>
        	<script type="text/javascript" src="/JS/popup.js"></script>
	
    </body>  
</html>