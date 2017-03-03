<?php

namespace App\Controllers;


use Interop\Container\ContainerInterface;
use App\Models\Motor;

class MotorController extends AbstractController
{

    public function index($request, $response)
    {
        $data = Motor::all();
        return $this->c->view->render($response, 'motor.twig', [
            'motors' => $data
        ]);
    }

    public function find($request, $response, $args)
    {

        $data = Motor::select('*')->where('merk', $args)->get();
        return $this->c->view->render($response, 'motor.twig', [
            'motors' => $data
        ]);
    }
}
