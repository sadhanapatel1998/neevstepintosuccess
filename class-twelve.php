<?php
ob_start();
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Class XII</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class XII</li>
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

                            <h3 class="mb-30">Class XII – Science (PCM & PCB)</h3>

                            <div class="summery-list">

                                <div class="summery-list-item">
                                    <div class="summery-label"><i class="flaticon-equalizer"></i>Level</div>
                                    <div class="summery-option">Class XII (CBSE)</div>
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
                                    <li><span>-</span> Previous Year Question Papers</li>
                                    <li><span>-</span> Mock Test Series</li>
                                    <li><span>-</span> Board Revision Modules</li>
                                    <li><span>-</span> Doubt Solving Sessions</li>
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
                        <img src="assets/images/courses/class-12th.jpg" alt="Class 12 Science">
                    </div>

                    <div class="summery-info-details-item summery-info-details-item-active"
                        data-summery-info-details="1">
                        <div class="summery-info-details-inner">

                            <h1>Class XII Science Program (PCM & PCB)</h1>

                            <p>
                                The Class XII Science program at Neev – Step Into Success is designed
                                to help students achieve outstanding results in their CBSE Board
                                examinations. Our structured curriculum combines concept clarity,
                                intensive practice and exam-oriented preparation in Physics,
                                Chemistry, Mathematics and Biology.
                            </p>

                            <p>
                                We provide personalized One-on-One coaching along with small batch
                                learning, giving every student the attention they need. Students can
                                attend classes through both Online and Offline modes, making learning
                                flexible without compromising quality.
                            </p>

                            <h4>Program Highlights:</h4>

                            <ul>
                                <li><i class="flaticon-check"></i> Board-Oriented Preparation</li>
                                <li><i class="flaticon-check"></i> Advanced Numericals & Problem Solving</li>
                                <li><i class="flaticon-check"></i> Chapter-wise Revision</li>
                                <li><i class="flaticon-check"></i> Mock Tests & Performance Analysis</li>
                                <li><i class="flaticon-check"></i> One-on-One Personalized Coaching</li>
                                <li><i class="flaticon-check"></i> Online & Offline Classes</li>
                                <li><i class="flaticon-check"></i> Complete Doubt Solving Support</li>
                            </ul>

                            <p>
                                Our experienced faculty ensure that students develop strong
                                conceptual understanding while mastering answer-writing techniques,
                                time management and exam strategies required for Board examinations.
                                Regular mock tests and detailed performance reviews help students
                                identify areas of improvement before the final exams.
                            </p>

                            <p>
                                At Neev Coaching, we focus on building confidence, accuracy and
                                consistency so that students are fully prepared to excel in Class XII
                                Boards and future competitive examinations.
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