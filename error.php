<?php
ob_start();
?>


<section class="error-page-section p-tb-80">
    <div class="container">
        <div class="error-page-content">
            <img src="assets/images/404.png" alt="404">
            <h2>Error 404: Page not found</h2>
            <p>The page you were looking for could not be found.</p>
            <a href="/" class="btn main-btn">GO TO HOMEPAGE <i class="flaticon-edit"></i></a>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require 'layout.php';
?>