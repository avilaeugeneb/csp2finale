<?php
// define('SITE_URL','http://purefood.frifster.ml');
define('SITE_URL','http://localhost/csp2');
$parent = dirname(__FILE__,2);
require $parent.'/PayPal-PHP-SDK/autoload.php';

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ATAQw0aYwZGQIBUCw588x8G_Np5_NiPFbjFia4G3T0KCFUgJUPkJM1UZ-uy2eNDhLVcnx7IyGfW-ju08',
        'EANJqFaMpbqBxHPi1-ZdBrponR7O_nl6DhrkfR69Yu6fsa3Dw4kTOgYQhKNQMMzlMmYeBhO_nON1gfXb'
    )
);