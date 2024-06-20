<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact','Page::contact');
$routes->get('/faqs','Page::faqs');
$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');
