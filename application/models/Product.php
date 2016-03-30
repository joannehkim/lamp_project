<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function addItem($newItem)
	{
		$query = "INSERT INTO products (name, description, price, type, size, stock) VALUES (?, ?, ?, ?, ?, ?)";
		$sizes = array('xs', 's', 'm', 'l', 'xl');
		$quants = array($newItem['quant_xs'], $newItem['quant_s'], $newItem['quant_m'], $newItem['quant_l'], $newItem['quant_xl']);
		for($i=0; $i<5; $i++){
			$values= array ($newItem['item_name'], $newItem['description'], $newItem['price'], $newItem['type'], $sizes[$i], $quants[$i]);
			$this->db->query($query, $values);

		}
			
		

	}

	public function editItemInfo($editedInfo)
	{
		$query = "UPDATE products SET ";
	}

	public function getAllItemInfo()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}
	public function getItemInfo($itemID)
	{
		$query = "SELECT * FROM products WHERE id = ?";
		return $this->db->query($query,$itemID)->row_array();
	}
	public function deleteItem($itemID)
	{
		$query = "DELETE FROM products WHERE id = ?";
		$this->db->query($query, $itemID);
	}


}