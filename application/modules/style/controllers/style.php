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

    function sidebar_home() {
        $this->load->view('style/sidebar_home');
    }

    function sidebar_website() {
        $this->load->view('style/sidebar_website');
    }

    function sidebar_product() {
        $this->load->view('style/sidebar_product');
    }

    function sidebar_buyreq() {
        $this->load->view('style/sidebar_buyreq');
    }

    function sidebar_contact() {
        $this->load->view('style/sidebar_contact');
    }

    function index_certification() {
        $this->load->view('style/index_certification');
    }

    function index_information() {
        $this->load->view('style/index_information');
    }

}
