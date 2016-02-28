<?php
namespace App\Action;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class DispatchAction extends BaseAction
{

    public function dispatchHome(Request $request, Response $response, $args)
    {
        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'index.twig');
        return $response;
    }

    public function dispatchBlank(Request $request, Response $response, $args)
    {
        $this->logger->info("Blank page action dispatched");
        
        $this->view->render($response, 'blank.twig');
        return $response;
    }

    public function dispatchButtons(Request $request, Response $response, $args)
    {
        $this->logger->info("Buttons page action dispatched");
        
        $this->view->render($response, 'buttons.twig');
        return $response;
    }

    public function dispatchFlot(Request $request, Response $response, $args)
    {
        $this->logger->info("Flot page action dispatched");
        
        $this->view->render($response, 'flot.twig');
        return $response;
    }

    public function dispatchForms(Request $request, Response $response, $args)
    {
        $this->logger->info("Forms page action dispatched");
        
        $this->view->render($response, 'forms.twig');
        return $response;
    }

    public function dispatchGrid(Request $request, Response $response, $args)
    {
        $this->logger->info("Grid page action dispatched");
        
        $this->view->render($response, 'grid.twig');
        return $response;
    }

    public function dispatchIcons(Request $request, Response $response, $args)
    {
        $this->logger->info("Icons page action dispatched");
        
        $this->view->render($response, 'icons.twig');
        return $response;
    }

    public function dispatchLogin(Request $request, Response $response, $args)
    {
        $this->logger->info("Login page action dispatched");
        
        $this->view->render($response, 'login.twig');
        return $response;
    }

    public function dispatchMorris(Request $request, Response $response, $args)
    {
        $this->logger->info("Morris page action dispatched");
        
        $this->view->render($response, 'morris.twig');
        return $response;
    }

    public function dispatchNotifications(Request $request, Response $response, $args)
    {
        $this->logger->info("Notifications page action dispatched");
        
        $this->view->render($response, 'notifications.twig');
        return $response;
    }

    public function dispatchPanelWells(Request $request, Response $response, $args)
    {
        $this->logger->info("PanelWells page action dispatched");
        
        $this->view->render($response, 'panels.twig');
        return $response;
    }

    public function dispatchTables(Request $request, Response $response, $args)
    {
        $this->logger->info("Tables page action dispatched");
        
        $this->view->render($response, 'tables.twig');
        return $response;
    }

    public function dispatchTypography(Request $request, Response $response, $args)
    {
        $this->logger->info("Typography page action dispatched");
        
        $this->view->render($response, 'typography.twig');
        return $response;
    }
}
