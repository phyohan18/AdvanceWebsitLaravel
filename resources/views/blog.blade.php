@extends('layout')

@section('content')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Article Blogs</h1>
        </div>
      </div>
    </div>
  </div> <br>
  <!---- End Page Content ------>


  <!------ Your Content Start Here ------->
  <section id="blog_area">
    <div class="container">
      <div class="ml-3"> 
          <input type="text" id="input" name=""placeholder="Search Article Title"class="form-control"onkeyup="Search()" style="border-radius: 20px;">

      </div>
      <ul class="list-group py-4" id="ul">
        <li class="list-group-item border-0">
          <div class="row">
             <div class="col-lg-4">
                <img src="assets/images/blog/a.jpg" class="img-fluid w-100">
             </div>
              <div class="col-lg-8">
                  <div class="article_title">Sep 26,2020
                  <h3>Simple and Cute Manners that You Should Try</h3></div>
                  <div class="article_body py-3">            
                     <p>Hi သူငယ်ချင်းတို့ရေ🙋🏻‍♀️
                       ဒီတစ်ခါ မှာ​ဆိုရင် ဘာအကြောင်းကို ပြောပြပေးမှာလဲဆိုတော့~~~~
                       Tada~~💁🏻‍♀️
                      လူငယ်တိုင်း Try သင့်တဲ့ ရိုးရှင်းပြီးတော့ချစ်ဖို့ကောင်းတဲ့ Manner ‌လေး(၃)ခုအကြောင်းဖြစ်ပါတယ် 🙆‍♀️
                     </p>
                  </div>  
                  <div>
                    <a href="blogdetail.html" class="btn btn-primary py-2 px-3">Read more</a>
                  </div>        
              <div>
                <hr>
          </div>  
          </div>       
        </li>
        <hr>
        <li class="list-group-item border-0 mt-3">
          <div class="row">
             <div class="col-lg-4">
                <img src="assets/images/blog/b.jpg" class="img-fluid w-100">
             </div>
              <div class="col-lg-8">
                  <div class="article_title">Sep 25,2020
                  <h3>Effective Marketing strategies</h3></div>
                  <div class="article_body py-3">            
                     <p>မင်္ဂလာပါသူငယ်ချင်းတို့ရေ...🙏
                        အခုတစ်ခါမှာတော့...
                        ကိုယ့်ရဲ့ ကုန်ပစ္စည်းတွေကို စျေးကွက်မှာတင်ပို့ရောင်းချတဲ့အခါ လူကြိုက်များစေမယ့် marketing strategies လေးတွေ အကြောင်းတစေ့တစောင်းပြောပြချင်ပါတယ်
                     </p>
                  </div>  
                  <div>
                    <a href="blogdetail.html" class="btn btn-primary py-2 px-3">Read more</a>
                  </div>        
              <div>
          </div>  
          <hr>   
          </div>    
        </li>
        
         <li class="list-group-item border-0 mt-3">
          <div class="row">
             <div class="col-lg-4">
                <img src="assets/images/blog/c.jpg" class="img-fluid w-100">
             </div>
             
              <div class="col-lg-8">
                  <div class="article_title">Sep 20,2020
                  <h3>Treat everyone with respect</h3></div>
                  <div class="article_body py-3">            
                     <p>(လူတိုင်းကိုလေးစားပါ)
            "အမှိုက်ကားဗျို့ အမှိုက်ကားလာပြီဗျို့ "ဟု
            အသံကြားသည်နှင့်တပြိုင်နက် ကျွန်မသည်
            အိမ်မှအမှိုက်ထုတ်လေးဆွဲကာ ထွက်လာခဲ့သည် 🙋‍♀️
            အမှိုက်ထုပ်ကို အမှိုက်သိမ်းသည့် ဦးလေးကြီးဆီ‌ပေးနေရင်း နောက်မှ လူတစ်ယောက်ဆီက အော်ဟစ်သံ ကြိမ်းမောင်းသံကိုကြားလိုက်ရသည်
                     </p>
                  </div>  
                  <div>
                    <a href="blogdetail.html" class="btn btn-primary py-2 px-3">Read more</a>
                  </div>        
              <div>
          </div> 
          <hr>
          </div>
                 
        </li>
      
        <li class="list-group-item border-0 mt-3">
          <div class="row">
             <div class="col-lg-4">
                <img src="assets/images/blog/d.jpg" class="img-fluid w-100">
             </div>
              <div class="col-lg-8">
                  <div class="article_title">Sep 12,2020
                  <h3>You only lose What you cling to</h3></div>
                  <div class="article_body py-3">            
                     <p>တွယ်ငြိရာသာဆုံးရှုံးမှာ" ဒီ အဆိုအမိန့် ​လေးကို အားလုံးလည်း ကြားဖူး ​နေကြမယ် လို့ ​မျှော်လင့်ပါတယ်
            Social Media ​ပေါ်​တွေမှာလဲ ဒီ အဆိုအမိန့်​လေး ကို Caption အမျိုးမျိုးနဲ့ ခဏခဏ ​တွေ့​နေရပါတယ်
                     </p>
                  </div>  
                  <div>
                    <a href="blogdetail.html" class="btn btn-primary py-2 px-3">Read more</a>
                  </div>        
              <div>
          </div>         
        </li>
      
      </ul>

    </div>
  </section>

@endsection