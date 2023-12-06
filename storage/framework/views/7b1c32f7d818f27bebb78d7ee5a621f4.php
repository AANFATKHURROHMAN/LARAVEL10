<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB AAN</title>
    
</head>
<body>
<div id="app">
<div class="main-wrapper">
    <?php echo $__env->make('shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</div>
</body>
</html><?php /**PATH C:\laragon\www\LARAVEL-aan\resources\views/layouts/main.blade.php ENDPATH**/ ?>