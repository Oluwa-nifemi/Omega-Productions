<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/30/2019
 * Time: 12:12 PM
 */

class Admin_Home extends CI_Controller
{
    public function index(){
        $this->load->helper('url');
        $this->load->view('admin\index');
    }
}