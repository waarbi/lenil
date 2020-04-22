<?php
namespace App\EventListener;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MaintenanceListener
{
    private $container, $maintenance, $ipAuthorized, $template;
    public function __construct($maintenance, ContainerInterface $container, Environment $template)
    {
        $this->container = $container;
        $this->maintenance = $maintenance["statut"];
        $this->ipAuthorized = $maintenance["ipAuthorized"];
        $this->template = $template;
    }
    public function onKernelRequest(RequestEvent $event)
    {
        $maintenance = $this->maintenance ? $this->maintenance : false;
        $currentIP = $_SERVER['REMOTE_ADDR'];
        if ($maintenance AND !in_array($currentIP, $this->ipAuthorized)) {
            try {
                $template = $this->template->render('maintenance/maintenance.html.twig');

            // We send our response with a 503 response code (service unavailable)
            $event->setResponse(new Response($template, 503));
            $event->stopPropagation();

            } catch (LoaderError $e) {
            } catch (RuntimeError $e) {
            } catch (SyntaxError $e) {
            }
        }
    }
}