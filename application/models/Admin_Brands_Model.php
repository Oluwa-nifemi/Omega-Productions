<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 4:31 PM
 */

class Admin_Brands_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get($page){
        $offset = ($page-1) * 10;
        return array ('result' => $this->db->get('brands',10,$offset)->result(),'pages' => ceil( $this->db->get('brands')->num_rows()/10));
    }
    public function add(){
        $data = array(
            'brand' => $this->input->post('brand'),
            'image' => $this->upload->data('file_name')
        );
        return $this->db->insert('brands', $data);
    }
    public function edit(){
        $data = array(
            'brand' => $this->input->post('brand'),
        );
        if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
            $data['image'] = $this->upload->data('file_name');
        }
        return $this->db->update('brands', $data,array('id' => $this->input->post('id')));
    }
    public function delete($id){
        return $this->db->delete('brands',array('id' => $id));
    }
}