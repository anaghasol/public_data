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
  <!-- intl-tel-input CSS -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/css/intlTelInput.css">

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
              <div class="hero-image" style="background-image: url(images/img_28.jpg);"></div>
              <div class="container">
                <div class="hero-content">
                  <span data-animation="fadeInUp">careers</span>
                  <h3 data-animation="fadeInUp">Shape Your Career with Purpose and Passion</h3>
                </div>
              </div>
            </div>
            <!-- hero slide end -->
          </div>  
        </div>
        <!-- hero slider end -->

      </section>
      <!-- /banner -->

      <!-- careers -->
      <section class="ClientsWrapper career_wrapper">
        <div class="container">
          <h3 class="wow fadeInUpBig"><span>Their support team doesn't just answer</span>&nbsp;tickets—they anticipate challenges. </h3>

          <div class="careerslist">
            <div class="career_Card wow fadeInUpBig">
              <div class="cc_top">
                <div class="cct_in">
                  <div class="cct_lft">
                    <h6></h6>
                    <input type="hidden" id="jobIdField" name="job_id">

                    <span class="job_loc"></span>
                  </div>
                  <span class="btn btn_gray jobType"></span>
                </div>
                <div class="job_dis">
                  <p></p>
                </div>
              </div>
              <div class="cc_btm">
                <b></b>
                <a href="javascript:void(0)" class="btn acm_btn">Apply Now</a>
              </div>
            </div>
             <div class="career_Card2 wow fadeInUpBig" style="background-image: url(images/img_29.jpg);">
              <div class="cc2_in">
                <h5>Here, your code doesn't just compile<b>—it transforms industries.?</b> You’ll ship features that thousands of users rely on to do their best work</h5>
                <a href="contact-us.php" class="btn btn_white">Join Now</a>
              </div>
            </div>
           </div>
        </div>
      </section>  
      <!-- /careers -->

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
    

    <div class="modal" id="applyCareers">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="page_head">
              <div class="col-6 sec_head">
                <h4>Raise your request</h4>
                <p>Share your requirements and we’ll get back to you shortly.</p>
              </div>
              <a href="javascript:void(0)" class="close_modal">x</a>
            </div>
            <div class="aboutUs2">
              <div class="abus_rht">
                  <form id="careerForm" action="api/send-mail.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="job_id" id="jobIdField">
<input type="hidden" name="job_title" id="jobTitleField">

                  <div class="form_row">
                    <div class="w_50 form_group">
                        <label>First Name</label>
                      <input type="text" name="firstName" class="form_control" placeholder="Enter firstname">
                    </div>
                    <div class="w_50 form_group">
                      <label>Last Name</label>
                      <input type="text" name="lastName" class="form_control" placeholder="Enter lastname">
                    </div>
                    <div class="w_50 form_group">
                      <label>Email</label>
                     <input type="email" name="userEmail" class="form_control"  placeholder="Enter your email" required>

                    </div>
                    <div class="w_50 form_group">
  <label>Mobile</label>
  <input
  type="tel"
  id="phone"
  name="phone"
  class="form_control"
  placeholder="Enter Mobile number"
/>

</div>
                    <div class="w_50 form_group">
                      <label>Current Location</label>
                      <input type="text" name="location" class="form_control" placeholder="Enter role">
                    </div>
                    <div class="w_50 form_group">
                      <label>Education Details</label>
                      <select class="form_control" name="education">
                        <option value="">Select Education</option>
                        <option>Graduate</option>
                        <option>Post-Graduate</option>
                        
                      </select>
                    </div>
                    <div class="w_50 form_group">
                      <label>Experience </label>
                      <select class="form_control" name="experience">
                        <option value="">Select Experience</option>
                        <option>0-1 Year</option>
                        <option>2-3 Years</option>
                        <option>3-4 Years</option>
                        <option>4-5 Years</option>
                        <option>More than 5 Years</option>
                      </select>
                    </div>
                    <div class="w_50 form_group">
                      <label>Current working company</label>
                      <input type="text" name="currentcompanyName" class="form_control" placeholder="Company name">
                    </div>
      <div class="w_50 form_group">
  <label>Domain</label>
  <select class="form_control" name="domain" id="domainSelect">
    <option value="">Select Domain</option>
    <option>Software Development</option>
    <option>Cloud Computing</option>
    <option>Artificial Intelligence</option>
    <option>Web & Mobile App Development</option>
    <option>Project & Product Management</option>
    <option>IT Support & Technical Services</option>
    <option value="Other">Other</option>
  </select>
</div>

                    <div class="w_50 form_group">
                      <label>Technology</label>
                      <select class="form_control" name="technology" id="technologySelect">
                        <option value="">Select Technology</option>
                        <option>Artificial intelligence</option>
                        <option>DevOps</option>
                        <option>Angular & React</option>
                        <option>JAVA</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="w_50 form_group">
                      <label>Are you willing to relocate ?</label>
                      <div class="checkboxesList">
                        <input type="radio" name="relocate" id="yes-radio" value="Yes">
<label for="yes-radio">Yes</label>

<input type="radio" name="relocate" id="no-radio" value="No">
<label for="no-radio">No</label>

                      </div>
                    </div>
                    <div class="w_50 form_group">
                      <label>Notice period</label>
                      <select class="form_control" name="notice">
                        <option value="">Select Notice Period</option>
                        <option>1 Month</option>
                        <option>2 Months</option>
                        <option>3 Months</option>
                        <option>More than 3 Months</option>
                      </select>
                    </div>
                    
                    <div class="w_100 form_group">
                      <label>LinkedIn profile</label>
                      <input type="text" name="LinkedInurl" placeholder="LinkedIn profile" class="form_control">
                    </div>
                    <div class="w_100 form_group">
                      <label>Upload resume</label>
                      <label class="file-drop-area" id="dropArea">
                        <i>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="Upload--Streamline-Sharp-Material" height="24" width="24">
                            <path fill="#000000" d="M11.25 16.175V6.9l-3 3 -1.075 -1.075L12 4l4.825 4.825 -1.075 1.075 -3 -3v9.275h-1.5ZM4 20V14.925h1.5V18.5h13v-3.575h1.5V20H4Z" stroke-width="0.5"></path>
                          </svg>
                        </i>
                        <span>Drag & Drop your resume here or click to select</span>
                        <input type="file" name="resumeFile" id="resumeInput" accept=".pdf,.doc,.docx">
                      </label>

                      <div id="fileDetails" class="file-details" style="display:none;">
                        <span id="fileName">Filename.pdf</span>
                        <button type="button" id="removeFile">X</button>
                      </div>

                    </div>
                    <div class="w_100 form_group">
                      <div class="customCheckbox">
                        <input type="checkbox" name="terms" id="termsConditions" required />

                        <label for="termsConditions">The information contained in this email is provided for general purposes only.</label>
                      </div>
                    </div>
                   <div class="w_100 form_submit submit_row">
    <button type="submit" class="btn">Submit</button>
    <div style="display:none" class="form_success" id="formSuccess"></div>
</div>

                  </div>
                </form>
              </div>
            </div>
          </div>
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
                <p>Share your requirements and we’ll get back to you shortly.</p>
              </div>
              <a href="javascript:void(0)" class="close_modal">x</a>
            </div>
            <div class="aboutUs2">
              <div class="abus_rht">
                <form method="POST" action="contact-process.php">
                  <div class="form_row">
                    <div class="w_50 form_group">
                      <label>Name:</label>
                      <input type="text" name="userName" class="form_control" placeholder="Enter your name">
                    </div>
                    <div class="w_50 form_group">
                      <label>E-mail</label>
                      <input type="text" name="userEmail" class="form_control" placeholder="Enter email address">
                    </div>
                    <div class="w_50 form_group">
                      <label>Phone number</label>
                      <input type="text" name="userPhone" class="form_control" placeholder="Enter your phone number">
                    </div>
                    <div class="w_50 form_group">
                      <label>Company name</label>
                      <input type="text" name="companyName" class="form_control" placeholder="Company name">
                    </div>
                    <div class="w_50 form_group">
                      <label>Location</label>
                      <input type="text" name="userLocation" class="form_control" placeholder="Enter role">
                    </div>
                    <div class="w_50 form_group">
                      <label>Basic Requirement</label>
                      <input type="text" name="requirement" class="form_control" placeholder="Basic Requirement">
                    </div>
                    <div class="w_50 form_group">
                      <label>Reference if any</label>
                      <input type="text" name="reference" class="form_control" placeholder="Reference if any">
                    </div>
                    <div class="w_50 form_group">
                      <label>Technology</label>
                      <select class="form_control" name="technology" required="">
                        <option value="">Select Technology</option>
                        <option>Artificial intelligence</option>
                        <option>DevOps</option>
                        <option>Angular & React</option>
                        <option>JAVA</option>
                      </select>
                    </div>
                    
                  <div class="w_100 form_group test_feild">
                    <label>Subject</label>
                    <textarea name="userMessage" class="form_control"></textarea>
                  </div>
                    <div class="w_100 form_submit">
                      <button type="submit" class="btn">Submit</button>
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
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"></script>

    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <script src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
   


    <!-- javascript includes ends here -->



   
<script>
$(document).ready(function() {
/* ================= OPEN MODAL ================= */
let iti;
$(document).on('click', '.acm_btn', function (e) {
    e.preventDefault();

    const jobId = $(this).attr('data-jobid');
    const jobTitle = $(this).attr('data-title');

    

    $('#jobIdField').val(jobId);
    $('#jobTitleField').val(jobTitle);

    $('#applyCareers').addClass('show');
    $('body').addClass('modal-open');
    $('body').addClass('modal-open phone-modal-active');
    
    setTimeout(function () {

    const phoneInput = document.querySelector("#phone");

    if (!phoneInput) return;

    // If already initialized, destroy first
    if (iti) {
        iti.destroy();
    }

    iti = window.intlTelInput(phoneInput, {
        initialCountry: "us",
        separateDialCode: true,
        nationalMode: false,
        allowDropdown: true
    });

}, 300);

});
    
});


    /* ================= CLOSE MODAL ================= */

    function closeModal() {
        const modal = $('#applyCareers');
        if (modal.length) {
            modal.removeClass('show');
            $('body').removeClass('modal-open');
            $('body').removeClass('modal-open phone-modal-active');
        }
    }

    $(document).on('click', '.close_modal', function() {
        closeModal();
    });

    $(document).on('click', '#applyCareers', function(e) {
        if ($(e.target).is('#applyCareers')) {
            closeModal();
        }
    });

    /* ================= FILE UPLOAD ================= */

    const dropArea = document.getElementById('dropArea');
    const fileInput = document.getElementById('resumeInput');
    const fileDetails = document.getElementById('fileDetails');
    const fileNameSpan = document.getElementById('fileName');
    const removeBtn = document.getElementById('removeFile');

    if (dropArea && fileInput && fileDetails && fileNameSpan && removeBtn) {

        function showFile(file) {
            if (!file) return;
            fileNameSpan.textContent = file.name;
            fileDetails.style.display = 'flex';
            dropArea.style.display = 'none';
        }

        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 0) showFile(fileInput.files[0]);
        });

        removeBtn.addEventListener('click', () => {
            fileInput.value = '';
            fileDetails.style.display = 'none';
            dropArea.style.display = 'flex';
        });
    }

   
    /* ================= CLIENTS ================= */

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

            if ($('.ourCients').hasClass('slick-initialized')) {
                $('.ourCients').slick('unslick');
            }

            $('.ourCients').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2500,
                speed: 800,
                cssEase: 'ease-in-out',
                infinite: true,
                arrows: false,
                dots: false,
                pauseOnHover: true,
                responsive: [
                    { breakpoint: 1200, settings: { slidesToShow: 5 }},
                    { breakpoint: 992, settings: { slidesToShow: 4 }},
                    { breakpoint: 768, settings: { slidesToShow: 3 }},
                    { breakpoint: 576, settings: { slidesToShow: 2 }},
                    { breakpoint: 400, settings: { slidesToShow: 1 }}
                ]
            });

        });

    /* ================= CAREERS ================= */

    fetch("api/careers.php")
        .then(res => res.json())
        .then(data => {

          

            const list = document.querySelector(".careerslist");
            if (!list) return;

            const template = list.querySelector(".career_Card");
            const imageCard = list.querySelector(".career_Card2");

            if (!template) return;

            if (!data.careers || data.careers.length === 0) {
                template.remove();
                return;
            }

            const templateClone = template.cloneNode(true);
            template.remove();

            const jobs = data.careers;
            const middleIndex = Math.ceil(jobs.length / 2);

            jobs.forEach((job, index) => {

    const card = templateClone.cloneNode(true);
    card.style.display = "";

    card.querySelector("h6").textContent = job.title || "";
    card.querySelector(".job_loc").textContent = "@" + (job.location || "");
    card.querySelector(".jobType").textContent = job.type || "";
    card.querySelector(".job_dis p").textContent = job.description || "";
    card.querySelector(".cc_btm b").textContent = job.salary || "";

    const applyBtn = card.querySelector(".acm_btn");

    // 🔥 IMPORTANT: Remove href (we open modal instead)
    applyBtn.removeAttribute("href");

    // ✅ Attach JSON-driven job ID + title
    applyBtn.setAttribute("data-jobid", job.id || "");
    applyBtn.setAttribute("data-title", job.title || "");

    if (imageCard && index < middleIndex) {
        list.insertBefore(card, imageCard);
    } else {
        list.appendChild(card);
    }

});


        })
        .catch(err => console.error("Careers load failed:", err));

 /* ================= FORM SUBMIT ================= */
const form = document.querySelector("#careerForm");
const messageDiv = document.getElementById("formSuccess");

if (form && messageDiv) {

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        
        // 🔥 FORCE append latest values manually
formData.set('job_id', $('#jobIdField').val());
formData.set('job_title', $('#jobTitleField').val());

        const submitBtn = form.querySelector("button[type='submit']");


        // Disable button while sending
        submitBtn.disabled = true;
        submitBtn.textContent = "Sending...";

        fetch("api/send-mail.php", {
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

                setTimeout(() => {

                    const modal = document.getElementById("applyCareers");
                    if (modal) modal.classList.remove("show");

                    document.body.classList.remove("modal-open");

                    messageDiv.style.display = "none";
                    messageDiv.classList.remove("success");

                }, 2000);

            } else {

                messageDiv.classList.add("error");
                messageDiv.innerHTML =
                    "<b>Sorry! Your request could not be sent.</b>";
            }

            // Re-enable button
            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";

        })
        .catch(() => {

            messageDiv.style.display = "block";
            messageDiv.classList.remove("success");
            messageDiv.classList.add("error");
            messageDiv.innerHTML =
                "<b>Server error. Please try again later.</b>";

            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";
        });

    });

}


// //Country Code
// let iti; // declare globally at top of $(document).ready

// $(document).on('click', '.acm_btn', function (e) {
//     e.preventDefault();

//     const jobId = $(this).attr('data-jobid');
//     const jobTitle = $(this).attr('data-title');

//     $('#jobIdField').val(jobId);
//     $('#jobTitleField').val(jobTitle);

//     $('#applyCareers').addClass('show');
//     $('body').addClass('modal-open');

//     // 🔥 Initialize phone AFTER modal is visible
//     const phoneInput = document.querySelector("#phone");

//     if (phoneInput && !phoneInput.classList.contains("iti-initialized")) {

//         iti = window.intlTelInput(phoneInput, {
//             initialCountry: "us",
//             separateDialCode: true,
//             nationalMode: false,
//             allowDropdown: true,
//             dropdownContainer: document.body,
//             utilsScript:
//               "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.js"
//         });

//         phoneInput.classList.add("iti-initialized");
//     }
// });


//Domain select
document.addEventListener("DOMContentLoaded", () => {
  const select = document.querySelector('select[name="domain"]');

  select.addEventListener("change", function () {
    if (this.value !== "Other") return;

    const input = document.createElement("input");
    input.type = "text";
    input.name = this.name;
    input.className = this.className;
    input.placeholder = "Enter your domain";
    input.required = true;

    this.replaceWith(input);
    input.focus();
  });
});

//Technology select
document.addEventListener("DOMContentLoaded", () => {
  const techSelect = document.querySelector('select[name="technology"]');

  techSelect.addEventListener("change", function () {
    if (this.value !== "Other") return;

    // Create input field dynamically
    const input = document.createElement("input");
    input.type = "text";
    input.name = this.name;               // keep same name
    input.className = this.className;     // keep same styling
    input.placeholder = "Enter Technology";
    input.required = true;

    // Replace select with input
    this.parentNode.replaceChild(input, this);

    // Focus cursor
    input.focus();
  });
});


</script>
  </body>
</html>