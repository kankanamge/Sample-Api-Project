<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Sandya Kumari
 */

class Search extends CI_Controller {
    
    //DEFULT LOADING FUNCTION
    public function search_products() {
        $data['js_to_load'] = array("search/js/search_by_products.js");
        $data['css_to_load'] = array("common.css", "search_by_products.css");
        $this->load->view('template/header', $data);
        $this->load->view('template/head_to_body');
        $this->load->view('template/menubar');
        $this->load->view('search/search_by_products');
        $this->load->view('template/footer', $data);
    }

    //GET LIST OF PRODUCT IDS
    public function load_product_ids() {
        $auth = base64_encode("F50368501B084C26A480A7F728E4169E:E72E8F14846445248890038867E3FB03");
        $context = stream_context_create([
            'http' => [
                'header' => "Authorization: Basic $auth",
                "Content-Type: application/json"
            ]
        ]);
        $row_data_s = file_get_contents("https://api.eposnowhq.com/api/V2/Product/", false, $context);
        $data = json_decode($row_data_s, true);
        echo json_encode($data);
    }

    // SERCH DATA
    public function search_by_option() {
        $option = $_REQUEST['option'];
        $p_id = $_REQUEST['p_id'];
        $page_no = 1;
        $auth = base64_encode("F50368501B084C26A480A7F728E4169E:E72E8F14846445248890038867E3FB03");
        $context = stream_context_create([
            'http' => [
                'header' => "Authorization: Basic $auth",
                "Content-Type: application/json"
            ]
        ]);
        if ($option == 2) {
            //GET TOP 20 PRODUCTS
            $row_data_s = file_get_contents("https://api.eposnowhq.com/api/V2/Product?page={$page_no}", false, $context);
            $datas = json_decode($row_data_s, true);
            $data['tbody_unf'] = $datas;
//            $data['tbody_unf'] = json_encode($datas);
//            echo json_encode($data);
        } elseif ($option == 3) {
            //GET DATA BY PRODUCT ID
            $row_data_s = file_get_contents("https://api.eposnowhq.com/api/V2/Product/{$p_id}", false, $context);
            $datas = json_decode($row_data_s, true);
            $data['tbody_unf'] = $datas;
        } else {
            //GET ALL DATA
            $row_data_s = file_get_contents("https://api.eposnowhq.com/api/V2/Product/", false, $context);
            $datas = json_decode($row_data_s, true);
            $data['tbody_unf'] = $datas;
        }
        $data['option'] = $option;
        $data['js_to_load'] = array("search/js/search_result_products.js");
        $data['css_to_load'] = array("common.css", "search_by_products.css");
        $this->load->view('template/header', $data);
        $this->load->view('template/head_to_body');
        $this->load->view('search/product_search_result', $data);
        $this->load->view('template/footer', $data);
    }

    public function view_product_details() {
        $p_id = $_GET['p_id'];
        $auth = base64_encode("F50368501B084C26A480A7F728E4169E:E72E8F14846445248890038867E3FB03");
        $context = stream_context_create([
            'http' => [
                'header' => "Authorization: Basic $auth",
                "Content-Type: application/json"
            ]
        ]);
        //GET DATA BY PRODUCT ID
        $row_data_s = file_get_contents("https://api.eposnowhq.com/api/V2/Product/{$p_id}", false, $context);
        $data_list = json_decode($row_data_s, true);
        $datas['value'] = $data_list;
        $datas['js_to_load'] = array("search/js/search_by_products.js");
        $datas['css_to_load'] = array("common.css", "view_search_result.css");
        $this->load->view('template/header', $datas);
        $this->load->view('template/head_to_body');
//        $this->load->view('template/menubar');
        $this->load->view('search/view_search_result', $datas);
        $this->load->view('template/footer');
    }

    //EDIT PRODUCT DETAILS - PRODUCT NAME
    public function go_to_edit() {
        $p_id = $_REQUEST['p_id'];
        $p_name = $_REQUEST['p_name'];
        $credentials = 'F50368501B084C26A480A7F728E4169E:E72E8F14846445248890038867E3FB03';
        $url = 'https://api.eposnowhq.com/api/V2/Product/' . $p_id;

        $data = array("Name" => $p_name);
        $options = array(
            'http' => array(
                'method' => 'PUT',
                'content' => json_encode($data),
                'header' => "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n" .
                "Authorization: Basic " . base64_encode($credentials)
            )
        );

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        echo $result;
    }

}
