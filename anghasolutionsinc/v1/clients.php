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

    <!--[if lt IE 9]>
      <script src ="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
      </script>
      <style></style>
      <![endif]-->
      <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css"
/>

      <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"
/>
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
              <div class="hero-image" style="background-image: url(images/img_25.jpg);"></div>
              <div class="container">
                <div class="hero-content">
                  <span data-animation="fadeInUp">clients</span>
                  <h3 data-animation="fadeInUp">Trusted by Clients Worldwide for Excellence and Innovation</h3>
                </div>
              </div>
            </div>
            <!-- hero slide end -->
          </div>  
        </div>
        <!-- hero slider end -->

      </section>
      <!-- /banner -->

      <!-- clients -->
      <section class="ClientsWrapper">
        <div class="container">
          <h3 class="wow fadeInUpBig"><span>Their support team goes beyond resolving tickets; </span>&nbsp;they proactively anticipate challenges before they arise. </h3>
          <ul class="wow fadeInUpBig" id="clientsList"></ul>


          <!-- contact us -->
          <div class="ctaForm">
            <div class="ctaForm_blk wow fadeInUpBig">
              <form action="api/clients-sendmail.php" id="contactForm" method="post" novalidate>
                <h4>Tell us your requirements, and <b>we will deliver the best solutions.</b></h4>

                <div class="form_row">

                  <div class="w_50 form_group">
                    <label>Name</label>
                    <input type="text" name="userName" class="form_control" required>
                  </div>

                  <div class="w_50 form_group">
                    <label>Email</label>
                    <input type="email" name="userEmail" class="form_control" required>
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
                    <input type="text" name="userLocation" class="form_control" required>
                  </div>

                  <div class="w_50 form_group">
                    <label>Company name</label>
                    <input type="text" name="companyName" class="form_control" required>
                  </div>

                  <div class="w_50 form_group">
                    <label>Industry</label>
                    <select name="industry" class="form_control" required>
                      <option value="">Select Industry</option>
                      <option>Financial sector</option>
                      <option>Healthcare</option>
                      <option>IT & Software</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>

                  <div class="w_50 form_group">
                       <label>Platform</label>
                       <select name="platform" class="form_control" required> <option value="">Select Platform</option>
                       <option>Consulting Services</option>
                       <option>Web Development</option> 
                       <option value="Other">Other</option> 
                       </select> 
                       </div>

                  <div class="w_50 form_group">
                    <label>Technology</label>
                    <select name="technology" class="form_control" required>
                      <option value="">Select technology</option>
                      <option>AI</option>
                      <option>JAVA</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>

                  <div class="w_100 form_group">
                    <label>Brief about your ideas</label>
                    <textarea name="description" class="form_control" required></textarea>
                  </div>

                  <div class="w_100 form_btn submit_row">
                    <button type="submit" class="btn btn2" id="submit_btn">Submit</button>
                     <div style="display:none" class="form_success" id="formSuccess">
                  
                </div>
                  </div>

                </div>

               
              </form>

            </div>
            <div class="ctaForm_img wow fadeInUpBig">
              <img src="images/img_26.jpg" alt="image">
            </div>
          </div>
        </div> 
      </section>     
      <!-- /clients -->

      <!-- customer services -->
      <section class="css_support_blk">
        <div class="container">
          <div class="css_in">
            <div class="css_lft wow slideInLeft">
              <span class="sec_title">Customer Support & Services</span>
              <h2>Our Support Philosophy: Proactive, Responsive, Reliable.</h2>
              <p>At Anagha Solutions our relationship with you begins after the sale. We believe that exceptional, ongoing support is what truly differentiates us.</p>
              <p>We offer a multi-tiered support structure to ensure your systems remain operational and efficient:</p>
              <p>We offer a multi-tiered support structure to ensure your systems remain operational and efficient:</p>
              <a href="contact-us.php" class="btn">Explore all support queries</a>
            </div>
            <div class="css_rht wow slideInRight">
              <div class="accordins">
                <div class="accordin_item">
                  <h5 class="accordin_toggle">Our Support Philosophy: Proactive, Responsive, Reliable.</h5>
                  <div class="accordin_cnt">
                    <p>At Anagha Solutionsinc, our relationship with you begins after the sale. We believe that exceptional, ongoing support is what truly differentiates us. We offer a multi-tiered support structure to ensure your systems remain operational and efficient:</p>
                  </div>
                </div>
                <div class="accordin_item">
                  <h5 class="accordin_toggle">Dedicated Support Helpline</h5>
                  <div class="accordin_cnt">
                    <p>Reach our technical experts directly via phone or email for immediate troubleshooting and guidance.</p>
                  </div>
                </div>
                <div class="accordin_item">
                  <h5 class="accordin_toggle">SLA-Driven Services</h5>
                  <div class="accordin_cnt">
                    <p>We offer customizable Service Level Agreements (SLAs) that guarantee response and resolution times tailored to your business-critical needs.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
    <!-- javascript includes ends here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>
    <script>
      

      const form = document.getElementById("enquiryForm");
      const submitBtn = document.getElementById("submit_btn");
      const successBox = document.getElementById("formSuccess");

if (form && submitBtn) {
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    console.log("on form submit");

    let valid = true;
    const requiredFields = form.querySelectorAll("[required]");

    requiredFields.forEach(field => {
      const group = field.closest(".form_group");

      if (!field.value.trim()) {
        field.classList.add("error");
        if (group) group.classList.add("error");
        valid = false;
      }
    });

    if (!valid) return;

    submitBtn.disabled = true;
    submitBtn.innerText = "Submitting...";
  

        // Simulate submit (replace with AJAX / PHP)
        setTimeout(() => {
          form.reset();

          // Remove all error states
          document.querySelectorAll(".error").forEach(el => el.classList.remove("error"));

          submitBtn.disabled = false;
          submitBtn.innerText = "Submit";

          // Show success message
          successBox.classList.add("show");

          // Auto hide success message
          setTimeout(() => {
            successBox.classList.remove("show");
          }, 4000);

        }, 1500);
      });
    }
  // Remove error when user types/selects
form?.addEventListener("input", function (e) {
  if (!e.target.hasAttribute("required")) return;

  const group = e.target.closest(".form_group");

  if (e.target.value.trim()) {
    e.target.classList.remove("error");
    if (group) group.classList.remove("error");
  }
});
document.addEventListener("DOMContentLoaded", function () {

  fetch("./api/clients.php")
    .then(res => {
      if (!res.ok) {
        throw new Error("Network response not OK");
      }
      return res.json();
    })
    .then(data => {

      const ul = document.getElementById("clientsList");
      if (!ul) {
        console.error("clientsList not found in DOM");
        return;
      }

      if (!Array.isArray(data)) {
        console.error("Clients data is not an array");
        return;
      }

      ul.innerHTML = ""; // clear old content

      data.forEach(item => {
        const li = document.createElement("li");

        const img = document.createElement("img");
        img.src = item.image;
        img.alt = "Client Logo";
        img.loading = "lazy";

        li.appendChild(img);
        ul.appendChild(li);
      });

      ul.style.visibility = "visible";
      ul.style.opacity = "1";

      if (typeof WOW === "function") {
        new WOW().init();
      }

    })
    .catch(err => console.error("Client render error:", err));

});


//Industry

document.addEventListener("DOMContentLoaded", () => {
  const industrySelect = document.querySelector('select[name="industry"]');

  industrySelect.addEventListener("change", function () {
    if (this.value !== "Other") return;

    // Create input field dynamically
    const input = document.createElement("input");
    input.type = "text";
    input.name = this.name;            // same name = industry
    input.className = this.className;  // keep same styles
    input.placeholder = "Enter Industry";
    input.required = true;

    // Replace select with input
    this.parentNode.replaceChild(input, this);

    // Focus cursor
    input.focus();
  });
});

//Technology

document.addEventListener("DOMContentLoaded", () => {
  const techSelect = document.querySelector('select[name="technology"]');

  techSelect.addEventListener("change", function () {
    if (this.value.toLowerCase() !== "other") return;

    // Create input field
    const input = document.createElement("input");
    input.type = "text";
    input.name = this.name;            // same name = technology
    input.className = this.className;  // keep same styles
    input.placeholder = "Enter Technology";
    input.required = true;

    // Replace select with input
    this.parentNode.replaceChild(input, this);

    // Focus cursor
    input.focus();
  });
});

//Platform


document.addEventListener("DOMContentLoaded", () => {
  const platformSelect = document.querySelector('select[name="platform"]');

  platformSelect.addEventListener("change", function () {
    if (this.value !== "Other") return;

    // Create input field dynamically
    const input = document.createElement("input");
    input.type = "text";
    input.name = this.name;            // same name = platform
    input.className = this.className;  // keep same styles
    input.placeholder = "Enter Platform";
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
    if (!phoneInput) return;

   const iti = window.intlTelInput(phoneInput, {
    initialCountry: "us",
    separateDialCode: true,
    nationalMode: false,
    allowDropdown: true,
    dropdownContainer: document.body, // IMPORTANT
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.js"
});

});


/* ================= FORM SUBMIT ================= */
document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("#contactForm");
    const messageDiv = document.getElementById("formSuccess");

    if (!form || !messageDiv) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const submitBtn = form.querySelector("button[type='submit']");

        submitBtn.disabled = true;
        submitBtn.textContent = "Sending...";

        fetch("api/clients-sendmail.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(response => {

            messageDiv.style.display = "block";
            messageDiv.classList.remove("success", "error");

            if (response.status === "success") {

                messageDiv.classList.add("success");
                messageDiv.innerHTML = "<b>Submitted successfully!</b>";

                form.reset();

            } else {

                messageDiv.classList.add("error");
                messageDiv.innerHTML = "<b>Sorry! Your request could not be sent.</b>";
            }

            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";

        })
        .catch(() => {

            messageDiv.style.display = "block";
            messageDiv.classList.add("error");
            messageDiv.innerHTML = "<b>Server error. Please try again later.</b>";

            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";
        });

    });

});

      </script>



  </body>
</html>