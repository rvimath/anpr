<?php

$headers = [
    "x-api-key: OlL1DrA85E2UWZRurgCpG57fcGSS5TuJ9kACb6I9",
    "Content-Type: application/json",
    "User-Agent: REST API Client",
    "Authorization: OlL1DrA85E2UWZRurgCpG57fcGSS5TuJ9kACb6I9"
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true
]);

return $ch;



