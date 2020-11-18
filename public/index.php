<?php


include "../config/config.php";

include "../engine/Autoloader.php";

use app\engine\{Autoloader, Db};
use app\models\{Product, User};

spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new Product;

$db = new Db;

$f = $db->getConnection();

