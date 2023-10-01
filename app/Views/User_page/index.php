<!doctype html>
<html class="no-js" lang="zxx">
<?= $this->include('User_page/includes/head') ?>

<body>

  <?= $this->include('User_page/includes/preloader'); ?>
  <?= $this->include('User_page/includes/navbar'); ?>

  <main>
    <?= $this->include('User_page/includes/slider'); ?>


    <section class="properties new-arrival fix">
      <?= $this->include('User_page/includes/productList'); ?>
    </section>


    <div class="visit-tailor-area fix">

      <div class="tailor-offers"></div>

      <div class="tailor-details">
        <h2>Best Furniture<br> manufacturer</h2>
        <p>We care about your needs.</p>
        <p class="pera-bottom">All are made with love.</p>
        <a href="products.php" class="btn">Discover More</a>
      </div>
    </div>



    <div class="instagram-area">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="instra-tittle mb-40">
              <div class="section-tittle">
                <img src="assets/img/gallery/insta.png" alt>
                <h2>Get Inspired with Instagram</h2>
                <P class="mb-35">Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra
                  ornare, eros dolor interdum nulla.</P>
                <a href="product.html" class="border-btn">Discover More</a>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-8">
            <div class="row no-gutters">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="single-instagram">
                  <img src="assets/img/gallery/instra1.png" alt class="w-100">
                  <a href="#"><i class="ti-instagram"></i></a>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="single-instagram">
                  <img src="assets/img/gallery/instra2.png" alt class="w-100">
                  <a href="#"><i class="ti-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>







    <?= $this->include('User_page/includes/categoriesArea'); ?>
  </main>
  <?= $this->include('User_page/includes/foot'); ?>
  <?= $this->include('User_page/includes/back2top'); ?>
  <?= $this->include('User_page/includes/scripts'); ?>
</body>

<!-- Mirrored from preview.colorlib.com/theme/furn/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:28 GMT -->

</html>