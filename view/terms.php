<?php
 
 require_once("view/layouts/header.php");
require_once("config/index.php");

$site_name = strtolower(APP_NAME);
?>  
<style>
  html{
    font-size:90%;
  }
  
  .last_updated {
    font-size:.9rem;
    color: #a3a3a3;
  }
  
  .inner_terms p{
    color: #7f7f7f;
  }
  h1 {
    font-size:1.5rem;
  }
  
  h2 {
    font-size:1.2rem;
  }
</style>

  <div class="container my-5">
  <h3 class="text-primary "> 
      <a class="nav-link" href="index.php"><span class="material-symbols-outlined">
arrow_back_ios
</span></a> 
    </h3> 
  
  <section class="container">
   
 <!-- Terms & Conditions content -->
    <div class="container  mb-5">
        <h1 class="text-center">Terms & Conditions</h1>
        <p class="mb-5 last_updated">Last updated: July 27, 2024</p>
        
        <div class="inner_terms">
        <h2>1. Introduction</h2>
        <p>Welcome to <?php echo APP_NAME; ?>. These Terms & Conditions govern your use of our website located at www.<?php echo $site_name; ?>.com and our services. By accessing our website and using our services, you agree to comply with and be bound by these terms. If you disagree with any part of the terms, you may not access our website or use our services.</p>
        
        <h2>2. Intellectual Property Rights</h2>
        <p>All content, trademarks, logos, and data on this website, including but not limited to text, designs, graphics, and icons, are the property of Car Care Center. Unauthorized use of any materials on the site may violate intellectual property laws.</p>
        
        <h2>3. User Responsibilities</h2>
        <p>By using our website, you agree not to engage in any activities that may harm the website or other users. This includes, but is not limited to, hacking, spamming, and uploading malicious content.</p>
        
        <h2>4. Service Availability</h2>
        <p>We strive to ensure that our services are available at all times. However, we do not guarantee uninterrupted access and reserve the right to modify or discontinue services without prior notice.</p>
        
        <h2>5. Limitation of Liability</h2>
        <p>Car Care Center will not be held liable for any direct, indirect, incidental, consequential, or punitive damages arising from your use of our services or website. We do not guarantee the accuracy, completeness, or reliability of any information on our site.</p>
        
        <h2>6. Governing Law</h2>
        <p>These terms and conditions are governed by and construed in accordance with the laws of the State of [Your State]. You agree to submit to the exclusive jurisdiction of the courts in [Your State] for any disputes arising out of or relating to these terms.</p>
        
        <h2>7. Changes to Terms</h2>
        <p>We reserve the right to modify these terms at any time. Any changes will be effective immediately upon posting on our website. Your continued use of our website and services constitutes acceptance of the updated terms.</p>
        
        <h2>8. Contact Us</h2>
        <p>If you have any questions or concerns about these Terms & Conditions, please contact us at:</p>
        <p>Email: <?php echo APP_MAIL;  ?></p>
        <?php 
         
         foreach (APP_PHONE as $phone) {
          $res = $phone. "&nbsp;"; 
         echo " <p>Phone: $res</p>";
         }
        ?>
        <p> <?php echo APP_ADDRESS; ?></p>
   </div>
    </div>

  </section>

  </div>
  
  
  <?php
 include_once("view/layouts/footer.php");
 
?>