<footer class="bg-dark text-white mt-auto">
    
    <div class="container py-5">
        <div class="row">
            
            <div class="row justify-content-between">
                
                <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3"><?php echo e(config('app.name', 'DoxTreet')); ?><sup>&trade;</sup></h5>
                    <p class="text-white-50"><?php echo e(__('messages.seo_default_description')); ?></p>
                </div>

                
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3"><?php echo e(__('messages.navigation')); ?></h5>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="<?php echo e(route('home', app()->getLocale())); ?>" class="text-white-50 text-decoration-none footer-link"><?php echo e(__('messages.home')); ?></a></li>
                        <li class="mb-3"><a href="<?php echo e(route('faq', app()->getLocale())); ?>" class="text-white-50 text-decoration-none footer-link"><?php echo e(__('messages.faq')); ?></a></li>
                        <li class="mb-3"><a href="<?php echo e(route('about', app()->getLocale())); ?>" class="text-white-50 text-decoration-none footer-link"><?php echo e(__('messages.about_us')); ?></a></li>
                        <?php if(auth()->guard()->check()): ?>
                            <li class="mb-3"><a href="<?php echo e(route('profile.show', app()->getLocale())); ?>" class="text-white-50 text-decoration-none footer-link"><?php echo e(__('messages.my_profile')); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3"><?php echo e(__('messages.legal')); ?></h5>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="<?php echo e(route('terms', app()->getLocale())); ?>" class="text-white-50 text-decoration-none footer-link"><?php echo e(__('messages.terms_of_service')); ?></a></li>
                        <li class="mb-3"><a href="<?php echo e(route('privacy', app()->getLocale())); ?>" class="text-white-50 text-decoration-none footer-link"><?php echo e(__('messages.privacy_policy')); ?></a></li>
                    </ul>
                </div>
            </div>
        
        <div class="pt-4 mt-4 border-top border-secondary-subtle">
            <p class="text-center text-white-50 small">
                <?php echo e(__('messages.legal_disclaimer')); ?>

            </p>
            <p class="text-center text-white-50 small mt-2">&copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?><sup>&trade;</sup>. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<?php /**PATH /home/1507933.cloudwaysapps.com/nkpgfkrnfq/public_html/resources/views/partials/footer.blade.php ENDPATH**/ ?>