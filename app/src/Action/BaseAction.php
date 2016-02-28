<?php
namespace App\Action;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class BaseAction
{
    protected $view;
    protected $logger;

    public function __construct(ContainerInterface $container)
    {
        $this->settings = $container->get('settings');
        $this->router = $container->get('router');
        $this->view = $container->get('view');
        $this->logger = $container->get('logger');
    }

    public function __destruct()
    {
    }
}
