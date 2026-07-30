<?php
ob_start();
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Priyanka Pandey</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Our Founders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Priyanka Pandey</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- End Breadcumb Area Home Two-->

<div class="profile-section pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 pb-30">
                <div class="profile-content-item max-585 desk-pad-right-20 desk-ml-auto">
                    <div class="profile-desc">
                        <h2 class="text-saffron">Priyanka Pandey</h2>
                        <h4>Co-founder | Educator | Technology Mentor</h4>

                        <p>
                            Priyanka Pandey is the Co-founder of Neev Step into Success and an inspiring leader in
                            education and technology. With a Master's in Computer Applications (MCA), she transformed
                            challenges into opportunities, proving that determination and continuous learning can break
                            every barrier.
                        </p>

                        <p>
                            She began her career with leading multinational companies, where she developed strong
                            technical, analytical, and strategic skills. Driven by a passion for empowering others,
                            she transitioned into education and has spent over 20 years mentoring students and helping
                            them achieve academic and professional success.
                        </p>

                        <p>
                            Known for her compassionate leadership and student-centric approach, Priyanka combines
                            technical expertise with empathy to inspire confidence, nurture talent, and guide learners
                            toward excellence in education, technology, and life.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pb-30">
                <div class="profile-content-item">
                    <img src="assets/images/team/priyanka-pandey.jpg" alt="Priyanka Pandey Profile Image"
                        class="rounded-4 p-2" style="border: 3px solid #E6AE87;">
                </div>
            </div>
        </div>
    </div>
</div>






<?php
$content = ob_get_clean();
require 'layout.php';
?>