<?php

require_once 'vendor/autoload.php'; //require_once is being used as a type of include to include the autoload from vendor folder
use App\classes\HelloWorld;

// $helloWorld = new HelloWorld();
// $helloWorld->index();                   // "->" This is php odject sign
// $helloWorld = new HelloWorld(data:'BD');
// $helloWorld->index();                   // "->" This is php odject sign
$helloWorld = new HelloWorld(data:'BD');
$helloWorld->index();                   // "->" This is php odject sign







?>