<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/29/2019
 * Time: 10:59 PM
 */

class About extends CI_Controller
{
    public function index(){
        $this->load->helper('url');
        $this->load->view('about');
    }
}