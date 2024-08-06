<?php
  session_start();
 require_once("view/layouts/header.php");

require_once("config/index.php");
require_once("config/db.php");
 
 $site_name = strtolower(APP_NAME);
 $site_mail = strtolower(APP_MAIL);
 
 $email = "1@gmail.com";
   $sel = "select * from users where email = '$email' ";
  
  $query_fire = $conn->prepare($sel);
  $query_fire->execute();
  $row = $query_fire->fetchAll(PDO::FETCH_ASSOC);
  
?>  

<style>
     html{
        font-size:100%;
      } 
      
    
.video_container {
        position:relative;
        width:100%;
        height:70vh;
        object-fit: cover;
        overflow: hidden;
      }
      
      video {
        transform:translateY(-20%);
        z-index:1;
        filter: blur(.1rem);
        transform:scale(3.5);
        
      }
      
      .video_container .brand-text {
        position: absolute;
        text-transform:uppercase;
        top:50%;
        font-size:1.8rem;
        left:10%;
        padding:.5rem 1rem;
        transform:translate(-4% , -50%);
        z-index: 2;
        color: #fff;
        background: rgba(200,200,200, .3);
        border-radius:.3rem;
      }
      
      .brand_logo {
        width:5rem;
        aspect-ratio: 1;
        border-radius:50%;
      }
      
      .brand-text p{
        font-size:1.1rem;
      }
      
.review-card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}

.review-card:hover {
    transform: translateY(-10px);
}

.reviewer-img {
    text-align: center;
}

.reviewer-img img {
    width:60px;
    height:60px;
    object-fit: cover;
    border: 3px solid #f1f1f1;
}

.card-title {
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
    color: #333;
    text-align: center;
}

.card-subtitle {
    font-size: 1rem;
    margin-bottom: 1rem;
    color: #ff9800;
    text-align: center;
}

.card-text {
    font-size: 0.9rem;
    color: #555;
    text-align: center;
    padding: 0 15px;
}

 .brand-summery p {
    color: #484848;
    color: #3e3e3e;
    color: #767676;
    font-size:1rem;
    white-space:pre-line;
  }
  
  .str_lower{
    text-transform: lowercase;
  }
  
  .review_section img {
    border-radius:50%;
  }
   
   
   @media only screen and (min-width:768px) and (max-width:987px){
     
    html{
     font-size:100%;
     }
   
   .video_container {
        position:relative;
        width:100%;
        height:20vh;
        object-fit: cover;
        overflow: hidden;
      }
      
   .video_container .brand-text {
              
              width:90%;
        font-size:1.8rem!important;
      }
    .brand-text p {
        font-size: 1.8rem;
      }
      
   }  
      
</style>

  <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">

      <img class="img-fluid brand_logo" src="public/images/logo/logo.png" alt="" />
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
  <a class="nav-link" href="index.php?action=home">Home</a>
      </li>
      <li class="nav-item">
  <a class="nav-link" href="index.php?action=about">About</a>
      </li>
      
      
         <li class="nav-item">
 <a class="nav-link" href="index.php?action=services">Services</a>
      </li>
    <li class="nav-item">
 <a class="nav-link" href="#contactus">Contact</a>
      </li>
      
    </ul>
   
  </div>
</nav>
 </div>
  
  <article class=" video_container">
 
  <video id="backgroundVideo" src="public/videos/smp.webm"  width="100%" height="100%" loop=""  muted autoplay="autoplay">
    
  </video>
  <div class="brand-text">
    
  <h3> <?php echo APP_NAME;  ?></h3>
  
  <div class="res_text">
    <div class="d-flex justify-content-start align-baseline">
      <span class="material-symbols-outlined">location_on</span>
   <p> <?php echo APP_ADDRESS;  ?> </p>
    </div>
    
     <div class="d-flex justify-content-start align-baseline">
      <span class="material-symbols-outlined">schedule</span> &nbsp;
   <p> 9:00 AM to 7:00 PM </p>
    </div>
    
     <div class="d-flex justify-content-start align-baseline">
      <span class="material-symbols-outlined">mail</span> &nbsp;
   <p class="str_lower"> <?php echo APP_MAIL; 
   ?></p>
    </div>
    
    
  <div class="d-flex justify-content-start align-basline">
    
<span class="material-symbols-outlined">phone</span> &nbsp;
 <?php $phones = APP_PHONE;
 foreach ($phones as $phone) {
 $res = $phone . " &nbsp; ";
 
 echo "<p> $res</p>";
 }
 
 ?> 

</div>
 
    
  </div>
  
  </div>
</article>
 
 <!------review section----->
<div class="container mt-5 mb-5 review_section">
    <h4 class="text-center mb-4">Customer Reviews</h4>
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card review-card h-100">
                <div class="card-body">
                    <div class="reviewer-img mb-3">
                        <img src="public/images/reviews/hs.jpg" class="rounded-circle" alt="Reviewer Image">
                    </div>
                    <h5 class="card-title">Harshad Shinde</h5>
                    <h6 class="card-subtitle mb-2 text-muted">★★★★★</h6>
                    <p class="card-text">Great service and friendly staff! My car looks brand new after the detailing.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card review-card h-100">
                <div class="card-body">
                    <div class="reviewer-img mb-3">
                        <img src="public/images/reviews/rj.jpg" class="rounded-circle" alt="Reviewer Image">
                    </div>
                 <h5 class="card-title">Shweta Gaikwad</h5>
                    <h6 class="card-subtitle mb-2 text-muted">★★★★☆</h6>
                   <p class="card-text">Excellent customer service and great attention to detail. Highly recommend!</p>
               
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card review-card h-100">
                <div class="card-body">
                    <div class="reviewer-img mb-3">
        <img src="public/images/reviews/sd.jpg" alt="Reviewer Image">
               
                    </div>
                    <h5 class="card-title">Suraj Dhiwar</h5>
                    <h6 class="card-subtitle mb-2 text-muted">★★★★★</h6>
     <p class="card-text">Quick and efficient service. My car's oil change was done in no time.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-----contact section-->
  <section class="container" id="contactus">
   
  <div class=" brand-summery">
   <h3 class="text-center">Contact Us</h3>
  <p class="text-center" style="text-indent:50px; ">
    Let us know how we can assist you.
</p>

   </div>
   
   
   <div class="contact_form mt-3">
    <div class="row d-flex justify-content-center">
     
     <div class="col-sm-10">
                 <form action="" id="contact_form"  accept-charset="utf-8">
       <div class="row">
         
         <div class="col-md-10 col-12 mb-3">
           <div class="form-group">
             <label class="form-label">Enter your queries</label>
            <textarea  name="query" class="form-control p-3" id="query" placeholder="best services" required=""></textarea>
            
           </div>
         </div>
         
         <div class="col-md-10 col-12 mb-4">
           <div class="form-group">
             <label class="form-label">Enter your email</label>
            <input type="email" name="email" class="form-control p-3" id="email" required="" placeholder="kiran@gmail.com" />
           </div>
         </div>
         
          <div class="col-md-10 col-12">
           <div class="form-group">
            <button type="submit" name="submit" class=" btn btn-primary px-3 text-uppercase" id="submit" value="">Send</button>
           </div>
           
         </div>
         
         
         
       </div>
     </form>
     
     </div> 

    </div>

   </div>
 
  </section>
  
 
<footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold"> <?php
                  echo APP_NAME;  ?></h5>
                    <p>Providing top-notch car care services to keep your vehicle running smoothly and looking great.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Services</h5>
                    <p>
                      <a class="text-white" style="text-decoration: none;">Oil Change</a></p>
                    <p><a  class="text-white" style="text-decoration: none;">Brake Service</a></p>
                    <p><a class="text-white" style="text-decoration: none;">Tire Rotation</a></p>
                    <p><a class="text-white" style="text-decoration: none;">Car Wash</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Quick Links</h5>
                    <p><a href="index.php?action=about" class="text-white" style="text-decoration: none;">About Us</a></p>
                    <p><a href="#contactus" class="text-white" style="text-decoration: none;">Contact</a></p>
                    <p><a href="index.php?action=faq" class="text-white" style="text-decoration: none;">FAQ</a></p>
                    <p>
      <a href="index.php?action=terms" class="text-white" style="text-decoration: none;">Terms & Conditions</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
                    <p><i class="fas fa-home mr-3"></i> 
                    <?php  echo APP_ADDRESS; ?>
                    </p>
                    <p><i class="fas fa-envelope mr-3"></i> <?php echo APP_MAIL; ?></p>
          
          <div class="d-flex justify-content-center align-basline">
          
         <?php 
           foreach ($phones as $phone) {
 $res = $phone . " &nbsp; ";
 
 echo '
   <span class="material-symbols-outlined">phone</span> 
   '. $res.'
   ';
 }  
    
    ?>     
          </div>
                  
                </div>
                
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p> &copy; <?php echo APP_COPYRIGHTS; ?></p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 

 <script>
  document.getElementById('backgroundVideo').playbackRate = 0.3;
  
  $(document).ready(function(){
    
    $("#contact_form").submit(function(e){
      e.preventDefault();
      let data = $(this).serialize();
      
      $.ajax({
        url: "models/add.php" ,
        type: "post",
        data: data,
        success: function(res){
        
    Swal.fire({
  text: res.message,
  icon: res.success ? "success" : "info"
}); 
     $("form")[0].reset();
        }
      });
      
    })
  })
</script>


  <?php
 require_once("view/layouts/footer.php");
 
?>