<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Modul User 
 */

class User extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }

    function index() {
        $this->load->view('user/index');
    }

    /*
      page_registration
     *      */

    function page_registration() {
        $this->load->view('user/page_registration');
    }

    function check_email() {

        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'userx';

        $user_email = $this->input->post('val_email', true);
        $user_password = sha1($this->input->post('val_password', true));
        $user_firstname = $this->input->post('val_user_firstname', true);
        $user_lastname = $this->input->post('val_user_lastname', true);
        $user_type = $this->input->post('val_user_type', true);
        //print_r($user_email);
        /*
         * status rule : 0 -> unactivated, 1 -> activated
         */

        $url = 'http://io.nowdb.net/operation/count_where';

        //
        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'user_email' => $user_email
        ));

        $return = json_decode($json);

        //print_r($return->total);

        if ($return->total == '0') { //cek email tidak ada  
            echo '{';
            echo '"message": "1"';//to page send_verification., check your mail, re-send verification mail
            echo '}';            
        } else {
            $url = 'http://io.nowdb.net/operation/select_where';
            $json = $this->curl->simple_post($url, array(
                'token' => $token,
                'appid' => $appid,
                'project' => $project,
                'collection' => $collection,
                'user_email' => $user_email,
            ));

            $return = json_decode($json);
            if ($return['user_status'] == '1') {
                echo '{';
                echo '"message": "2"'; //to page already_exist, please Login
                echo '}';
                //print_r('activated');
            } else {
                echo '{';
                echo '"message": "3"'; //to page already send verification mail, please cek your mail, or re-send the verification mail
                echo '}';

                //print_r('unactivated');
            }
        }
    }

    function new_member() {

        //print_r($user_email);

        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'userx';
        
        $user_email = $this->input->post('val_email', true);
        $user_password = sha1($this->input->post('val_password', true));
        $user_firstname = $this->input->post('val_user_firstname', true);
        $user_lastname = $this->input->post('val_user_lastname', true);
        $user_type = $this->input->post('val_user_type', true);
        $user_status = 0;
        /*
         * status rule : 0 -> unactivated, 1 -> activated
         */

        $url = 'http://io.nowdb.net/operation/insert';
        //process
        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'user_email' => $user_email,
            'user_password' => $user_password,
            'user_firstname' => $user_firstname,
            'user_lastname' => $user_lastname,
            'user_type' => $user_type,
            'user_status' => $user_status
        ));

         $return = json_decode($json);
         print_r($return);
         
    }

    function send_mail_verification($user_email) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com.',
            'smtp_port' => 587,
            'smtp_user' => 'ryans.mini28@gmail.com', // change it to yours
            'smtp_pass' => 'manchester19', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->from('ryans.mini28@gmail.com', "Admin Team");
        $this->email->to($user_email);
        $this->email->cc("deroy21.04@gmail.com");
        $this->email->subject("This is test subject line");
        $this->email->message("Mail sent test message...");

        $data['message'] = "1";
        if ($this->email->send()) {
            $data['message'] = "2";
        }
//        show_error($this->email->print_debugger());
//        return $data;
    }

    function send_reset_password() {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com.',
            'smtp_port' => 587,
            'smtp_user' => 'ryans.mini28@gmail.com', // change it to yours
            'smtp_pass' => 'manchester19', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->from('ryans.mini28@gmail.com', "Admin Team");
        $this->email->to($user_email);
        $this->email->cc("deroy21.04@gmail.com");
        $this->email->subject("This is test subject line");
        $this->email->message("Please click this link to activate your account"
                . base_url() . "index.php/user/reset_password?email=" . $email);

        $data['message'] = "1";
        if ($this->email->send()) {
            $data['message'] = "2";
        }
        //show_error($this->email->print_debugger());
        print_r ($data['message']);
    }

    function reset_password() {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'userx';

        $user_status = '1';
        /*
         * status rule : 0 -> unactivated, 1 -> activated
         */
        $where = 'user_email';
        $where_value = $email;
        $update = 'password';
        $update_value = $user_status;

        $url = 'http://io.nowdb.net/operation/update_where';
        //process
        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'where' => $where,
            'where_value' => $where_value,
            'update' => $update,
            'update_value' => $update_value
        ));
    }

    function login() {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'userx';

        $user_email = $this->input->post('val_login_email', true);
        $user_password = $this->input->post('val_login_password', true);
        $user_status = '1';

        $url = 'http://io.nowdb.net/operation/select_where';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'user_email' => $user_email,
            'user_password' => sha1($user_password),
            'user_status' => $user_status
        ));
            
        $return = json_decode($json);
        
        $_userdata = array('logged_in' => TRUE, 'id_user' => $return[0]->id, 'user_role' => $return[0]->user_type);
        
        $this->session->set_userdata($_userdata);
        redirect('dashboard/index');
    }

    function verify_account() {
        $email = mysql_escape_string($_GET['email']);

        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'userx';

        $user_status = '1';
        /*
         * status rule : 0 -> unactivated, 1 -> activated
         */
        $where = 'user_email';
        $where_value = $email;
        $update = 'user_status';
        $update_value = $user_status;

        $url = 'http://io.nowdb.net/operation/update_where';
        //process
        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'where' => $where,
            'where_value' => $where_value,
            'update' => $update,
            'update_value' => $update_value
        ));

        $return = json_decode($json);
        if ($return->status == '1') {
            $this->page_already_activated();
        } else {
            $this->page_send_verification();
        }
    }

    function page_send_verification($message) {
        if($message == '1'){
            $data['message'] = 'Sorry Unable to send email';
        }else if($message == 2){
            $data['message'] = 'Email sent..';
        }
        
        $this->load->view('user/page_send_verification', $data);
    }

    function page_already_activated() {
        $this->load->view('user/page_already_activated');
    }

    function page_login() {
        $this->load->view('user/page_login');
    }

    function page_reset_password() {
        $this->load->view('user/page_reset_password');
    }
    
    function page_forgot_password(){
        $this->load->view('user/page_forgot_password');
    }
    
    function page_signedin($id){
        $__session = array('logged_in' => TRUE, 'id_user' => $id);
        
        $this->session->set_userdata($_session);
        redirect('dashboard/index');
    }
 
}
