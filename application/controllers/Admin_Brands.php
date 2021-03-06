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
        $this->load->model('Admin_Brands_Model','brandsmodel');
    }

    public function index($page = 1)
    {
        $get = $this->brandsmodel->get($page);
        $data['brands'] = $get['result'];
        $data['pages'] = $get['pages'];
        $data['page'] = $page;
        $this->load->view('admin\brands', $data);
    }

    public function view($page)
    {
        $id = $this->input->get('edit');
        if ($page === 'edit' && $id) {
            $query = $this->db->get_where('brands', array('id' => $id));
            if ($query->result()) {
                $data['brand'] = $query->result();
                $this->load->view('admin\edit_brand', $data);
            } else {
                redirect('admin/brands');
            }
        }else if($page == 'add'){
            $this->load->view('admin\add_brand');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('brand', 'Brand Name', 'required');
        if($this->form_validation->run()){
            if($this->upload()){
                if($this->brandsmodel->add()){
                    redirect('admin/brands');
                }else{
                    $error = array('error' => $this->db->error());
                    $this->load->view('admin/add_brand', $error);
                }
            }else{
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/add_brand', $error);
            }
        }else{
            $error = array('error' => $this->form_validation->error_array());
            $this->load->view('admin/add_brand', $error);
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('brand', 'Brand Name', 'required');
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name']) && !$this->upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/edit_brand', $error);
        }
        if($this->brandsmodel->edit()){
            redirect('admin/brands');
        }else{
            $error = array('error' => $this->db->error());
            $this->load->view('admin/edit_brand', $error);
        }
    }
    public function delete($id = ''){
        if($id){
            $this->brandsmodel->delete($id);
        }
        redirect('admin/brands');
    }
    public function upload(){
        $config['upload_path'] = 'public/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = md5(microtime());

        $this->upload->initialize($config);

        return $this->upload->do_upload('image');
    }

    public function bypage($page){
        $this->index($page);
    }
}
