<!DOCTYPE html>
<html>
    <head>
        <title>Zybo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    </head>
    <body>

        <div class="wrapper">
            <div class="container-fluid">
              <Header class="header">
                <div class="header-left">
                  <div class="logo">
                    <img src="portfolio/Frame 42920.png" alt="logo">
                  </div>
                <ul class="main-nav">
                  <li><a href="">Home</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Services</a></li>
                  <li><a href="">Portfolio</a></li>
                  <li><a href="">Team</a></li>
                  <li><a href="">Blog</a></li>
                  <li><a href="">Contact</a></li>
                </ul>
                </div>
                <ul class="right-nav">
                  <li><a href="" class="btn btn-outline-primary">Log In</a></li>
                  <li><a href="" class="btn btn-primary">Get Started</a></li>
                </ul>
              </Header>

              <!--carousel-->
    <div class="banner">
             <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach($bannerImages as $key => $bannerImage)
      <li data-target="#bannerCarousel" data-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
    @endforeach
  </ol>
  <div class="carousel-inner">
    @foreach($bannerImages as $key => $bannerImage)
      <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
      <a href="{{ route('banner-images.create') }}" class="banner-link">
          <img src="{{ \Storage::url($bannerImage->image) }}" class="d-block w-100 banner-image" alt="Banner">
          
        </a>
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="banner-info">
                  <div class="banner-title">
                    Your Gateway to excellence <i class="bi bi-arrow-right"></i>
                  </div>
                  <h2>Empowering Success Through Innovative Solutions</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <div class="banner-buttons">
                    <button class="btn btn-primary">Primary Action</button>
                    <button class="btn btn-outline-primary bg-white">Secondary Action</button>
                    
                  </div>

                  </div>

              <!--aboutus-->
              <div class="container">
              <div class="aboutus">
                <div class="aboutus-info">
                  <div class="aboutus-title">
                  About Us
                </div>
                  <h2>Crafting Success Stories:<br>
          Unleashing Potential and Delivering Excellence</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure autem neque quas explicabo magni, molestiae voluptas quae quod vitae sed ipsam rerum repudiandae nostrum tempore laborum. Ab voluptatem provident eius!</p>
                </div>
                <div class="row">
                  <div class="col-7">
                    <div class="row">
                      <div class="col-6">
                        <div class="aboutus-column">
                          <div class="aboutus-num">
                          499+
                        </div>
                        <h5>Global customers</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. maiores quos?</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="aboutus-column">
                          <div class="aboutus-num">
                          1,532+
                        </div>
                        <h5>Global customers</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. maiores quos?</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="aboutus-column">
                          <div class="aboutus-num">
                          300+
                        </div>
                        <h5>Global customers</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. maiores quos?</p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="aboutus-column">
                          <div class="aboutus-num">
                          6,999+
                        </div>
                        <h5>Global customers</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. maiores quos?</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-5">
                    <div class="aboutus-img">
                      <img src="photos/image 5.png" alt="about">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <!--service-->

            <div class="container">
              <div class="service-info">
                <div class="service-title">
                  <h2>Our Services</h2>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita quisquam consequatur beatae est deserunt sint, laborum, natus eligendi similique sunt ab distinc.</p>
                </div>
                 
              </div>
              <div class="row">
                  <div class="col-md-3 mb-4">
                      <div class="card cd-frame">
                          <div class="card-icon">
                              <img src="photos/line.png" alt="">
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">Strategic Consulting:</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad, accusantium,Neque ad.</p>
                          </div>
                      </div>
                  </div>
          
                  <div class="col-md-3 mb-4">
                      <div class="card cd-frame">
                          <div class="card-icon">
                            <img src="photos/Frame.png" alt="">
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">Digital Transformation:</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad, accusantium,Neque ad.</p>
                          </div>
                      </div>
                  </div>
          
                  <div class="col-md-3 mb-4">
                      <div class="card cd-frame">
                          <div class="card-icon">
                            <img src="photos/Layer_1.png" alt="">
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">Custom Software Development:</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad, accusantium.</p>
                          </div>
                      </div>
                  </div>
          
                  <div class="col-md-3 mb-4">
                      <div class="card cd-frame">
                          <div class="card-icon">
                            <img src="photos/Layer_2.png">
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">Data Analytics and Insights:</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad, accusantium.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--2nd row--> 
          <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card cd-frame">
                        <div class="card-icon">
                          <img src="photos/Icons.png">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Training and development:</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad, accusantium.</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-3 mb-4">
                    <div class="card cd-frame">
                        <div class="card-icon">
                          <img src="photos/Layer_3.png">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cybersecurity Solutions:</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad, accusantium.</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-3 mb-4">
                    <div class="card cd-frame">
                        <div class="card-icon">
                          <img src="photos/Layer_4.png">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marketing and branding:</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad, accusantium.</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-3 mb-4">
                    <div class="card cd-frame">
                        <div class="card-icon">
                          <img src="photos/Layer_5.png">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Web Design and Development:</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad, accusantium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <!--portfolio-->
        <div class="container">
        <div class="Portfolio">
          <div class="header2">
              <div class="portfolio-title">
                <h2>Portfolio</h2>
              </div>
            <div class="header-center">
              <ul class="portfolio-nav">
                <li><a href="">Lorem ipsum</a></li>
                <li><a href="">Lorem ipsum</a></li>
                <li><a href="">Lorem ipsum</a></li>
                <li><a href="">Lorem ipsum</a></li>
                <li><a href="">Lorem ipsum</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
         
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4">
              <div class="card">
                  <div class="card-img">
                      <img src="portfolio/Frame 42900.png" alt="card-img">
                  </div>
                  <div class="card-body">
                       <p class="card-text">Lorem ipsum dolor sit amet</p>
                  </div>
                </div>
              </div>


              <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-img">
                        <img src="portfolio/Frame 42900 (1).png" alt="card-img">
                    </div>
                    <div class="card-body">
                         <p class="card-text">Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>


                <div class="col-md-4 mb-4">
                  <div class="card">
                      <div class="card-img">
                          <img src="portfolio/Frame 42900 (2).png" alt="card-img">
                      </div>
                      <div class="card-body">
                           <p class="card-text">Lorem ipsum dolor sit amet</p>
                      </div>
                    </div>
                  </div>
                    
                </div>
              </div>


              <!--team-->

              <div class="container">
                <div class="service-info">
                  <div class="service-title">
                    <h2>Meet Our team</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>



                  <div class="container">
                    <div class="row">
                      <div class="col-md-3 mb-3">
                          <div class="card">
                              <div class="card-img">
                                  <img src="team/Frame 42897.png" alt="card-img">
                              </div>
                              <div class="card-body team-body">
                                <h4> Lorem ipsum</h4>
                                <h6>Lorem ipsum</h6>
                                <div>
                                  <p>Lorem ipsum, dolor sit amet consecte </p>
                                  <div class="team-icon">
                                    <span><i class="fab fa-linkedin"></i></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="team/Frame 42897 (1).png" alt="card-img">
                                </div>
                                <div class="card-body team-body">
                                  <h4> Lorem ipsum</h4>
                                  <h6>Lorem ipsum</h6>
                                  <div>
                                    <p>Lorem ipsum, dolor sit amet consecte </p>
                                    <div class="team-icon">
                                      <span><i class="fab fa-linkedin"></i></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-3 mb-3">
                              <div class="card">
                                  <div class="card-img">
                                      <img src="team/Frame 42897 (2).png" alt="card-img">
                                  </div>
                                  <div class="card-body team-body">
                                    <h4> Lorem ipsum</h4>
                                    <h6>Lorem ipsum</h6>
                                    <div>
                                      <p>Lorem ipsum, dolor sit amet consecte </p>
                                      <div class="team-icon">
                                        <span><i class="fab fa-linkedin"></i></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="team/Frame 42897 (3).png
                                        " alt="card-img">
                                    </div>
                                    <div class="card-body team-body">
                                      <h4> Lorem ipsum</h4>
                                      <h6>Lorem ipsum</h6>
                                      <div>
                                        <p>Lorem ipsum, dolor sit amet consecte </p>
                                        <div class="team-icon">
                                          <span><i class="fab fa-linkedin"></i></span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>



                  </div>
                </div>

                  <!--Blog Post-->  

                  <div class="container">
                    <div class="blog-info">
                      <div class="blog-title">
                        <h2>Blog Post</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                      </div>


                      <div class="container">
                        <div class="row">
                          <div class="col-md-4 mb-4">
                              <div class="card">
                                  <div class="card-img">
                                      <img src="blog-pics/Frame 42897 (4).png" alt="card-img">
                                  </div>
                                  <div class="card-body">
                                    <div>
                                      <a href="">Lorem ipsum dolor</a>
                                    </div>
                                    <div>
                                      <h4>Lorem, ipsum dolor</h4>
                                      <div>
                                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </div>
                                    </div>
                                       <p class="card-text">Lorem ipsum dolor sit amet</p>
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="blog-pics/Frame 42897 (5).png" alt="card-img">
                                    </div>
                                    <div class="card-body">
                                      <div>
                                        <a href="">Lorem ipsum dolor</a>
                                      </div>
                                      <div>
                                        <h4>Lorem, ipsum dolor</h4>
                                        <div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                      </div>
                                      </div>
                                         <p class="card-text">Lorem ipsum dolor sit amet</p>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-4 mb-4">
                                  <div class="card">
                                      <div class="card-img">
                                          <img src="blog-pics/Frame 42897 (6).png" alt="card-img">
                                      </div>
                                      <div class="card-body">
                                        <div>
                                          <a href="">Lorem ipsum dolor</a>
                                        </div>
                                        <div>
                                          <h4>Lorem, ipsum dolor</h4>
                                          <div>
                                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                        </div>
                                        </div>
                                           <p class="card-text">Lorem ipsum dolor sit amet</p>
                                      </div>
                                    </div>
                                  </div>
                       

                                </div> 
                              </div>
                              
                              
          <!--testimonial-->

          <div class="testimonial">
            <div class="testimonial-title">
              <h2>Testimonials</h2>
              <span>Follow Webflow System</span>
            </div>
            <div class="testimonial-cards">
              <div class="card">
        <img src="blog-pics/Ellipse 98.png" class="testimonial-card-img" alt="..." width="80" height="80">
        <div class="card-body testmonial-body">
          <h5 class="card-title">Customer name</h5>
          <h6>Company</h6>
          <div class="rating">
            <a href=""><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span></a>
          </div>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
      </div>
              
      <div class="card">
        <img src="blog-pics/Ellipse 98(1).png" class="testimonial-card-img" alt="..." width="80" height="80">
        <div class="card-body testmonial-body">
          <h5 class="card-title">Customer name</h5>
          <h6>Company</h6>
          <div class="rating">
            <a href=""><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span></a>
          </div>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
      </div>

      <div class="card">
        <img src="blog-pics/Ellipse 98 (2).png" class="testimonial-card-img" alt="..." width="80" height="80">
        <div class="card-body testmonial-body">
          <h5 class="card-title">Customer name</h5>
          <h6>Company</h6>
          <div class="rating">
            <a href=""><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span></a>
          </div>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
      </div>
    </div>

    <!--map-->
            <div class="address">
              <div class="address-cards">
                <div class="card">
                 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.11123726638!2d76.9573571!3d8.488564300000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05ab9b1186ff79%3A0x9214037cd5b4c19b!2sZybo%20Tech%20Lab%20-%20Digital%20Marketing%20%7C%20SEO%20%7C%20Web%20Development%20%7C%20Software%20Development!5e0!3m2!1sen!2sin!4v1708401957097!5m2!1sen!2sin" width="
                    592" height="546" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <h2>Contact us</h2>
                      <form id="contactForm" action="" method="post">
                        <div class="form-group">
                            <label for="firstname">First Name:</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your First and last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a description..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
         
        </div>
    </body>
</html>