<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('tasks', 'Tasks::index');
$routes->get('profile', 'Profile::index');
$routes->get('about', 'About::index');
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::authenticate');
$routes->post('logout', 'Login::logout', ['filter' => 'auth']);

$routes->group('tasks', ['filter' => 'auth'], static function ($routes): void {
    $routes->get('new', 'Tasks::new');
    $routes->post('', 'Tasks::create');
    $routes->get('(:num)/edit', 'Tasks::edit/$1');
    $routes->post('(:num)', 'Tasks::update/$1');
    $routes->post('(:num)/archive', 'Tasks::archive/$1');
});

