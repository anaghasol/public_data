<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- title -->
    <title>ANAGHA - BUILD WITH PURPOSE</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- css includes start here -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- css includes ends here -->
    
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css"
/>

      <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>

    <!--[if lt IE 9]>
      <script src ="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
      </script>
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
              <div class="hero-image" style="background-image: url(images/img_27.jpg);"></div>
              <div class="container">
                <div class="hero-content">
                  <span data-animation="fadeInUp">contact us</span>
                  <h3 data-animation="fadeInUp">Start Your Journey with Us by Reaching Out</h3>
                </div>
              </div>
            </div>
            <!-- hero slide end -->
          </div>  
        </div>
        <!-- hero slider end -->

      </section>
      <!-- /banner -->

      <!-- contact us -->
      <div class="cta_page">
        <div class="container">
          <div class="ctap_in">
            <div class="cta_lft">
              <div class="cta_head wow fadeInUpBig">
                <h2>Let's Connect with us</h2>
                <h4>Their support team doesn't just answer ticketsâ€”they anticipate challenges. </h4>
                <h5>Email, call, or complete the form to learn how Anagha can solve your messaging problem</h5>
              </div>
              <div class="cta_add wow fadeInUpBig">
                <address>
                  <strong>Solutions</strong>
                  <p>
                    <b>Address:</b><br>10824 E Crystal Falls Pkwy SUITE #503, Leander, TX 78641, United States<br><br><b><a href="tel:5129007825">512-900-7825</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="tel:5126706309">512-670-6309</a></b>
                  </p>
                </address>
              </div>
              <div class="cta_add wow fadeInUpBig">
                <address>
                  <strong>India location</strong>
                  <p>
                    <b>Address:</b><br>Parvathapur Road Peerzadiguda, Gullam Ali Guda village, Hyderabad,Telangana-500098<br><br><b><a href="mailto:info@anaghasolutionsinc.com">info@anaghasolutionsinc.com</a></b>
                  </p>
                </address>
              </div>
              <div class="cta_add wow fadeInUpBig">
                <address>
                  <strong>Customer support</strong>
                  <p>Our support team is available arround the clock to address any concerns or queries you may have.<br><br><b><a href="mailto:suport@anaghasolutionsinc.com">suport@anaghasolutionsinc.com</a></b>
                  </p>
                </address>
              </div>
              <div class="cta_add wow fadeInUpBig">
                <address>
                  <strong>Feedback and suggestions</strong>
                  <p>We value your feedback and are continuosly working to improve <b>Anagha</b>. Your input is crucial in shapping the future of <b>Anagha Solutions.</b><br><br><b><a href="mailto:info@anaghasolutionsinc.com">info@anaghasolutionsinc.com</a></b>
                  </p>
                </address>
              </div>
            </div>
            <div class="cta_rht">
              <div class="ctaForm_blk wow fadeInUpBig">
              <form method="post" action="api/contact-sendmail.php" id="contactForm2" novalidate>
                  <div class="formInfoLink">
                <h3>Get in touch<br><small>You can reach us anytime</small></h3>
                <b><a href="mailto:info@anaghasolutionsinc.com">info@anaghasolutionsinc.com</a></b>
                </div>
                <div class="form_row">
                    <div class="w_50 form_group">
                        <label>Name</label>
                  <input type="text"
       id="userName"
       name="userName"
       class="form_control"
       placeholder="Your name"
       required>
       </div>

                  <div class="w_50 form_group">
                    <label>Email</label>
                    <input type="email" name="userEmail" class="form_control" placeholder="example@name.com" required>
                  </div>
                 <div class="w_50 form_group">
  <label>Phone</label>
  <input
    type="tel"
    name="userPhone"
    class="form_control"
    id="phone"
    required
  >
</div>
                  
                  <div class="w_50 form_group">
                    <label>Location</label>
                    <input type="text" name="userLocation" class="form_control" placeholder="Your location" required>
                  </div>
<div class="w_50 form_group">
  <label>Subject</label>
  <select class="form_control" name="subject" id="subjectSelect" required>
    <option value="">Select your requirement</option>
    
    <option value="Other">Other</option>
  </select>
</div>

                  <!--<div class="w_50 form_group"> -->
                  <!--<label>Industry</label>-->
                  <!--<select name="industry" class="form_control" required>-->
                  <!--     <option value="">Select Industry</option>-->
                  <!--     <option>Financial sector</option> -->
                  <!--     <option>Healthcare</option> -->
                  <!--     <option>IT & Software</option> -->
                  <!--     <option value="Other">Other</option>-->
                  <!--     </select> -->
                  <!--     </div>-->
                  <div class="w_100 form_group">
                    <label>Message</label>
                    <textarea class="form_control" placeholder="Describe your subject here" name="description"></textarea>
                  </div>
                  <div class="w_100 form_btn submit_row">
                      
    <button type="submit" class="btn btn2" id="submit_btn">Submit</button>
    <div style="display:none" class="form_success" id="formSuccess">
                  
                </div>
    </div>
     
                </div>
                
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /contact us -->

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
      
    <!-- javascript includes starts here -->
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <script src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>
    <!-- javascript includes ends here -->
    <script>
document.addEventListener("DOMContentLoaded", function () {

  const form = document.querySelector("#contactForm2");
  const submitBtn = document.getElementById("submit_btn");
  const messageDiv = document.getElementById("formSuccess");

  if (!form) return;

  form.addEventListener("submit", function (e) {

    e.preventDefault(); // ✅ STOP normal redirect

    let isValid = true;

    // Validate required fields
    form.querySelectorAll(".form_group").forEach(group => {

      const requiredFields = group.querySelectorAll("[required]");
      let groupValid = true;

      requiredFields.forEach(field => {
        if (field.value.trim() === "") {
          groupValid = false;
        }
      });

      if (!groupValid) {
        group.classList.add("invalid");
        isValid = false;
      } else {
        group.classList.remove("invalid");
      }

    });

    if (!isValid) return;

    // Disable button while sending
    submitBtn.disabled = true;
    submitBtn.innerText = "Sending...";

    const formData = new FormData(form);

    fetch("api/contact-sendmail.php", {
      method: "POST",
      body: formData
    })
    .then(res => res.json())
    .then(response => {

      messageDiv.style.display = "inline-block";

      if (response.status === "success") {
        messageDiv.className = "form_success success";
        messageDiv.innerHTML = "Submitted successfully!";
        form.reset();
      } else {
        messageDiv.className = "form_success error";
        messageDiv.innerHTML = "Something went wrong!";
      }

      submitBtn.disabled = false;
      submitBtn.innerText = "Submit";

    })
    .catch(() => {

      messageDiv.style.display = "block";
      messageDiv.className = "form_success error";
      messageDiv.innerHTML = "Server error!";
      submitBtn.disabled = false;
      submitBtn.innerText = "Submit";

    });

  });

  // Remove error when user types
  form.querySelectorAll(".form_control").forEach(field => {

    field.addEventListener("input", () => {
      field.closest(".form_group")?.classList.remove("invalid");
    });

    field.addEventListener("change", () => {
      field.closest(".form_group")?.classList.remove("invalid");
    });

  });

});

      
      //Clients fetching
      
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

// //Industry input

// document.addEventListener("DOMContentLoaded", () => {
//   const industrySelect = document.querySelector('select[name="industry"]');

//   industrySelect.addEventListener("change", function () {
//     if (this.value !== "Other") return;

//     // Create input field dynamically
//     const input = document.createElement("input");
//     input.type = "text";
//     input.name = this.name;            // same name = industry
//     input.className = this.className;  // keep same styles
//     input.placeholder = "Enter Industry";
//     input.required = true;

//     // Replace select with input
//     this.parentNode.replaceChild(input, this);

//     // Focus cursor
//     input.focus();
//   });
// });


//Requirement input

document.addEventListener("DOMContentLoaded", () => {
  const industrySelect = document.querySelector('select[name="subject"]');

  industrySelect.addEventListener("change", function () {
    if (this.value !== "Other") return;

    // Create input field dynamically
    const input = document.createElement("input");
    input.type = "text";
    input.name = this.name;            // same name = industry
    input.className = this.className;  // keep same styles
    input.placeholder = "Enter Subject";
    input.required = true;

    // Replace select with input
    this.parentNode.replaceChild(input, this);

    // Focus cursor
    input.focus();
  });
});


//Country code



document.addEventListener("DOMContentLoaded", function () {

    const phoneInput = document.querySelector("#phone");
    if (!phoneInput) return; // ✅ prevents modal break

    const iti = window.intlTelInput(phoneInput, {
        initialCountry: "us",
        separateDialCode: true,
        nationalMode: false,
        allowDropdown: true,
        dropdownContainer: document.body,
        utilsScript:
          "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.js"
    });

    // ✅ SAFE: no keydown, no modal interference
    phoneInput.addEventListener("input", function () {
        if (/[a-zA-Z]/.test(this.value)) {
            iti.openDropdown();
            this.value = "";
        }
    });

});

//Get a free demo pointer



document.addEventListener("DOMContentLoaded", function () {

    const params = new URLSearchParams(window.location.search);
    const subjectValue = params.get("subject");

    const subjectSelect = document.getElementById("subjectSelect");
    const nameField = document.getElementById("userName");

    if (subjectValue && subjectSelect) {

        // Check if option already exists
        let optionExists = [...subjectSelect.options].some(
            option => option.value === subjectValue
        );

        // If not, create it dynamically
        if (!optionExists) {
            const newOption = document.createElement("option");
            newOption.value = subjectValue;
            newOption.textContent = subjectValue;
            subjectSelect.appendChild(newOption);
        }

        // Select it
        subjectSelect.value = subjectValue;
    }

    // Focus name field
    if (nameField) {
        nameField.focus();
    }

});





      </script>

  </body>
</html>