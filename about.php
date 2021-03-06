<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LifeStock</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="about.css">
  <link rel="stylesheet" type="text/css" href="home.css">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="about.html">About</a></li>
        <li><a href="product.php">Products</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['login_status']) == true) : ?>{
        <li><a>Hello! <?php echo($_SESSION['first']);?></a></li>
        <li><a href ="logout.php">logout</a></li>
        <?php else : ?>
        <li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a></li>
        <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
  </nav>
  <div class="container">	
		<div class="row">
			<div class="col-lg-12">
        <div class="three-columns">
            <div id="sidebar-left">
                <img src="img/veggies_resize.jpg" class="img-circle">
                <h3>It 'Pays' to LiveStock</h3>
                <p>Safe time &amp; money by ordering fresh produce from <strong>LiveStock</strong>. Support local organic farmers, and be healthy in the process. Sign-up today to get special deals and discounts</p>
            </div>
				<div id="upper_content">
          <div id="mid_message">
          <h1>LiveStock</h1>
          <div id="inner_content">
             <h3>Break Away from the Herd.</h3>
             <hr>
             <div id="button_cols">
             <a href="signup.php"><button class="btn btn-default btn-lg" OnClick = href="signup.php" id ="homebutton"><i class="fa fa-hand-o-right" aria-hidden="true" id ="getstartedfont"></i> Get Started</button></a>  
             <a href="product.html"><button class="btn btn-default btn-lg" OnClick = href="product.html" id ="homebutton"><i class="fa fa-shopping-cart" aria-hidden="true" id ="getstartedfont"></i> Shop</button></a>               
            </div>
          </div>
          </div>
          <div id="lower_content">
            <div id="lower_message">
            <div id="inner_content">
               <h3>Why "Break Away from the Herd." ?</h3>               
            </div>
            <p>Being short on time is not a problem exclusive to college students. Everyone can benefit from time-saving technologies, as well as the proven benefits of fresh produce. LiveStock provides an alternative to farmer's markets and grocery stores. Rather than you going to the farmers, we bring the farmers to you. Local organic foods delivered right to your door for reasonable prices - what's not to like? <br> <strong><p style="text-align: center;">Break Away From The Herd!</p></strong></p>            
            </div>
        </div>
            <div id="sidebar-right">
                <img src="img/walnuts_resize.jpg" class="img-circle">
                <h3>What We Go 'Nuts' About</h3>
                <p>
                  <li>Supporting local farmers</li>
                  <li>Encouraging healthy and delicious food choices</li>
                  <li>Providing quick delivery</li>
                  <li>Spreading community awareness</li>
                  <li><u>Saving you money</u></li>
                </p>                  
            </div>
        <div>
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
