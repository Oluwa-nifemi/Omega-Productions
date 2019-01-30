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
        $this->load->database();
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