<?php

$example= @file_get_contents('http://www.example.com/');
echo 'example: '. gettype($example) .'<br />';

$vg = @file_get_contents('https://www.vg.no');
echo 'vg: ' . gettype($vg) .'<br />'; 
