<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/29/2019
 * Time: 11:14 PM
 */

class Works extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        $this->load->view('works');
    }
    public function page($page){
        $this->load->view('works');
    }
    public function work($work){
        $this->load->view('single_work');
    }
}