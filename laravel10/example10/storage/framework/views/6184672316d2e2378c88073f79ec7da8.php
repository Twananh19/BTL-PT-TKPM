<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">

        label{
            display: inline-block;
            width: 200px;
        }

    </style>

    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            

        <div class="container" align="center" style="padding-top: 100px">

            <?php if(session()->has('massage')): ?>

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" >
                    x
                </button>

                <?php echo e(session()->get('message')); ?>

                
            </div>

            <?php endif; ?>

            <form action="<?php echo e(url('upload_doctor')); ?>" method="POST" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>

                <div style="padding: 15px">

                    <label>Doctor Name</label>
                    <input type="text" style="color:black" name="name" placeholder="Ho ten">

                </div>

                <div style="padding: 15px">

                    <label>Phone</label>
                    <input type="number" style="color:black" name="number" placeholder=" so dien thoai">

                </div>

                <div style="padding: 15px">

                    <label>dich vu</label>

                    <select name="dichvu" style="color: black; width: 200px;">

                        <option>--Loai Benh--</option>
                        <option value="Da">Da</option>
                        <option value="Tim">Tim</option>
                        <option value="Mat">Mat</option>
                        <option value="Mui">Mui</option>


                    </select>

                </div>

                <div style="padding: 15px">

                    <label>Room No</label>
                    <input type="text" style="color:black" name="room" placeholder="Phong">

                </div>

                <div style="padding: 15px">

                    <label>Doctor Image</label>
                    <input type="file" name="file">

                </div>

                <div style="padding: 15px">

                    
                    <input type="submit" class="btn btn-success">

                </div>

            </form>

        </div>




    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\laravel10\example10\resources\views/admin/add_doctor.blade.php ENDPATH**/ ?>