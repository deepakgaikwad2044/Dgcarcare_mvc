<?php
 
  class AuthController {
   
    public function guest(){
      require_once("view/guest.php");
    }
    
    public function home(){
    require_once("view/home.php");
    }
    
    public function about(){
      require_once("view/about.php");
    }
    
    public function services(){
      require_once("view/services.php");
    }
    
    public function terms(){
    require_once("view/terms.php");
    }
    
    public function faq(){
      require_once("view/faq.php");
    }
    
    public function US(){
      require_once("view/guest.php");
    }
    
  }

?>