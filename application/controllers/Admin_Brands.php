<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 12:30 PM
 */

class Admin_Brands extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function index()
    {
        $query = $this->db->get('brands');
        $data['brands'] = $query->result();
        $this->load->view('admin\brands', $data);
    }

    public function view($page)
    {
        $id = $this->input->get('edit');
        if ($id) {
            $query = $this->db->get_where('brands', array('id' => $id));
            if ($query->result()) {
                $data['brand'] = $query->result();
                $this->load->view('admin\edit_brand', $data);
            } else {
                redirect('admin/brands');
            }
        } else {
            redirect('admin/brands');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('brand', 'Brand Name', 'required');
        if ($this->upload()) {
            $data = array(
                'brand' => $this->input->post('brand'),
                'image' => $this->upload->data('file_name')
            );
            if ($this->db->insert('brands', $data)) {
                redirect('admin/brands');
            } else {
                $error = array('error' => $this->db->error());
                $this->load->view('admin/add_brand', $error);
            }
        }else{
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/add_brand', $error);
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('brand', 'Brand Name', 'required');
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            if($this->upload()){
                $data = array(
                    'brand' => $this->input->post('brand'),
                    'image' => $this->upload->data('file_name')
                );
            }else{
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/edit_brand', $error);
            }
        }else{
            $data = array(
                'brand' => $this->input->post('brand'),
            );
        }
        $this->db->where('id',$this->input->post('id'));
        if ($this->db->update('brands', $data)) {
            redirect('admin/brands');
        } else {
            $error = array('error' => $this->db->error());
            $this->load->view('admin/edit_brand', $error);
        }
    }
    public function delete($brand = ''){
        if($brand){
            $this->db->delete('brands',array('id' => $brand));
            redirect('admin/brands');
        }
    }
    public function upload(){
        $config['upload_path'] = 'public/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = md5(microtime());

        $this->upload->initialize($config);

        return $this->upload->do_upload('image');
    }

}
