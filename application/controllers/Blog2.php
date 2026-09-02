<?php
class Blog2 extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['title'] = "My Blog";
        $data['content'] = "Welcome To My Blog.";
        $this->load->view('blog_view2', $data);
    }
}
?>
