<?php
/**
 * Created by PhpStorm.
 * User: nifemiadeyemi
 * Date: 1/29/2019
 * Time: 11:09 PM
 */

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        $this->load->view('products');
    }
    public function category($category = 'all'){
        $this->load->view('products');
    }
    public function product($category,$product){
        $this->load->view('single_product');
    }
}