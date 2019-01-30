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
    }

    public function index(){
        $this->load->view('admin\brands');
    }
    public function view($page){
        $this->load->view('admin/'.$page.'_brand');
    }

}