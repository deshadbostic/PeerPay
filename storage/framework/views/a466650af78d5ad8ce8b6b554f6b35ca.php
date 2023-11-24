<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Add a Payee')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <h2 style="padding-top:50px;padding-bottom:25px;" class="font-semibold text-xl text-gray-800 leading-tight">
          <center> Add Payee using Email Address</center>
        </h2>
 
        



<div class="container">
  <div class="row align-items-start">
  <div class="col" style="padding:5px;">
    </div>
  <div class="col" style="padding:5px;">


  <form style="background-color:white;padding:30px;border-radius:20px;box-shadow:5px 5px 10px 2px #aaaaaa;" action="email">
            <?php echo csrf_field(); ?>
            <div class="form-group" method="POST">
            <label for="email">Payee Email:</label>
            <input type="text" name="email" class="form-control">
            </div>
        <button style="margin-top:30px" type="submit" class="">Submit</button>
    </form>
        
    </div>
    <div class="col" style="padding:5px;">
    </div>


 


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html><?php /**PATH C:\Users\gaski\peerpay\resources\views/addemail.blade.php ENDPATH**/ ?>