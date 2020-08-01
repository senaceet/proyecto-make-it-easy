<?php
class Product extends DB{
   
    public function get_all(){
        try{
            $query=parent::connect()->prepare("SELECT * FROM products");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
    }

    public function store_product($product_name,$description,$price,$image){
        try{
            $query=parent::connect()->prepare("INSERT INTO products (product_name, description, price, image)VALUES(?,?,?,?)");
            $query->bindParam(1,$product_name,PDO::PARAM_STR);
            $query->bindParam(2,$description,PDO::PARAM_STR);
            $query->bindParam(3,$price,PDO::PARAM_STR);
            $query->bindParam(4,$image,PDO::PARAM_STR);
            $query->execute();
        }catch (Exception $e){
           die($e->getMessage());
        }
    }

    public function delete_product($id){
        try{
            $query=parent::connect()->prepare("DELETE FROM products WHERE id = ?");
            $query->bindParam(1,$id,PDO::PARAM_INT);
            $query->execute();
        }catch (Exception $e){
           die($e->getMessage());
        }    
    }

    public function get_id($id){
        try{
            $query=parent::connect()->prepare("SELECT * FROM products WHERE id = ?");
            $query->bindParam(1,$id,PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
}
    public function show_id($id){
        try{
            $query=parent::connect()->prepare("SELECT * FROM products WHERE id = ?");
            $query->bindParam(1,$id,PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
    }

    public function search_product($product_name){
        try{
            $query=parent::connect()->prepare("SELECT * FROM products WHERE product_name LIKE '%$palabra%");
            $query->bindParam(1,$product_name,PDO::PARAM_STR);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
    }
}