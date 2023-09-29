<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/furn/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:45 GMT -->

<?= include('includes/head.php'); ?>

<body>

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
                  <h1 data-animation="fadeInUp" data-delay=".4s">Products</h1>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Products</a></li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="properties new-arrival fix">
      <?= $this->include('User_page/includes/productList'); ?>

    </section>

    <?= $this->include('User_page/includes/categoriesArea'); ?>
  </main>
  <?= $this->include('User_page/includes/foot'); ?>
  <?= $this->include('User_page/includes/back2top'); ?>
  <?= $this->include('User_page/includes/scripts'); ?>
</body>

<!-- Mirrored from preview.colorlib.com/theme/furn/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:33:45 GMT -->

</html>