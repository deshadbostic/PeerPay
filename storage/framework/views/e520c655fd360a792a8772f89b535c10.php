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
            <?php echo e(__('Transaction History')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
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

  <!-- <div class="container">
  <div class="row align-items-start">
    <div class="col" style="padding:20px;">
    <center> <a href="<?php echo e(url('history/')); ?>" style="text-align:right;padding:10px 60px 10px 60px;" class="btn btn-primary" >View History</center></a>
    </div>
  </div> -->


    <table class="table table-hover">

    <thead>

      <th><center>User Name</center></th>

      <th><center>Payee Name</center></th>

      <th><center>Type</center></th>

      <th><center>Amount</center></th>

      <th><center>Date</center></th>

    </thead>

    <tbody>

    

<?php $__currentLoopData = $transfers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transfer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<?php if($transfer->user_id == auth()->user()->id ): ?>
        <tr>


          <td><center><?php echo $users->find(auth()->user()->id)->name ?></center></td>
          
          <?php $payee_name = $transfer->payee_id ?>
          <td><center><?php echo $users->find($payee_name)->name ?></center></td>

          <td><center><?php echo e($transfer->type); ?></center></td>

          <?php if($transfer->type == "recieved"): ?>
          <td class="text-success"><center>+$<?php echo e($transfer->amount); ?></center></td>
          <?php else: ?>
          <td class="text-danger"><center>-$<?php echo e($transfer->amount); ?></center></td>
          <?php endif; ?>

          <td><center><?php echo e($transfer->created_at); ?></center></td>
        

        </tr>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html><?php /**PATH C:\Users\gaski\peerpay\resources\views/history.blade.php ENDPATH**/ ?>