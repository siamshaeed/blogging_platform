<?php
require_once '../class/db_connect.php';

class Category extends Database {
   public function getAllCategories() {     //show category
       $sql = "SELECT * FROM categories";
       $result = $this->conn->query($sql);

       if ($result->num_rows > 0) {
           return $result->fetch_all(MYSQLI_ASSOC);
       } else {
           return array();
       }
   }

    public function addCategory($categoryName) {        // Add Category
        $sql = "INSERT INTO categories (category_name) VALUES ('$categoryName')";
        return $this->conn->query($sql);
    }

    public function getCategoryById($categoryId) {
        $sql    = "SELECT * FROM categories WHERE category_id = $categoryId";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function updateCategory($categoryId, $categoryName) {
       $sql = "UPDATE categories SET category_name = '$categoryName' WHERE category_id = '$categoryId'";
       return $this->conn->query($sql);
    }


 }