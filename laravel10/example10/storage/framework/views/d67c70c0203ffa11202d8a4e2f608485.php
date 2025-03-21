<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Các Bác Sĩ</h1>



      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">


        <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="item">
            <div class="card-doctor">
              <div class="header">
                <img height="300px" src="doctorimage/<?php echo e($doctors->image); ?>" alt="">
                <div class="meta">
                  <a href="#"><span class="mai-call"></span></a>
                  <a href="#"><span class="mai-logo-whatsapp"></span></a>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0"><?php echo e($doctors->name); ?></p>
                <span class="text-sm text-grey"><?php echo e($doctors->dichvu); ?></span>
              </div>
            </div>
          </div>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        


        
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\laravel10\example10\resources\views/user/doctor.blade.php ENDPATH**/ ?>