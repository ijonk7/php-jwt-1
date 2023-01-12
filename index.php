<?php

require_once __DIR__ . '/vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];

$key2 =  new Key($key, 'HS256');
print_r($key2);

echo "<br />";

$jwt = JWT::encode($payload, $key, 'HS256');
print_r($jwt);

echo "<br />";

$decoded = JWT::decode($jwt, new Key($key, 'HS256'));
print_r($decoded);

echo "<br />";

// $decoded = JWT::decode($jwt, '55e2007503c358f98afe0ec5388f5b0719fdfae8d50429b5db7574ba484ae398');
// print_r($decoded);
