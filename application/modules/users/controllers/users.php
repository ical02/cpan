<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Users extends CI_Controller {
 
function __construct()
{
	parent::__construct();
	//$this->load->model('crud_user');  
	$this->load->library(array('table','form_validation'));
	if(!$this->session->userdata('logged_in'))
	{
		redirect('notfound', 'refresh');
	}
}
 
function index()
{
	$data = array('content'=>$this->load->view('users_view','',TRUE),'jscript'=>$this->load->view('jscript','',TRUE));
	$this->load->view('template',$data);
}
 
}
 
?>