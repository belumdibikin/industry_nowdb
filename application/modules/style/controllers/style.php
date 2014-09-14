<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Modul Style
 * Maintainer : Taufik Sulaeman P
 * Email : taufiksu@gmail.com 
 */

class Style extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('style/index');
    }
    //Navigation controller on sidebar product
    function index_add_product() {
        $this->load->view('style/index_add_product');
    }
}
