<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 12:30 PM
 */

class Admin_Reviews extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_Reviews_Model','reviewsmodel');
    }

    public function index($page = 1){
        $get = $this->reviewsmodel->get($page);
        $data['reviews'] = $get['result'];
        $data['pages'] = $get['pages'];
        $data['page'] = $page;
        $this->load->view('admin\reviews',$data);
    }

    public function view($page){
        $id = $this->input->get('edit');
        if ($page === 'edit' && $id) {
            $query = $this->db->get_where('reviews', array('id' => $id));
            if ($query->result()) {
                $data['review'] = $query->result();
                $this->load->view('admin\edit_review', $data);
            } else {
                redirect('admin/reviews');
            }
        }else if($page == 'add'){
            $this->load->view('admin\add_review');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('reviewer', 'Reviewer', 'required');
        $this->form_validation->set_rules('review', 'Review', 'required');
        if($this->form_validation->run()){
            if($this->upload()){
                if($this->reviewsmodel->add()){
                    redirect('admin/reviews');
                }else{
                    $error = array('error' => $this->db->error());
                    $this->load->view('admin/add_reviews', $error);
                }
            }else{
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/add_reviews', $error);
            }
        }else{
            $error = array('error' => $this->form_validation->error_array());
            $this->load->view('admin/add_reviews', $error);
        }
    }

    public function edit(){
        $this->form_validation->set_rules('reviewer', 'Reviewer', 'required');
        $this->form_validation->set_rules('review', 'Review', 'required');
        if($this->form_validation->run()){
            if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name']) && !$this->upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/edit_review', $error);
            }
            if ($this->reviewsmodel->edit()) {
                redirect('admin/reviews');
            }else{
                $error = array('error' => $this->db->error());
                $this->load->view('admin/edit_review', $error);
            }
        }else{
            $error = array('error' => $this->form_validation->display_errors());
            $this->load->view('admin/add_reviews', $error);
        }
    }
    
    public function upload(){
        $config['upload_path'] = 'public/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = md5(microtime());

        $this->upload->initialize($config);

        return $this->upload->do_upload('image');
    }

    public function delete($id = ''){
        if($id){
            $this->reviewsmodel->delete($id);
        }
        redirect('admin/reviews');
    }

    public function bypage($page){
        $this->index($page);
    }
}