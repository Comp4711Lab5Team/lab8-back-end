<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {
    function __construct()
    {
        parent::__construct();
        $this->load->model('menu');
        $this->data['pagetitle'] = 'Decoupling Our Diner (Server)';
    }
    /**
     * Sets up the form and renders it.
     */
    function index()
    {
        $result = 'go away';
        $this->data['title'] = 'Decoupling Our Diner (Server)';
        $this->data['content'] = $result;
        $this->render();
    }

}
