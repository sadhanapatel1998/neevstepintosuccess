<?php
ob_start();
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Class IX</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class IX</li>
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
            <div class="col-12 col-lg-4 pb-30 order-lg-2 order-2">
                <div class="summery-details-item sidebar-to-header">
                    <div class="summery-box">

                        <div class="summery-inner">
                            <h3 class="mb-30">Class IX – Academic Preparation</h3>

                            <div class="summery-list">

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-equalizer"></i>Level</div>
                                    <div class="summery-option">Secondary Level</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-instructor"></i>Instructor</div>
                                    <div class="summery-option">Experienced Faculty</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-online-learning-1"></i>Subjects</div>
                                    <div class="summery-option">Maths, Science & English</div>
                                </div>

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-reading-book-1"></i>Students</div>
                                    <div class="summery-option">Limited Batch Size</div>
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
                                    <li><span>-</span> Study Notes</li>
                                    <li><span>-</span> Practice Assignments</li>
                                    <li><span>-</span> Weekly & Monthly Tests</li>
                                </ul>
                            </div>
                            <div class="summery-buttons">
                                <a href="contact-us.php" class="btn main-btn">Get in Touch</a>
                                <a href="tel:+919310103871" class="btn main-btn">Call: +919310103871 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 pb-30 order-lg-1 order-1">
                <div class="summery-details-item desk-pad-right-30">
                    <div class="mb-30">
                        <img src="assets/images/courses/class-9th.png" alt="Course Image ">
                    </div>
                    <div class="summery-info-details-item summery-info-details-item-active"
                        data-summery-info-details="1">
                        <div class="summery-info-details-inner">
                            <h1>Class 9 Academic Preparation Program</h1>

                            <p>
                                Class 9 is an important academic year that prepares students for
                                their Class 10 board examinations. Our program focuses on building
                                strong conceptual understanding and improving problem-solving skills.
                            </p>

                            <p>
                                Experienced faculty guide students through advanced topics in
                                Mathematics, Science, and English with clear explanations and
                                structured study plans.
                            </p>

                            <h4>Requirements:</h4>

                            <ul>
                                <li><i class="flaticon-check"></i> Strong understanding of Class 8 syllabus</li>
                                <li><i class="flaticon-check"></i> Regular attendance and participation</li>
                                <li><i class="flaticon-check"></i> Commitment to consistent practice</li>
                            </ul>

                            <p>
                                Students receive study materials, assignments, and regular
                                assessments to monitor progress and prepare effectively
                                for higher academic challenges.
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