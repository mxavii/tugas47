<?php

namespace App\Controllers;

Use App\Models\Motor;
Use App\Models\Mobil;
use Respect\Validation\Validator as Valid;
use Interop\Container\ContainerInterface;
// use App\Controllers\AbstractController;
// use Slim\Views\Twig as View;


class ValidityController extends AbstractController
{

    public function add($request, $response)
    {
        return $this->c->view->render($response, 'add.twig');
    }

    public function postAdd($request, $response)
    {
        $validation = $this->validator->validate($request, [
            'nopol' => Valid::noWhitespace()->notEmpty()->alnum(),
            'merk' => Valid::notEmpty()->alnum(),
            'warna' => Valid::notEmpty()->alpha(),
            'kubikasi' => Valid::intVal()->between(10, 100000),
            'tahun_perakitan' => Valid::date('Y'),
        ]);

        if ($validation->failed()) {
            return $response->withRedirect($this->router->pathFor('valid.add'));
        }

        if ($request->getparam('jenis') =='motor') {
            Motor::Create([
                'nopol' => $request->getparam('nopol'),
                'merk' => $request->getparam('merk'),
                'warna' => $request->getparam('warna'),
                'kubikasi' => $request->getparam('kubikasi'),
                'tahun_perakitan' => $request->getparam('tahun_perakitan')
            ]);
        } elseif ($request->getparam('jenis') =='mobil') {
            Mobil::Create([
                'nopol' => $request->getparam('nopol'),
                'merk' => $request->getparam('merk'),
                'warna' => $request->getparam('warna'),
                'kubikasi' => $request->getparam('kubikasi'),
                'tahun_perakitan' => $request->getparam('tahun_perakitan')
            ]);
        }

        return $response->withRedirect($this->router->pathFor('valid.add'));

    }
}
