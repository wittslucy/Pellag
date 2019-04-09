<?php

    function call($controller, $action)
    {
        // require the file that matches the controller name
        require_once 'controllers/' . $controller . 'controller.php';

        // create a new instance of the needed controller
        if ($controller === 'Pages') {
            $controller = new PagesController();
        } else {
            //for all data-driven pages use a specific Controller class
            //we need the model to query the database later in the process
            require_once 'models/' . $controller . '.php';
            $controllerClassName = $controller . 'Controller';
            $controller = new $controllerClassName();
        }
        // call the requested action
        $controller->{$action}();
    }

    // For validation we list the allowed controllers and their actions
    // Add an entry for each new controller and its actions
    $controllers = array(
        'Pages' => ['home', 'error', 'logIn', 'registerUser'],
        'Post' => ['readAll', 'read', 'create', 'update', 'delete'],
        'controllerXXX' => ['actionYYY', 'actionZZZ'],
    );

    // check that the requested controller and action are both allowed
    // if someone tries to access something else they will be redirected
    // to the error action of the pages controller
    if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {
            call($controller, $action);
        } else {
            call('Pages', 'error');
        }
    } else {
        call('Pages', 'error');
    }
