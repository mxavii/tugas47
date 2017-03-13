<?php

namespace App\Middleware;

session_start();

class ErrorsValidity extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if (isset($_SESSION['errors'])){
            $this->container->view->getEnvironment()->addGlobal('errors', $_SESSION['errors']);
            unset($_SESSION['errors']);
        }

        $response = $next($request, $response);
        return $response;

    }
}
