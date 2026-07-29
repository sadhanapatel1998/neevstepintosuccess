<?php
ob_start();
include 'mailer.php';
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<!-- contact-information-section -->
<section class="contact-information-section pb-70 pt-80">
    <div class="container">
        <div class="row mb-30">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center section-title section-title-shapeless section-title-left text-start">
                    <h2>For More Information Get In <span>Touch Neev Step into Success</span></h2>
                    <p class="text-center">Have questions or need more information? Fill out the form below and our team
                        will get
                        back to
                        you
                        soon.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 pb-30">
                <div class="contact-information-item">
                    <div class="section-title section-title-shapeless section-title-left text-start">
                        <h2>For More Information, Get In <span>Touch With Us</span></h2>
                    </div>
                    <div class="contact-options">
                        <div class="contact-option-item">
                            <div class="contact-option-icon"><i class="flaticon-phone-call"></i></div>
                            <div class="contact-option-details">
                                <p>Mobile: <a href="tel:919310103871">+91 9310103871</a></p>
                                <p>Mobile: <a href="tel:919211644840">+91 9211644840</a></p>
                                <p>Email: <a href="/cdn-cgi/l/email-protection#80e8e5ececefc0eae5f8e9aee3efed"><span
                                            class="__cf_email__"
                                            data-cfemail="442c2128282b042e213c2d6a272b29">[email&#160;protected]</span></a>
                                </p>
                            </div>,

                        </div>
                        <div class="contact-option-item">
                            <div class="contact-option-icon"><i class="flaticon-network"></i></div>
                            <div class="contact-option-details">
                                <p>Address: A-78, near SUPREME TOWERS, Block B,<br> Sector 99, Noida, Uttar Pradesh
                                    201304</p>
                            </div>
                        </div>
                        <div class="contact-option-item">
                            <div class="contact-option-icon"><i class="flaticon-clock"></i></div>
                            <div class="contact-option-details">
                                <p>Monday - Friday: <span>04:00 pm - 7:00 pm</span></p>
                                <p>Sunday & Saturday: <span>10:30 am - 1:00 pm</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 pb-30">
                <section class="contact-form-section">
                    <div class="container">
                        <div class="contact-form-box">
                            <form class="contact-form" method="POST" action="">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                </div>
                                                <!-- <input type="text" name="name" class="form-control" placeholder="Name*"
                                                    required data-error="Please enter your name" /> -->
                                                <input type="text" name="name" class="form-control" placeholder="Name*"
                                                    value="<?php echo htmlspecialchars($name ?? '') ?>">
                                            </div>
                                            <span class="text-danger"><?php echo $nameErr ?? '' ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="flaticon-envelope"></i></span>
                                                </div>
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Email*"
                                                    value="<?php echo htmlspecialchars($email ?? '') ?>">
                                            </div>
                                            <span class="text-danger"><?php echo $emailErr ?? '' ?></span>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="flaticon-phone-call"></i></span>
                                                </div>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone*"
                                                    value="<?php echo htmlspecialchars($phone ?? '') ?>">
                                            </div>
                                            <span class="text-danger"><?php echo $phoneErr ?? '' ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="flaticon-book"></i></span>
                                                </div>
                                                <input type="text" name="subject" class="form-control"
                                                    placeholder="Subject*"
                                                    value="<?php echo htmlspecialchars($subject ?? '') ?>">
                                            </div>
                                            <span class="text-danger"><?php echo $subjectErr ?? '' ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="flaticon-envelope"></i></span>
                                                </div>
                                                <textarea name="message" class="form-control" rows="4"
                                                    placeholder="Your Message*"><?php echo htmlspecialchars($message ?? '') ?></textarea>
                                            </div>
                                            <span class="text-danger"><?php echo $messageErr ?? '' ?></span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-12 text-center">
                                        <button class="btn main-btn" type="submit">SEND A MESSAGE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- .end contact-information-section -->
<!-- map-section -->
<div class="map-section">
    <div class="map-iframe">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.8706469902745!2d77.35941160000002!3d28.5436075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5c09110e3a7%3A0x8a69786c3a57a84!2sNeev%3A%20Step%20into%20Success!5e0!3m2!1sen!2sin!4v1775825510449!5m2!1sen!2sin"></iframe>
    </div>
</div>




<?php
$content = ob_get_clean();
require 'layout.php';
?>