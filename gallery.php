<?php error_reporting(0);require_once('header.php');?>



    <main class="main-root">



        <!-- ========== side box left ========== -->

        <div class="side-bar-full">

            <div class="side-box-left ">

                <div class="side-menu border-left border-right p-relative h-100 d-flex justify-content-center">

                    <div class="page-active">

                        <h2 class="text-uppercase">Contact Us</h2>

                    </div>

                </div>

            </div>

            <div class="side-box-right text-stroke border-right text-uppercase">

                <div class="text-stroke-box">

                    <div class="text-stroke-inner">Contact Us</div>

                </div>

            </div>

        </div>

        <!-- ========== End side box left ========== -->





        <div id="dsn-scrollbar">

            <div class="inner-content">

                <!-- ========== Header ========== -->

                

                <!-- ========== End Header ========== -->



                <div class="wrapper ">







                    <!-- ========== Section Paragraph ========== -->
<script>

$(document).ready(function() {

  $('#buy-form').submit(function(event) {
    event.preventDefault(); 

    var formData = $(this).serialize();

 
    $.ajax({
      type: 'POST',
      url : "https://clubfirst.org/pages/buy",
      data: formData,
      dataType: 'json', 

 success: function (response) {
                 
                    localStorage.setItem('successMessage', response.message);

                 
                    location.reload(true);
                },
                error: function (xhr, status, error) {
        console.log("Error submitting the form:", error);
        alert("Error submitting the form!");
      }
    });
  });
});
</script>
<head>
<style>
* {
  box-sizing: border-box;
}

.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
}

.flex-item-left {
  background-color: #f1f1f1;
  padding: 10px;
  flex: 50%;
}

.flex-item-right {
  background-color: dodgerblue;
  padding: 10px;
  flex: 50%;
}

/* Responsive layout - makes a one column-layout instead of two-column layout */
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }
}
</style>
</head>
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-12 col-md-12 col-sm-12 mb-4 col-xs-12 mb-5 pt-5">
                <h1 class="section-title">
                    Photo Gallery
                </h1>
                <hr class='stylish-line'>
            </div>
        </div>
    </div>
</div>
<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3 zoom">
  <img src='https://clubfirst.org/admin/assets/images/products/b440bf82e0ed213059ab928f8652bb93.png' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3 zoom">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/4784e111300a3cca2246299c34e2b432.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/8f43a0faee9034401faac1895cbfe07e.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/2f16c29481df116eccc2cd5204c9172e.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
  <img src='https://clubfirst.org/admin/assets/images/products/2f16c29481df116eccc2cd5204c9172e.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/465777e2a477be1fe0da8acb24603957.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/408d27e91034a81fba224bf1cab692cb.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/f2661d996aeeddd36a9390222ac787f1.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
  <img src='https://clubfirst.org/admin/assets/images/products/adf8727d90eeb9439ec29b778ee3358e.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/7a789d197f1b8e24cca8473257332395.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/f48bc38834ec597f8834a2b064154edf.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/d0b8009af7c497ccbf54161e3f516994.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
  <img src='https://clubfirst.org/admin/assets/images/products/3896a5f23be5451ad4c760f9411f27ad.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/811c6384f2a071d4dc514fd9dbb6eb63.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/cc6d69299222e362bf9f21a6e966c2b8.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/8eb816cb489902795036a79c0779ba04.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>

<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
  <img src='https://clubfirst.org/admin/assets/images/products/b82731bd611474118007d29a4a5124fc.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/3366a55d5e9bb25b0be13c63cc387ee9.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/3366a55d5e9bb25b0be13c63cc387ee9.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/09919cc1f869254dd51e62252e972ee9.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>`
<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
  <img src='https://clubfirst.org/admin/assets/images/products/b82731bd611474118007d29a4a5124fc.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/3366a55d5e9bb25b0be13c63cc387ee9.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/f16e80e518ce4fb9ead8cfffc76a8e29.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/4d0bbd9db8ea1458cea26a55d15cb56e.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
      <img src='https://clubfirst.org/admin/assets/images/products/3294f6ac153967997ae590e3ea0a7361.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/ef350fb698ee4bdf55711d7eb85a8e33.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/a8bf1a38e99ee63c8ec4e7db227b10d1.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="gallery col-md-3">
    <div class="image-container"> <img src='https://clubfirst.org/admin/assets/images/products/4abc3ef8548b381cab92877bb6facebf.jpg' alt="Gallery Image" width="600" height="400"></div> 
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
  <img src='https://clubfirst.org/admin/assets/images/products/69c17153f5fb61676e226061899ad119.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/c980cb7e08cf66afe1d111ac39eabe1e.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/b58b1e86f867914c59c6c3bf2318bcc7.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/a57afeba6a55085be2c2ce15e203d034.JPG' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>

<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
      <img src='https://clubfirst.org/admin/assets/images/products/07c6da5346f3b5043dac64a1af0ffe32.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/0df9943dbea3ce8df609415136a5f5d7.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/7394def52b0fea0156b800544e1f2f4c.JPG' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/f7d80ea2176c02a6afd3a393f21b2bdd.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
  <div class="gallery col-md-3">
      <img src='https://clubfirst.org/admin/assets/images/products/139bf3e2980e6b936171554f55a31226.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/b23c6cede9638bdff0c739bfd40fe6ab.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/a57afeba6a55085be2c2ce15e203d034.JPG' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/e74946b4735b193bccb05a0320187213.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
<div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/a57afeba6a55085be2c2ce15e203d034.JPG' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/ce2584e301595015fb4d3c61f510f96f.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/3ada23a8da370bd51df42d5778053996.png' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/f0db3a9d91a6380f07a8cd3263485c2d.png' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
<div class="gallery col-md-3">
      <img src='img/gallery/444.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='img/gallery/1111.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='img/gallery/2222.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="gallery col-md-3">
      <img src='img/gallery/45345.jpg' alt="Gallery Image" width="600" height="400">
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
<div class="gallery col-md-3">
      <img src='img/gallery/5555 (2).jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='img/gallery/5555.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='img/gallery/23232.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="gallery col-md-3">
      <img src='img/gallery/4353.jpg' alt="Gallery Image" width="600" height="400">
  </div>
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
<div class="gallery col-md-3">
      <img src='https://clubfirst.org/admin/assets/images/products/4abc3ef8548b381cab92877bb6facebf.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/3d07c0df4bbff32ec0f87a7f8eb647ef.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-3">
  <div class='image-container'><img src='https://clubfirst.org/admin/assets/images/products/275db59eb7916f3f3d65731faa12d555.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="gallery col-md-3">
      <img src='https://clubfirst.org/admin/assets/images/products/2b89aed06788befd3389d03c64b0497a.jpg' alt="Gallery Image" width="600" height="400">
  </div>  
</div>
</div>
<br>
<div class='main-container'>
<div class="responsive row">
<div class="gallery col-md-4">
      <img src='img/gallery/tank.jpg' alt="Gallery Image" width="600" height="400">
  </div>
  <div class="col-md-4">
  <div class='image-container'><img src='img/gallery/robo1.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
  <div class="col-md-4">
  <div class='image-container'><img src='img/gallery/xena.jpg' class='galary-img' alt='Gallery Image' onclick='zoomImage(this)'></div>
  </div>
</div>
</div>



                    <!-- ========== End Section Paragraph ========== -->
                </div>
            </div>
        </div>
    </main>



    <!-- ========== Cursor Page ========== -->

    <div class="cursor">



        <div class="cursor-helper">

            <span class="cursor-drag">Drag</span>

            <span class="cursor-view">View</span>

            <span class="cursor-open"><i class="fas fa-plus"></i></span>

            <span class="cursor-close">Close</span>

            <span class="cursor-play">play</span>

            <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>

            <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>

        </div>



    </div>

    <!-- ========== End Cursor Page ========== -->





    <!-- ========== social network ========== -->

       <div class="social-network">

        <ul class="socials d-flex  flex-column ">

            <li>

                <a href="https://www.youtube.com/@CLUBFIRST" target="https://www.youtube.com/@CLUBFIRST">

                    <i class="fab fa-youtube"></i>

                    <span>Yt</span>

                </a>

            </li>

            <li>

                <a href="https://twitter.com/ClubFirst7" target="https://twitter.com/ClubFirst7">

                    <i class="fab fa-twitter"></i>

                    <span>Tw</span>

                </a>

            </li>

            <li>

                <a href="https://www.linkedin.com/company/club-first/?originalSubdomain=in" target="https://www.linkedin.com/company/club-first/?originalSubdomain=in">

                    <i class="fab fa-linkedin"></i>

                    <span>in</span>

                </a>

            </li>

            <li>

                <a href="https://www.facebook.com/ClubFirstGroup/" target="https://www.facebook.com/ClubFirstGroup/">

                    <i class="fab fa-facebook-f"></i>

                    <span>Fb</span>

                </a>

            </li>

        </ul>

    </div>

    <!-- ========== End social network ========== -->



    <!-- ========== Scroll Right Page To Top Page ========== -->

    <div class="scroll-to-top">

        <img src="assets/img/scroll_top.svg" alt="">

        <div class="box-number v-middle">

            <span>0%</span>

        </div>

    </div>

    <!-- ========== End Scroll Right Page To Top Page ========== -->



    <!-- ========== Light & Dark Options ========== -->

    <div class="day-night">

        <div class="night active" data-dsn-theme="dark">

            <svg width="48" height="48" viewBox="0 0 48 48">

                <rect x="12.3" y="23.5" width="2.6" height="1"></rect>

                <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1"

                    height="2.6"></rect>

                <rect x="23.5" y="12.3" width="1" height="2.6"></rect>

                <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6"

                    height="1"></rect>

                <rect x="33.1" y="23.5" width="2.6" height="1"></rect>

                <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1"

                    height="2.6"></rect>

                <rect x="23.5" y="33.1" width="1" height="2.6"></rect>

                <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6"

                    height="1"></rect>

                <path

                    d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">

                </path>

            </svg>

        </div>

        <div class="moon" data-dsn-theme="night">

            <svg width="48" height="48" viewBox="0 0 48 48">

                <path

                    d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">

                </path>

            </svg>

        </div>

    </div>

    <!-- ========== End Light & Dark Options ========== -->





    <!-- ========== paginate-right-page ========== -->

    <div class="dsn-paginate-right-page"></div>



    <!-- Optional JavaScript -->

    <script src="assets/js/jquery-3.1.1.min.js"></script>

    <script src="assets/js/plugins.min.js"></script>

    <script src="assets/js/dsn-grid.min.js"></script>

    <script src="assets/js/custom.js"></script>



</body>



</html>