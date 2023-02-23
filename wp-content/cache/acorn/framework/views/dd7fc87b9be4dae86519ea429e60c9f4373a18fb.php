<?php $__env->startSection('content'); ?>   
  <div>
    Nossa home 

    <?php echo e(get_the_title()); ?>

    <?php echo e(the_content()); ?>


    <?php echo $__env->make('sections.teste', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/felipe/Documents/projetos/cura/wordpress/wp-content/themes/cura-amazonica/resources/views/template.blade.php ENDPATH**/ ?>