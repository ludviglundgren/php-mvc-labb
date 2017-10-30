<?php

// namespace Site\Classes;

// use Site\Classes\Boostrap;

// use Site\Models\HomeModel;
// use Site\Models\ShareModel;
// use Site\Models\UserModel;

// use Site\Controllers\Home;
// use Site\Controllers\Shares;
// use Site\Controllers\Users;

abstract class Controller
{
    protected $request;
    protected $action;

    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction()
    {
        return $this->{$this->action}();
    }

    protected function returnView($viewmodel, $fullview)
    {
        $view = 'views/'. get_class($this). '/' . $this->action. '.php';
        if ($fullview) {
            require('views/main.php');
        } else {
            require($view);
        }
    }
}
