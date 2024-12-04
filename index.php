<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['apply-now'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'imedicaluniversity532@gmail.com';                     //SMTP username
    $mail->Password   = 'blrsiqkotenfgtqp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('imedicaluniversity532@gmail.com', 'Admission Open');
    $mail->addAddress('imedicaluniversity532@gmail.com', 'Admin User');     //Add a recipient
    //$mail->addAddress('hemant.herenj@gmail.com');               //Name is optional
    //$mail->addReplyTo('hemant.herenj@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Admission Open';
    $mail->Body    = 'Name : '.$fname.' '.$lname.' <br> Email : '.$email.' <br> Phone : '.$phone.' <br> Message : '.$message.'';
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>klk;lInternational Medical University</title>

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/vendor.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,700;1,300&family=Roboto:wght@300;400;700&display=swap"
    rel="stylesheet">


    <!-- script ================================================== -->
    <script src="js/modernizr.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">


    <nav class="navbar navbar-expand-lg bg-white navbar-light container-fluid py-3 position-fixed ">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <div class="d-flex justify-content-between">
                    <img src="images/logo.jpeg" height="60px" alt="logo" class="mx-2">
                    <p>INTERNATIONAL <br> MEDICAL  UNIVERSITY</p>

                </div>
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link text-uppercase  active px-3" aria-current="page"
                    href="#hero">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase  px-3" href="#courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase  px-3" href="#about">about</a>
                </li>                        
                <li class="nav-item">
                    <a class="nav-link text-uppercase  px-3" href="#faq">Faqs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase  px-3" href="#cta">Contact</a>
                </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link text-uppercase  dropdown-toggle text-center" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html" class="dropdown-item text-uppercase ">About <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="blog.html" class="dropdown-item text-uppercase ">Blog <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="blog-single.html" class="dropdown-item text-uppercase ">Blog-Single <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="booking.html" class="dropdown-item text-uppercase ">Booking <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="services.html" class="dropdown-item text-uppercase ">Services <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="services-single.html" class="dropdown-item text-uppercase ">Service-Single
                                        <span class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="project.html" class="dropdown-item text-uppercase ">Project <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="project-single.html" class="dropdown-item text-uppercase ">Project-Single
                                        <span class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="pricing.html" class="dropdown-item text-uppercase ">Pricing <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="contact.html" class="dropdown-item text-uppercase ">Contact <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="team.html" class="dropdown-item text-uppercase ">Our Team <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="review.html" class="dropdown-item text-uppercase ">Reviews <span
                                            class="badge bg-secondary">Pro</span></a></li>
                                <li><a href="faq.html" class="dropdown-item text-uppercase ">FAQs <span
                                            class="badge bg-secondary">Pro</span></a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item ms-2"><a href="https://templatesjungle.gumroad.com/l/roofers-roofing-bootstrap-html-website-template" class="dropdown-item text-uppercase btn btn-primary text-white py-2 px-3 ">Get Pro </a></li> -->

                    </ul>

                    <div class="d-flex mt-5 mt-lg-0 ps-lg-3 align-items-center justify-content-center ">
                        <ul class="navbar-nav justify-content-end align-items-center">
                            <li class="nav-item">
                                <a class="nav-link px-3 phone-no" href="tel:+91 9289467305" data-rb-event-key="tel:+91 9289467305">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                    d="M18.3274 22.5001C17.4124 22.5001 16.1271 22.1691 14.2024 21.0938C11.862 19.7813 10.0516 18.5696 7.72383 16.2479C5.47946 14.0049 4.38727 12.5527 2.85868 9.77115C1.1318 6.63052 1.42618 4.98427 1.75524 4.28068C2.14712 3.43974 2.72555 2.93677 3.47321 2.43755C3.89787 2.15932 4.34727 1.92081 4.81571 1.72505C4.86258 1.7049 4.90618 1.68568 4.94508 1.66833C5.17712 1.5638 5.52868 1.40583 5.97399 1.57458C6.27118 1.68615 6.53649 1.91443 6.9518 2.32458C7.80352 3.16458 8.96743 5.03537 9.3968 5.95412C9.68508 6.57333 9.87587 6.98208 9.87633 7.44052C9.87633 7.97724 9.60633 8.39115 9.27868 8.83787C9.21727 8.92177 9.15633 9.00193 9.09727 9.07974C8.74055 9.54849 8.66227 9.68396 8.71383 9.92583C8.81837 10.4119 9.5979 11.859 10.879 13.1372C12.1601 14.4155 13.5654 15.1458 14.0534 15.2499C14.3056 15.3038 14.4438 15.2222 14.9276 14.8529C14.997 14.7999 15.0682 14.7451 15.1427 14.6902C15.6424 14.3185 16.0371 14.0555 16.5612 14.0555H16.564C17.0201 14.0555 17.4106 14.2533 18.0574 14.5796C18.9012 15.0052 20.8282 16.1541 21.6734 17.0068C22.0845 17.4211 22.3137 17.6855 22.4257 17.9822C22.5945 18.429 22.4356 18.7791 22.332 19.0135C22.3146 19.0524 22.2954 19.0951 22.2752 19.1424C22.0779 19.61 21.838 20.0585 21.5585 20.4821C21.0602 21.2274 20.5554 21.8044 19.7126 22.1968C19.2798 22.4015 18.8062 22.5052 18.3274 22.5001Z"
                                    fill="#313131" />
                                </svg>
                                +91 9289467305
                            </a>
                        </li>
                    </ul>
                    <a href="#hero">
                        <button type="button" class="btn btn-primary ms-md-3" > Get In Touch </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<section id="hero" class="position-relative overflow-hidden py-4" style="background: url(images/international-medical-university-kyrgyzstan-Cover.jpg); background-repeat: no-repeat; background-size: 100% 100%;">
        <!-- <div class="pattern-overlay pattern-right position-absolute">
            <img src="images/pattern-hero.png" alt="pattern">
        </div> -->

        <div class="container py-0 mt-0">
            <div class="row text-center py-5 mt-5">
                <div class="col-md-6 mb-5 mb-md-0">
                    <!-- <h6 class="text-white">QUALITY ROOFING SOLUTIONS</h6> -->
                    <h2 class="fw-bold display-5" style="color: #006432;">EDUCATION. SCIENCE.<br> RESEARCH. KNOWLEDGE</h2>
                    <!-- <p class="text-white">Sagittis pulvinar ut dis venenatis nunc nunc vitae aliquam vestibulum. Elit
                        adipiscing massa diam in dignissim. Risus tellus libero elementum aliquam etiam. Lectus
                    adipiscing est auctor mi quisque nunc non viverra est.</p> -->
                    <!-- <ul class="list-unstyled">
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Fully legal licensed and insured
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            100% trustworthy company
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Most Genuine and transparent
                        </li>
                    </ul> -->
                </div>
                <div class=" col-md-5 offset-md-1">
                    <form class="hero-form p-3" method="post" action="">
                        <h3>Admission Open</h3>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label mb-0">First Name</label>
                                    <input type="text" class="form-control border-1" name="fname" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="mb-3">
                                <label for="exampleInputEmail2" class="form-label mb-0">Last Name</label>
                                <input type="text" class="form-control border-1" name="lname" id="exampleInputEmail2">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail3" class="form-label mb-0">email</label>
                        <input type="email" class="form-control border-1" name="email" id="exampleInputEmail3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail4" class="form-label mb-0">phone</label>
                        <input type="text" class="form-control border-1" name="phone" id="exampleInputEmail4">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail5" class="form-label mb-0">message</label>
                        <textarea name="message" class="form-control border-1" rows="2" cols="50"></textarea>
                    </div>

                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary btn-lg" name="apply-now" value="Apply Now">
                        <!-- <button type="submit" class="btn btn-primary btn-lg" name="apply-now">Apply Now</button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<section id="courses" class="my-5 pt-5">
    <div class="container pt-5">
        <h6 class="">Our Courses</h6>
        <h2 class=" fw-bold display-4 mb-4">What we provide</h2>
        <div class="row">
            <div class=" mt-4 col-md-6 col-lg-4">
                <div class="services-components  py-5 px-3">
                    <!-- <iconify-icon class="services-icon my-2" icon="mdi:home-roof"></iconify-icon> -->
                    <h5 class="services-heading mb-3">Faculty of General Medicine </h5>
                    <p>Duration of Study - 4.5 years + 1 year of intership for indian students</p>
                    <p>Qualification - Doctor of Medicine </p>
                    <p>Eligibility criteria:</p>
                    <p>Completion of 12th grade with a science stream.</p>
                    <p>Must have passed the NEET exam with qualifying marks.</p>                    
                    <p>Documents Required :</p>
                    <ol>
                        <li>12th Standard Marksheet</li>
                        <li>NEET Score Card</li>
                        <li>Copy of Passport</li>
                        <li>Passport Size Photograph (White Background)</li>
                    </ol>
                </p>
                <!-- <a href="#" class="btn btn-primary service-btn mt-3">read more</a> -->

            </div>
        </div>
        <div class=" mt-4 col-md-6 col-lg-4">
            <div class="services-components text-left py-5 px-3">
                <!-- <iconify-icon class="services-icon my-2" icon="mdi:weather-lightning"></iconify-icon> -->
                <h5 class="services-heading mb-3">Faculty of Dentistry</h5>
                <p>Duration of Study - 5 years</p>
                <p>Qualification - Dentist</p> 
                <p>Eligibility criteria:</p>
                <p>Completion of 12th grade with a science stream.</p>
                <p>Must have passed the NEET exam with qualifying marks.</p>
                <p>Documents Required :</p>
                <ol>
                    <li>12th Standard Marksheet</li>
                    <li>NEET Score Card</li>
                    <li>Copy of Passport</li>
                    <li>Passport Size Photograph (White Background)</li>
                </ol>
            </p>
            <!-- <a href="" class="btn btn-primary service-btn mt-3">read more</a> -->

        </div>
    </div>
    <div class=" mt-4 col-md-6 col-lg-4">
        <div class="services-components text-left py-5 px-3">
            <!-- <iconify-icon class="services-icon my-2" icon="mdi:hammer"></iconify-icon> -->
            <h5 class="services-heading mb-3">Faculty of Pharmacy</h5>
            <p>Duration of Study - 5 years</p>
            <p>Qualification - Pharmacist </p>
            <p>Eligibility criteria:</p>
            <p>Completion of 12th grade with a science stream.</p>
            <p>Must have passed the NEET exam with qualifying marks.</p>
            <p>Documents Required :</p>
            <ol>
                <li>12th Standard Marksheet</li>
                <li>NEET Score Card</li>
                <li>Copy of Passport</li>
                <li>Passport Size Photograph (White Background)</li>                    
            </ol> 
            <!-- <a href="" class="btn btn-primary service-btn mt-3">read more</a> -->

        </div>
    </div>

</div>
</div>
</section>

    <!-- <section id="partners">
        <div class="container my-5 py-5">
            <h6 class="fw-bold text-capitalize fs-5 my-5">Our trusted partners</h6>
            <div class="row">
                <div class="logo-content d-flex flex-wrap justify-content-between">
                    <a href="#" class="mb-5 mx-2">
                        <img src="images/logo1.png" alt="logo" class="logo-image img-fluid">
                    </a>
                    <a href="#" class="mb-5 mx-2">
                        <img src="images/logo2.png" alt="logo" class="logo-image img-fluid">
                    </a>
                    <a href="#" class="mb-5 mx-2">
                        <img src="images/logo3.png" alt="logo" class="logo-image img-fluid">
                    </a>
                    <a href="#" class="mb-5 mx-2">
                        <img src="images/logo4.png" alt="logo" class="logo-image img-fluid">
                    </a>
                    <a href="#" class="mb-5 mx-2">
                        <img src="images/logo5.png" alt="logo" class="logo-image img-fluid">
                    </a>
                    <a href="#" class="mb-5 mx-2">
                        <img src="images/logo6.png" alt="logo" class="logo-image img-fluid">
                    </a>

                </div>
            </div>
        </div>
    </section> -->

    <section id="testimonial" class=" position-relative  py-5">

        <div class="testimonial-pattern-overlay pattern-left position-absolute">
            <img src="images/pattern-testimonial.png" alt="pattern">
        </div>
        <div class="testimonial-pattern-overlay pattern-right position-absolute">
            <img src="images/right-pattern-testimonial.png" alt="pattern">
        </div>

        <div class="container py-5">
            <h6 class="text-white">Testimonials</h6>
            <h2 class="text-white fw-bold display-4 mb-4">Our happy students</h2>

            <div class="swiper testimonial-swiper mb-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-content p-5">
                        <p>“I am very proud and blessed to be a part of this college as it has taught me many lessons for life. I have learnt to be disciplined towards my studies and carrier. The teachers here are the best as they are friendly and motivating. They are very focused towards our carrier and has very good subject knowledge.”</p>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/5.jpeg" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>Gautam Kumar</h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                        <p>“International Medical University is the pinnacle of medical education. Outstanding teaching, friendly doctors, and a structured curriculum. In my final year, clinical rotations have been incredibly valuable.”</p>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/4.jpg" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>Sayada khosha Ali zaidi</h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                        <p>“At IMU, I'm privileged to belong to a pioneering university that embodies innovation, excellence, and collaboration. The unwavering support, dedicated faculty, and inspiring peers have empowered my medical journey”</p>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/3.jpg" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>Satyajit mohanty</h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                        <p>“IMU has been a life-changing journey. The doors it has opened, the supportive community, and the inspiring faculty have all enriched my experience. Being part of this remarkable place is a privilege I'm deeply grateful for.”</p>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/2.jpg" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>Upasana Das</h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                        <p>“Grateful final year med student at IMU, Kyrgyzstan. Thankful for university and guiding doctors shaping my journey. Balancing personal, professional, and family life while mastering essential skills for future success.”</p>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/1.jpg" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>Dhwani Chouhan</h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination mb-5"></div>
        </div>

    </section>

    

    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class=" col-md-6 ps-md-5">
                    <img src="images/Picture1.png" alt="image" class="img-fluid">
                </div>
                <div class="col-md-6 px-4 py-5">
                    <h6 class="">Who are we</h6>
                    <h2 class=" fw-bold display-4 mb-3">About us</h2>
                    <p class="">The INTERNATIONAL MEDICAL UNIVERSITY- is an innovative educational and scientific research institution of higher edcation, located in the heart of the Central Asia, Bishkek, Kyrgyzstan. IMU has an international status and has passed the independent accreditation of educational insititutions and programs 
                    </p>
                    <!--<a href="about.html" class="btn btn-primary service-btn mt-3">About us</a>-->



                </div>
            </div>
        </div>
    </section>

    <section id="faq">

        <div class="container my-5 pb-5 ">
            <h6 class="text-center">Frequently asked questions</h6>
            <h2 class="text-center fw-bold display-4 mb-5">We’ve got answers</h2>

            <div class="accordion col-md-8 offset-md-2" id="accordionPanelsStayOpenExample">

                <div class="accordion-item mt-3">
                    <h5 class="accordion-header border-0" id="panelsStayOpen-headingOne">
                        <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Is IMU Kyrgyzstan recognized worldwide?
                    </button>
                </h5>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <p>Yes, medical degrees from IMU Kyrgyzstan are recognized worldwide. IMU is a member of the World Federation for Medical Education (WFME) and is accredited by the Ministry of Education and Science of Kyrgyzstan. IMU graduates are eligible to practice medicine in countries like the United States, United Kingdom, Canada, Germany, and many others.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item mt-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    What are the admission requirements for IMU Kyrgyzstan?
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <p>The admission requirements for IMU Kyrgyzstan vary depending on the applicant’s nationality. For Indian students, the minimum eligibility criteria are:

                    50% in 10+2 (or equivalent) with Physics, Chemistry, Biology, and English as compulsory subjects.
                    The candidate must have qualified the NEET UG exam and has a valid NEET scorecard.
                The age of the candidate must be 17 years or more as on 31st December in the admission year.</p>
            </div>
        </div>
    </div>

    <div class="accordion-item mt-3">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
            aria-controls="panelsStayOpen-collapseThree">
            What is the language of instruction at IMU Kyrgyzstan?
        </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
    aria-labelledby="panelsStayOpen-headingThree">
    <div class="accordion-body">
        <p>The language of instruction at IMU Kyrgyzstan is English. All lectures, tutorials, and practicals are conducted in English.</p>
    </div>
</div>
</div>

<div class="accordion-item mt-3">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
        aria-controls="panelsStayOpen-collapseFour">
        What are the job prospects for MBBS graduates from IMU Kyrgyzstan?
    </button>
</h2>
<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
aria-labelledby="panelsStayOpen-headingFour">
<div class="accordion-body">
    <p>The job prospects for MBBS graduates from IMU Kyrgyzstan are good. IMU graduates are eligible to practice medicine in countries all over the world. In addition, IMU graduates have a good reputation for their clinical skills and knowledge.</p>
</div>
</div>
</div>

<div class="accordion-item mt-3">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
        aria-controls="panelsStayOpen-collapseFour">
        What are the living expenses in Kyrgyzstan?
    </button>
</h2>
<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
aria-labelledby="panelsStayOpen-headingFour">
<div class="accordion-body">
    <p>The living expenses in Kyrgyzstan are relatively low compared to other countries. The average monthly living expenses for a student in Kyrgyzstan are approximately INR 13,000.</p>
</div>
</div>
</div>

<div class="accordion-item mt-3">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
        aria-controls="panelsStayOpen-collapseFour">
        What are the disadvantages of studying MBBS in Kyrgyzstan?
    </button>
</h2>
<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
aria-labelledby="panelsStayOpen-headingFour">
<div class="accordion-body">
    <p>The main disadvantage of studying MBBS in Kyrgyzstan is the language barrier. All lectures, tutorials, and practicals are conducted in English. However, if you are not fluent in English, you may find it difficult to keep up with the coursework.</p>
</div>
</div>
</div>

</div>

</div>
</section>



<section id="cta" class="position-relative my-5">
    <div class="cta-pattern-overlay pattern-left position-absolute top-50 start-0 translate-middle-y">
        <img src="images/cta-pattern.png" alt="pattern">
    </div>
    <div class="container my-5 py-5">
        <div class="row align-items-center my-5">
            <div class="col-md-6 offset-md-2">
                <h6 class="text-white">Get started now</h6>
                <h2 class="text-white fw-bold display-4">Get your admission done</h2>
            </div>
            <div class="col-md-2">
                <a href="#hero" class="btn btn-primary cta-button ">Get in touch</a>
            </div>
        </div>
    </div>
</section>

<section id="footer">
    <div class="container footer-container mt-5 pt-3">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 my-5 py-5 ">

            <div class=" col-md-4 mt-5 mt-md-0 ">
                <img src="images/logo.jpeg" width="300px" alt="image" class="my-3">
                <!-- <p class="">EDUCATION SCIENCE RESEARCH KNOWLEDGE</p> -->
                <div class="d-flex align-items-center ">
                    <!-- <a href="#" target="_blank"><iconify-icon class="social-link-icon active pe-4"
                        icon="mdi:facebook"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                            icon="mdi:twitter"></iconify-icon></a>
                            <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:instagram"></iconify-icon></a>
                                <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                    icon="mdi:linkedin"></iconify-icon></a>
                                    <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                        icon="mdi:youtube"></iconify-icon></a> -->
                                    </div>

                                </div>

                                <div class="col-md-2 offset-md-1">
                                    <h5 class="py-3">Our Courses</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> General Medicine</a>
                                        </li>
                                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Dentistry </a>
                                        </li>
                                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 ">Pharmacy </a>
                                        </li>
                                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> </a>
                                        </li>
                                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-2 ">
                                    <h5 class="py-3">Quick links</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-3"><a href="#hero" class="nav-link fw-normal p-0 "> Home </a>
                                        </li>
                                        <li class="nav-item mb-3"><a href="#courses" class="nav-link fw-normal p-0 "> Courses </a>
                                        </li>
                                        <li class="nav-item mb-3"><a href="#about" class="nav-link fw-normal p-0 "> About </a>
                                        </li>
                                        <li class="nav-item mb-3"><a href="#faq" class="nav-link fw-normal p-0 "> FAQs</a></li>
                                        <li class="nav-item mb-3"><a href="#cta" class="nav-link fw-normal p-0 "> Contact us </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 ">
                                    <h5 class="py-3">Contact Info</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item d-flex mb-3">
                                            <iconify-icon class="contact-icon pe-3" icon="ion:location"></iconify-icon>
                                            <a href="#" class="nav-link p-0 "> B-221, Ansal Chamber- 1, Second Floor, Bhikalji Cama Place New Delhi - 110066 </a>
                                        </li>
                                        <li class="nav-item d-flex mb-3">
                                            <iconify-icon class="contact-icon pe-3" icon="ion:call"></iconify-icon><a href="#"
                                            class="nav-link p-0 "> 9289467305
                                        9910982048 </a>
                                    </li>
                                    <li class="nav-item d-flex mb-3">
                                        <iconify-icon class="contact-icon pe-3" icon="ion:mail"></iconify-icon><a href="#"
                                        class="nav-link p-0 "> imu.edu.kg </a>
                                    </li>

                                </ul>
                            </div>



                        </footer>
                    </div>



                    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

                    <div class="container">
                        <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 pt-4">
                            <div class="col-md-6 d-flex align-items-center">
                                <p>© 2023 IMU - All rights reserved</p>

                            </div>
                            <!-- <div class="col-md-6 d-flex align-items-center justify-content-end">
                                <p class="">© 2023 Website By:<a href="https://templatesjungle.com/" class="website-link"
                                    target="_blank"> <b><u>TemplatesJungle</u></b></a> <br> Distributed By: <a href="https://themewagon.com"><b><u>ThemeWagon</b></u></a></p>
                                </div> -->

                            </footer>
                        </div>
                    </section>

                    <!-- script ================================================== -->
                    <script src="js/jquery-1.11.0.min.js"></script>
                    <script src="js/plugins.js"></script>
                    <script src="js/script.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                    crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

                    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>


                </body>

                </html>

