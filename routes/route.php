 <?php

 //Sistem routing

use App\Controllers\MotorController;
use App\Controllers\MobilController;
use App\Controllers\ValidityController;


 $app->get('/', function($request, $response) {
     return $this->view->render($response, 'home.twig');
 });

 $app->get('/motor', MotorController::class.':index');

 $app->get('/mobil', MobilController::class.':index');

 $app->get('/motor/{merk}', MotorController::class.':find');

 $app->get('/mobil/{merk}', MobilController::class.':find');

 $app->post('/valid/add', ValidityController::class.':postAdd');

 $app->get('/valid/add', ValidityController::class.':add')->setName('valid.add');
