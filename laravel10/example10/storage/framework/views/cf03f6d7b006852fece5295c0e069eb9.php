<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> 0987653435</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> onl-heath-mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('home')); ?>"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(url('home')); ?>">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Tìm hiểu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Bác sĩ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Tin tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Liên lạc</a>
            </li>

            <?php if(Route::has('login')): ?>

            <?php if(auth()->guard()->check()): ?>

            <li class="nav-item">
                <a class="nav-link" style="background-color:aquamarine" href="<?php echo e(url('lichhen')); ?>">Lịch Hẹn</a>
              </li>

                <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
                
            <?php else: ?> 
            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('login')); ?>">Đăng nhập</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('register')); ?>">Đăng ký</a>
              </li>

            <?php endif; ?>

            <?php endif; ?>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <?php if(session()->has('massage')): ?>

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" >
                    x
                </button>

                <?php echo e(session()->get('message')); ?>

                
            </div>

            <?php endif; ?>


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Mang lại cho bạn cuộc sống đẹp</span>
        <h1 class="display-4">Sức khỏe tốt</h1>
        <a href="#" class="btn btn-primary">Đặt lịch khám ngay</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Nhắn tin</span> với bác sĩ </p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health bảo vệ</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Nhà thuốc</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Chào mừng bạn đến với One-Health<br> Trung tâm</h1>
            <p class="text-grey mb-4">Chúng tôi rất vui mừng khi được đồng hành cùng bạn trong hành trình chăm sóc sức khỏe. Việc quan tâm đến sức khỏe không chỉ giúp bạn có một cuộc sống chất lượng hơn mà còn mang lại sự an tâm cho những người thân yêu. Với hệ thống khám sức khỏe của chúng tôi, bạn có thể dễ dàng theo dõi tình trạng sức khỏe, đặt lịch khám nhanh chóng và nhận được sự tư vấn tận tình từ các chuyên gia y tế hàng đầu.</p>
            <a href="about.html" class="btn btn-primary">Tìm hiểu thêm</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <?php echo $__env->make('user.doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('user.latest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('user.appointment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Công ty</h5>
          <ul class="footer-menu">
            <li><a href="#">về chúng tôi</a></li>
            <li><a href="#">Sự nghiệp</a></li>
            <li><a href="#">Sự nghiệp</a></li>
            <li><a href="#">Bảo vệ</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Thêm</h5>
          <ul class="footer-menu">
            <li><a href="#">Điều khoản & Điều kiện</a></li>
            <li><a href="#">Riêng tư</a></li>
            <li><a href="#">Quảng cáo</a></li>
            <li><a href="#">Tham gia bác sĩ</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Đối tác</h5>
          <ul class="footer-menu">
            <li><a href="#">One-thích hợp </a></li>
            <li><a href="#">One-thuốc</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Liên lạc</h5>
          <p class="footer-link mt-2">351 Hà Đông - Hà Nội</p>
          <a href="#" class="footer-link">0987656625</a>
          <a href="#" class="footer-link">one-health@temporary.net</a>

          <h5 class="mt-3">Mạng xã hội</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">Mã ID</a>. Tất cả được bảo lưu</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html><?php /**PATH C:\xampp\htdocs\BTL_PM\BTL-PT-TKPM\laravel10\example10\resources\views/user/home.blade.php ENDPATH**/ ?>