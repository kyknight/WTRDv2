<!-- SPONSOR/COMMUNITY OUTREACH/CHARITY
This page provides the league's sponsorship information along with benefits and how to become a sponsor. Also 
provides special thanks section.
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
	<title>WTRD | Sponsor</title>
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
          <a class="nav-item nav-link" href="practice.php">Practice</a>
          <a class="nav-item nav-link active" href="sponsor.php">Sponsor</a>
          <a class="nav-item nav-link" href="gallery.php">Gallery</a>
          <a class="nav-item nav-link" href="#Contact">Contact</a>
        </div>
      </div>
    </nav>
    	<!-- Navigation End -->
    	
    	<!-- Narrow Image Start -->
    <div class="sponsorHeader pageHeader">
      <h1><b>SPONSORSHIP</b></h1>
    </div>
    	<!-- Narrow Image End -->
    	
    	<!-- Benefits Info Section Start -->
    <div class="benefitsSection">
      <h3>Why Sponsor WTRD</h3>
    </div>
    <div class="container-fluid benefitsSection row">
	    <div class="benefits col col-12 col-sm-12 col-md-12 col-lg-6">
	       <img class="audStat" src="./images/WTRD-audienceStatics.png">
	    </div>
      <div class="col col-12 col-sm-12 col-md-12 col-lg-6">
        <p>WTRD is a skater owned and operated league striving to gain non-profit status. Thus, WTRD relies heavily on sponsorship from companies like yours to provide affordable entertainment to the Lubbock community. All proceeds from sponsorship, donations, monthly dues, ticket sales, and merchandise sales are used to cover costs such as bout production, advertising, and printed materials, travel expenses, uniforms, and rental of our practice facility. Your sponsorship can bring new customers to your business and help keep a wildly successful group of athletes rolling for another season.</p>
        <p>As the only flat track roller derby league in Lubbock, West Texas Roller Derby is poised to make an impact on the South Plains. WTRD hosted events are extremely fun, well promoted, and very well organized. Our fans include a large cross section of people in the Lubbock and South Plains area. As part of our community involvement, our league shares the spotlight with our favorite charities by donating time and a portion of our bout proceeds.</p>
        <p>We continually work to increase league awareness with personal appearances at community events and fundraisers throughout the year. We keep a growing fan base included in all activities using Facebook, email, and more. As one of our sponsors, you can reap the benefits of all that extra advertisement, as well as, the undying love of our skaters and volunteers. Let us not forget mention our loyal fans, who without them, WTRD would not be was it is today.</p>
        <h5>WTRD Goals</h5>
          <ul>
            <li>Make more substantial impact on the Lubbock community.</li>
            <li>Provide finances for traveling expenses.</li>
            <li>League growth at all levels; skating officials, non-skating officials, and all levels of skaters.</li>
            <li>Provide training clinics for local and surrounding area skaters to continue to improve their skill level.</li>
            <li>Acquire a local space for practices <em>(warehouse space is optimal)</em> and host games.</li>
          </ul>
      </div>
    </div>
    	<!-- Benefits Info Section End -->

    <div class="imageSections">
    	<img class="d-block w-100 images" src="./images/lubbockCon.jpg">
    </div>

      <!-- How to become a Sponsor Section Start -->
    <div class="container-fluid row beSponsorSection">
    	<div class="sponsorImage col col-12 col-sm-12 col-md-4 col-lg-4">
    		<img class="d-block imgSponsor" src="./images/becomeSponsor.png">
    	</div>
    	<div class="sponsorSteps col col-12 col-sm-12 col-md-8 col-lg-8">
            <h5>Sponsorship Packages</h5>
            <p>Sponsorship packages may include Pre-Event Exposure, Social Media Exposure, In-Event Exposure, Tickets, and Program Advertisements. WTRD offers several types of sponsorship packages with a wide range of costs. For more information over the sponsorship packages, such as costs and included options, please download the sponsorship form below.</p>
            
            <p>Do you want to sponsor WTRD and get your company's <em>(or your name)</em> out there? Follow these steps:</p>
            <ul>
              <li>Download the <a href="./2019-WTRDSponsorPacket.pdf" target="_blank" title="Let's start the journey!">sponsorship form</a></li>
              <li>Fill out the form.</li>
              <li>Contact WTRD with the form below.</li>
            </ul>
        </div>
    </div>
    	<!-- How to become a Sponsor Section End -->

    <div class="imageSections">
    	<img class="d-block w-100 images" src="./images/RealDealPhotos-seis-cropped.jpg">
    </div>

    	<!-- Current Sponsors Section Start -->
    <div class="container-fluid sponsorSection">
      <h5>Current Sponsors</h5>
      <div class="row justify-content-center">
        <h4>No current Sponsors</h4>
      </div>
    </div>
    	<!-- Current Sponsors Section End -->

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

	<!-- Dev Link End -->
	<div class="col col-12 mr-auto" id="dev">
    	<p><small><a href="https://kyknight.github.io/" target="_blank"><img src="./images/PhoeWorks_Logo.png" width = 40em height = 40em>PhoeWorks</a></small></p>
  	</div>
  	<!-- Dev Link End -->
</footer>
  <div class="scroll-top sticky-top">
    <a class="button scrollable" href="#wayUp"><i class="fas fa-chevron-up fa-3x"></i></a>
  </div>
</html>