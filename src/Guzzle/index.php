<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Cookie\SetCookie;

$client = new Client(['base_uri' => 'https://www.phparch.com', 'cookies' => true]);

$jar = new CookieJar();
$jar->setCookie(
    new SetCookie([
        'Domain' => 'https://www.phparch.com',
        'Name' => 'PHPSESSID',
        'Value' => 'bp270bta6mtvtvhacib8hgr5rj', // login and get PHPSESSID from browser or write request to login
    ])
);


$responseAccount = $client->request('GET', '/account', ['cookies' => $jar]);

$body =$responseAccount->getBody();

if (false !== strpos($body->getContents(), "Marcin")) {
    echo "Uzytkownik zalogowany!\n";
} else {
    echo "Nie zalogowany!\n";
}


//$response = $client->request('GET', '/account/pickup/magazine/pdf?251', [
//    'cookies' => $cookieJar,
//    'stream'  => true
//]);
