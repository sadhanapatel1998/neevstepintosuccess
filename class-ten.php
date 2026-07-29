<?php
ob_start();
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Class X</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class X</li>
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
                            <h3 class="mb-30">Class X – Board Exam Preparation</h3>

                            <div class="summery-list">

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-equalizer"></i>Level</div>
                                    <div class="summery-option">Board Preparation</div>
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
                                    <li><span>-</span> Detailed Study Notes</li>
                                    <li><span>-</span> Previous Year Papers</li>
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
                        <img src="assets/images/courses/class-10th.png" alt="Course Image ">
                    </div>
                    <div class="summery-info-details-item summery-info-details-item-active"
                        data-summery-info-details="1">
                        <div class="summery-info-details-inner">
                            <h1>Class 10 Board Preparation Program</h1>

                            <p>
                                The Class 10 program at Neev – Step Into Success is designed to
                                prepare students for their board examinations with confidence
                                and strong subject knowledge. Our curriculum follows the CBSE
                                pattern and focuses on building a strong academic foundation
                                while preparing students for the challenges of board exams.
                            </p>

                            <p>
                                Our experienced faculty focus on exam-oriented preparation,
                                concept clarity, and effective study strategies to help
                                students perform their best in board exams. Each topic is
                                explained in a simple and structured way so that students
                                understand concepts thoroughly and can apply them correctly
                                in examinations.
                            </p>

                            <h4>Requirements:</h4>

                            <ul>
                                <li><i class="flaticon-check"></i> Understanding of Class 9 syllabus</li>
                                <li><i class="flaticon-check"></i> Regular revision and practice</li>
                                <li><i class="flaticon-check"></i> Commitment to exam preparation</li>
                                <li><i class="flaticon-check"></i> Willingness to attend regular tests</li>
                                <li><i class="flaticon-check"></i> Active participation in classroom learning</li>
                            </ul>

                            <p>
                                Students receive detailed study notes, previous year question papers,
                                and regular test series that simulate real exam conditions and help
                                improve performance. These tests help students build time management
                                skills and gain confidence before their final examinations.
                            </p>

                            <p>
                                At Neev Coaching, our goal is not only to help students achieve
                                excellent board results but also to develop strong analytical
                                thinking and problem-solving abilities that will support their
                                academic journey in higher classes.
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