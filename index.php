<!-- HOME/ABOUT page
This page gives a brief overview of the website and provide links for navigating the website.
Also gives the mission and brief history of the league.
 -->
<!-- contact form php -->
<?php

if ($_POST['submit']) {

  if (!$_POST['email']) {
    $error.="<br/>- Please enter your email";
  }
    if (!$_POST['subject']){
        $error.="<br/>- Please select a subject";
    }
  if (!$_POST['message']) {
    $error.="<br/>- Please enter a message";
  }
  
  if ($error) {
    $result='<div class="alert alert-danger" role="alert"><i class="fa fa-times" aria-hidden="true"></i><strong>Whoops, there is an error</strong>. Please correct the following: '.$error.'</div>';
  } else {
    mail("westtxrollerderby@gmail.com", "Contact message", "Email: ".$_POST['email']."Message: ".$_POST['message']);
    
    {
    $result='<div class="alert alert-success" role="alert"><i class="fa fa-check" aria-hidden="true"></i>Thank you, We\'ll be in touch shortly</div>';
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WTRD | Home</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

  <link href='https://fonts.googleapis.com/css?family=Antic|Baloo Da|Bungee' rel='stylesheet' text='text/css'>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript" async></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

            <!-- browser icon -->
  <link rel="shortcut icon" href="./images/sugarSkull_favicon.png" type="image/x-icon" />
</head>
<body>
		<!-- Navigation Start -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-wtrd-color"  id="wayUp">
      <a class="navbar-brand" href="./home.php">
        <img src="./images/dollzLogo.png" class="d-inline-block align-center img-fluid" id='logo'  width="8%" height="8%" alt="">
        <span class="largeDisplay">West Texas Roller Derby <span class="dividerColor">|</span></span> <small>WTRD</small>
      </a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="home.php">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="events.php">Events</a>
          <a class="nav-item nav-link" href="practice.php">Practice</a>
          <a class="nav-item nav-link" href="sponsor.php">Sponsor</a>
          <a class="nav-item nav-link" href="gallery.php">Gallery</a>
          <a class="nav-item nav-link" href="#Contact">Contact</a>
        </div>
      </div>
    </nav>
    	<!-- Navigation End -->

    	<!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
        <li data-target="#carousel" data-slide-to="4"></li>
        <li data-target="#carousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./images/pic1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/Game/RealDealPhotos-6607.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/Fun/RealDealPhotos-6794.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/Game/RealDealPhotos-6747.jpg" alt="Forth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/Fun/RealDealPhotos-6657.jpg" alt="Fifth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/Game/RealDealPhotos-6814.jpg" alt="Sixth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    	<!-- Carousel End -->

    	<!-- Intro Start -->
    <div class="container-fluid section1">
    	<div class="mx-auto info-block" id="landing-header">
            <h1>West Texas Roller Derby</h1>
            </br>
            <h6>Lubbock, Texas Premier Women's Flat Track Roller Team</h6>
	    </div>
	      
	    <div id="top" class="col-8 mx-auto">
	          <!-- Humble Statement of how WTRD is more awesome than puppies serving you mimosas in tiny suits... -->
	        <div class="mission info-block">
	            <h3>WTRD Mission</h3>
	            <p><em><q>...To provide athletic opportunities for women and recreational entertainment for the community while perpetuating the popularity of women’s flat track roller derby and the integrity of the league.</q></em></p>
	        </div>
	    </div>
    </div>
    	<!-- Intro End -->

    <div class="imageSections">
    	<div class="imageDiv">
    		<img class="d-block w-100 images" src="./images/line-skates.jpg">
    	</div>
    	<div class="overlay1"></div>
    </div>

    	<!-- About Team Start -->
    <div class="container-fluid section3">
    	<div class="about info-block">
            <h3>WTRD</h3>
            <p>The West Texas Roller Derby league began in 2007, known then as the West Texas Roller Dollz. WTRD officially changed their name in 2017. In the same year, WTRD began the process of becoming a non-profit organization.</p>
                        
            <p>WTRD is a charity and community focused sports organization, which is skater owned and operated. WTRD is comprised of a diverse group of strong-minded, strong-spirited and strongly skilled women who love the sport of flat track roller derby and are determined to see it take a permanent hold in Lubbock.</p>

            <p>However, WTRD is more than just a sports club. We foster leadership in our skaters and believe in giving back to the community that supports us. Our vision is to deliver a powerful and positive image to the South Plains Community.</p>
        </div>
    </div>
    	<!-- About Team End -->

    <div class="imageSections">
    	<img class="d-block w-100 images" src="./images/Game/RealDealPhotos-6625-cropped.jpg"> <!-- change name to divider not cropped -->
    	<div class="overlay1"></div>
    </div>

    	<!-- Schedule and Calendar Start -->
    <div class="happenings row">
    	<div class="schedule col col-lg-6 ol-md-6 col-sm-12 col-12">
    		<h3>Season Schedule</h3>
    		<ul>
    			<li>El Paso Roller Derby vs. WTRD @ <a href="https://www.facebook.com/events/291143971576378/" alt="Facebook Event Page" target="_blank">El Fronteriso</a> March 23 7:00 PM</li>
    			<li>580 Roller Girls vs. WTRD @ <a href="https://www.facebook.com/events/616125922191086/" alt="Facebook Event Page" target="_blank">Great Plains</a> Coliseum 6:00 PM</li>
    			<li>Brandies Tournament @ <a href="https://www.facebook.com/events/2262842827269743/" alt="Facebook Event Page" target="_blank">Greeley, CO</a> June 1 - 2 All Day Event</li>
    			<li>TBA vs. WTRD @ <a href="SorryBud.html" alt="No Facebook Event Page">Location</a> & Time are TBA</li>
          <li>ACRG vs. WTRD @ <a href="SorryBud.html" alt="No Facebook Event Page">Mission Concepción Sports Park</a> September 14 7:00 PM</li>
    		</ul>
    		<p><a href="events.php">View Full Schedule</a></p>
    	</div>
    	<div class="practices col col-lg-6 col-md-6 col-sm-12 col-12">
    		<h3>Practice</h3>
    		<p>Practices are on Tuesday and Thursday nights @ 6:30pm to 9:00pm and held at <a href="https://www.yourskatingrink.com/" target="_blank">Crazy Skates</a>.</p>
    		<p>New skaters are always welcome to join practices.</p>
    		<p><a href="practice.php">More Practice Information</a></p>
    	</div>
    </div>
    	<!-- Schedule and Calendar End -->

    <div class="imageSections">
    	<img class="d-block w-100 images" src="./images/togetherImage.jpg">
    	<div class="overlay1"></div>
    </div>

</body>

<footer id="Contact">
	<!-- Contact Form and Social Media Start -->
	<div class="row">
		<div class="social col col-lg-6 ol-md-6 col-sm-12 col-12" align="center">
			<div>
            	<img src="./images/dollzLogo.png" class="wtrdLogo">
            </div>
			    <!-- facebook, snapchat, instagram, help -->
                <!-- Facebook -->
            <a href="https://www.facebook.com/WTXRD/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                <!-- Instagram -->
            <a href="https://www.instagram.com/westtexasrollerderby/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                <!--Twitter -->
            <a href="https://twitter.com/wtrd" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
		</div>

		<div class="contactForm col col-lg-6 ol-md-6 col-sm-12 col-12">
			<h4 align="center"><b>Contact Us Today!</b></h4>
          <?php echo $result;?>
          <!--<p>Send a messge via the form below.</p>-->

          <form action="?" method="post" role="form">
                        <!-- Email address -->
                <div class="form-group col col-12 col-sm-6 col-md-6 col-lg-6 no-gutters has-error" id="email">
                  <label for="email"><b>Email Address</b></label>
                  <input type="email" class="form-control input-group" name='email' id="email" placeholder="*Email" value="<?php echo $_POST['email']; ?>" required>
                </div>
                        <!-- Subject -->
                <div class="form-group col col-12 col-sm-6 col-md-6 col-lg-6 no-gutters has-error">
                  <label for="subject"><b>Subject</b></label>
                  <select class="form-control" name="subject" id="subject">
                    <option selected>Choose...</option>
                    <option value="1">General</option>
                    <option value="2">New Skater</option>
                    <option value="3">Sponsorship</option>
                  </select>
                </div>
                        <!-- Message -->
                <div class="form-group col col-12 col-sm-8 col-md-8 col-lg-8 no-gutters" id="message">
                  <label for="message"><b>Message</b></label>
                  <textarea class="form-control" name="message" id="message" rows="4" placeholder="*Message" required><?php echo $_POST['message']; ?></textarea>
                </div>

                <div class="g-recaptcha" data-sitekey="6Lf93CIUAAAAAMPgvPgq3Mb4QfE9UD4ZZQahYdGU"> 
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label"></label>
                  <div class="submitButton">
                    <input type="submit" name="submit" class="btn btn-outline-success" value="Send">
                  </div>
                </div>
          </form>
		</div>
	</div>
		<!-- Contact Form and Social Media End -->

		<!-- Dev Link Start -->
	<div class="col col-12 mr-auto" id="dev">
    	<p><small><a href="https://kyknight.github.io/" target="_blank"><img src="./images/PhoeWorks_Logo.png" width = 40em height = 40em>PhoeWorks</a></small></p>
  </div>
  	<!-- Dev Link Start -->
</footer>
  <div class="scroll-top sticky-top">
    <a class="button scrollable" href="#wayUp"><i class="fas fa-chevron-up fa-3x"></i></a>
  </div>
</html>