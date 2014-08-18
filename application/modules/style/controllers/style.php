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


    //Navigation controller on sidebar product
    function index_add_product() {
        $this->load->view('style/index_add_product');
    }

    // Navigation controller on sidebar website
    function index_certification() {
        $this->load->view('style/index_certification');
    }

    function index_company(){
        $this->load->view('style/index_company');
    }

    function index_trade(){
        $this->load->view('style/index_trade');
    }

    function index_partner(){
        $this->load->view('style/index_partner');
    }

    function index_intro(){
        $this->load->view('style/index_intro');
    }




    // Certification
    function nav_award(){
        $this->load->view('style/nav_award');
    }

    function nav_certificate(){
        $this->load->view('style/nav_certificate');
    }

     function nav_patent(){
        $this->load->view('style/nav_patent');
    }
    
     function nav_trademarks(){
        $this->load->view('style/nav_trademarks');
    }
    
    function sub_header_certificate(){
        $this->load->view('style/sub_header_certificate');
    }

    function sub_header_award(){
        $this->load->view('style/sub_header_award');
    }

    function sub_header_patent(){
        $this->load->view('style/sub_header_patent');
    }

    function sub_header_trademarks(){
        $this->load->view('style/sub_header_trademarks');
    }

    function form_fill_certificate(){
        $this->load->view('style/form_fill_certificate');
    }

    function form_fill_award(){
        $this->load->view('style/form_fill_award');
    }

    function form_fill_patent(){
        $this->load->view('style/form_fill_patent');
    }

    function form_fill_trademarks(){
        $this->load->view('style/form_fill_trademarks');
    }


    // Button for Append
    function btn_minus(){
        $this->load->view('style/btn_minus');
    }

}
