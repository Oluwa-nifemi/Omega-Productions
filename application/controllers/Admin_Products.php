<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 1:10 PM
 */

class Admin_Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_Products_Model','productsmodel');
    }

    public function index($page = 1){
        $get = $this->productsmodel->get($page);
        $data['products'] = $get['result'];
        $data['pages'] = $get['pages'];
        $data['page'] = $page;
        $this->load->view('admin\products', $data);
    }
    public function view($page){
        $id = $this->input->get('edit');
        if ($page === 'edit' && $id) {
            $query = $this->db->get_where('products', array('id' => $id));
            if ($query->result()) {
                $data['product'] = $query->result();
                $this->load->view('admin\edit_product', $data);
            } else {
                redirect('admin/products');
            }
        }else if($page == 'add'){
            $this->load->view('admin\add_product');
        }
    }
    public function add(){
        $this->form_validation->set_rules('name', 'Product Name', 'required');
        $this->form_validation->set_rules('prices', 'Prices', 'required',array('required' => 'You need to give at least one set of prices'));
        $this->form_validation->set_rules('details', 'Details', 'required',array('required' => 'You need to give at least one detail'));
        if($this->form_validation->run()){
            if ($this->upload()){
                if($this->productsmodel->add()){
                    redirect('admin/products');
                }else{
                    $error = array('error' => $this->db->error());
                    $this->load->view('admin/add_product', $error);
                }
            }
        }else{
            $error = array('error' => $this->form_validation->error_array());
            $this->load->view('admin/add_product', $error);
        }
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