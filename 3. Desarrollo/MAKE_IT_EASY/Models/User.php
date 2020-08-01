<?php
class User extends DB{
   
    public function get_all(){
        try{
            $query=parent::connect()->prepare("SELECT * FROM users");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
    }

    public function store_user($document_number,$names,$last_names,$birthdate,$age,$email,$password,$created_at,$document_types_id,$genders_id){
    	try {
            $query=parent::connect()->prepare("INSERT INTO users(document_number,names,last_names,birthdate,age,email,password,created_at,document_types_id,genders_id)VALUES(?,?,?,?,?,?,?,?,?,?)");
            $query->bindParam(1,$document_number,PDO::PARAM_STR);
            $query->bindParam(2,$names,PDO::PARAM_STR);
            $query->bindParam(3,$last_names,PDO::PARAM_STR);
            $query->bindParam(4,$birthdate,PDO::PARAM_STR);
            $query->bindParam(5,$age,PDO::PARAM_STR);
            $query->bindParam(6,$email,PDO::PARAM_STR);
            $query->bindParam(7,$password,PDO::PARAM_STR);
            $query->bindParam(8,$created_at,PDO::PARAM_STR);
            $query->bindParam(9,$document_types_id,PDO::PARAM_STR);
            $query->bindParam(10,$genders_id,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e){
           die($e->getMessage());
        }
    }

    public function delete_user($id){
        try{
            $query=parent::connect()->prepare("DELETE FROM users WHERE id = ?");
            $query->bindParam(1,$id,PDO::PARAM_INT);
            $query->execute();
        }catch (Exception $e){
           die($e->getMessage());
        }
    }

    public function show_id($id){
        try{
            $query=parent::connect()->prepare("SELECT * FROM users WHERE id = ?");
            $query->bindParam(1,$id,PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
    }

    public function edit_id($id){
    try {
        $query=parent::connect()->prepare("SELECT * FROM users WHERE id = ?");
        $query->bindParam(1,$id,PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
     } catch (Exception $e) {
         die($e->getMessage());
     }
   }

      
   public function update_element($users){
    try {
        $query=parent::connect()->prepare("UPDATE users SET document_number = ? , names = ? , last_names = ? , birthdate = ? , age = ? , email = ? , password = ? , created_at = ? , document_types_id = ? , genders_id = ? WHERE id = ?");
        $query->bindParam(1,$users['document_number'],PDO::PARAM_STR);
        $query->bindParam(2,$users['names'],PDO::PARAM_STR);
        $query->bindParam(3,$users['last_names'],PDO::PARAM_STR);
        $query->bindParam(4,$users['birthdate'],PDO::PARAM_STR);
        $query->bindParam(5,$users['age'],PDO::PARAM_STR);
        $query->bindParam(6,$users['email'],PDO::PARAM_STR);
        $query->bindParam(7,$users['password'],PDO::PARAM_STR);
         $query->bindParam(8,$users['created_at'],PDO::PARAM_STR);
        $query->bindParam(9,$users['document_types_id'],PDO::PARAM_STR);
        $query->bindParam(10,$users['genders_id'],PDO::PARAM_STR);
        $query->bindParam(11,$users['id'],PDO::PARAM_INT);
        $query->execute();
     } catch (Exception $e) {
         die($e->getMessage());
     }
   }

   public function get_email($email){
      try{
          $query=parent::connect()->prepare("SELECT * FROM users WHERE email = ?");
          $query->bindParam(1,$email,PDO::PARAM_STR);
          $query->execute();
          return $query->fetch(PDO::FETCH_OBJ);
      }catch(Exception $e){
        die($e->getMessage());
      }

   }
}
