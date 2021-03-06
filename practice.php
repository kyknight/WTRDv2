<!-- 
This page provides practice schedule with locations and times. Also gives an idea of what to expect at a 
practice along with helpful video links and safety help with safety videos links.
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
	<title>WTRD | Practice</title>
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
      <a class="navbar-brand" href="./index.php">
        <img src="./images/dollzLogo.png" class="d-inline-block align-center img-fluid" id='logo'  width="8%" height="8%" alt="">
        <span class="largeDisplay">West Texas Roller Derby <span class="dividerColor">|</span></span> <small>WTRD</small>
      </a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="events.php">Events</a>
          <a class="nav-item nav-link active" href="practice.php">Practice</a>
          <a class="nav-item nav-link" href="sponsor.php">Sponsor</a>
          <a class="nav-item nav-link" href="gallery.php">Gallery</a>
          <a class="nav-item nav-link" href="#Contact">Contact</a>
        </div>
      </div>
    </nav>
    	<!-- Navigation End -->

    	<!-- Narrow Image Start -->
    <div class="practiceHeader pageHeader">
      <h1><b>PRACTICE</b></h1>
    </div>
    	<!-- Narrow Image End -->
    	
    	<!-- Practice Info Section Start -->
    <div class="container-fluid practiceSection row">
	    			<!-- Practice Start -->
	    <div class="practice col col-12 col-sm-12 col-md-12 col-lg-4">
        <h3>Practice</h3>
        <p>Practices are on Tuesday and Thursday nights @ 6:30pm to 9:00pm and held at <a href="https://www.yourskatingrink.com/" target="_blank">Crazy Skates</a>. Practices are open to all skaters (new and seasoned).</p>
        <p>Limited gear will be available at practice. Gear is required to skate.</p>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="200" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=crazy%20skates%20Lubbock%20tx%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:200px;width:200px;}.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:200px;}</style></div>
	    </div>
      <div class="col col-12 col-sm-12 col-md-12 col-lg-8">
        <h3>New Skaters & Practices</h3>
          <p>New skaters will focus on learning the basics of roller skating, derby skills, and endurance for the sport. All new skaters will have their skills assessed periodically to determine if they are ready to advance into learning additional skills to ultimately being eligible to skate in league scrimmages and games <em>(We call those "Bouts"</em>.).</p>
          <p>Want to know more about what to expect in a roller derby practice or what muscle groups you will use? <a href="#expectLinks">View Helpful Links</a></p>
          <p>Want to know what gear is needed and roller derby safety information? <a href="#safetyLinks">View Safety Links</a></p>
          <p>Do you still have some questions? <a href="#Contact">Fill out a contact form</a></p>
          <p>If you have been wanting to try roller derby or just wondering what WTRD is all about, why not <b>NOW</b>?</p>
      </div>
	    			<!-- Practice End -->
    </div>
    	<!-- Practice Info Section End -->

    <div class="imageSections">
    	<img class="d-block w-100 images" src="./images/Game/RealDealPhotos-6694-cropped.jpg">
    </div>

    	<!-- What To Expect Section Start -->
    <div class="container-fluid row expectSection" id="expectLinks">
    	<div class="expect col col-lg-8 ol-md-8 col-sm-12 col-12">
            <h3>What to Expect</h3>
            <p>50% fun & 50% work <small>(but really 100% fun-work)</small>.</p>
            <p>Be ready to strap on the gear and skates to learn how to skate then how to fall safely for you and other skaters. The practices, on and off skates, will contain crosstraining basics.</p>
            <p>The gear required are quad skates <small>(obviously, a pair of skates; one for each foot.)</small>, helmet, elbow pads, knee pads, wrist guards, and mouth guard.</p>
        </div>
        <div class="helpfulInfo col col-lg-4 ol-md-4 col-sm-12 col-12">
            <h3>Helpful Links</h3>
    		<ul>
    			<li><a href="https://www.youtube.com/watch?v=m2RdXNAe3pc" target="_blank">Roller Derby Explained</a></li>
          <li><a href="https://www.youtube.com/user/rollerderbyathletics/playlists" target="_blank">Roller Derby Athletics</a></li>
    			<li><a href="https://www.treblemaker909.com/" target="_blank">Treblemaker 909</a></li>
          <li><a href="https://www.youtube.com/watch?v=-zqyxFR5fm4" target="_blank">Devaskation - Advice for New Skaters</a></li>
    		</ul>
        </div>
    </div>
    	<!-- What To Expect Section End -->

    <div class="imageSections">
    	<img class="d-block w-100 images" src="./images/Game/RealDealPhotos-6779-cropped.jpg">
    </div>

    	<!-- Safety Section Start -->
    <div class="container-fluid row safetySection" id="safetyLinks">
    	<div class="safety col col-12 col-sm-12 col-md-8 col-lg-8">
            <h3>Safety Information</h3>
            <p>Safety is of the utmost importance in any sport, and skating is not an exception. All types of skating require a certain level of physical fitness and safety measures. Roller derby is very much a contact sport with the potential for injury. There is a high level of importance placed on dealing with injuries, tips for training, and the use of protective gear. Mouth guards and helmets protect skaters from getting a concussion, pads protect against bodily injury, and more options of protective wear allow for a more safe skate.</p>
            <h5>Balance and Core</h5>
            <p>Strengthening your core is a major gain in skating. By doing exercises other than skating that uses your whole body, without a focus on the same muscle groups you are used to, aids in balance. Repetitively working on the same muscles over and over can actually be detrimental to those muscles. Cross-training is highly recommended for skaters. Endurance cross-training can help easing into the sport.</p>
        </div>
        <div class="safetyHelp col col-12 col-sm-12 col-md-4 col-lg-4">
            <h3>Helpful Links</h3>
    		<ul>
          <li><a href="https://www.youtube.com/watch?v=OcOe-R5Upew" target="_blank">Indy Jamma Jones - How to Fall Safely</a></li>
          <li><a href="https://www.youtube.com/playlist?list=PLZ8VI5KSb7p1_nqwbmXexfvXeyzdwJe3i" target="_blank">Indy Jamma Jones - How to Skate</a></li>
    			<li><a href="https://smoothgrooveskaters.com/how-to-fall-safely-on-roller-skates/" target="_blank">How to Fall Safely</a></li>
    			<li><a href="https://resources.wftda.org/education/" target="_blank">WFTDA Education</a></li>
    		</ul>
        </div>
    </div>
    	<!-- Safety Section End -->

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
  	<!-- Dev Link End -->
</footer>
	<div class="scroll-top sticky-top">
  		<a class="button scrollable" href="#wayUp"><i class="fas fa-chevron-up fa-3x"></i></a>
    </div>
</html>