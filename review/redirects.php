<?php

$redirects = [

    ['/quote/','/order', 301],
    ['/sitemap/', '/', 410],

];

for ($item = 0, $length = count($redirects); $item < $length; $item++) {
    if ($_SERVER['REQUEST_URI'] == $redirects[$item][0] ) {
        wp_redirect(site_url() . $redirects[$item][1], $redirects[$item][2]);
        exit();
    }
}