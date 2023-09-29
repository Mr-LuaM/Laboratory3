<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/furn/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:34:06 GMT -->
<?= $this->include('User_page/includes/head') ?>


<body>

  <?= $this->include('User_page/includes/preloader'); ?>


  <main class="login-bg">

    <div class="register-form-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8">
            <div class="register-form text-center">
              <div class="register-heading">
                <span>Sign Up</span>
                <p>Create your account to get full access</p>
              </div>

              <!-- Display validation errors if any -->
              <?php if (isset($validation)): ?>
                <div class="alert alert-danger">
                  <ul>
                    <?php foreach ($validation->getErrors() as $error): ?>
                      <li>
                        <?= esc($error) ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>


              <form action="<?= base_url() ?>registration" method="post">
                <div class="input-box">
                  <div class="single-input-fields">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter full name" value="<?= old('name') ?>"
                      class="form-control" required>
                  </div>
                  <div class="single-input-fields">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter email address" value="<?= old('email') ?>"
                      class="form-control" required>
                  </div>
                  <div class="single-input-fields">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                  </div>
                  <div class="single-input-fields">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control"
                      required>
                  </div>
                </div>
                <div class="register-footer">
                  <p> Already have an account? <a href="<?= base_url() ?>login"> Login</a> here</p>
                  <button type="submit" class="submit-btn3">Sign Up</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>


  </main>

  <?= $this->include('User_page/includes/scripts'); ?>
</body>

<!-- Mirrored from preview.colorlib.com/theme/furn/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 14:34:06 GMT -->

</html>