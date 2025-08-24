
<?php if((isset($errors) && $errors->any()) || session('success') || session('error') || session('status') || session('error_html')): ?>
    <div class="container my-3">
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session('error')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if(session('error_html')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo session('error_html'); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if(session('status')): ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?php echo e(session('status')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        
        <?php if(isset($errors) && $errors->any()): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading"><?php echo e(__('messages.error_occurred')); ?></h4>
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /home/1507933.cloudwaysapps.com/nkpgfkrnfq/public_html/resources/views/components/alert.blade.php ENDPATH**/ ?>