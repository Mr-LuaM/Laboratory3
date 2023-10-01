<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/furn/product_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:48 GMT -->
<?= $this->include('User_page/includes/head') ?>


<body class="full-wrapper">
  <?= $this->include('User_page/includes/preloader'); ?>
  <?= $this->include('User_page/includes/navbar'); ?>




  <main>

    <?= $this->include('User_page/includes/slider') ?>


    <div class="product_image_area section-padding40">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-5">
            <div class="product_slider_img">
              <div id="vertical">
                <!-- Display the single product image from the database -->
                <div data-thumb="<?= base_url() ?>Userpage/assets/img/gallery/<?= ($productDetails['ImageURL']) ?>">
                  <img src="<?= base_url() ?>Userpage/assets/img/gallery/<?= ($productDetails['ImageURL']) ?>"
                    class="w-100">
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
                  <!-- Add your social media links here pero design lang ngayon-->
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


    <?= $this->include('User_page/includes/categoriesArea'); ?>

  </main>
  <?= $this->include('User_page/includes/foot'); ?>
  <?= $this->include('User_page/includes/back2top'); ?>
  <?= $this->include('User_page/includes/scripts'); ?>
</body>

<!-- Mirrored from preview.colorlib.com/theme/furn/product_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:50 GMT -->

</html>