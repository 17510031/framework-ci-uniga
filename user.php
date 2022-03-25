<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user  extends CI_Controller {

	function_construct(){
    parent::_construct();
    $this->load->helper('url');



}

public function index(){
	$this->load->view('addform.php');


}



}


?>