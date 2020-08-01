<?php


class DocumentController extends document{


      public function document(){
      	  require_once ('views/document/document.php');
      }
      public function create(){
      	  require_once ('views/document/create.php');
      }

      public function store(){
      	parent::store_document($_POST['names'],$_POST['abreviation'],);
        header("location:?clase=Document&method=document");
      }

      public function delete(){
        parent::delete_document($_GET['id']);
        header("location:?clase=Document&method=document");
      }

      public function show(){
       require_once('views/document/show.php'); 
      }
      
      public function Update(){
         $document=array(
           'names'=>$_POST['names'],
           'abreviation'=>$_POST['abreviation'],
           'id'=>$_POST['id'],
         );
        parent::update_element($document);
       header("location:?clase=Document&method=document");

    }
      public function edit(){
        require_once('views/document/edit.php');
        parent::edit_id($_GET['id']);
    }

} 
