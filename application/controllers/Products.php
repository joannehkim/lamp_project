<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}
	public function item()
	{
		$this->load->view('item_view');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function outerwear() 
	{
		$this->load->view('Outerwear');
	}
	public function menTees()
	{
		$this->load->view('MenTees');
	}
	public function womenTees()
	{
		$this->load->view('womenTees');
	}
	public function womenOuterwear()
	{
		$this->load->view('WOuterwear');
	}

	public function add_item()
	{	
		$this->load->library("form_validation");
		$this->form_validation->set_rules("item_name", "Item Name", "trim|required");
		$this->form_validation->set_rules("type", "Item Type", "trim|required");
		$this->form_validation->set_rules("description", "Description", "trim|required");
			if($this->form_validation->run() === FALSE)
				{
				     
				     $this->session->set_flashdata('errors', validation_errors());
				     // $this->session->set_userdata('regError', validation_errors());
				     redirect('/Products/Login');
				}
			else
				{
					 $newItem = $this->input->post();
					 $this->load->model('Product');
					 // var_dump($newUser);
				  //    die();
					 $this->Product->addItem($newItem);
					 redirect('/Users/admin_homepage');
				}
	}
	function add_item_form(){
		$this->load->view('add_item_form');
	}
	function editProductForm($itemID){
		$this->load->model('Product');
		$currentItem = $this->Product->getItemInfo($itemID);
		$this->load->view('edit_item_form', $currentItem);
	}
	function removeProductConfirm($itemID)
	{
		$this->load->model('Product');
		$currentItem = $this->Product->getItemInfo($itemID);
		$this->load->view('remove_product_confirm', $currentItem);
	}
	function removeProduct($itemID)
	{
		$this->load->model('Product');
		$this->Product->deleteItem($itemID);
		redirect('/Users/admin_homepage');
	}
	function edit_item($itemID)
	{
		$editedInfo = $this->input->post();
		$this->load->model('Product');
		$this->Product->editItemInfo($editedInfo);
	}

	function contactUs(){
		$this->load->view('contactUs');
	}

}























