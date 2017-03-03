<?php

namespace App\Controllers;


use Interop\Container\ContainerInterface;
use App\Models\Mobil;

class MobilController extends AbstractController
{

    public function index($request, $response)
    {
        $data = Mobil::all();
        return $this->c->view->render($response, 'mobil.twig', [
            'mobils' => $data
        ]);
    }

    public function find($request, $response, $args)
    {

         $data = Mobil::select('*')->where('merk', $args)->get();
         return $this->c->view->render($response, 'mobil.twig', [
             'mobils' => $data
         ]);
    }
}
