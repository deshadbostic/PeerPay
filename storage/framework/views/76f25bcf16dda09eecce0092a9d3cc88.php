<?php
use App\Models\User
?>

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
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    <table class="table table-hover">

    <thead>


      <th><center>Your Balance:</center></th>


    </thead>

    <tbody>

        <tr>
 

          <td class="text-success"><center>$<?php echo e(auth()->user()->account); ?></center></td>

          
        </tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="container">
  <div class="row align-items-start">
  <div class="col" style="padding:10px;">
    </div>
  <div class="col" style="padding:10px;">
    </div>
    <div class="col" style="padding:15px;">
    <center> <a href="<?php echo e(url('addpayee')); ?>" style="padding:10px 50px 10px 50px;" class="btn btn-primary" >Add a Payee</center></a>
    </div>
    <div class="col" style="padding:15px;">
    <center> <a href="<?php echo e(url('payees/')); ?>" style="padding:10px 50px 10px 50px;" class="btn btn-primary" >Make a Transfer</center></a>
    </div>
    <div class="col" style="padding:10px;">
    </div>
    <div class="col" style="padding:10px;">
    </div>
  </div>

  <div class="container">
  <div class="row align-items-start">
    <div class="col" style="padding:20px;">
    <center> <a href="<?php echo e(url('history/')); ?>" style="text-align:right;padding:10px 60px 10px 60px;" class="btn btn-primary" >View History</center></a>
    </div>
  </div>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html><?php /**PATH C:\Users\gaski\peerpay\resources\views/dashboard.blade.php ENDPATH**/ ?>