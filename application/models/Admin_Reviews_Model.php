<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 5:03 PM
 */

class Admin_Reviews_Model extends  CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get($page){
        $offset = ($page-1) * 10;
        return array ('result' => $this->db->get('reviews',10,$offset)->result(),'pages' => ceil( $this->db->get('reviews')->num_rows()/10));
    }

    public function add(){
        $data = array(
            'name' => $this->input->post('reviewer'),
            'review' => $this->input->post('review'),
            'image' => $this->upload->data('file_name')
        );
        return $this->db->insert('reviews', $data);
    }

    public function edit(){
        $data = array(
            'name' => $this->input->post('reviewer'),
            'review' => $this->input->post('review'),
        );
        if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
            $data['image'] = $this->upload->data('file_name');
        }
        return $this->db->update('reviews', $data,array('id' => $this->input->post('id')));
    }
    
    public function delete($id){
        return $this->db->delete('reviews',array('id' => $id));
    }
}