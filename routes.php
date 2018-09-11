<?php

  /**
   * Call; get the controller required
   * @param  [string] $controller [the nam eof the controller to load]
   * @param  [string] $action     [the name of the method inside that controller to trigger]
   */
  function call($controller, $action) {
    require_once('controllers/' . $controller . 'Controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once( $_SERVER["DOCUMENT_ROOT"] . '/models/post.php');
        $controller = new PostsController();
      break;
    }

    $controller->{ $action }();
  }

  // adding entry for - new controller + actions
  $controllers = array('pages' => ['home', 'error'],
                       'posts' => ['index', 'show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>