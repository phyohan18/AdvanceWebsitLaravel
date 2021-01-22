@extends('layout')
@section('link')
<link rel="stylesheet" href="assets/css/support-form.css">

@endsection
@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Support Us</h1>
        </div>
      </div>
    </div>
  </div><br>
  <!---- End Page Content ------>


  <!------ Your Content Start Here ------->
  <div class="container" >
    <div class="row d-flex justify-content-center">
      <div class="col" style="margin-bottom: 30px; padding-left: 35px;">
        <div class="content" id="donateform">
          <h2 style="text-align: center; padding: 25px; color: black;">Get Involved! Let's make a change</h2>
          <p style="text-align: center;"><a href="/volunteer" class="btn-volunteer">Become A Volunteer</a></p>

        </div>
      </div>
    </div>
  </div>
  <div>

      

      <div class="container mt-5">
          <div class="row" style="margin-bottom:30px;">
            <div class="col-lg-3 col-md-6 info">
              <h4><i class="icofont-google-map">Location:</i></h4>

              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              
              <h4><i class="icofont-clock-time">Open Hours:</i></h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              
              <h4><i class="icofont-envelope">Email:</i></h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              
              <h4><i class="icofont-phone">Call:</i></h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>

      

       <div style="margin-bottom:20px">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
         
          <div class="row">
            <div class="col">
              <button class="submit-button" type="submit">Send Message</button>
            </div>
           
          </div>

        </form>

       </div>
      </div>
    
  </div>
@endsection