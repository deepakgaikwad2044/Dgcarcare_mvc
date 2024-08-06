<?php
 
 require_once("controllers/AuthController.php");
 
  $obj = new AuthController();
  $url;
  
  if(isset($_GET['action'])) {
 
    if(isset($_GET['action']) && $_GET['action'] == "home"){
    $obj->guest();
    }
    
    if(isset($_GET['action']) && $_GET['action'] == "about") {
      $obj->about();
    }
    
      if(isset($_GET['action']) && $_GET['action'] == "services") {
      $obj->services();
    }
    
    if(isset($_GET['action']) && $_GET['action'] == "terms"){
      $obj->terms();
    }
    
    if(isset($_GET['action']) && $_GET['action'] == "faq"){
      $obj->faq();
    }
    
  }else{
  $obj->guest();  

  }

?>