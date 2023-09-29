<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/furn/product_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:48 GMT -->
<?= $this->include('User_page/includes/head') ?>


<body class="full-wrapper">
  <?= $this->include('User_page/includes/preloader'); ?>
  <?= $this->include('User_page/includes/navbar'); ?>




  <main>

    <div class="slider-area ">
      <div class="slider-active">
        <div class="single-slider hero-overly2  slider-height2 d-flex align-items-center slider-bg2">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-8 col-md-8">
                <div class="hero__caption hero__caption2">
                  <h1 data-animation="fadeInUp" data-delay=".4s">Product details</h1>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Product details</a></li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="product_image_area section-padding40">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-5">
            <div class="product_slider_img">
              <div id="vertical">
                <!-- Display the single product image from the database -->
                <div data-thumb="<?= base_url() ?>assets/img/gallery/<?= ($productDetails['ImageURL']) ?>">
                  <img src="<?= base_url() ?>assets/img/gallery/<?= ($productDetails['ImageURL']) ?>" class="w-100">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3>
                <?= esc($productDetails['ProductName']) ?>
              </h3>
              <h2>₱
                <?= esc($productDetails['Price']) ?>
              </h2>
              <ul class="list">
                <li>
                  <a class="active" href="#">
                    <span>Category</span> :
                    <?= esc($productDetails['CategoryName']) ?>
                  </a>
                </li>
                <li>
                  <a href="#"> <span>Stock</span> :
                    <?= esc($productDetails['StockQuantity']) ?>
                  </a>
                </li>
              </ul>
              <p>
                <?= nl2br(esc($productDetails['Description'])) ?>
              </p>
              <div class="card_area">
                <div class="product_count d-inline-block">
                  <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                  <input class="input-number" type="text" value="1" min="0" max="10">
                  <span class="number-increment"> <i class="ti-plus"></i></span>
                </div>
                <div class="add_to_cart">
                  <a href="<?= site_url("add-to-cart/{$productDetails['ProductID']}") ?>" class="btn">Add
                    to Cart</a>
                  <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                </div>
                <div class="social_icon">
                  <!-- Add your social media links here -->
                  <a href="#" class="fb"><i class="ti-facebook"></i></a>
                  <a href="#" class="tw"><i class="ti-twitter-alt"></i></a>
                  <a href="#" class="li"><i class="ti-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>


    <div class="categories-area section-padding40 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
              <div class="cat-icon">
                <img src="assets/img/icon/services1.svg" alt>
              </div>
              <div class="cat-cap">
                <h5>Fast & Free Delivery</h5>
                <p>Free delivery on all orders</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
              <div class="cat-icon">
                <img src="assets/img/icon/services2.svg" alt>
              </div>
              <div class="cat-cap">
                <h5>Secure Payment</h5>
                <p>Free delivery on all orders</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
              <div class="cat-icon">
                <img src="assets/img/icon/services3.svg" alt>
              </div>
              <div class="cat-cap">
                <h5>Money Back Guarantee</h5>
                <p>Free delivery on all orders</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
              <div class="cat-icon">
                <img src="assets/img/icon/services4.svg" alt>
              </div>
              <div class="cat-cap">
                <h5>Online Support</h5>
                <p>Free delivery on all orders</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <?= $this->include('User_page/includes/foot'); ?>
  <?= $this->include('User_page/includes/back2top'); ?>
  <?= $this->include('User_page/includes/scripts'); ?>
</body>

<!-- Mirrored from preview.colorlib.com/theme/furn/product_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:50 GMT -->

</html>