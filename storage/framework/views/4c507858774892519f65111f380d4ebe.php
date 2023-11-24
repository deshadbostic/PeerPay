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
            <?php echo e(__('Transfer Funds to a Payee')); ?>

        </h2>
     <?php $__env->endSlot(); ?>


<table class="table table-hover">

    <thead>

      <th><center>Name</center></th>

      <th><center>Email</center></th>

      <th><center>Select</center></th>

    </thead>

    <tbody>

<?php $__currentLoopData = $payees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <?php if(auth()->user()->id == $payee->user_id ): ?>


        <tr>

        <td><center><?php echo e($users->find($payee->payee_id)->name); ?></center> </td>

        <td><center><?php echo e($users->find($payee->payee_id)->email); ?></center> </td>

          <td>
          <center> <a href="<?php echo e(url('payees/'.$payee->payee_id)); ?>" class="btn btn-primary" >Select</center></a>
          </td>

        </tr>
        


<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</tbody>
</table>






 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html><?php /**PATH C:\Users\gaski\peerpay\resources\views/index.blade.php ENDPATH**/ ?>