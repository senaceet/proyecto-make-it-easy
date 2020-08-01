<?php
class Document extends DB{
   
    public function get_all(){
        try{
            $query=parent::connect()->prepare("SELECT * FROM document_types");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
    }

   public function store_document($names,$abreviation){
    	try {
            $query=parent::connect()->prepare("INSERT INTO document_types(names,abreviation)VALUES(?,?)");
            $query->bindParam(1,$names,PDO::PARAM_STR);
            $query->bindParam(2,$abreviation,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e){
           die($e->getMessage());
        }
    }

    public function delete_document($id){
        try{
            $query=parent::connect()->prepare("DELETE FROM document_types WHERE id = ?");
            $query->bindParam(1,$id,PDO::PARAM_INT);
            $query->execute();
        }catch (Exception $e){
           die($e->getMessage());
        }
    }
    public function show_id($id){
        try{
            $query=parent::connect()->prepare("SELECT * FROM document_types WHERE id = ?");
            $query->bindParam(1,$id,PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
    }
    public function edit_id($id){
    try {
        $query=parent::connect()->prepare("SELECT * FROM document_types WHERE id = ?");
        $query->bindParam(1,$id,PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
     } catch (Exception $e) {
         die($e->getMessage());
     }
   }

      
   public function update_element($document){
    try {
        $query=parent::connect()->prepare("UPDATE document_types SET names = ? , abreviation = ? WHERE id = ?");
        $query->bindParam(1,$document['names'],PDO::PARAM_STR);
        $query->bindParam(2,$document['abreviation'],PDO::PARAM_STR);
        $query->bindParam(3,$document['id'],PDO::PARAM_INT);
        $query->execute();
     } catch (Exception $e) {
         die($e->getMessage());
     }
   }
    
}