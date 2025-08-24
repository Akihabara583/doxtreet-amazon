<?php if(isset($countriesForNav) && $countriesForNav->isNotEmpty()): ?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCountry" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo e(__('messages.docs_by_country')); ?>

        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCountry">
            <?php $__currentLoopData = $countriesForNav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a class="dropdown-item" href="<?php echo e(route('documents.by_country', ['locale' => app()->getLocale(), 'countryCode' => $country->code])); ?>">
                        
                        
                        <?php echo e($country->name); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
<?php endif; ?>
<?php /**PATH /home/1507933.cloudwaysapps.com/nkpgfkrnfq/public_html/resources/views/partials/_country_nav.blade.php ENDPATH**/ ?>