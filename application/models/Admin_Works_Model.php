<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 8:31 PM
 */

class Admin_Works_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function get($page){
        $offset = ($page-1) * 10;
        return array ('result' => $this->db->get('works',10,$offset)->result(),'pages' => ceil( $this->db->get('works')->num_rows()/10));
    }

    public function add($images){
        $data = array(
            'name' => $this->input->post('jobname'),
            'slug' => url_title($this->input->post('jobname')),
            'description' => $this->input->post('description'),
            'images' => $images
        );
        return $this->db->insert('works', $data);
    }

    public function edit($images,$id){
        $data = array(
            'name' => $this->input->post('jobname'),
            'slug' => url_title($this->input->post('jobname')),
            'description' => $this->input->post('description'),
            'images' => $images
        );
        return $this->db->update('works',$data,array('id' => $id));
    }
}