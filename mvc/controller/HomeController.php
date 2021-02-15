<?php

require_once 'ressources/inc/navbar.php';

class HomeController extends Tm_Controller{

    public function index(){
        $this->load->view("home"); 
    }
}