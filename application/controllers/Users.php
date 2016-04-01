<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('item_view');
	}
	public function process_register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", 'trim|required|matches[passwordconf]|md5');
		$this->form_validation->set_rules("passwordconf", "Password Confirmation", 'trim|required');
		$this->form_validation->set_rules("birthday", "Birthday", 'required');
			if($this->form_validation->run() === FALSE)
				{
				     
				     $this->session->set_flashdata('errors', validation_errors());
				     // $this->session->set_userdata('regError', validation_errors());
				     redirect('/Products/Login');
				}
			else
				{
					 $newUser = $this->input->post();
					 $this->load->model('User');
					 // var_dump($newUser);
				  //    die();
					 $this->session->unset_userdata('regError');
					 $this->session->unset_userdata('loginError');
					 $add_newUser = $this->User->addUser($newUser);
				     // $this->load->view('registration_success');
				     $currentUser = $this->User->loginUser($newUser);
					 $this->session->set_userdata('currentUser', $currentUser);
					 redirect('/Products');
				}
	}
	public function process_login()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", 'trim|required|md5');
			if($this->form_validation->run() === FALSE)
				{
				     $this->session->set_flashdata('errors', validation_errors());
				     // $this->session->set_userdata('regError', validation_errors());
				     redirect('/Products/Login');
				}
			else
				{
					 $newUser['email'] = $this->input->post('email');
					 $newUser['password'] = $this->input->post('password');
					 $this->load->model('User');
					 $currentUser = $this->User->loginUser($newUser);
					 $this->session->set_userdata('currentUser', $currentUser);
					 $this->load->model('Product');
					 $this->session->set_userdata('cart_id',$this->Product->getCartIDfromUserID($currentUser['id']));

				     redirect('/Users/displayProfile');
				}
	}
	public function displayProfile()
	{	
		$currentUserID = $this->session->userdata['currentUser']['id'];
		$this->load->model('User');
		$currentProfile=$this->User->getUserInfo($currentUserID);
		$this->load->view('profile', $currentProfile);
	}
	public function admin_login()
	{
		$this->load->view('admin_login');
	}
	public function process_admin_login()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", 'trim|required|md5');
			if($this->form_validation->run() === FALSE)
				{
				     $this->session->set_flashdata('errors', validation_errors());
				     // $this->session->set_userdata('regError', validation_errors());
				     redirect('/Users/admin_login');
				}
			else
				{
					 $newUser['email'] = $this->input->post('email');
					 $newUser['password'] = $this->input->post('password');
					 $this->load->model('User');
					 $currentAdmin = $this->User->loginAdmin($newUser);
					 $this->session->set_userdata('currentAdmin', $currentAdmin);
				     redirect('/Users/admin_homepage');
				}
	}
	public function admin_homepage()
	{
		$this->load->model('Product');
		$products['allProducts'] = $this->Product->getAllItemInfo();
		$this->load->view('admin_homepage', $products);
	}
	public function shipping_returns()
	{
		$this->load->view('shipping_returns');
	}
	public function history()
	{
		$this->load->view('history');
	}
	public function contact()
	{
		$this->load->view('contactUs');
	}
}























