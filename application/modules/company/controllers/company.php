<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Modul Company
 * Contributor : Taufik Sulaeman P
 * Email : taufiksu@gmail.com 
 */

class Company extends MX_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('company/index_company');
    }
    
    function sidebar_website() {
        if($this->getCompanyId() != '' or $this->getCompanyId() != NULL){
            $this->session->set_userdata('id_company', $this->getCompanyId());
        }else{
            $this->session->set_userdata('id_company', '');
        }
        $this->load->view('company/sidebar_website');
    }
    
    function getCompanyId(){
        $token = "52f866f58d909e13236110e5";
        $appid = "540d623c8d909ed04c1ab541";
        $project = "eindustry";
        $collection = "company";
        
        $data__ = array(
            'token' => urldecode($token),
            'appid' => urldecode($appid),
            'project' => urldecode($project),
            'collection' => urldecode($collection),
            'id_user' => urldecode($this->session->userdata('id_user'))
        );

        $url = "http://io.nowdb.net/operation/select_where";
        $json = $this->curl->simple_post($url, $data__);
        
        $_json = json_decode($json);
        
        return $_json[0]->id;
    }
    
    function getCompanyDetail($id_company){
        $token = "52f866f58d909e13236110e5";
        $appid = "540d623c8d909ed04c1ab541";
        $project = "eindustry";
        $collection = "company";
        
        $data__ = array(
            'token' => urldecode($token),
            'appid' => urldecode($appid),
            'project' => urldecode($project),
            'collection' => urldecode($collection),
            'id' => $id_company
        );

        $url = "http://io.nowdb.net/operation/select_id";
        $json = $this->curl->simple_post($url, $data__);
        
        $_json = json_decode($json);
        
        return $_json;
    }
    
    function index_certification() {
        $this->load->view('company/index_certification');
    }

    function index_company() {
        if($this->session->userdata('id_company') != '' or $this->session->userdata('id_company') != NULL){
            $dataSend = $this->getCompanyDetail($this->session->userdata('id_company'));
        }
        $this->load->view('company/index_company', $dataSend[0]);
    }

    function index_trade() {
        $this->load->view('company/index_trade');
    }

    function index_partner() {
        $this->load->view('company/index_partner');
    }

    function index_intro() {
        $this->load->view('company/index_intro');
    }

    // Certification
    function form_fill_certificate() {
        $this->load->view('company/form_fill_certificate');
    }

    function form_fill_award() {
        $this->load->view('company/form_fill_award');
    }

    function form_fill_patent() {
        $this->load->view('company/form_fill_patent');
    }

    function form_fill_trademarks() {
        $this->load->view('company/form_fill_trademarks');
    }

    // Button for Append
    function btn_minus() {
        $this->load->view('company/btn_minus');
    }
    
    function inputCompanyDetail() {
        $token = "52f866f58d909e13236110e5";
        $appid = "540d623c8d909ed04c1ab541";
        $project = "eindustry";
        $collection = "company";

        $id_user = $this->session->userdata('id_user');

        $company_name = $this->input->post('company_name', true);
        $company_location_registration = $this->input->post('company_location_registration_province', true) . "#" . $this->input->post('company_location_registration_district', true) . "#" . $this->input->post('company_location_registration_subdistrict', true) . "#" . $this->input->post('company_location_registration_village', true);
        $company_operational_street = $this->input->post('company_operational_street_street', true) . "#" . $this->input->post('company_operational_street_province', true) . "#" . $this->input->post('company_operational_street_district', true) . "#" . $this->input->post('company_operational_street_subdistrict', true) . "#" . $this->input->post('company_operational_street_village', true) . "#" . $this->input->post('company_operational_street_postal', true);
        $company_product_other = "";
        for ($count = 1; $count <= 8; $count ++) {
            $company_product_other .= $this->input->post('company_product_other_' . $count, true);
            if ($count != 8)
                $company_product_other .= "#";
        }

        $company_year_registered = $this->input->post('company_year_registered', true);
        $company_employee_total = $this->input->post('company_employee_total', true);
        $company_owner = $this->input->post('company_owner', true);
        $company_size_office = $this->input->post('company_size_office', true);
        $company_advantages = $this->input->post('company_advantages', true);
        $company_website = "";
        for ($count = 1; $count <= 4; $count ++) {
            $company_website .= $this->input->post('company_website_' . $count, true);
            if ($count != 4)
                $company_website .= "#";
        }

        $company_product_main = "";
        for ($count = 1; $count <= 4; $count ++) {
            $company_product_main .= $this->input->post('company_product_main_' . $count, true);
            if ($count != 4)
                $company_product_main .= "#";
        }

        $data__ = array(
            'token' => urldecode($token),
            'appid' => urldecode($appid),
            'project' => urldecode($project),
            'collection' => urldecode($collection),
            'id_user' => urldecode($id_user),
            'company_name' => urldecode($company_name),
            'company_location_registration' => urldecode($company_location_registration),
            'company_operational_street' => urldecode($company_operational_street),
            'company_product_other' => urldecode($company_product_other),
            'company_year_registered' => urldecode($company_year_registered),
            'company_employee_total' => urldecode($company_employee_total),
            'company_owner' => urldecode($company_owner),
            'company_size_office' => urldecode($company_size_office),
            'company_advantages' => urldecode($company_advantages),
            'company_product_main' => urldecode($company_product_main),
            'company_website' => urldecode($company_website)
        );
        
        if($this->session->userdata('id_company') != '' or $this->session->userdata('id_company') != NULL){
            $data__['id'] = $this->session->userdata('id_company');
            $url = "http://io.nowdb.net/operation/update_id";   
        }else{
            $url = "http://io.nowdb.net/operation/insert";
        }
        
        $json = $this->curl->simple_post($url, $data__);

        echo $json;
    }

}
