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
   
 <!-- FAQ content -->
    <div class="container  mb-5">
        <h1 class="text-center">Frequently Asked Questions</h1>
        <div class="accordion" id="faqAccordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What services do you offer?
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        We offer a wide range of car care services including oil changes, tire rotations, brake inspections, engine diagnostics, and car washes.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What are your operating hours?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="card-body">
                        Our operating hours are from 9:00 AM to 7:00 PM from Tuesday to Sunday. We are closed on Mondays.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Do you offer any discounts?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="card-body">
                        Yes, we offer various discounts throughout the year. Please check our website or contact us for the latest offers.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Do I need to make an appointment?
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                    <div class="card-body">
                        While walk-ins are welcome, we recommend making an appointment to ensure you receive timely service without any delays.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How can I contact you?
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
      <div class="card-body">
    You can contact us via phone at <?php  echo APP_PHONE[0]?>, email at <?php echo APP_MAIL  ?>, or visit us at <?php echo APP_ADDRESS;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  </div>
  
  
  <?php
 include_once("view/layouts/footer.php");
 
?>