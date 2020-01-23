<?php


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <title>Register | The East Africa Conference on Occupational Safety and Health - EACOSH</title>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">
    <link rel="icon" href="assets/images/eacosh_icon.png" />

 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156849121-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156849121-1');
</script>
    <!-- Favicons -->
<!-- <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c"> -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background: url('assets/images/osh.webp');"> 
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">
          <a class="navbar-brand" href="">
              <img src="./assets/images/eacosh_logo.png" width="100px" height="40px" alt="">
            </a>
          </h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Register</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Speakers</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link" href="#">Contact</a>

          </nav>
        </div>
      </header>

  <main role="main">
    <div class="m-auto col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
      <div style="display: none;" id="success_message" class="alert bg-dark" role="alert">
        <h4 class="alert-heading">
          You have been registered
        </h4>
        <p>
          Thank you for registering for The East Africa Conference on Occupational Safety and Health(EACOSH)!
          We have sent you an email with the fees and details of the event.
          We look forward to hosting you.
        </p>
        <hr>
        <p class="mb-0"><a href="https://eacosh.com/about">About EACOSH</a></p>
    </div>
      
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="registrationDone(submitted)"></iframe>

      <form target="hidden_iframe" class="p-4 bg-white" id="reg_form" onsubmit="submitted=true;" 
      action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdIh18Gd73f0EWHVVmLzcl0yXEXasqLe66TiUVLciL1AsJc4A/formResponse" 
      method="post">
        <h1 class="cover-heading text-dark">Book your slot</h1>
          <fieldset id="about-you">
            <h3 class="fs-subtitle text-dark">About You</h3>
            <input type="text" class="form-control" name="entry.1579221039" id="title" placeholder="Title">
            <input type="text" class="form-control" name="entry.2099489525" id="first_name" placeholder="First Name">
            <input type="text" class="form-control" name="entry.375446303" id="last_name" placeholder="Last Name">
            <input type="text" class="form-control" name="entry.935356103" id="organization" placeholder="Organization">
            <input type="text" class="form-control" name="entry.1704847076" id="job_title" placeholder="Job Title">
            
            <br>
            
            <input type="button" class="btn btn-warning" onclick="nextOne()" id="next-one" value="Next">



          </fieldset>
          <fieldset id="your-contacts" style="display: none;">
            <h3 class="fs-subtitle text-dark">Your Contacts</h3>
            <select id="country" name="entry.658759170" class="custom-select">
              <option selected value="Kenya" data-code="254">Kenya</option>
              <option value="Uganda" data-code="256">Uganda</option>
              <option value="Tanzania" data-code="255">Tanzania</option>
              <option value="Rwanda" data-code="250">Rwanda</option>
              <option value="Burundi" data-code="257">Burundi</option>
              <option value="South Sudan" data-code="211">South Sudan</option>
              <option value="United States" data-code="1">United States</option>
              <option value="Other" data-code="254">Other</option>
          </select>
          <br>
          <br>
          <div class="input-group">
            <span class="input-group-text" id="code">254</span>
          <input type="tel" onkeydown="limit(this);" onkeyup="limit(this);" class="form-control" id="phone_no"
                        placeholder="Phone Number" aria-describedby="addon-wrapping">
          <input type="hidden" class="form-control" name="entry.1677364244" id="phone_no_val" placeholder="Phone Number">
            </div>
          <input type="email" class="form-control" name="entry.2119931149" id="email_addr" placeholder="Email Address">
            
            <br>
            <input type="button" class="btn btn-info" onclick="prevOne()"  id="prev-one" value="Prevous">
            <input type="button" class="btn btn-warning" onclick="nextTwo()" id="next-two" value="Next">

          </fieldset>
          <fieldset id="finish" style="display: none;">
            <h3 class="fs-subtitle text-dark">Finish</h3>
            <select onchange="checkRole()" name="entry.1476617721" class="custom-select" id="role">
              <option selected>Role in the Conference</option>
              <option value="Kenyan Delegate">Kenyan Delegate</option>

              <option value="EAC Delegate">EAC Delegate</option>
              <option value="None EAC Delegate">Non EAC Delegate</option>
            </select>
            
            <div id="mpesa_step" style="display: none; font-size: 14px;">
              <img width="100px" src="./assets/images/lipanampesalogo.png" alt="">
              <ol>
                  <li>Go to the M-PESA Menu.</li>
                  <li>Select Pay Bill.</li>
                  <li>Enter Business No. <span class="font-weight-bold">749320 </span> Receiving Organization will be
                      KIPYA AFRICA LIMITED(organizer of the event)</li>
                  <li>Enter Account No. <span class="font-weight-bold" id="fullname"></span></li>
                  <li>Enter the Amount <span class="font-weight-bold" id="cost">Kshs. 20,000</span></li>
                  <li>Enter your M-Pesa PIN then send.</li>
              </ol>
              <div id="paymentstatus">
                  <div class="alert alert-secondary" role="alert">
                      Awaiting Payment...
                  </div>
              </div>
            </div>
            <input type="hidden" name="entry.1221916504" id="email_code" placeholder="MPESA CODE">
            <input type="hidden" name="entry.1952046623" id="mpesa_name" placeholder="MPESA Name">
            <input type="hidden" name="entry.587296997" id="mpesa_amount" placeholder="Amount">
            <br>
            <input type="button" class="btn btn-info" onclick="prevTwo()" id="prev-two" on value="Prevous">
            <button type="submit" class="btn btn-primary" >Register</button>
</fieldset>

            


      </form>
    </div>



  </main>

  
  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p> Organized by <a href="https://kipya-africa.com/">Kipya Africa Ltd.</a> in Collaboration with <a href="https://gak.co.ke/">GAK</a></p>
    </div>
  </footer>
</div>

</body>
<script src="assets/js/register.js"></script>    

</html>
