<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function addUser($newUser)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, birthday, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($newUser['first_name'], $newUser['last_name'], $newUser['email'], $newUser['password'], $newUser['birthday']);
		$this->db->query($query, $values);
	}
	public function loginUser($user)
	{
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values =  array($user['email'], $user['password']);
		return $this->db->query($query, $values)->row_array();
	}
	public function getUserInfo($userID)
	{
		$query = "SELECT * FROM users WHERE users.id = ?";
		$values = $userID;
		return $this->db->query($query,$values)->row_array();
	}
	public function loginAdmin($admin)
	{
		$query = "SELECT * FROM admin WHERE email = ? AND password = ?";
		$values = array($admin['email'], $admin['password']);
		return $this->db->query($query,$values)->row_array();
	}
	public function admin_homepage()
	{
		$this->load->view('admin_homepage');
	}




}