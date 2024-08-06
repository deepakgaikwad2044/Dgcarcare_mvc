<?php
 
 include_once("view/layouts/header.php");
?>  
<style>
  html{
    font-size:70%;
  }
  
  label {
    font-size:1.5rem;
  }
  
  input , textarea {
    font-size:1.4rem!important;
  }
  
  .btn {
    font-size: 1.2rem!important;
  }
</style>
  <div class="container my-5">
  <h3 class="text-primary mb-5"> 
    <a class="nav-link" href="index.php"><span class="material-symbols-outlined">
arrow_back_ios
</span></a> 
    </h3> 
  
  <section class="container">
   
  <div class="text-justify brand-summery">
   <h2>Contact Us</h2>
  <p style="line-height: 1.6; text-indent: 30px; margin-bottom: 15px; text-align: justify;">
    Welcome to our Contact Page! We are always here to assist you with any inquiries, feedback, or support you may need. Our dedicated customer service team is available to address your concerns and provide the information you require. 
</p>

   </div>
   
   
   <div class="contact_form">
     <form action="" id="contact_form" method="get" accept-charset="utf-8">
       <div class="row">
         
         <div class="col-md-10 col-12 mb-3">
           <div class="form-group">
             <label class="form-label">Enter your queries</label>
            <textarea type="email" name="email" class="form-control p-3" id="email" placeholder="best services" value=""required=""></textarea>
            
           </div>
         </div>
         
         <div class="col-md-10 col-12 mb-4">
           <div class="form-group">
             <label class="form-label">Enter your email</label>
            <input type="email" name="email" class="form-control p-3" id="email" value="" required="" placeholder="someexample@gmail.com" />
           </div>
         </div>
         
          <div class="col-md-10 col-12">
           <div class="form-group">
            <button type="email" name="email" class=" btn btn-primary px-3 text-uppercase" id="email" value="">Send</button>
           </div>
         </div>
         
       </div>
     </form>
   </div>
 
  </section>
  
  </div>
  
  
  <?php
 include_once("view/layouts/footer.php");
 
?>