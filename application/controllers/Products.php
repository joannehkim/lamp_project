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
	public function outerwear() {
		$this->load->view('Outerwear');
	}
	public function menTees(){
		$this->load->view('MenTees');
	}
	public function womenTees(){
		$this->load->view('womenTees');
	}
	public function womenOuterwear(){
		$this->load->view('WOuterwear');
	}
}























