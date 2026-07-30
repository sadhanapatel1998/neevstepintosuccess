<?php
ob_start();
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Dr. Vartika Rao</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Our Founders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dr. Vartika Rao</li>
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
                        <h2 class="text-saffron">Dr. Vartika Rao</h2>
                        <h4>Co-founder | Academician | Researcher | Educator</h4>

                        <p>
                            Dr. Vartika Rao is an accomplished academician, researcher, and social entrepreneur with
                            over
                            15 years of experience in higher education, scientific research, and community development.
                            She holds a Ph.D. in Electrical Engineering from IIT (ISM), Dhanbad, an M.Tech. from
                            MNNIT Allahabad, and a Bachelor's degree in Electrical Engineering.
                        </p>

                        <p>
                            She has served as a Research Associate at IIT (ISM), Dhanbad, and previously worked as an
                            Assistant Professor, mentoring undergraduate and postgraduate engineering students while
                            contributing to academic excellence and innovation.
                        </p>

                        <p>
                            Her research focuses on silicon photonics, optical computing, all-optical circuits, and
                            optical communication systems. She has published several SCI-indexed journal papers and
                            IEEE conference publications, making significant contributions to next-generation photonic
                            technologies and high-speed optical computing.
                        </p>
                    </div>
                    <!-- <div class="profile-contact-list">
                        <h4>Contact:</h4>
                        <ul>
                            <li>Mobile: <a href="tel:001-800-388-80-90">800 388 80 90</a></li>
                            <li>Hotline: <a href="tel:001-1800-1102">1800 1102</a></li>
                            <li>Email: <a href="mailto:hello@jexi.com">hello@jexi.com</a></li>
                            <li>Address: <span> PO Box 567 Hostin st. 433, Allentown, US</span></li>
                        </ul>
                    </div>
                    <ul class="social-list">
                        <li><a href="#"><img src="assets/images/facebook.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/twitter.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/linkedin.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/instagram.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/youtube.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/skype.png" alt="social"></a></li>
                    </ul> -->
                </div>
            </div>
            <div class="col-12 col-lg-6 pb-30">
                <div class="profile-content-item">
                    <img src="assets/images/team/dr-vartika-rao.jpg" alt="Dr. Vartika Rao Profile Image"
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