<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 11:48 PM
 */

class Admin_Products_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    public function get($page){
        $offset = ($page-1) * 10;
        return array ('result' => $this->db->get('products',10,$offset)->result(),'pages' => ceil( $this->db->get('products')->num_rows()/10));
    }
    public function add(){
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => url_title($this->input->post('name')),
            'image' => $this->upload->data('file_name'),
            'details' => $this->input->post('details'),
            'prices' => $this->input->post('prices')
        );
        return $this->db->insert('products',$data);
    }
}