<!-- <?php 
    echo get_template_directory_uri(); 
    echo '<br>',
    bloginfo('template_directory');
?> -->

    <!-- header section strats -->
    
<?php
   get_header();
  ?>

    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container-fluid">
        <div class="row slider-row">
          <div class="col-lg-3 offset-lg-1">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="detail-box">
                    <h1>
                      Pic <br />
                      Studio
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content of a page
                    </p>
                    <div>
                      <a href="#">
                        Request A Quote
                      </a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="detail-box">
                    <h1>
                      Pic <br />
                      Studio
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content of a page
                    </p>
                    <div>
                      <a href="#">
                        Request A Quote
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel_control-box">
                <div class="carousel_btn-container">
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active li_one">01</li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="li_two">02</li>
                  <li class="ol_design"></li>
                </ol>
              </div>
            </div>
          </div>
          <div class="col-lg-8 px-0">
            <div class="img-box">
              <img src="<?php  bloginfo('template_directory');
?>/images/slider-img.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Studio
              </h2>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of a page
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="img-box">
      <div class="play_btn">
        <a href="#">
          <img src="<?php  bloginfo('template_directory');
?>/images/play.png" alt="" />
        </a>
      </div>
      <img src="<?php  bloginfo('template_directory');
?>/images/about-img.png" class="about-img" alt="" />
    </div>
  </section>

  <!-- end about section -->

  <!-- gallery section -->
  <section class="gallery_section layout_padding-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ml-auto">
          <div class="heading_container">
            <h2>
              Our Gallery
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page
            </p>
            <a href="">
              See More
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="gallery_container">
      <div class="gallery_bg">
        <img src="<?php  bloginfo('template_directory');
?>/images/gallery-bg.png" alt="" />
      </div>
      <div class="container">
        <div class="gallery_box">
          <div class="box b1">
            <div class="img-box">
              <img src="<?php  bloginfo('template_directory');
?>/images/gallery-1.jpg" alt="" />
              <h5>
                photography
              </h5>
            </div>
          </div>
          <div class="box b2">
            <div class="img-box">
              <img src="<?php  bloginfo('template_directory');
?>/images/gallery-2.jpg" alt="" />
              <h5>
                photography
              </h5>
            </div>
            <div class="img-box">
              <img src="<?php  bloginfo('template_directory');
?>/images/gallery-3.jpg" alt="" />
              <h5>
                photography
              </h5>
            </div>
          </div>
          <div class="box b3">
            <div class="img-box">
              <img src="<?php  bloginfo('template_directory');
?>/images/gallery-4.jpg" alt="" />
              <h5>
                photography
              </h5>
            </div>
            <div class="img-box">
              <img src="<?php  bloginfo('template_directory');
?>/images/gallery-5.jpg" alt="" />
              <h5>
                photography
              </h5>
            </div>
          </div>
          <div class="box b4">
            <div class="img-box">
              <img src="<?php  bloginfo('template_directory');
?>/images/gallery-6.jpg" alt="" />
              <h5>
                photography
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end gallery section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Letest Blog
              </h2>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of a page
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog_container">
      <div class="blog_bg">
        <img src="<?php  bloginfo('template_directory');
?>/images/gallery-bg.png" alt="" />
      </div>
      <div class="container">
        <div class="blog_box">
          <div class="row">
            <div class="col-md-6">
              <div class="box b1">
                <div class="img-box">
                  <img src="<?php  bloginfo('template_directory');
?>/images/blog1.jpg" alt="" />
                </div>
                <div class="blog-detail">
                  <div class="blog_title">
                    <h5>
                      Best photography
                    </h5>
                    <div class="blog_post">
                      <h6>
                        Post By: Pic studio
                      </h6>
                      <h6>
                        16-01-2020
                      </h6>
                    </div>
                  </div>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box b2">
                <div class="img-box">
                  <img src="<?php  bloginfo('template_directory');
?>/images/blog2.jpg" alt="" />
                </div>
                <div class="blog-detail">
                  <div class="blog_title">
                    <h5>
                      Photography
                    </h5>
                    <div class="blog_post">
                      <h6>
                        Post By: Pic studio
                      </h6>
                      <h6>
                        16-01-2020
                      </h6>
                    </div>
                  </div>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ml-auto">
          <div class="heading_container">
            <h2>
              What Says Customer
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="client_container">
      <div class="client_bg">
        <img src="<?php  bloginfo('template_directory');
?>/images/gallery-bg.png" alt="" />
      </div>
      <div class="container">
        <div class="client_box">
          <div class="row">
            <div class="col-lg-6">
              <div class="box b1">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="client_content-box layout_padding">
                        <div class="img-box">
                          <img src="<?php  bloginfo('template_directory');
?>/images/client.png" alt="" />
                        </div>
                        <div class="detail-box">
                          <h4>
                            Plio Dorak
                          </h4>
                          <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                          </p>
                          <img src="<?php  bloginfo('template_directory');
?>/images/quote.png" alt="" />
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="client_content-box layout_padding">
                        <div class="img-box">
                          <img src="<?php  bloginfo('template_directory');
?>/images/client.png" alt="" />
                        </div>
                        <div class="detail-box">
                          <h4>
                            Plio Dorak
                          </h4>
                          <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                          </p>
                          <img src="<?php  bloginfo('template_directory');
?>/images/quote.png" alt="" />
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="client_content-box layout_padding">
                        <div class="img-box">
                          <img src="<?php  bloginfo('template_directory');
?>/images/client.png" alt="" />
                        </div>
                        <div class="detail-box">
                          <h4>
                            Plio Dorak
                          </h4>
                          <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                          </p>
                          <img src="<?php  bloginfo('template_directory');
?>/images/quote.png" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box b2">
                <div class="camera_img-box">
                  <img src="<?php  bloginfo('template_directory');
?>/images/camera.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="heading_container">
          <h2>
            Contact Us
          </h2>
        </div>
        <div class="info_main">
          <div class="row">
            <div class="col-md-4 col-lg-3">
              <div class="info_contact ">
                <a href="#" class="link-box">
                  <div class="img-box">
                    <img src="<?php  bloginfo('template_directory');
?>/images/location.png" alt="" />
                  </div>
                  <div class="detail-box">
                    <h6>
                      Location
                    </h6>
                  </div>
                </a>
                <a href="#" class="link-box">
                  <div class="img-box">
                    <img src="<?php  bloginfo('template_directory');
?>/images/mail.png" alt="" />
                  </div>
                  <div class="detail-box">
                    <h6>
                      demo@gmail.com
                    </h6>
                  </div>
                </a>
                <a href="#" class="link-box">
                  <div class="img-box">
                    <img src="<?php  bloginfo('template_directory');
?>/images/call.png" alt="" />
                  </div>
                  <div class="detail-box">
                    <h6>
                      Call +01 1234567890
                    </h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-lg-3">
              <div class="info_link-box">
                <ul>
                  <li class=" ">
                    <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="about.html">About </a>
                  </li>
                  <li class="">
                    <a class="" href="gallery.html">Gallery </a>
                  </li>
                  <li class="">
                    <a class="" href="blog.html">Blog </a>
                  </li>
                  <li class="">
                    <a class="" href="testimonial.html">Testimonial </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="social_box">
                <a href="#">
                  <img src="<?php  bloginfo('template_directory');
?>/images/facebook.png" alt="" />
                </a>
                <a href="#">
                  <img src="<?php  bloginfo('template_directory');
?>/images/twitter.png" alt="" />
                </a>
                <a href="#">
                  <img src="<?php  bloginfo('template_directory');
?>/images/linkedin.png" alt="" />
                </a>
                <a href="#">
                  <img src="<?php  bloginfo('template_directory');
?>/images/instagram.png" alt="" />
                </a>
                <a href="#">
                  <img src="<?php  bloginfo('template_directory');
?>/images/youtube.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  

 <?php
 get_footer();
 ?>  