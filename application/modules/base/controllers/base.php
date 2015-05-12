<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Base extends CI_Controller {
 
function __construct()
{
	parent::__construct(); 
	$this->load->library(array('table','form_validation'));
	if(!$this->session->userdata('logged_in'))
	{
		redirect('notfound', 'refresh');
	}
	
}
 
function index()
{
	//$id = $this->session->userdata('logged_in');
	//$this->load->model('profile');
    //$profile = $this->profile->select($id);, 'name'=>$profile['Name'], 'email'=>$profile['Email']
	
	$data = array('content'=>$this->load->view('base_view','',TRUE));
	$this->load->view('template',$data);
}


function profile()
{
	$this->load->model('profile');
	$this->form_validation->set_rules('profileName', 'profileName', 'trim|required|xss_clean');
	$this->form_validation->set_rules('profileEmail', 'profileEmail', 'trim|required|xss_clean');
	//$this->form_validation->set_rules('profile_pass1', 'profile_pass1', 'trim|required|xss_clean');
	//$this->form_validation->set_rules('profile_pass2', 'profile_pass2', 'trim|required|xss_clean');

	if($this->form_validation->run() == FALSE)
	{
		//Field validation failed.  
		redirect('notfound', 'refresh');
	}
	else
	{
		//success
		// Setting Values For Tabel Columns
		$picture = $this->input->post('profilePicture');
		
		if(!isset($picture)){
			$id = $this->session->userdata('logged_in');
			$data = array(
			'name' => $this->input->post('profileName'),
			'email' => $this->input->post('profileEmail')
			);
			// Transfering Data To Model
			$this->profile->profile_update($id,$data);
			
			$this->session->set_userdata('username', $data['name']);
			$this->session->set_userdata('email', $data['email']);
			
			echo "nopic";
			//redirect('base', 'refresh');
			
		}else{
			$this->load->library('upload');
			$this->upload->do_upload($picture);
			
			//
			//$this->load->helper(array('form', 'url'));
			//$a = config_item('assets');
			//$config['upload_path'] = $a.'userspic/';
			//$config['allowed_types'] = 'gif|jpg|png';
			//$config['max_size']	= '100';
			//$config['max_width']  = '200';
			//$config['max_height']  = '200';

			//$this->load->library('upload', $config);

			//redirect('help', 'refresh');
			//echo var_dump($picture);
			echo "pic";
		}
		
	}
}

function do_upload()
	{
		$this->load->helper(array('form', 'url'));
		$config['upload_path'] = './assets/userspic/';
		//$config['allowed_types'] = 'gif|jpg|png';
		

		$this->load->library('upload', $config);
		
		$this->upload->data();
		
		
		//$save = array(
		//	'as' =>
		//);
		echo  $upload['file_name'];
		
	}

function logout()
{
	$this->session->unset_userdata('logged_in');
	session_destroy();
	redirect('login', 'refresh');
}
 
}
 
?>