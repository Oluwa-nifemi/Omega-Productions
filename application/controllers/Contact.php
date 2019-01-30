<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/29/2019
 * Time: 11:21 PM
 */

class Contact extends CI_Controller
{
    public function index(){
        $this->load->helper('url');
        $this->load->view('contact');
    }
}