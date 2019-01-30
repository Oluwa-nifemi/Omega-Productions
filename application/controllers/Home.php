<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/29/2019
 * Time: 10:46 PM
 */

class Home extends CI_Controller
{
    public function index(){
        $this->load->helper('url');
        $this->load->view('index');
    }
}