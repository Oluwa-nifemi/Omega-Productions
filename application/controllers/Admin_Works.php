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
    }

    public function index(){
        $this->load->view('admin\works');
    }
    public function view($page){
        $this->load->view('admin/'.$page.'_work');
    }
}