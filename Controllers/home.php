<?php

// namespace Site\Controllers;

// use Site\Classes\Controller;
// use Site\Models\HomeModel;

class Home extends Controller
{
    protected function Index()
    {
        $viewmodel = new HomeModel();
        $this->returnView($viewmodel->Index(), true);
    }
}
