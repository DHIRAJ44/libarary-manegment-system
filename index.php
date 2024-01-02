
<?php
require('dbconn.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="l1.css">
  </head>
  <body>
    <!-- start navbar -->
    
    <div>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.charusat.ac.in"> <img src="logo.jpg" style="hight:60px; width:60px"alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index-temp.php">Login</a>
            </li>
              </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
  </div>
</nav>
    </div>
    <!-- end navbar -->
    <!-- start mainpage -->
    <section class="bg-main bg-dark hero-section"> 
     <div class="container"> 
         <div class="row mb-5 "> 
             <div class="d-flex flex-column align-items-start justify-content-center col-xl-6 col-lg-6 col-md-12 col-12 order-1 order-lg-0 text-lg-start text-center mt-3 mt-lg-0 "> 
                 <h1 class=" common-heading text-capitalize fw-bolder text-white"> 
                     We Provide High Quality Books
                 </h1> 
                 <p class="mt-3 mb-5  para-width text-light-grey "> 
                 
A library is a collection of organized and curated information resources, such as books, magazines, journals, multimedia materials, and digital content, made accessible to the public for education, research, and recreational purposes. 
                 </p> 
  
                 <div class="text-center w-100 "> 
                     <button class="text-capitalize btn btn-primary px-5 py-2 " data-bs-offset="0,5" data-bs-placement="top" 
                             data-bs-title="Get Best Services" data-bs-toggle="tooltip">Contact Us 
                     </button> 
                 </div> 
  
             </div> 
  
             <div class="col-lg-6 col-md-12 col-12 order-0 order-lg-1 "> 
                 <div class="text-md-end text-center mb-5"> 
  
                     <video autoplay class="hero-video--section" loop muted src="v1.mp4"> 
                         Your browser does not support the video tag. 
                     </video> 
                 </div> 
             </div> 
  
         </div> 
  
     </div> 
     <div class="custom-shape-divider-bottom-1693395362">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
     </div> 
 </section> 
<section class=" services-section"> 
     <div class="container text-center common-title fw-bold"> 
         <h2 class="common-heading">What We Will Do For <br> Your Business</h2> 
         <hr class="w-25 mx-auto "> 
     </div> 
  
     <div class="container mt-5"> 
         <div class="row g-5 "> 
             <div class="col-xxl-4 col-lg-4 col-12 "> 
                 <div class=" card-box rounded-2 p-5 text-center"> 
                     <img alt="GIF Image" class="img-fluid" src="b1.jpg" width="200px"> 
  
                     <h5 class="my-3 fw-normal ">The Book of the Epic</h5> 
                     <p class="pe-3 mb-5"> 
                     The World's Great Epics Told in Story" by H. A. Guerber aims to introduce readers to the greatest epics from around the world. 
                     </p> 
                     <div class="  d-flex justify-content-center align-items-center "> 
                         <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3" 
                            href="/service.html"> 
                             <i class="fa-solid fa-arrow-right"> </i> 
                         </a> 
                     </div> 
                 </div> 
             </div> 
  
             <div class="col-xxl-4 col-lg-4 col-12  "> 
                 <div class=" card-box rounded-2 p-5 text-center shadow"> 
                     <img alt="GIF Image" class="img-fluid" src="c4.png" width="200px"> 
  
                     <h5 class="my-3 fw-normal">Annual Report  </h5> 
                     <p class="pe-3 mb-5"> 
                     An annual report book is a comprehensive document produced by a company or organization on a yearly basis. 
                     </p> 
                     <div class="  d-flex justify-content-center align-items-center "> 
                         <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3" 
                            href="/service.html"> 
                             <i class="fa-solid fa-arrow-right"> </i> 
                         </a> 
                     </div> 
                 </div> 
             </div> 
  
             <div class="col-xxl-4 col-lg-4 col-12 "> 
                 <div class=" card-box rounded-2 p-5 text-center"> 
                     <img alt="GIF Image" class="img-fluid" src="c7.png" width="200px"> 
                     <h5 class="my-3 fw-normal "> Jockie</h5> 
                     <p class="pe-3 mb-5"> 
                     A "jockey book" typically refers to a guidebook or handbook designed for jockeys in horse racing. 
                     </p> 
                     <div class="  d-flex justify-content-center align-items-center "> 
                         <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3" 
                            href="/service.html"> 
                             <i class="fa-solid fa-arrow-right"> </i> 
                         </a> 
                     </div> 
                 </div> 
             </div> 
         </div> 
     </div> 
  
 </section> 
  <section>
  <div class="container mt-5"> 
         <div class="row g-5 "> 
             <div class="col-xxl-6 col-lg-6 col-12 "> 
                 <div class=" card-box rounded-2 p-5 text-center"> 
                     <img alt="GIF Image" class="img-fluid" src="c8.png" width="200px"> 
  
                     <h5 class="my-3 fw-normal ">Do Epic Shit</h5> 
                     <p class="pe-3 mb-5"> 
                     Ankur Warikoo is an entrepreneur and content creator whose deep, witty and brutally honest thoughts on success and failure.
                     </p> 
                     <div class="  d-flex justify-content-center align-items-center "> 
                         <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3" 
                            href="/service.html"> 
                             <i class="fa-solid fa-arrow-right"> </i> 
                         </a> 
                     </div> 
                 </div> 
             </div> 
  
             <div class="col-xxl-6 col-lg-6 col-12  "> 
                 <div class=" card-box rounded-2 p-5 text-center shadow"> 
                     <img alt="GIF Image" class="img-fluid" src="a8.png" width="200px"> 
  
                     <h5 class="my-3 fw-normal"> Boyfriend Bargain </h5> 
                     <p class="pe-3 mb-5"> 
                         Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse! 
                     </p> 
                     <div class="  d-flex justify-content-center align-items-center "> 
                         <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3" 
                            href="/service.html"> 
                             <i class="fa-solid fa-arrow-right"> </i> 
                         </a> 
                     </div> 
                 </div> 
             </div> 
         </div> 
     </div> 
  </section>
  <section class=" services-section"> 
     <div class="container mt-5"> 
         <div class="row g-5 "> 
             <div class="col-xxl-4 col-lg-4 col-12 "> 
                 <div class=" card-box rounded-2 p-5 text-center"> 
                     <img alt="GIF Image" class="img-fluid" src="c2.png" width="200px"> 
  
                     <h5 class="my-3 fw-normal "> Vector</h5> 
                     <p class="pe-3 mb-5"> 
                     Vectors are quantities that have both magnitude and direction and are commonly used in various scientific. 
                     </p> 
                     <div class="  d-flex justify-content-center align-items-center "> 
                         <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3" 
                            href="/service.html"> 
                             <i class="fa-solid fa-arrow-right"> </i> 
                         </a> 
                     </div> 
                 </div> 
             </div> 
  
             <div class="col-xxl-4 col-lg-4 col-12  "> 
                 <div class=" card-box rounded-2 p-5 text-center shadow"> 
                     <img alt="GIF Image" class="img-fluid" src="c1.png" width="200px"> 
  
                     <h5 class="my-3 fw-normal"> Hybrid Mechanics </h5> 
                     <p class="pe-3 mb-5"> 
                     A "hybrid mechanics book" in this context might explore these intersections.
                     </p> 
                     <div class="  d-flex justify-content-center align-items-center "> 
                         <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3" 
                            href="/service.html"> 
                             <i class="fa-solid fa-arrow-right"> </i> 
                         </a> 
                     </div> 
                 </div> 
             </div> 
  
             <div class="col-xxl-4 col-lg-4 col-12 "> 
                 <div class=" card-box rounded-2 p-5 text-center"> 
                     <img alt="GIF Image" class="img-fluid" src="c5.png" width="200px"> 
                     <h5 class="my-3 fw-normal "> Logo semple </h5> 
                     <p class="pe-3 mb-5"> 
                         Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse! 
                     </p> 
                     <div class="  d-flex justify-content-center align-items-center "> 
                         <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3" 
                            href="/service.html"> 
                             <i class="fa-solid fa-arrow-right"> </i> 
                         </a> 
                     </div> 
                 </div> 
             </div> 
         </div> 
     </div> 
 </section>
 <section class="common-section mb-5 pt-5 bg-dark "> 
     <div class="container text-center common-title  "> 
         <h2 class="common-heading text-white">What Client Say<br>About Us</h2> 
         <hr class="w-25 mx-auto"> 
     </div> 
     <div class="container"> 
         <div class="carousel slide" data-bs-ride="true" id="carouselExampleIndicators"> 
             <div class="carousel-indicators"> 
                 <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" 
                         data-bs-target="#carouselExampleIndicators" type="button"></button> 
                 <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" 
                         type="button"></button> 
                 <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" 
                         type="button"></button> 
             </div> 
  
             <div class="carousel-inner"> 
                 <div class="carousel-item active"> 
                     <div class="row g-4"> 
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem; "> 
                                     <img alt="..." 
                                          class="card-img-top" 
                                          src="a4.png"> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3 ">Dhruvil vakadia</p> 
                                         <p class="card-text ">DATE & TIME:
Start : Thu, Oct 05, 2023 11:00 AM
End : Thu, Oct 05, 2023 12:00 PM</p> 
                                         <div class=" mt-3 d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
  
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem;"> 
                                     <img alt="..." 
                                          class="card-img-top" 
                                          src=a2.png> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3">Bhumik patel</p> 
                                         <p class="card-text">Class of 2008 B.Tech, Mechanical Engineering Chandubhai S Patel Of Institute Technology
</p> 
                                         <div class=" mt-3 d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
  
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem;"> 
                                     <img alt="..." 
                                          class="card-img-top" 
                                          src="a3.png"> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3">rishi patel</p> 
                                         <p class="card-text">Class of 2015B.Tech, Information Technology
Chandubhai S Patel Of Institute Technology</p> 
                                         <div class=" mt-3 d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
                     </div> 
  
                 </div> 
                 <div class="carousel-item"> 
                     <div class="row g-4"> 
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem;"> 
                                     <img alt="..." 
                                          class="card-img-top" 
                                          src=a5.png> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3">Anjli patel</p> 
                                         <p class="card-text">Class of 2020B.Tech, Electrical Engineering
Chandubhai S Patel Of Institute Technology</p> 
                                         <div class=" mt-3 d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
  
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem;"> 
                                     <img alt="..." 
                                          class="card-img-top" 
                                          src=a6.png> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3">parth patel</p> 
                                         <p class="card-text">Class of 2020 B.Tech, Electrical Engineering
Chandubhai S Patel Of Institute Technology</p> 
                                         <div class=" mt-3 d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
  
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem;"> 
                                     <img alt="..."
                                          class="card-img-top" 
                                          src="a2.png"> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3">Angelina Thapa</p> 
                                         <p class="card-text">Class of 2020 B.Tech, Electrical Engineering
Chandubhai S Patel Of Institute Technology</p>  
                                         <div class=" mt-3 d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
                     </div> 
                 </div> 
                 <div class="carousel-item"> 
                     <div class="row g-4"> 
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem;"> 
                                     <img alt="..." 
                                          class="card-img-top" 
                                          src="a4.png"> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3">sunil mehta</p> 
                                         < class="card-text">Class of 2020 B.Tech, Electrical Engineering
Chandubhai S Patel Of Institute Technology</p> 
                                         <div class=" mt-3 d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
  
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem;"> 
                                     <img alt="..." 
                                          class="card-img-top" 
                                          src=a2.png> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3">dhiraj bagad</p> 
                                         <p class="card-text">Class of 2020 B.Tech, Electrical Engineering
Chandubhai S Patel Of Institute Technology</p> </p> 
                                         <div class="d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
  
                         <div class="col-xxl-4"> 
                             <div class="d-flex justify-content-center align-items-center"> 
                                 <div class="card  p-3" style="width: 18rem;"> 
                                     <img alt="..." 
                                          class="card-img-top" 
                                          src=a6.png> 
                                     <div class="card-body text-center"> 
                                         <p class="card-title  mb-3">abhi dodiya</p> 
                                         < p class="card-text">Class of 2020 B.Tech, Electrical Engineering
Chandubhai S Patel Of Institute Technology</> 
                                         <div class="d-flex justify-content-center"> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="fa-solid fa-star"></i> 
                                             <i class="far fa-star"></i> 
                                         </div> 
                                     </div> 
                                 </div> 
                             </div> 
                         </div> 
                     </div> 
                 </div> 
             </div> 
             <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" 
                     type="button"> 
                 <span aria-hidden="true" class="carousel-control-prev-icon"></span> 
                 <span class="visually-hidden">Previous</span> 
             </button> 
             <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" 
                     type="button"> 
                 <span aria-hidden="true" class="carousel-control-next-icon"></span> 
                 <span class="visually-hidden">Next</span> 
             </button> 
         </div> 
     </div> 
 </section> 
 <!-- end mainpage -->
 <!-- start footer -->
 <footer class="main-footer-section"> 
         <div class="container"> 
             <hr class="container mx-auto"> 
  
             <div class="row"> 
                 <div class="col-lg-8 col-12 "> 
                     <span class="bg-theme"> </span> 
                 </div> 
                 <div class="col-md-4 col-12  "> 
                     <div class="d-flex justify-content-center justify-content-lg-end gap-5 mt-lg-0 mt-3"> 
                         <a href="https://instagram.com/thecharusat?igshid=MzRlODBiNWFlZA==" target="_blank"> 
                             <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"> 
                                 <i class="fa-brands fa-instagram"></i> 
                             </div> 
                         </a> 
                         <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"> 
                         <a href="https://www.linkedin.com/school/charotar-university-of-science-and-technology/" target="_blank"> 
                             <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"> 
                                 <i class="fa-brands fa-linkedin"></i> 
                             </div> 
                         </a>  
                         </div> 
                         <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"> 
                         <a href="https://twitter.com/charusat?s=20" target="_blank"> 
                             <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"> 
                                 <i class="fa-brands fa-twitter"></i> 
                             </div> 
                         </a>     
                         </div> 
                     </div> 
                 </div> 
             </div> 
         </div> 
     </div>  
 </footer> 
 <!-- end footer -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
         crossorigin="anonymous"></script> 
  
 <script> 
     const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]') 
     const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl)) 
 </script> 
 </body> 
 </html>