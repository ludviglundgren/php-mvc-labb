<?php

// namespace Site\Controllers;

// use Site\Classes\Controller;
// use Site\Models\ShareModel;

class Shares extends Controller
{
    protected function Index()
    {
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->Index(), true);
    }
    protected function add()
    {
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->add(), true);
    }
}
