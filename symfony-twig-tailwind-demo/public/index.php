<?php
// Minimal front controller for demo purposes
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();
$routes->add('home', new Route('/', ['_controller' => 'App\\Controller\\DefaultController::index']));

$context = new RequestContext();
$context->fromRequest(Request::createFromGlobals());
$matcher = new UrlMatcher($routes, $context);

$request = Request::createFromGlobals();
$path = $request->getPathInfo();

if ($path === '/') {
    // simple render using twig via a lightweight approach
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
    $twig = new \Twig\Environment($loader);
    $html = $twig->render('home.html.twig', ['title' => 'Demo - Symfony Twig Tailwind']);
    $response = new Response($html);
    $response->send();
    exit;
}

$response = new Response('Not Found', 404);
$response->send();
