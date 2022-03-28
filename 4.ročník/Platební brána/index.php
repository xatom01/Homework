<?php
define("API_URL", "http://payway.bubileg.cz/");
$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, API_URL);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode(
        !empty($result)
            ? $result
            : '{"status_key":"1","status_mess":"Communication failure"}',
        true
    );