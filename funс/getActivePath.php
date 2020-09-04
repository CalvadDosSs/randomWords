<?php

function getActivePath($path) {

    $currentUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($path === $currentUrl) {

        return 'active';
    }
}
