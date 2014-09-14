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
    
    function sidebar_home() {
        $this->load->view('dashboard/sidebar_home');
    }

    function sidebar_product() {
        $this->load->view('dashboard/sidebar_product');
    }

    function sidebar_buyreq() {
        $this->load->view('dashboard/sidebar_buyreq');
    }

    function sidebar_contact() {
        $this->load->view('dashboard/sidebar_contact');
    }
    // Mini Lib
    function getProvince() {
        $token = "52f866f58d909e13236110e5";
        $appid = "540d623c8d909ed04c1ab541";
        $project = "eindustry";
        $collection = "cl_province";

        $url = "http://io.nowdb.net/operation/select_all";
        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection
        ));

        echo $json;
    }

    function getDown() {
        $token = "52f866f58d909e13236110e5";
        $appid = "540d623c8d909ed04c1ab541";
        $project = "eindustry";

        $parent = $this->input->post('parent', true);
        $collection = $this->input->post('down', true);

        $url = "http://io.nowdb.net/operation/select_where";
        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'parent' => $parent
        ));

        echo $json;
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('');
    }

}
