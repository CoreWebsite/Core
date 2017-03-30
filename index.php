<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>HappyCoder | Home Page</title>
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
    <link href="style/login.css" rel="stylesheet" type="text/css"> 
    <link href="style/main.css" rel="stylesheet" type="text/css">
    <link href="style/navigation.css" rel="stylesheet" type="text/css">
    <link href="style/register.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style/footer.css" type="text/css">
    <script src="js/popup.js" type="text/javascript"> </script>
    <link href="style/footer.css" rel="stylesheet" type="text/css">  
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
        <!-- Broken Search bar
         
       <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
     --> 
            </div>
        </div>
    </nav>
<div class="container">
<div class="row">
  <div class="col-sm-12">
   
      <!-- Left and right controls -->
      
      
   <div class="w3-content w3-display-container">   
  <img class="mySlides" src="../Images/img1.jpg" style="width:100%">
  <img class="mySlides" src="../Images/img2.jpg" style="width:100%">
  <img class="mySlides" src="../Images/img3.jpg" style="width:100%">
 <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
    
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
   </div>
    
  		
     <footer class="text-center footer">
        <div class="footer">This footer will always be positioned at the bottom of the page, but <strong>not fixed</strong>.</div>
    </footer>  
    
    
</body>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>






</html>