<?php

// Remove the headers, since Laravel sets it's own headers, and
// Laravel is more important for us.
add_filter('wp_headers', 'api_theme_header_removal');
function api_theme_header_removal($headers) {
    return [];
}