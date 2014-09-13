<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Modul Home
 * Contributor : Taufik Sulaeman P
 * Email : taufiksu@gmail.com 
 */

class Dashboard extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('logged_in') == TRUE) {
            $this->load->view('dashboard/index');
        } else {
            redirect('user/index');
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('');
    }

}
