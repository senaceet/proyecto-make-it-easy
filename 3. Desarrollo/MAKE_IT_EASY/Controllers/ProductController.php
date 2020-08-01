<?php

class ProductController extends product{

      
      public function Index(){
      	require_once('views/products/Index.php');
      }

      public function product() {
      	require_once ('views/products/product.php');

      }

      public function show(){
        require_once ('views/products/show.php');
      }
      
      public function create(){
      	require_once ('views/products/create.php');
      }
      
      public function store(){
      	
      	$folder="FILES/IMG";
        $tmp_name=$_FILES['image']['tmp_name'];
        $name=basename($_FILES['image']['name']);
        move_uploaded_file($tmp_name,$folder.'/'.$name);
        parent::store_product($_POST['product_name'],$_POST['description'],$_POST['price'],$name);
        header("location:?clase=Product&method=product");
      }

      public function delete(){
      	$product=parent::get_id($_GET['id']);
      	unlink('FILES/IMG/'.$product->image);
      	parent::delete_product($_GET['id']);
        header("location:?clase=Product&method=product");

      }

      public function search(){
        $palabra=$_POST['palabra'];
        parent::search_product($_POST['product_name']);
        header("location:?clase=Product&method=product");
       
      }

}
