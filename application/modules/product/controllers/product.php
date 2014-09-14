<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Modul Product
 * Contributor : Taufik Sulaeman P
 * Email : taufiksu@gmail.com 
 */

class Product extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('product/index');
    }

    function sidebar_product() {
        $this->load->view('product/sidebar_product');
    }

    /* tambah produk */

    function index_addProduct() {
        $this->load->view('product/index_addProduct');
    }

    function index_addProductInfo($selected_category) {
        $data['selected_category'] = $selected_category;
        $this->load->view('product/index_addProductInfo', $data);
    }

    /* Form */

    function form_select_category() {
        $this->load->view('product/form_select_category');
    }

    function form_select_recentcategory() {
        $this->load->view('product/form_select_recentcategory');
    }

    function form_informasi_product() {
        $this->load->view('product/form_informasi_product');
    }

    function form_product_detail() {
        $this->load->view('product/form_product_detail');
    }

    function form_trade_info() {
        $this->load->view('product/form_trade_info');
    }

    /* Action */

    function upload_file() {

        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'document_path';
        $id_foreign = '';
        $foreign_table = '';
        $time_upload = date('Y-m-d-h:i:sa');

        $file = $this->input->post('file', true);
        $url = 'http://io.nowdb.net/operation/insert';

        $config['upload_path'] = './asset/document/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1024 * 8';
        $config['file_name'] = $file . '_' . random_string('alnum', '25');

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {//failed
            $error = array('error' => $this->upload->display_errors());

            echo "{";
            echo "msg: '" . $error['error'] . "'";
            echo "}";
        } else {//success
            $hasil = $this->upload->data();
            $file_name = $hasil['file_name'];
            $file_size = $hasil['file_size'];
            $file_type = $hasil['file_ext'];
            $path = $hasil['upoad_path'];

            $json = $this->curl->simple_post($url, array(
                'token' => $token,
                'appid' => $appid,
                'project' => $project,
                'collection' => $collection,
                'id_foreign' => $id_foreign,
                'path' => $path,
                'file_name' => $file_name,
                'file_type' => $file_type,
                'file_size' => $file_size,
                'foreign_table' => $foreign_table,
                'time_upload' => $time_upload
            ));
            $return = json_decode($json);

            echo '{';
            echo '"msg": "1", "fileid":"' . $return[0]->id . '"';
            echo '}';
        }
    }
    
    function add_custom_detail($id_product, $pcd_attr, $pcd_val) {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'product_custom_detail';

        $pcd_attribute = $pcd_attr;
        $pcd_value = $pcd_val;

        $url = 'http://io.nowdb.net/operation/insert';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'id_product' => $id_product,
            'pcd_attribute' => $pcd_attribute,
            'pcd_value' => $pcd_value
        ));
        
        $return = json_decode($json);
        
        return $return[0]->id;
    }
    
    function update_product_custom_detail($id, $id_product_custom_detail) {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'product';

        $url = 'http://io.nowdb.net/operation/update_id';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'id' => $id,
            'product_custom_detail' => $id_product_custom_detail
        ));
    }
    
    function submit_product($file_id) {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'product';

        $id_company = "";
        $product_category = $this->input->post('val_product_category', true);
        /* Form Informasi Product */
        $product_name = $this->input->post('val_product_name', true);
        $product_keyword = $this->input->post('val_product_keyword', true);
        $product_listing = $this->input->post('val_product_listing', true);
        $product_photo = $file_id;

        /* Form Detail Product */
        $model_number = $this->input->post('val_product_model_number', true);
        $brand_name = $this->input->post('val_product_brand', true);
        /*place*/
        $origin_place_province = $this->input->post('val_product_origin_place_province', true);
        $origin_place_district = $this->input->post('val_product_origin_place_district', true);
        $origin_place_subdistrict = $this->input->post('val_product_origin_place_subdistrict', true);
        $origin_place_village = $this->input->post('val_product_origin_place_village', true);
        
        $origin_place = $origin_place_province."#".$origin_place_district."#".$origin_place_subdistrict."#".$origin_place_village;
        /* to table product custom detail */
        $product_custom_detail_attr = $this->input->post('val_more_attr', true);
        $product_custom_detail_value = $this->input->post('val_more_attr_value', true);

        /*trade*/
        $product_trade_min_value = $this->input->post('val_product_min_order_value', true);
        $product_trade_min_unit = $this->input->post('val_product_min_order_unit', true);
        $product_trade_min = $product_trade_min_value."#".$product_trade_min_unit;
        
        $product_trade_fob_currency = $this->input->post('val_fob_price_currency', true);
        $product_trade_fob_min = $this->input->post('val_fob_price_min', true);
        $product_trade_fob_max = $this->input->post('val_fob_price_max', true);
        $product_trade_fob_unit = $this->input->post('val_fob_price_unit', true);
        $product_trade_fob = $product_trade_fob_currency."#".$product_trade_fob_min."#".$product_trade_fob_max."#".$product_trade_fob_unit;
        
        $product_trade_port = $this->input->post('val_trade_port', true);
        
        $product_payment = $this->input->post('val_trade_payment', true);
        $product_trade_payment = "";
        foreach($product_payment as $payment_field){
            $product_trade_payment .= $payment_field ."#";
        }
        
        $product_trade_supply_ability = $this->input->post('val_supply_ability', true);
        $product_trade_supply_ability_unit = $this->input->post('val_supply_ability_unit', true);
        $product_trade_supply_ability_time = $this->input->post('val_supply_ability_time', true);
        $product_trade_supply = $product_trade_supply_ability."#".$product_trade_supply_ability_unit."#".$product_trade_supply_ability_time;
        
        $product_trade_delivery = $this->input->post('val_time_shipment', true);
        $product_trade_packaging = $this->input->post('val_trade_packaging_detail', true);
        
        $product_detail = $this->input->post('val_detail_description', true);
        
        $product_status = "pending";
        $product_status_by = "";
        $product_status_time = "";
        $product_status_detail = "";
        $product_before = "";
        
        print_r("masup" . $product_listing);

        $url = 'http://io.nowdb.net/operation/insert';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'id_company' => $id_company,
            'product_name' => $product_name,
            'product_keyword' => $product_keyword,
            'product_listing' => $product_listing,
            'product_photo' => $product_photo,
            'model_number' => $model_number,
            'brand_name' => $brand_name,
            'origin_place' => $origin_place,
            'product_category' => $product_category,
            'product_trade_min' => $product_trade_min, //val#unit
            'product_trade_fob' => $product_trade_fob, //currency#min#max#unit
            'product_port' => $product_trade_port,
            'product_trade_payment' => $product_trade_payment, //1#2#3
            'product_trade_supply' => $product_trade_supply,
            'product_trade_delivery' => $product_trade_delivery,
            'product_trade_packaging' => $product_trade_packaging,
            'product_detail' => $product_detail,
            'product_status' => $product_status, //pending/approved/rejected/old
            'product_status_by' => $product_status_by,
            'product_status_time' => $product_status_time,
            'product_status_detail' => $product_status_detail,
            'product_before' => $product_before
        ));

        $return = json_decode($json);
        
        $id_product = $return[0]->id;
        
        $count = count($product_custom_detail_attr);
        $product_custom_detail = "";
        for($i=0;  $i<$count; $i++){
            $product_custom_detail .= $this->add_custom_detail($id_product, $product_custom_detail_attr[$i], $product_custom_detail_value[$i]) ."#";
        }
        $this->update_product_custom_detail($id_product, $product_custom_detail);
        print_r($json);
    }
    
    function category($category_level, $category_parent) {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'category';

        $url = 'http://io.nowdb.net/operation/select_where';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'category_level' => $category_level,
            'category_parent' => $category_parent
        ));

        $category = json_decode($json);
        foreach ($category as $category_name) {
            echo "<option value='" . $category_name->id . "'>" . $category_name->category_name . "</option>";
        }

    }

    function category_parent($selected_category) {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'category';

        $category_parent = $this->input->post($selected_category, true);

        $url = 'http://io.nowdb.net/operation/select_where';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'category_parent' => $category_parent
        ));

        $category = json_decode($json);
        $return = $this->category_name($category_parent);

        echo '{';
        echo '"parent" : "' . $category_parent . '",';
        echo '"name" : "' . $return . '",';
        echo '"child" : "' . $category[0]->id . '"';
        echo '}';
    }

    function category_name($id) {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'category';

        $url = 'http://io.nowdb.net/operation/select_id';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'id' => $id
        ));

        $category = json_decode($json);

        return $category[0]->category_name;
    }

    function category_tree($id) {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'category';

        $url = 'http://io.nowdb.net/operation/select_id';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'id' => $id
        ));

        $category = json_decode($json);
        $category_selected_tree = "  >>  " . $category[0]->category_name . $category_selected_tree;
        if ($category[0]->category_parent != '0') {
            $this->category_tree($category[0]->category_parent);
        }
        echo $category_selected_tree;
    }
    function get_province() {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = 'cl_province';

        $url = 'http://io.nowdb.net/operation/select_all';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection
        ));

        $decode = json_decode($json);
        foreach ($decode as $province) {
            echo "<option value='" . $province->code_province . "#" . $province->value_province . "'>" . $province->value_province . "</option>";
        }
    }

    function get_location() {
        $token = '52f866f58d909e13236110e5';
        $appid = '540d623c8d909ed04c1ab541';
        $project = 'eindustry';
        $collection = $this->input->post('child', true);
        $parent = $this->input->post('parent', true);

        $url = 'http://io.nowdb.net/operation/select_where';

        $json = $this->curl->simple_post($url, array(
            'token' => $token,
            'appid' => $appid,
            'project' => $project,
            'collection' => $collection,
            'parent' => $parent
        ));

        print_r($json);
    }
  
}
