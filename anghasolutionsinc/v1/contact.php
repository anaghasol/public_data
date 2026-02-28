<?php
if(isset($_POST['submit'])) {
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}
	if(trim($_POST['email_id']) == '')  {
		$hasError = true;
	}else {
		$email = trim($_POST['email_id']);
	}
	if(trim($_POST['phone']) == '')  {
		$hasError = true;
	} else {
		$phone = trim($_POST['phone']);
	}
	if(trim($_POST['message']) == '')  {
		$hasError = true;
	} else {
		$message = trim($_POST['message']);
	}
    
    
	//Check to make sure that the subject field is not empty
	$subject = 'Contact Request from Anagha Solutions';

	if(!isset($hasError)) {
		$emailTo = 'sai.shiva@anaghasolutionsinc.com'; 
		$body = "Name: $name \n\nEmail: $email \n\nphone: $phone \n\nMessage: $message";
		$headers= 'From:'; 
		$headers.=''; 
		$headers.='<'.$email.'>';
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
 <html lang="zxx">
     <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta charset="utf-8" />
         <title>Contact Us</title>
         <meta name="description" content="Anagha Solutions" />
         <link rel="apple-touch-icon" href="apple-touch-icon.png" />
         <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png" />
         <meta http-equiv="x-ua-compatible" content="ie=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
         <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
         <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
         <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css" />
         <link rel="stylesheet" type="text/css" href="assets/css/rsmenu-main.css" />
         <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css" />
         <link rel="stylesheet" type="text/css" href="style.css" />
         <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
     </head>
     <body>
         <div id="loader" class="loader">
             <div class="spinner"></div>
         </div>
         <div class="full-width-header">
             <header id="rs-header" class="rs-header">
                 <div class="menu-area menu-sticky">
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-lg-3">
                                 <div class="logo-area">
                                     <a href="index.html"><img src="assets/images/logo.png" alt="logo" /></a>
                                 </div>
                             </div>
                             <div class="col-lg-9 text-right">
                                 <div class="rs-menu-area">
                                     <div class="main-menu">
                                         <div class="mobile-menu">
                                             <a class="rs-menu-toggle">
                                                 <i class="fa fa-bars"></i>
                                             </a>
                                         </div>
                                         <nav class="rs-menu">
                                             <ul class="nav-menu">
                                                 <!--<li class=""><a href="index.html">Home </a></li>-->
                                                 <li class=""><a href="about.html">About Us</a></li>
                                                 <li class=""><a href="services.html">Services</a></li>
                                                 <li class="menu-item-has-children">
                                                    <a href="#">Products </a>
                                                    <ul class="sub-menu">
                                                         <li><a href="srpos.html">SRPOS</a></li>
                                                         <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                         <li><a href="financial-metrics.html">Financial Metrics</a></li>
                                                    </ul>
                                                    <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                 </li>
                                                 <li class=""><a href="staffing-services.html">Staffing Services</a></li>
                                                 <li class="menu-item-has-children">
                                                    <a href="#">Careers </a>
                                                    <ul class="sub-menu">
                                                         <li><a href="overview.html">Overview</a></li>
                                                         <li><a href="benefits.html">Benefits</a></li>
                                                         <li><a href="job-openings.html">Job Openings</a></li>
                                                    </ul>
                                                    <span class="rs-menu-parent"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                 </li>
                                                 <li class=""><a href="portfolio.html">Portfolio</a></li>
                                                 <li class="current-menu-item"><a href="contact.php">Contact Us</a></li>
                                             </ul>
                                         </nav>
                                     </div>
                                     
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </header>
         </div>
         <div class="main-content">
             <div class="rs-breadcrumbs">
                 <div class="container">
                     <div class="content-part text-center">
                         <h1 class="breadcrumbs-title white-color mb-0">Contact Us </h1>
                     </div>
                 </div>
             </div>
             <div class="rs-contact inner pt-100 md-pt-80">
                 <div class="container">
                     <div class="content-info-part mb-60">
                         <div class="row gutter-16">
                             <div class="col-lg-4 md-mb-30">
                                 <div class="info-item">
                                     <div class="icon-part">
                                         <i class="fa fa-at"></i>
                                     </div>
                                     <div class="content-part">
                                         <h4 class="title">Phone Number </h4>
                                         <a href="tel:5129007825">512-900-7825 </a> <br>
                                         <a href="tel:5126706309">512-670-6309 </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4 md-mb-30">
                                 <div class="info-item">
                                     <div class="icon-part">
                                         <i class="fa fa-envelope-o"></i>
                                     </div>
                                     <div class="content-part">
                                         <h4 class="title">Email Address </h4>
                                         <a href="mailto:info@anaghasolutionsinc.com">info@anaghasolutionsinc.com</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4">
                                 <div class="info-item">
                                     <div class="icon-part">
                                         <i class="fa fa-map-o"></i>
                                     </div>
                                     <div class="content-part">
                                         <h4 class="title">Office Address </h4>
                                         <p>10824 E. Crystal Falls Parkway, Unit 503, Leander, TX, 78641</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="contact-form-part">
                         <div class="row md-col-padding">
                             <div class="col-md-5 custom1 pr-0">
                                 <div class="img-part"></div>
                             </div>
                             <div class="col-md-7 custom2 pl-0">
                                 <div id="form-messages"></div>
                                 <form id="contactform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                     <div class="sec-title mb-53 md-mb-42">
                                         <div class="sub-title white-color">Let's Talk </div>
                                         <h2 class="title white-color mb-0">Get In Touch </h2>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <input type="text" name="name" id="name" placeholder="Name" required="">
                                         </div>
                                         <div class="col-md-6">
                                             <input type="text" name="phone" id="phone" placeholder="Phone Number" required="">
                                         </div>
                                         <div class="col-md-12">
                                             <input type="email" name="email_id" id="email_id" placeholder="E-mail" required="">
                                         </div>
                                         <div class="col-md-12">
                                             <textarea name="message" id="message" placeholder="Your Message Here" required=""></textarea>
                                         </div>
                                         <div class="col-md-12">
                                             <button id="submitButton" name="submit" class="form-btn" type="submit">Submit Now</button>
                                         </div>
                                     </div>
                                 </form>
                      
                      </div>
                         </div>
                     </div>
                 </div>
                 <div class="g-map mt-100 md-mt-80">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27483.084612472416!2d-97.815341!3d30.566659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51a623512886bbe0!2sAnagha%20Solutions%20Inc!5e0!3m2!1sen!2sin!4v1628694714186!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 </div>
             </div>
         </div>
         <footer id="rs-footer" class="rs-footer">
             <div class="container">
                 <div class="footer-bottom">
                     <div class="row y-middle">
                         <div class="col-lg-6 col-md-8 sm-mb-21">
                             <div class="copyright">
                                 <p>&copy; Copyright 2021 Anagha Solutions. All Rights Reserved. </p>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-4 text-right sm-text-center">
                             <ul class="footer-social">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                 <li><a href="https://www.linkedin.com/company/18499898/admin/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </footer>
         <div id="scrollUp">
             <i class="fa fa-angle-up"></i>
         </div>         
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="assets/js/rsmenu-main.js"></script>
         <script src="assets/js/main.js"></script>
         
         
<script src="assets/js/common.js"></script>
<script src="form-validation.js"></script>
 
<?php if(isset($hasError)) { //If errors are found ?>
    <div class="alert alert-danger" id="failure">
  <div class="alert-text">
    <button type="button" class="close" onclick="$('#loading').hide();$('#eMsg').html(''); $('#failure').hide();$('.modal-backdrop').css({display:'none'});$('.main-container').removeClass('bfixed');">×</button>
    <h3>Error</h3>
    <div class="error-msg"><p>Please Provide Valid details</p></div>
  </div>
</div>
 
<?php } ?>
<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
    <div class="alert alert-success" id="success">
  <div class="alert-text">
    <button type="button" class="close" onclick="$('#loading').hide();$('#sMsg').html(''); $('#success').hide();$('.modal-backdrop').css({display:'none'});$('.main-container').removeClass('bfixed');">×</button>
    <h3>Success</h3>
    <div class="success-msg">
        <p>Hi <strong class="cblue"><?php echo $name;?> !</strong><br>
      Thank you for contacting. We'll be in touch with you soon.</p>
      </div>
  </div>
</div>
    
<?php } ?>
    
    

    
    
    
<script> jQuery(document).ready(function(){ jQuery(".close").click(function(){jQuery(".notification-box").hide();}); }); </script>

   
<script>
	$(document).ready(function(){
		$(".close").click(function(){$(".notification-box").hide();});
	});
</script>
    
         
     </body>
 </html>
