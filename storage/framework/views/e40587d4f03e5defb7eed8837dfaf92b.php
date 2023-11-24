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
          <center> Please Select an Payee Adding Option.</center>
        </h2>

<table style="margin-top:20px;" class="table table-hover">

    <thead>

    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
      <th>Add Payee using Email.</th>

      <th> <a href="<?php echo e(url('addemail')); ?>" class="btn btn-primary" >Select</a></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </thead>

    <thead>


    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
      <th>Add Payee using Account number.</th>

      <th> <a href="<?php echo e(url('addaccount')); ?>" class="btn btn-primary" >Select</a></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>


    </thead>

</table>

 




 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html><?php /**PATH C:\Users\gaski\peerpay\resources\views/addpayee.blade.php ENDPATH**/ ?>