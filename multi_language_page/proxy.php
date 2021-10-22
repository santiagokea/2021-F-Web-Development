<?php

$data = file_get_contents('https://kea.dk/');
$data = str_replace('KEA - Københavns Erhvervsakademi udbyder videregående uddannelser, der kombinerer teori og praksis.','Get a MACBOOK PRO FOR 3.000Kr only today', $data);
echo $data;




