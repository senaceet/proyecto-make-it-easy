<?php


class UsersController extends user{
	
      public function index(){
          require_once ('views/users/index.php');
      }

      public function create(){
      	  require_once ('views/users/create.php');
      }

      public function store(){
      	parent::store_user($_POST['document_number'],$_POST['names'],$_POST['last_names'],$_POST['birthdate'],$_POST['age'],$_POST['email'],$_POST['password'],date('y-m-d H:i:s'),$_POST['document_types_id'],$_POST['genders_id'],);
        header("location:?clase=Users&method=Index");
      }
           
      public function delete(){
        parent::delete_user($_GET['id']);
        header("location:?clase=Users&method=Index");
      }

    public function show(){
       require_once('views/users/show.php'); 
      }

    public function Update(){
      
         $users=array(
           'document_number'=>$_POST['document_number'],
           'names'=>$_POST['names'],
           'last_names'=>$_POST['last_names'],
           'birthdate'=>$_POST['birthdate'],
           'age'=>$_POST['age'],
           'email'=>$_POST['email'],
           'password'=>$_POST['password'],
           'y-m-d H:i:s'=>date('y-m-d H:i:s'),
           'document_types_id'=>$_POST['document_types_id'],
           'genders_id'=>$_POST['genders_id'],
           'id'=>$_POST['id'],
         );
        parent::update_element($users);
       header("location:?clase=Users&method=Index");
      }


    public function edit(){
        require_once('views/users/edit.php');
        parent::edit_id($_GET['id']);
    }


}
