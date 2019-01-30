<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 1:12 PM
 */

class Admin_Works extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_Works_Model', 'worksmodel');
    }

    public function index($page = 1)
    {
        $get = $this->worksmodel->get($page);
        $data['works'] = $get['result'];
        $data['pages'] = $get['pages'];
        $data['page'] = $page;
        $this->load->view('admin\works', $data);
    }

    public function view($page)
    {
        $id = $this->input->get('edit');
        if ($page === 'edit' && $id) {
            $query = $this->db->get_where('works', array('id' => $id));
            if ($query->result()) {
                $data['work'] = $query->result();
                $this->load->view('admin\edit_work', $data);
            } else {
                redirect('admin/works');
            }
        } else if ($page == 'add') {
            $this->load->view('admin\add_work');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('jobname', 'Job Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run()) {
            $images = $this->upload();
            if ($images){
                $images = json_encode($images);
                if ($this->worksmodel->add($images)) {
                    redirect('admin/works');
                } else {
                    $error = array('error' => $this->db->error());
                    $this->load->view('admin/add_work', $error);
                }
            }else{
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/add_work', $error);
            }
        }else{
            $error = array('error' => $this->form_validation->error_array());
            $this->load->view('admin/add_work', $error);
        }
    }
    public function edit(){
        $this->form_validation->set_rules('jobname', 'Job Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run()){
            $images = $this->upload(json_decode($this->input->post('old_images')));
            if ($images !== false){
                $images = json_encode($images);
                if ($this->worksmodel->edit($images,$this->input->post('id'))) {
                    redirect('admin/works');
                } else {
                    $error = array('error' => $this->db->error());
                    $this->load->view('admin/edit_work', $error);
                }
            }else{
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/edit_work', $error);
            }
        }else{
            $error = array('error' => $this->form_validation->error_array());
            $this->load->view('admin/edit_work', $error);
        }
    }
    public function upload($images = ''){
        if(empty($images)){
            $images = array();
        }
        if(!empty($_FILES['images']['name'])){
            for($i = 0;$i < count($_FILES['images']['name']);$i++){
                $_FILES['file']['name']     = $_FILES['images']['name'][$i];
                $_FILES['file']['type']     = $_FILES['images']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['images']['error'][$i];
                $_FILES['file']['size']     = $_FILES['images']['size'][$i];


                $config['upload_path'] = $uploadPath = 'public/images';;
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = md5(microtime());
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $images[] .= $this->upload->data('file_name');
                }else{
                    return false;
                }
            }
        }
        return $images;
    }

    public function delete($id){
        $this->load->database();
        $this->db->delete('works',array('id' => $id));
        redirect('admin/works');
    }

    public function bypage($page){
        $this->index($page);
    }
}

