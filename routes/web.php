 <?php

 //Sistem routing

use App\Controllers\MotorController;
use App\Controllers\MobilController;


 $app->get('/', function($request, $response) {
     return $this->view->render($response, 'home.html');
 });

 $app->get('/motor', MotorController::class.':index');

 $app->get('/mobil', MobilController::class.':index');

 $app->get('/motor/{merk}', MotorController::class.':find');

 $app->get('/mobil/{merk}', MobilController::class.':find');
