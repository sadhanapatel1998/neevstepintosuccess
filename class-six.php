<?php
ob_start();
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Class VI</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class VI</li>
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
                            <h3 class="mb-30">Class VI – Foundation Program</h3>

                            <div class="summery-list">
                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-equalizer"></i>Level</div>
                                    <div class="summery-option">Foundation</div>
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
                                    <li><span>-</span> Chapter-wise Notes</li>
                                    <li><span>-</span> Practice Worksheets</li>
                                    <li><span>-</span> Weekly Test Series</li>
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
                        <img src="assets/images/courses/class-6th.png" alt="Course Image ">
                    </div>
                    <div class="summery-info-details-item summery-info-details-item-active"
                        data-summery-info-details="1">
                        <div class="summery-info-details-inner">
                            <h1>Class 6 Foundation Course</h1>

                            <p>
                                The Class 6 Foundation Course at Neev – Step Into Success is designed to build strong
                                academic fundamentals for students. At this stage, developing a clear understanding
                                of concepts is essential for future learning.
                            </p>

                            <p>
                                Our experienced faculty focus on explaining topics in a simple and engaging manner
                                so that students can understand concepts easily and develop confidence in their studies.
                                Regular practice, assignments, and tests help students strengthen their knowledge
                                and improve their academic performance.
                            </p>

                            <h4>Requirements:</h4>

                            <ul>
                                <li><i class="flaticon-check"></i> Basic understanding of school subjects</li>
                                <li><i class="flaticon-check"></i> Willingness to learn and practice regularly</li>
                                <li><i class="flaticon-check"></i> Active participation in classroom activities</li>
                            </ul>

                            <p>
                                This program focuses on Mathematics, Science, and English to help students build
                                a strong academic base. With small batch sizes and personalized attention,
                                students receive the support they need to improve their problem-solving skills
                                and perform better in school examinations.
                            </p>

                            <p>
                                Regular assessments, doubt-clearing sessions, and structured study materials
                                ensure that every student progresses confidently throughout the academic year.
                                Our goal is to make learning enjoyable while preparing students for higher classes
                                and future academic challenges.
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