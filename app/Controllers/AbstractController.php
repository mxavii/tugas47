<?php


namespace App\Controllers;

use Interop\Container\ContainerInterface;

class AbstractController
{
    protected $c;

    public function __construct(ContainerInterface $container)
    {
        $this->c = $container;
    }
}
