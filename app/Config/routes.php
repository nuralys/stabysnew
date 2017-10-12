<?php

	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
	Router::connect('/products', array('controller' => 'categories', 'action' => 'index'));
	Router::connect('/feedback', array('controller' => 'feedbacks', 'action' => 'index'));
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/contacts', array('controller' => 'contacts', 'action' => 'index'));
	Router::connect('/category/*', array('controller' => 'categories', 'action' => 'view'));
	Router::connect('/cats/*', array('controller' => 'categories', 'action' => 'cats'));
	Router::connect('/product/*', array('controller' => 'products', 'action' => 'view'));
	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/news/*', array('controller' => 'news', 'action' => 'view'));
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	Router::connect('/basket', array('controller' => 'baskets', 'action' => 'index'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
