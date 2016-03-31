<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function addItem($newItem)
	{
		// $query = "INSERT INTO products (name, description, price, type, size, stock) VALUES (?, ?, ?, ?, ?, ?)";
		// $sizes = array('xs', 's', 'm', 'l', 'xl');
		// $quants = array($newItem['quant_xs'], $newItem['quant_s'], $newItem['quant_m'], $newItem['quant_l'], $newItem['quant_xl']);
		// for($i=0; $i<5; $i++){
		// 	$values= array ($newItem['item_name'], $newItem['description'], $newItem['price'], $newItem['type'], $sizes[$i], $quants[$i]);
		// 	$this->db->query($query, $values);

		// }
		//adds to the products table
		$query = "INSERT INTO products (name, gender, description, price, color, type, front_image_filename, back_image_filename, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($newItem['item_name'], $newItem['gender'], $newItem['description'], $newItem['price'], $newItem['color'], $newItem['type'], $newItem['front_image_filename'], $newItem['back_image_filename']);
		
		$this->db->query($query, $values);
		$newItemID = $this->db->insert_id();
		// adds to the products_stock table
		$query = "INSERT INTO products_stock (product_id, size, stock, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
		$sizes = array('xs', 's', 'm', 'l', 'xl');
		$quants = array($newItem['quant_xs'], $newItem['quant_s'], $newItem['quant_m'], $newItem['quant_l'], $newItem['quant_xl']);
		for($i=0; $i<5; $i++){
			$values= array ($newItemID, $sizes[$i], $quants[$i]);
			$this->db->query($query, $values);

		}
		

	}

	public function editItemInfo($editedInfo)
	{
		$query = "UPDATE products SET ";
	}

	public function getAllItemInfo()
	{
		$query = "SELECT products.id, products.name, products.gender, products.description, products.price, products.type, products.front_image_filename, products.back_image_filename, products_stock.size, products_stock.stock FROM products LEFT JOIN products_stock ON products.id = products_stock.product_id";
		return $this->db->query($query)->result_array();
	}
	public function getItemInfo($itemID)
	{
		$query = "SELECT * FROM products WHERE products.id = ?";
		return $this->db->query($query,$itemID)->row_array();
	}
	public function deleteItem($itemID)
	{
		$query = "DELETE FROM products_stock WHERE products_stock.product_id = ?";
		$this->db->query($query, $itemID);
		$query = "DELETE FROM products WHERE id = ?";
		$this->db->query($query, $itemID);
	}
	public function getMTees(){
		$query = "select * from products where products.gender = 'men' AND products.type = 'shirt' ";

		return $this->db->query($query)->result_array();
	}
	public function getMOuterwear(){
		$query = "select * from products where products.gender = 'men' AND products.type = 'hoodie' ";

		return $this->db->query($query)->result_array();

	}
    public function getWTees() {
        $query = "SELECT * FROM products WHERE products.gender = 'women' AND products.type = 'shirt' ";
        return $this->db->query($query)->result_array();
    }
    public function getWOuterwears() {
        $query = "SELECT * FROM products WHERE products.gender = 'women' AND products.type = 'hoodie' ";
        return $this->db->query($query)->result_array();
    }


}