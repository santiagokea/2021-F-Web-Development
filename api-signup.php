<?php
// APIs almost never reply with HTML
// APIs almost always reply with JSON and HTTP status codes
// 20x means ok. We will use 200
// 30x means redirect - In APIs hardly used
// 40x means client error - We will use 400
// 50x means server error - We will use 500
// POST data
// http_response_code(200);
// the dot . means concatenation
// echo $_POST['name'].' '.$_POST['last_name'];
echo "{$_POST['name']} {$_POST['last_name']}";



