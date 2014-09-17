<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Modul Home
 * Contributor : Taufik Sulaeman P
 * Email : taufiksu@gmail.com 
 */

class Home extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('home/index');
    }

    function dashboard() {
        redirect('dashboard/index');
    }

    function style() {
        $this->load->view('home/style');
    }

    function select_all_category() {
        //fungsi untuk mengambil parent category 0
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'category';
        $category_parent = '0';

        $url = 'http://io.nowdb.net/operation/select_where';
        $json = $this->curl->simple_post($url, array('token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'category_parent' => $category_parent,
            'category_name' => $category_name));


        $data['category'] = json_decode($json);
        $this->load->view('index', $data);
    }

    
}
