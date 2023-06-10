<?php

    include'prime.php';

    header('Access-Control-Allow-Origin: *');
    
    $url = basename($_SERVER['REQUEST_URI']);

    $url_components = parse_url($url);
 
    parse_str($url_components['query'], $params);

    $number = $params['number'];    
 
    $y = $number;
    echo "Prime numbers till ".$y." are: \n";

    for($i = 2; $i < $y + 1; $i++) {
      primenumber($i);
    }

   

?>