<?php

function do_check($url) {
    $ch=curl_init();
    $timeout=5;
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    
    $result=curl_exec($ch);
    curl_close($ch);
    return $result;
}


$example= do_check('http://www.example.com/');
echo 'example: '. gettype($example) .'<br />';

$vg = do_check('https://www.vg.nosdf');
echo 'vg: ' . gettype($vg) .'<br />'; 
