<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- responsive meta tag -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <!-- title -->
    <title>ANAGHA - BUILD WITH PURPOSE</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- css includes start here -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />

    <!-- css includes ends here -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <style></style>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
     <?php include 'header.php'; ?>

      <!-- banner -->
      <section class="banner banner2">
        <!-- hero slider Start -->
        <div class="banner-wrap">
          <div class="banner-slider">
            <!-- hero slide start -->
            <div class="banner-slide">        
              <div class="hero-image" style="background-image: url(images/leadershipImage.jpg);"></div>
              <div class="container">
                <div class="hero-content">
                  <span data-animation="fadeInUp">Who are we</span>
                  <h3 data-animation="fadeInUp">Innovation thrives where curiosity meets,
ownership and accountability.</h3>
                </div>
              </div>
            </div>
            <!-- hero slide end -->
          </div>  
        </div>
        <!-- hero slider end -->
      </section>
      <!-- /banner -->

<section class="ClientsWrapper tst_wrapper leadership_section">
  <div class="container">

    <h3 class="wow fadeInUpBig">
      <span>Leadership that builds</span>&nbsp;technology with purpose.
    </h3>

    <div class="careerslist leadership_list">

      <!-- Leader -->
      <div class="leadership_Card wow fadeInUpBig">
        <div class="leader_img">
          <img src="leadershipImages/" alt="Founder & CEO">
        </div>

        <div class="leader_content">
          <h5>Akhil Reddy</h5>
          <span class="job_loc">Founder & CEO</span>

          <p>
            We build technology with purpose,
so businesses grow with confidence.
          </p>

          <div class="leader_social">
            <a href="#">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Leader -->
      <div class="leadership_Card wow fadeInUpBig">
        <div class="leader_img">
          <img src="leadershipImages/venkatsir.png" class="venkat-img" alt="architect">
        </div>

        <div class="leader_content">
          <h5>Venkat Parsi</h5>
          <span class="job_loc">Architect</span>

          <p>
          Scalable platforms are built today,
for problems we’ll face tomorrow.
          </p>

          <div class="leader_social">
            <a href="https://www.linkedin.com/in/venkat-parsi-53aab74?utm_source=share_via&utm_content=profile&utm_medium=member_android">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>   

      <!-- Leader -->
      <div class="leadership_Card wow fadeInUpBig">
        <div class="leader_img">
          <img src="leadershipImages/	
ravi.jpeg" alt="Engineer">
        </div>

        <div class="leader_content">
          <h5>Ravi Samadula</h5>
          <span class="job_loc">Full-Stack Engineer</span>

          <p>
          From interface to infrastructure, building it all with clarity.
          </p>

          <div class="leader_social">
            <a href="https://www.linkedin.com/in/samadula-ravi?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>   
      
       <!-- Leader -->
      <div class="leadership_Card wow fadeInUpBig">
        <div class="leader_img">
          <img src="leadershipImages/roja.png" alt="Engineer">
        </div>

        <div class="leader_content">
          <h5>Roja Thathe</h5>
          <span class="job_loc">Full-stack Engineer</span>

          <p>
         Connecting front-end vision with back-end precision.
          </p>

          <div class="leader_social">
            <a href="#">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>   
    
    </div>
  </div>
</section>

<!-- clients -->
<div class="clients_blk wow fadeInUpBig">
  <div class="container">
    <div class="ourCients" id="clientsContainer">
      <!-- Images will load here dynamically -->
    </div>
  </div> 
</div>
<!-- /clients -->

      <div class="page_btm">
        <!-- our clients -->
        <div class="container">
          <?php include 'footer.php'; ?>
        </div>
      </div>
    </div>

    <div class="modal" id="contactModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="page_head">
              <div class="col-6 sec_head">
                <h4>Raise your request</h4>
                <p>
                  Share your requirements and we’ll get back to you shortly.
                </p>
              </div>
              <a href="javascript:void(0)" class="close_modal">x</a>
            </div>
            <div class="aboutUs2">
              <div class="abus_rht">
                <form>
                  <div class="form_row">
                    <div class="w_50 form_group">
                      <label>Name:</label>
                      <input
                        type="text"
                        name=""
                        class="form_control"
                        placeholder="Enter your name"
                      />
                    </div>
                    <div class="w_50 form_group">
                      <label>E-mail</label>
                      <input
                        type="text"
                        name=""
                        class="form_control"
                        placeholder="Enter email address"
                      />
                    </div>
                    <div class="w_50 form_group">
                      <label>Phone number</label>
                      <input
                        type="text"
                        name="phoneNumber"
                        class="form_control"
                        placeholder="Enter your phone number"
                      />
                    </div>
                    <div class="w_50 form_group">
                      <label>Company name</label>
                      <input
                        type="text"
                        name="companyName"
                        class="form_control"
                        placeholder="Company name"
                      />
                    </div>
                    <div class="w_50 form_group">
                      <label>Location</label>
                      <input
                        type="text"
                        name="location"
                        class="form_control"
                        placeholder="Enter role"
                      />
                    </div>
                    <div class="w_50 form_group">
                      <label>Basic Requirement</label>
                      <input
                        type="text"
                        name="location"
                        class="form_control"
                        placeholder="Basic Requirement"
                      />
                    </div>
                    <div class="w_50 form_group">
                      <label>Reference if any</label>
                      <input
                        type="text"
                        name="location"
                        class="form_control"
                        placeholder="Reference if any"
                      />
                    </div>
                    <div class="w_50 form_group">
                      <label>Technology</label>
                      <select class="form_control" name="industry" required="">
                        <option value="">Select Technology</option>
                        <option>Artificial intelligence</option>
                        <option>DevOps</option>
                        <option>Angular & React</option>
                        <option>JAVA</option>
                      </select>
                    </div>

                    <div class="w_100 form_group test_feild">
                      <label>Subject</label>
                      <textarea class="form_control"></textarea>
                    </div>
                    <div class="w_100 form_submit">
                      <button class="btn">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- javascript includes starts here -->
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <script src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- javascript includes ends here -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {

  fetch("api/clients.php")
    .then(res => res.json())
    .then(data => {

      const container = document.getElementById("clientsContainer");

      if (!container) return;

      container.innerHTML = "";

      data.forEach(item => {

        const div = document.createElement("div");
        div.className = "oc_img";

        const img = document.createElement("img");
        img.src = item.image;
        img.alt = "Client Logo";

        div.appendChild(img);
        container.appendChild(div);
      });

      // ðŸ”¥ IMPORTANT: Reinitialize Slick AFTER images added
      if ($('.ourCients').hasClass('slick-initialized')) {
        $('.ourCients').slick('unslick');
      }

    $('.ourCients').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2500,   // wait 2.5 seconds
  speed: 800,            // smooth slide speed
  cssEase: 'ease-in-out',
  infinite: true,
  arrows: false,
  dots: false,
  pauseOnHover: true,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 5
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});


    });

});


</script>
  </body>
</html>


