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

    public function __get($property)
	{
		if ($this->c->{$property}) {
			return $this->c->{$property};
		}
	}
}
