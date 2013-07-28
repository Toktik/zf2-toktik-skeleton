<?php
return array(
  'home' => array(
    'type' => 'Zend\Mvc\Router\Http\Literal',
    'options' => array(
      'route'    => '/',
      'defaults' => array(
        'controller' => 'App\Controller\Index',
        'action'     => 'index',
      ),
    ),
  ),
  // The following is a route to simplify getting started creating
  // new controllers and actions without needing to create a new
  // module. Simply drop new controllers in, and you can access them
  // using the path /app/:controller/:action
  'app' => array(
    'type'    => 'Literal',
    'options' => array(
      'route'    => '/index',
      'defaults' => array(
        '__NAMESPACE__' => 'App\Controller',
        'controller'    => 'Index',
        'action'        => 'index',
      ),
    ),
    'may_terminate' => true,
    'child_routes' => array(
      'default' => array(
        'type'    => 'Segment',
        'options' => array(
          'route'    => '/[:controller[/:action]]',
          'constraints' => array(
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => array(
          ),
        ),
      ),
    ),
  ),
);