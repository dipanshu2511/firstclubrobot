<?php 
error_reporting(0);
require_once('header.php');
require_once __DIR__ . '/cpanel/db.php';

?>



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




        <!-- ===Product=== -->
        <div class="container">
          <div class="row">
            <div class="text-center col-lg-12 col-md-12 col-sm-12 mb-2 col-xs-12 py-5">
              <h1 class="section-title">
                Our Products
              </h1>
              <hr class='stylish-line'>
            </div>
          </div>
          <div class="row main-center-section mb-5" id="pic">

<?php 

$products = $conn->query("SELECT * FROM products ORDER BY id DESC");

while ($row = $products->fetch_assoc()): 
$filepath = '/first_club_robot/img/products/' . $row['image'];
?>
<div class="col-12 col-md-4 col-sm-6 mb-3 main-section1" data-aos="zoom-in">
  <div class="card mb-4 box-shadow stylish-card">

    <a class="w-100 p-relative"
       href="product-details.php?id=<?= $row['id'] ?>">

      <img class="card-img-top"
           src="<?= $filepath ?>"
           alt="<?= htmlspecialchars($row['name']) ?>"
           style="width:100%;display:block; ">

      <hr class="stylish-line-product">

      <div class="card-body">
        <h5 class="card-title">
          <?= htmlspecialchars($row['name']) ?>
        </h5>
      </div>

    </a>

  </div>
</div>

<?php endwhile; ?>
           
          </div>
        </div>
        <!-- ========== End Section Paragraph 430+ ========== -->





















      </div>





    </div>



  </div>









</main>



<!-- ========== Cursor Page ========== -->


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

      <a href="https://www.linkedin.com/company/club-first/?originalSubdomain=in"
        target="https://www.linkedin.com/company/club-first/?originalSubdomain=in">

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

      <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1" height="2.6">
      </rect>

      <rect x="23.5" y="12.3" width="1" height="2.6"></rect>

      <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6" height="1">
      </rect>

      <rect x="33.1" y="23.5" width="2.6" height="1"></rect>

      <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1" height="2.6">
      </rect>

      <rect x="23.5" y="33.1" width="1" height="2.6"></rect>

      <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6" height="1">
      </rect>

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