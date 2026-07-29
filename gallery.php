<?php
ob_start();
?>

<!-- Start Breadcumb Area Home Two-->
<header class="header-page">
    <div class="container">
        <div class="header-page-content">
            <h1>Image Gallery</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Image Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- End Breadcumb Area Home Two-->

<!-- gallery-section -->
<div class="gallery-section pt-100 pb-70">
    <div class="container">
        <div class="gallery-section-inner">
            <!-- <div class="gallery-tab-header">
                <ul class="gallery-selection-tab">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".photos">Photos</li>
                    <li data-filter=".campus">Campus</li>
                    <li data-filter=".students">Students</li>
                </ul>
            </div> -->
            <div class="gallery-tab-details popup-gallery">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 element-item photos campus pb-30">
                        <div class="gallery-card">
                            <div class="gallery-card-thumb">
                                <img src="assets/images/gallery/gallery-1.jpg" alt="gallery">
                            </div>
                            <div class="gallery-zoom">
                                <a href="assets/images/gallery/gallery-1.jpg" title="Photos"><i
                                        class="flaticon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 element-item campus pb-30">
                        <div class="gallery-card">
                            <div class="gallery-card-thumb">
                                <img src="assets/images/gallery/gallery-2.jpg" alt="gallery">
                            </div>
                            <div class="gallery-zoom">
                                <a href="assets/images/gallery/gallery-2.jpg" title="Campus"><i
                                        class="flaticon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 element-item students photos pb-30">
                        <div class="gallery-card">
                            <div class="gallery-card-thumb">
                                <img src="assets/images/gallery/gallery-3.jpg" alt="gallery">
                            </div>
                            <div class="gallery-zoom">
                                <a href="assets/images/gallery/gallery-3.jpg" title="Students"><i
                                        class="flaticon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 element-item students pb-30">
                        <div class="gallery-card">
                            <div class="gallery-card-thumb">
                                <img src="assets/images/gallery/gallery-5.jpg" alt="gallery">
                            </div>
                            <div class="gallery-zoom">
                                <a href="assets/images/gallery/gallery-5.jpg" title="Students"><i
                                        class="flaticon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 element-item photos students pb-30">
                        <div class="gallery-card">
                            <div class="gallery-card-thumb">
                                <img src="assets/images/gallery/gallery-6.jpg" alt="gallery">
                            </div>
                            <div class="gallery-zoom">
                                <a href="assets/images/gallery/gallery-6.jpg" title="Photos"><i
                                        class="flaticon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .end gallery-section -->



<?php
$content = ob_get_clean();
require 'layout.php';
?>