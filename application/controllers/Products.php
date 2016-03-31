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
		$this->load->model('Product');
		$products['menOuterwear'] = $this->Product->getMOuterwear();

		$this->load->view('Outerwear', $products);
	}
	public function itempage($itemID)
	{
		$this->load->model('Product');
		$products['menTees'] = $this->Product->getItemInfo($itemID);

		$this->load->view('itempage', $products);

	}
	public function menTees()
	{
		$this->load->model('Product');
		$products['menTees'] = $this->Product->getMTees();

		$this->load->view('MenTees', $products);
	}
	public function womenTees()
    {
        $this->load->model('Product');
        $products['allWtees'] = $this->Product->getWTees();
        $this->load->view('womenTees', $products);
    }
    public function womenOuterwears()
    {
        $this->load->model('Product');
        $products['allWOuterwears'] = $this->Product->getWOuterwears();
        $this->load->view('WOuterwear', $products);
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
					 
					 //image upload code
					    $config['upload_path']          = './assets/currentProducts';
		                $config['allowed_types']        = 'gif|jpg|png|jpeg';
		                $config['max_size']             = 100;
		                $config['max_width']            = 0;
		                $config['max_height']           = 0;
		                $config['overwrite']           = FALSE;

		                $this->load->library('upload', $config);

		                if ( ! $this->upload->do_upload('front_image'))
		                {
		                        $error = array('error' => $this->upload->display_errors());

		                        $this->load->view('upload_form', $error);
		                }
		                else
		                {
		                        $data = array('upload_data' => $this->upload->data());
		                        $newItem['front_image_filename'] = $data['upload_data']['file_name'];

		                }
		                if ( ! $this->upload->do_upload('back_image'))
		                {
		                        $error = array('error' => $this->upload->display_errors());

		                        $this->load->view('upload_form', $error);
		                }
		                else
		                {
		                        $data = array('upload_data' => $this->upload->data());
		                        $newItem['back_image_filename'] = $data['upload_data']['file_name'];


		                }

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

}




