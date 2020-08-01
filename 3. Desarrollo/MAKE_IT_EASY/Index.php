<?php

session_start();
date_default_timezone_set('America/Bogota');

require_once ('models/database/DB.php');
require_once ('models/User.php');
require_once ('models/Document.php');
require_once ('models/Gender.php');
require_once ('models/Catalogue.php');
require_once('models/Security.php');
require_once('models/Product.php');



$controller=isset($_REQUEST['clase']) ? $_REQUEST['clase']: 'Product';
   $method=isset($_REQUEST['method']) ? $_REQUEST['method']: 'Index';

   require_once ('controllers/'.$controller.'Controller.php');

   $controller=$controller.'Controller';
   call_user_func(array($controller,$method));

  


 