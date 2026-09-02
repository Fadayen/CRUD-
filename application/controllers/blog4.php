<?php class Blog4 extends CI_Controller 
{   function __construct() 
  {     parent::__construct(); 
  }    function index() 
  { 
    $this->load->view('blog_view4'); 
  } 
}
