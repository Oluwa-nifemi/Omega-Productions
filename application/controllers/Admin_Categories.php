<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 1:18 PM
 */

class Admin_Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function index()
    {
        $data['categories'] = $this->db->get('categories')->result();
        if($this->input->get('edit')){
            $data['category'] = $this->db->get_where('categories',array('id' => $this->input->get('edit')))->result();
        }
        $this->load->view('admin\categories',$data);
    }

    public function add(){
        $this->form_validation->set_rules('category','Category','required');
        if($this->form_validation->run()){
            $this->db->insert('categories',array('category' => $this->input->post('category'),'slug' => url_title($this->input->post('category'),'dash',TRUE)));
            redirect('admin\categories');
        }else{
            $errors = $this->form_validation->error_array();
            $this->load->view('admin\categories',$errors);
        }
    }

    public function edit(){
        $this->form_validation->set_rules('category','Category','required');
        if($this->form_validation->run()){
            $this->db->update('categories',array('category' => $this->input->post('category')),array('id' => $this->input->post('id')));
            redirect('admin\categories');
        }else{
            $errors = $this->form_validation->error_array();
            $this->load->view('admin\categories',$errors);
        }
    }

    public function delete($id){
        $this->db->delete('categories',array('id' => $id));
        redirect('admin\categories');
    }

}