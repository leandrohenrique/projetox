<?php
 require_once '../vendor/autoload.php';

 use App\Controllers\HomeController;

 $home = new HomeController;
 echo $home->index();