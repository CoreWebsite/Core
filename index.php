<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>test</title>
    <link href="image/logoicon.png" rel="icon" type="image/png">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <script src="javascript/jquary.js" type="text/javascript">
    </script>
    <link href="style/main.css" rel="stylesheet" type="text/css">
    <link href="style/navigation.css" rel="stylesheet" type="text/css">
    <link href="style/register.css" rel="stylesheet" type="text/css">
    <script src="js/register.js">
    </script>
    <link href="style/login.css" rel="stylesheet" type="text/css">
    <script src="js/login.js">
    </script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button"></button> <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="navbar-default" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="tutorials.php">Tutorials</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a>
                    </li>
                    <li>
                        <a href="#" onclick="document.getElementById('id02').style.display='block'"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    
    
    
    </nav>
    	
    <div class="col-sm-2 text-left">
        <h1>Welcome col 2</h1>
        <p></p>
        <hr>
        <h3></h3>
        <p></p>
    </div>
    <div class="col-sm-10 text-center">
        <h1>Welcome TEST col 10</h1>
        
        <div class="slideshow-container">
  <div class="mySlides fade">
    <img src="img1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <img src="img2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <img src="img3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
        
        
        
        
    </div>
    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>
    <div class="modal" id="id01">
        <span class="close" onclick="document.getElementById('id01').style.display='none'" title="Close Modal">×</span>
        <form action="/action_page.php" class="modal-content animate">
            <div class="container">
                <label><b>Email</b></label> <input name="email" placeholder="Enter Email" required="" type="text"> <label><b>Password</b></label> <input name="psw" placeholder="Enter Password"
                required="" type="password"> <label><b>Repeat Password</b></label> <input name="psw-repeat" placeholder="Repeat Password" required="" type="password"> <input checked="checked" type=
                "checkbox"> Remember me
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <div class="clearfix">
                    <button class="cancelbtn" onclick="document.getElementById('id01').style.display='none'" type="button">Cancel</button> <button class="signupbtn" type="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
    <div class="modal" id="id02">
        <span class="close" onclick="document.getElementById('id02').style.display='none'" title="Close Modal">&times;</span>
        <div class="container" style="background-color:#f1f1f1">
            <form>
                <label><b>Username</b></label> <input name="uname" placeholder="Enter Username" required="" type="text"> <label><b>Password</b></label> <input name="psw" placeholder="Enter Password"
                required="" type="password"> <button type="submit">Login</button> <input checked="checked" type="checkbox"> Remember me <button class="cancelbtn" onclick=
                "document.getElementById('id02').style.display='none'" type="button">Cancel</button> <span class="psw">Forgot <a href="#">password?</a></span>
            </form>
        </div>
    </div>
</body>

<script> 
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

</script>




</html>