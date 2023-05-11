<?php
/*
 * Jennifer Zaldivar
 * 5/9/23
 * 328/Pets/index.php
 * Controller for Coding Quiz: Pets
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create a F3 (Fat-Free Framework) object
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function ($f3) {
    //echo '<h1>My Pets!</h1>';


    //Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});


//Run Fat-Free
$f3->run();

?>