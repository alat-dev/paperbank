@extends('template.main')

@section('link')
{{-- <script src="../assets/js/color-modes.js"></script> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="/css/carousel.css" rel="stylesheet">
<link href="/css/add_carousel.css" rel="stylesheet">
@endsection
@section('container')
    @include('template.navbar')

  
  
      
  
  
  
  
  <main>
  
    <div data-aos="fade-up" id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="bd-placeholder-img"  src="/img/a3.jpg"width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Want to improve your grades?</h1>
              <p class="opacity-75">We offer many resources: notes, past papers and practice papers.</p>
              <form action="/papers">
                    
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search paper" name="search"  aria-describedby="button-addon2">
                    
                    <button class="btn btn-outline-secondary ml-2 text-light" type="submit" id="button-addon2" >Search</button>
                </div>
                
            </form>
                
                
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img"  src="/img/a2.jpg"width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="container">
            <div class="carousel-caption">
              <h1>Got study resources to share?</h1>
              <p>Upload these resources to help others.</p>
              <p><a class="" style="text-decoration: none; color:white" href="/login"><u>Sign Up</u></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img"  src="/img/a1.jpg"width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Why did we make Paper Banks?</h1>
              <p>We hope to help others achieve better grades in university.</p>
              <p><a class="" style="text-decoration: none; color:white" href="/login" href="#mission"><u>Learn more</u></a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
    <div data-aos="fade-up" class="container marketing">
  
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="/img/image2.png" alt="" height ="140px" width="140px">
          <h2 class="fw-normal">Upload Paper</h2>
          <p>Join, help, and collaborate with other students to maximize their learning experience</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/img/image5.png" alt="" height ="140px" width="140px">
          <h2 class="fw-normal">Search Paper</h2>
          <p>Search past exam, practice paper, and notes from all year</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/img/image6.jpeg" alt="" height ="140px" width="140px">
          <h2 class="fw-normal">Get A+</h2>
          <p>And lastly this, get that 4.0 on your graduation</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
      <!-- START THE FEATURETTES -->
  
      <hr class="featurette-divider">
  
      <div data-aos="fade-left" class="row featurette">
        <div class="col-md-7 my-auto">
          <h2 class="featurette-heading fw-normal lh-1">Over <b>10,000</b> students have used Paper Bank. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
        </div>
        <div class="col-md-5">

          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/image.jpg" alt="">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div data-aos="fade-left" class="row featurette">
        <div class="col-md-7 order-md-2 my-auto">
          <h2 class="featurette-heading fw-normal lh-1">On average student's grade <b>increase by 25%.</b><span class="text-body-secondary">Try it yourself.</span></h2>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/image4.jpg" alt="">
        </div>
      </div>
      <p id = "mission"></P>
      <hr class="featurette-divider">
     
      <div data-aos="fade-left" class="row featurette">
        <div class="col-md-7 my-auto">
          <h2 class="featurette-heading fw-normal lh-1">Our Mission</h2>
          <p class="lead">Our mission is to allow students to easily access resources that would benefit their studies in university. These resources are currently scarce but through this website, students would be able to upload their own resources for other students to use. Therefore, other students are able to improve their learning techniques.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/image1.png" alt="">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
  
    </div><!-- /.container -->
  
  
    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2023 Paper Bank</p>
    </footer>
  </main>

@endsection
