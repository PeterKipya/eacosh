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
  <script src="assets/js/register.js"></script>    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">
    <link rel="icon" href="assets/images/eacosh_icon.png" />

 
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

  <main role="main" class="inner cover">


    <div style="display: none;" id="success_message" class="alert bg-dark" role="alert">
      <h4 class="alert-heading">You have been registered</h4>
  <p>Thank you for registering for The East Africa Conference on Occupational Safety and Health(EACOSH)!
    We have sent you an email with the fees and details of the event.
    We look forward to hosting you.</p>
  <hr>
  <p class="mb-0"><a href="https://eacosh.com/about">About EACOSH</a></p>
</div>
      
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="registrationDone(submitted)"></iframe>

      <form target="hidden_iframe" onsubmit="submitted=true;" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdIh18Gd73f0EWHVVmLzcl0yXEXasqLe66TiUVLciL1AsJc4A/formResponse" method="post" id="reg_form">
        <h1 class="cover-heading">Book your slot</h1>
        <!-- Progressbar -->
          <ul id="progressbar">
            <li class="active">Account Setup</li>
            <li>Social Profiles</li>
            <li>Personal Details</li>
          </ul>
          <!-- Fieldsets -->
          <fieldset>
            <h2 class="fs-title">Create your Account</h2>
            <h3 class="fs-subtitle">This is step 1</h3>
            <input type="text" name="entry.1579221039" id="title" placeholder="Title">
            <input type="text" name="entry.2099489525" id="first_name" placeholder="First Name">
            <input type="text" name="entry.375446303" id="last_name" placeholder="Last Name">
            <input type="text" name="entry.935356103" id="organization" placeholder="Organization">
            <input type="text" name="entry.1704847076" id="job_title" placeholder="Job Title">
            <input type="text" name="entry.1476617721" id="role" placeholder="Role In the Conference">
            <input type="text" name="entry.658759170" id="country" placeholder="Country">
            <input type="text" name="entry.1677364244" id="phone_no_val" placeholder="Phone Number">
            <input type="email" name="entry.2119931149" id="email_addr" placeholder="Email Address">
            <input type="text" name="entry.1221916504" id="email_code" placeholder="MPESA CODE">
            <input type="text" name="entry.1952046623" id="mpesa_name" placeholder="MPESA Name">
            <input type="number" name="entry.587296997" id="amount" placeholder="Amount">
            <br>
            <button type="submit">Register</button>



          </fieldset>
          <fieldset>
            <h2 class="fs-title">Create your Account</h2>
            <h3 class="fs-subtitle">This is step 1</h3>
            <input type="email" name="email" id="" placeholder="Email">
            <input type="email" name="email" id="" placeholder="Email">


          </fieldset>
          <fieldset>
            <h2 class="fs-title">Create your Account</h2>
            <h3 class="fs-subtitle">This is step 1</h3>
            <input type="email" name="email" id="" placeholder="Email">
            <input type="email" name="email" id="" placeholder="Email">


          </fieldset>

      </form>
  </main>

  
  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p> Organized by <a href="https://kipya-africa.com/">Kipya Africa Ltd.</a> in Collaboration with <a href="https://gak.co.ke/">GAK</a></p>
    </div>
  </footer>
</div>
</body>
</html>
