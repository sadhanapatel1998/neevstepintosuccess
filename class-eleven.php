<?php
ob_start();
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Class XI</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class XI</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- End Breadcumb Area Home Two-->

<!-- course-details-section -->
<section class="course-details-section pt-100 pb-70">
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-12 col-lg-4 pb-30 order-lg-2 order-2">
                <div class="summery-details-item sidebar-to-header">
                    <div class="summery-box">
                        <div class="summery-inner">

                            <h3 class="mb-30">Class XI – Science (PCM & PCB)</h3>

                            <div class="summery-list">

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-equalizer"></i>Level</div>
                                    <div class="summery-option">Class XI (CBSE)</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-instructor"></i>Instructor</div>
                                    <div class="summery-option">Experienced Faculty</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-online-learning-1"></i>Subjects</div>
                                    <div class="summery-option">Physics, Chemistry, Mathematics & Biology</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="bi bi-person-video3"></i>Coaching</div>
                                    <div class="summery-option">One-on-One & Small Batches</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="bi bi-laptop"></i>Mode</div>
                                    <div class="summery-option">Online & Offline</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-key"></i>Access</div>
                                    <div class="summery-option">Regular Classes</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-globe"></i>Medium</div>
                                    <div class="summery-option">English / Hindi</div>
                                </div>

                            </div>

                            <div class="summery-material-list">
                                <h4>Material Includes</h4>
                                <ul>
                                    <li><span>-</span> Chapter-wise Study Notes</li>
                                    <li><span>-</span> NCERT Based Study Material</li>
                                    <li><span>-</span> Practice Worksheets</li>
                                    <li><span>-</span> Doubt Solving Sessions</li>
                                    <li><span>-</span> Regular Test Series</li>
                                </ul>
                            </div>

                            <div class="summery-buttons">
                                <a href="contact-us.php" class="btn main-btn">Get in Touch</a>
                                <a href="tel:+919310103871" class="btn main-btn">Call: +919310103871</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-12 col-lg-8 pb-30 order-lg-1 order-1">
                <div class="summery-details-item desk-pad-right-30">

                    <div class="mb-30">
                        <img src="assets/images/courses/class-11th.jpg" alt="Class 11 Science">
                    </div>

                    <div class="summery-info-details-item summery-info-details-item-active"
                        data-summery-info-details="1">
                        <div class="summery-info-details-inner">

                            <h1>Class XI Science Program (PCM & PCB)</h1>

                            <p>
                                The Class XI Science program at Neev – Step Into Success is designed
                                to build a strong academic foundation in Physics, Chemistry,
                                Mathematics and Biology. Our curriculum follows the CBSE pattern
                                and focuses on concept clarity, analytical thinking and practical
                                understanding.
                            </p>

                            <p>
                                Students receive personalized guidance through One-on-One coaching
                                as well as small batch classes. We offer both Online and Offline
                                learning modes, allowing students to choose the format that suits
                                them best while ensuring individual attention and consistent progress.
                            </p>

                            <h4>Program Highlights:</h4>

                            <ul>
                                <li><i class="flaticon-check"></i> Physics Concept Mastery</li>
                                <li><i class="flaticon-check"></i> Chemistry Theory & Numericals</li>
                                <li><i class="flaticon-check"></i> Mathematics Problem Solving</li>
                                <li><i class="flaticon-check"></i> Biology Concept Clarity</li>
                                <li><i class="flaticon-check"></i> One-on-One Personalized Coaching</li>
                                <li><i class="flaticon-check"></i> Online & Offline Classes</li>
                                <li><i class="flaticon-check"></i> Regular Tests & Performance Tracking</li>
                            </ul>

                            <p>
                                Every chapter is taught with structured explanations, NCERT-based
                                practice, worksheets and regular assessments to strengthen concepts.
                                Our faculty focus on helping students build confidence and prepare
                                them for Class XII and future competitive examinations.
                            </p>

                            <p>
                                At Neev Coaching, our goal is to develop strong subject knowledge,
                                logical thinking and problem-solving skills that support long-term
                                academic success.
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- .end course-details-section -->



<?php
$content = ob_get_clean();
require 'layout.php';
?>