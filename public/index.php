<?php

session_start();

use System\Router;

require_once('../vendor/autoload.php');

Router::dispatch();

