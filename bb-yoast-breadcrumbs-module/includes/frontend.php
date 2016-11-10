<?php
if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb('<div class="container"><p id="breadcrumbs">', '</p></div>');
} else {
    echo 'Yoast SEO is not installed. Please add Yoast SEO to your site.';
}

