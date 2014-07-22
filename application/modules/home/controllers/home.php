<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Modul Welcome
 * Maintainer : Taufik Sulaeman P
 * Email : taufiksu@gmail.com 
 */

class Home extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('logged_in') == TRUE) {
            redirect('home/main');
        } else {
            $this->load->view('home/login');
        }
    }

    function style() {
        $this->load->view('home/style');
    }

}
