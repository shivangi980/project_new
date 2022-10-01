<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="slider/css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/css/slick-slider.css" type="text/css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid m-0">
        <div class="row">
           <div class="col-lg-12   bg-white p-0">
               <div class="container">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-row justify-content-end p-2">
                           <li><a class="d-flex td-none text-dark align-items-center" href=""><i class="fa-solid fa-user text-main"></i><span class="ms-1">Register</span></a></li>
                           <li class="ms-3"><a class="d-flex td-none text-dark align-items-center" href=""><i class="fa-solid fa-right-to-bracket text-main"></i><span class="ms-1">Login</span></a></li>
                           <li class="ms-3"><a class="d-flex td-none text-dark align-items-center" href=""><i class="fa-solid fa-house-chimney text-main"></i><span class="ms-1">Dashboard</span></a></li>
                         </ul>
               </div>
           </div>
        </div>
    </div>
    <div class="col-lg-12 position-relative p-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/aboutusbg.jpg" class="d-block w-100 " height="500" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/staff.png" class="d-block w-100" height="500" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/surgery.jpg" class="d-block w-100" height="500" alt="...">
            </div>
        </div>
      </div>
      <!-- navigation bar start -->
      <div class="overlay position-absolute"></div>
      <div class="w-100  header p-0 bg-transparent-custom">
      <div class="container">
          <nav class="navbar navbar-expand-lg bg-transparent shadow-lg p-0 b-10">
              <div class="container-fluid justify-content-between"> 
                <a class="navbar-brand" href="#">
                  <img src="images/logo.png" alt="Bootstrap" width="80" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="ms-5 collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-2 justify-content-between w-100">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn btn-main" href="#">Online Appointment</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <div class="container-fluid position-absolute text-center text-light">
            <h1 class="about">About Us</h1>
          </div>
        </div>
    <!-- navigation bar end -->
    <!-- about us content start-->
    <div class="container-fluid position-absolute w-100">
      <div class="row">
        <div class="col-lg-6 text-center">
          <h1 class="heading1">The Best Doctor</h1>
          <h2 class="heading2">Gives The Least</h2>
          <h3 class="heading2">Medicine</h3>
          
        </div>
        <div class="col-lg-6 position-relative">
          <img src="images/hospitalbg.jpg" class="img-thumbnail w-75" alt="...">
        </div>
        <div class="col-lg-4 position-absolute top-50 end-0 ">
          <img src="images/aboutus_content.jpg" class="img-thumbnail w-100" alt="...">
        </div>
      </div>
    </div>
    
    <div class="content col-lg-12 position-absolute">
      <div class="row m-0">
        <div class="col-lg-6 position-relative ">
          <img src="images/content.jpg" class="img-thumbnail w-75 " alt="...">
        </div>
        <div class="col-lg-4 position-absolute top-50 end-50 ">
          <img src="images/cont.jpg" class="img-thumbnail w-100" alt="...">
        </div>
        <div class="col-lg-6 text-center">
          <h4 class="heading3">YOUR PATIENTS AWAIT YOU</h4>
          <h5>Making Healthcare Better Together.</h5>
          <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        </div>
      </div>
    </div>
        <!-- about us content end -->
    <!-- jquery javascript library -->
    <script src="js/jquery.min.js"></script>  
    
<script src="slider/js/jquery.flexslider.js"></script>
<script src="https://kit.fontawesome.com/3c556bfbc8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>