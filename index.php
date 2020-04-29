<?php

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;

$db = new DB();
ConnectionFactory::setConfig('src\conf\conf.ini');
ConnectionFactory::makeConnection();
$db->setAsGlobal();
$db->bootEloquent();

$app = new \Slim\Slim();
$app->get('/hello/world', function () {
 echo "Hello, World !";
});
$app->run();

?>
