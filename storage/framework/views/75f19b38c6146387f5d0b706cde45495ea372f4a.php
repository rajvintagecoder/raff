<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name')); ?> </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">       
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">

   

</head>
<?php $route = Route::currentRouteName();?>
<body <?php if($route == 'home'){ ?> class="home" <?php }else { ?>class="height_vh"<?php } ?>>
     <div id="app">
     <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
          <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <script src="<?php echo e(asset('js/app.js')); ?>"></script> 
<script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom-js.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/raaj/raffles/resources/views/layouts/app.blade.php ENDPATH**/ ?>