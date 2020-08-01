<?php

class SecurityController extends security{

      public function form_auth(){
      	  require_once ('views/security/form_auth.php');
      }

      public function auth_user(){
      	$user=user::get_email($_POST['email']);

      	if(!$user){
      		header("location:?clase=Security&method=form_auth");
      	}
      	if ($user->password==$_POST['password']) {
      	      
          $_SESSION['USER']=$user;
           header("location:?clase=Product&method=product");

      	}else{
      		header("location:?clase=Security&method=form_auth");
      	}

      	
      }

}