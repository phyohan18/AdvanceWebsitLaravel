@extends('layout')

@section('link')
<link rel="stylesheet" href="assets/css/volunteer.css">

  <!-- Animation css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Volunteers</h1>
        </div>
      </div>
    </div>
  </div><br>

   <!-- Volunteer -->
   <div class="container volunteer">
    <!-- Mandalay Youth Camp Volunteer -->
    <div class="row">
      <div class="col  wow animate__animated 3s animate__fadeInUp d-flex justify-content-center" data-wow-delay='0.2s'>
          <div class="card v-card" style="width: 18rem;">
              <img src="assets/volunteerimages/advancemdy.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Volunteer for Advance Virtual Youth Camp Mandalay.</h5>
                <div class="card-text card-content">
                  <i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i>  <span>Volunteer</span><br>
                  <i class="fa fa-map-marker fa-fw" style="color: red;" aria-hidden="true"></i>  <span>Mandalay</span>

                </div>
               <div class="row">
                 <div class="col">
                  <a href="https://www.facebook.com/advanceyoungprofessionalsassociation/posts/147012497087812" class="btn btn-digital-outline  btn-link ">Detail</a>

                 </div>
                 <div class="col">
                  <a href="http://bit.ly/MandalayRegistrationForm" class="btn btn-digital-outline btn-link ">Apply Now</a>

                 </div>
               </div>
              </div>
          </div>
      </div>
      <!-- Mandalay Youth Camp Facilator -->
      <div class="col wow animate__animated 3s animate__fadeInUp d-flex justify-content-center " data-wow-delay='0.6s'>
          <div class="card v-card" style="width: 18rem;">
              <img src="assets/volunteerimages/advancemdy.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Facilator for Advance Virtual Youth Camp Mandalay.</h5>
                <div class="card-text card-content">
                  <i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i>  <span>Facilator</span><br>
                  <i class="fa fa-map-marker fa-fw" style="color: red;" aria-hidden="true"></i>  <span>Mandalay</span>

                </div>              
                <div class="row">
                  <div class="col">
                   <a href="https://www.facebook.com/advanceyoungprofessionalsassociation/posts/147012497087812" class="btn btn-digital-outline  btn-link ">Detail</a>
 
                  </div>
                  <div class="col">
                   <a href="http://bit.ly/MandalayRegistrationForm" class="btn btn-digital-outline btn-link ">Apply Now</a>

                  </div>
                </div>
               
              </div>
          </div>
      </div>
      <!-- Sample Data -->
      <div class="col d-flex justify-content-center">
          <div class="card v-card wow animate__animated 3s animate__fadeInUp " data-wow-delay='1s' style="width: 18rem;">
              <img src="assets/volunteerimages/advancemdy.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Volunteer for Advance Virtual Youth Camp Mandalay.</h5>
                <div class="card-text card-content">
                  <i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i>  <span>Volunteer</span><br>
                  <i class="fa fa-map-marker fa-fw" style="color: red;" aria-hidden="true"></i>  <span>Mandalay</span>

                </div> 
                <div class="row">
                  <div class="col">
                   <a href="https://www.facebook.com/advanceyoungprofessionalsassociation/posts/147012497087812" class="btn btn-digital-outline  btn-link ">Detail</a>
 
                  </div>
                  <div class="col">
                   <a href="http://bit.ly/MandalayRegistrationForm" class="btn btn-digital-outline btn-link ">Apply Now</a>

                  </div>
                </div>
              </div>
          </div>
      </div>
     
  </div>

    

</div>


<!-- Leader -->
<div class="container content volunteer ">
  <div class="row d-flex justify-content-center">
        <h2>Our Leaders</h2>
  </div>
    <!-- Row1 -->
    
  <div class="row" style="text-align: center;">
    <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='0.4s'>
      <img src="assets/volunteerimages/ZZinZinAwng(Founder).jpg" class="leader-img">
      <div>
        <p><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i> Z Zin Zin Aung</p>
        <p><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Founder and CEO</p>
      </div>
    </div>
  </div>
    <!-- Row2 -->
  <div class="row" style="text-align: center;" >
    <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='0.8s'>
      
          <img src="assets/volunteerimages/Aye Bhone Maung (Content Team Leader).jpg" class="leader-img" alt="...">
          <div>
            <p> <i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Aye Bhone Maung</p>
              <p> <i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i>  Content Team Leader</p>
          </div>
    </div>

    <div class="col wow animate__animated 3s animate__fadeInUp " data-wow-delay='1.2s'>
      
          <img src="assets/volunteerimages/Htoo Htet Aung (Public Relations Consultant).JPG" class="leader-img" alt="...">
          <div>
            <p><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>Htoo Htet Aung</p>  
               <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Public Relations Consultant</span>
          </div>
    </div>

    <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='1.6s'>
          <img src="assets/volunteerimages/Kyaw Zin Win (Training & Development Director).jpg" class="leader-img" alt="...">
              <div>
                <span><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Kyaw Zin Win</span><br>
              <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Training & Development Director</span>
              </div>
    </div>
    <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='2s'>
          <img src="assets/volunteerimages/Min Htet Arkar (Graphic Design Team Leader).jpg" class="leader-img" alt="...">
              <div>
                <span><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Min Htet Arkar</span><br>
              <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Graphic Design Team Leader</span>
              </div>
    </div>
    
  </div> 
    <!--Row3  -->
    <div class="row" style="text-align: center;">
      <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='0.8s'>
        <img src="assets/volunteerimages/Min Zayar Maung (Video Editing Team Co-Leader).jpg" class="leader-img" alt="...">
            <div>
              <span><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Min Zayar Maung </span><br>
            <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Video Editing Team Co-Leader</span>
            </div>
      </div>
      <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='1.2s'>
        <img src="assets/volunteerimages/Myat Theingi Kyaw (Public Relations Director).jpg" class="leader-img" alt="...">
            <div>
              <span><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Myat Theingi Kyaw</span><br>
            <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Public Relations Director</span>
            </div>
      </div>
      <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='1.6s'>
        <img src="assets/volunteerimages/Phone Myint Htwe (Promotion Team leader).JPG" class="leader-img" alt="...">
        <div>
          <span><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Phone Myint Htwe</span><br>
        <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Promotion Team leader</span>
        </div>
      </div>
  
      <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='2s'>
            <img src="assets/volunteerimages/Satt Naing Tun (Social & Communication Team Leader).jpg" class=" leader-img" alt="...">
                <div>
                  <span> <i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i> Satt Naing Tun </span><br>
                <span> <i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i>Social & Communication Team Leader</span>
                </div>
      </div>
    </div> 

  <!-- Row4 -->
  <div class="row" style="text-align: center;">
    <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='0.8s'>
      <img src="assets/volunteerimages/Si lar Nount(Video Editing Team Leader).jpg" class="leader-img" alt="...">
          <div>
            <span><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Si lar Nount</span><br>
          <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Video Editing Team Leader</span>
          </div>
    </div>
    <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='1.2s'>
      <img src="assets/volunteerimages/Thant Zin Htun (Web Development Team Leader).jpg" class="leader-img" alt="...">
          <div>
            <span><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Thant Zin Htun</span><br>
          <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> Web Development Team Leader</span>
          </div>
    </div>
    <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='1.6s'>
      <img src="assets/volunteerimages/Ya Tu (HR Director).jpg" class="leader-img" alt="...">
      <div>
        <span><i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i>  Ya Tu </span><br>
      <span><i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i> HR Director</span>
      </div>
    </div>

    <div class="col wow animate__animated 3s animate__fadeInUp" data-wow-delay='2s'>
          <img src="assets/volunteerimages/Yoon Ei Kyaw (Content Co-leader).jpg" class=" leader-img" alt="...">
            <div>
                <span> <i class="fa fa-user-circle fa-fw" style="color: red;" aria-hidden="true"></i> Yoon Ei Kyaw </span><br>
              <span> <i class="fa fa-briefcase fa-fw" style="color: red;" aria-hidden="true"></i>Content Co-leader</span>
            </div>
    </div>
  </div> 
</div>
  

<!-- Volunteer's Voice -->
<div class="container ">
    <div class="row d-flex justify-content-center">
        <h2>Volunteer's Voice</h2>
    </div>
    
    <div class="row d-flex justify-content-center voice">
        <div class="col-lg">
            <img src="assets/volunteerimages/voice1.jpg" alt="" class="img-fluid wow animate__animated 3s animate__fadeInUp"  data-wow-delay='0.2s'>
        </div>
        <div class="col-lg">
            <img src="assets/volunteerimages/voice2.jpg" alt="" class="img-fluid wow animate__animated 3s animate__fadeInUp"  data-wow-delay='0.4s'>

        </div>
    </div>
    <div class="row d-flex justify-content-center voice">
        <div class="col-lg">
            <img src="assets/volunteerimages/voice3.jpg" alt="" class="img-fluid wow animate__animated 3s animate__fadeInUp"  data-wow-delay='0.6s'>
        </div>
        <div class="col-lg">
            <img src="assets/volunteerimages/voice4.jpg" alt="" class="img-fluid wow animate__animated 3s animate__fadeInUp"  data-wow-delay='0.8s'>

        </div>
    </div>
    <div class="row d-flex justify-content-center voice">
        <div class="col-lg">
            <img src="assets/volunteerimages/voice5.jpg" alt="" class="img-fluid wow animate__animated 3s animate__fadeInUp"  data-wow-delay='1.0s'>
        </div>
        <div class="col-lg">
            <img src="assets/volunteerimages/voice6.jpg" alt="" class="img-fluid wow animate__animated 3s animate__fadeInUp"  data-wow-delay='1.2s'>

        </div>
    </div>
</div>

@endsection