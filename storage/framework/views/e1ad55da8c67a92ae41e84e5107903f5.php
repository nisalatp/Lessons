<?php $__env->startSection('content'); ?>
<h1> This is Products delivered through bootstrap layout </h1>



<form action="\rec-prod" method="POST">
    <?php echo csrf_field(); ?>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='details'></textarea>
  </div>

  <input type="submit" class="btn btn-outline-primary" value="Register Product">

</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\projects\SU\SSP-01\simpel_cruf\test\resources\views/product.blade.php ENDPATH**/ ?>