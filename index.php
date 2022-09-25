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
          <div class="col-lg-12 position-relative p-0">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/banner.jpg" class="d-block w-100 " height="500" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/staff.png" class="d-block w-100" height="500" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/surgery.jpg" class="d-block w-100" height="500" alt="...">
                  </div>
              </div>
            </div>
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
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
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link btn btn-main" href="#">Online Appointment</a>
                          </li>
                        </ul>
                        <!-- <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success btn-main" type="submit">Search</button>
                        </form> -->
                      </div>
                    </div>
                  </nav>
                  </div>
            </div>
            <div class="overlay position-absolute"></div>
          </div>
        <div class="departments position-absolute col-lg-12">
            <div class="container">
              <div class="d-flex justify-content-evenly" id="departments">
                  <div class="ms-2 card">
                    <div class="card-body">
                      <div class="text-center  d-flex justify-content-center">
                        <img src="images/hospital.jpg" class="rounded" alt="..." height="100" width="100">
                      </div>
                      <h5 class="card-title text-center">Card title</h5>
                    </div>
                  </div>
                  <div class="ms-2 card">
                    <div class="card-body">
                    <div class="text-center  d-flex justify-content-center">
                        <img src="images/hospital.jpg" class="rounded" alt="..."  height="100" width="100">
                      </div>
                      <h5 class="card-title text-center">Card title</h5>
                    </div>
                  </div>
                  <div class="ms-2 card">
                    <div class="card-body">
                    <div class="text-center  d-flex justify-content-center">
                        <img src="images/hospital.jpg" class="rounded" alt="..."  height="100" width="100">
                      </div>
                      <h5 class="card-title text-center">Card title</h5>
                    </div>
                  </div>
                  <div class="ms-2 card">
                    <div class="card-body">
                    <div class="text-center  d-flex justify-content-center">
                        <img src="images/hospital.jpg" class="rounded" alt="..."  height="100" width="100">
                      </div>
                      <h5 class="card-title text-center">Card title</h5>
                    </div>
                  </div>
                </div>
                </div>
          </div>
          <!-- about us start -->
            <div class="col-lg-12 about-us">
              <div class="row">
                <div class="col-lg-12 text-center my-3">
                  <h2>About Us</h2>
                </div>
                <div class="col-lg-6">
                  <img src="images/aboutus.jpg" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-lg-6 my-auto">
                  <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
              </div>
            </div>
            <!-- about us end-->
            <!-- doctor profiles start  -->
            <div class="col-lg-12">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card" style="width: 18rem;">
                          <img src="..." class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <!-- doctor profiles end -->
          <!-- footer start -->
            <div class="col-lg-12 footer-parent mt-3">
              <div class="container">
                <footer class="py-5">
                  <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                      </ul>
                    </div>
              
                    <div class="col-6 col-md-2 mb-3">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                      </ul>
                    </div>
              
                    <div class="col-6 col-md-2 mb-3">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                      </ul>
                    </div>
              
                    <div class="col-md-5 offset-md-1 mb-3">
                      <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                          <label for="newsletter1" class="visually-hidden">Email address</label>
                          <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                          <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                      </form>
                    </div>
                  </div>
              
                  <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© 2022 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                      <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                      <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                      <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                    </ul>
                  </div>
                </footer>
              </div>
            </div>
            <!-- footer end -->
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="slider/js/jquery.flexslider.js"></script>

<script src="https://kit.fontawesome.com/3c556bfbc8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
