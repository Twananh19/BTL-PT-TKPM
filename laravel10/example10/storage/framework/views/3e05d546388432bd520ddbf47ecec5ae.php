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
              <a href="#"><span class="mai-call text-primary"></span> 09876534234</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> one-health-mail@example.com</a>
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
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
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

  <div align="center" style="padding: 70px;">

    <table>

        <tr style="background-color: rgb(110, 196, 231)">
            <th style="padding: 10px; font-size: 20px; color:black">Bệnh nhân</th>
            <th style="padding: 10px; font-size: 20px; color:black">Bác Sĩ</th>
            <th style="padding: 10px; font-size: 20px; color:black">Ngày</th>
            <th style="padding: 10px; font-size: 20px; color:black">Lời nhắn</th>
            <th style="padding: 10px; font-size: 20px; color:black">Trạng thái</th>
            <th style="padding: 10px; font-size: 20px; color:black">Hủy lịch hẹn</th>

        </tr>

        <?php $__currentLoopData = $appoint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoints): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr style="background-color: rgb(233, 233, 233);" align="center">
            <td style="padding: 10px;  color:black"><?php echo e($appoints->name); ?></td>
            <td style="padding: 10px;  color:black"><?php echo e($appoints->doctor); ?></td>
            <td style="padding: 10px;  color:black"><?php echo e($appoints->date); ?></td>
            <td style="padding: 10px;  color:black"><?php echo e($appoints->message); ?></td>
            <td style="padding: 10px;  color:black"><?php echo e($appoints->status); ?></td>
            <td><a class="bt btn-danger" onclick="return confirm('Bạn chắc chắn xóa chưa?')" href="<?php echo e(url('cancel_appoint', $appoints->id)); ?>">Xóa</a></td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table>

  </div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel10\example10\resources\views/user/lich_hen.blade.php ENDPATH**/ ?>