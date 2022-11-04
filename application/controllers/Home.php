<?php
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = "Home";
        $this->load->view('include/header', $data);
        $this->load->view('include/navtop');
        $this->load->view('include/navleft');
        $this->load->view('view_product');
        $this->load->view('include/footer');
    }
}
?>