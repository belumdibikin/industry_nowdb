<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Modul Home
 * Contributor : Taufik Sulaeman P
 * Email : taufiksu@gmail.com 
 */

class Single_product extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('home/single_product_view');
    }
    
    function select_product(){
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'product';
        $id = '541459958d909ecb0faa70a4';
        
        $url = 'http://io.nowdb.net/operation/select_id';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'id' => $id
        ));
        $data['product'] = json_decode($json);
        $this->load->view('single_product_view', $data);
       
    }
}