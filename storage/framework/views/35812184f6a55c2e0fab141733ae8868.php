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
            <?php echo e(__('Transfer Fund to Payee')); ?>

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
   
<h2 style="padding-top:50px;padding-bottom:25px;" class="font-semibold text-xl text-gray-800 leading-tight">
          <center> Enter The Amount You would like to transfer.</center>
        </h2>

<div class="container">
  <div class="row align-items-start">
  <div class="col" style="padding:5px;">
    </div>
  <div class="col" style="padding:5px;">

<form style="background-color:white;padding:50px;border-radius:20px;box-shadow:5px 5px 10px 2px #aaaaaa;margin-top:30px;" action="/transaction">
<?php echo csrf_field(); ?>
<div class="form-group" method="POST">
<label for="amount">Amount:</label>
<input style="margin-bottom:15px" type="text" name="amount" class="form-control">
<input type="hidden" readonly="" name="payee" value="<?php echo e($users->id); ?>">
</div>
<center><button type="submit" style="padding:5px 30px 5px 30px;margin-right:5px" class="btn btn-dark text-primary">Submit</button>
<a style="padding:5px 30px 5px 30px ;margin-right:5px" href="<?php echo e(url('payees')); ?>" class="btn btn-primary" >Back</a></center>
</form>
        
    </div>
    <div class="col" style="padding:5px;">
    </div>





  <tr>

</tr>
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

</body>
</html><?php /**PATH C:\Users\gaski\peerpay\resources\views/edit.blade.php ENDPATH**/ ?>