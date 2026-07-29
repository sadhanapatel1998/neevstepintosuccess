<?php
ob_start();
?>


<section class="error-page-section p-tb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="error-page-content">
                    <img src="assets/images/thankyou.png" alt="thankyou" class="mb-0">
                    <h2>Thank You for Your Enquiry!</h2>

                    <p style=" text-align: center;">
                        Your message has been successfully submitted. Our team will review your enquiry
                        and get back to you shortly.
                    </p>
                    <a href="/" class="btn main-btn">GO TO HOMEPAGE <i class="flaticon-edit"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require 'layout.php';
?>