
<?php $__env->startPush('styles'); ?>
    <style>
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, .75);
            transition: color .15s ease-in-out;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
        }

        /*
          FIX: Consistent active navigation link style.
          This rule applies a modern underline effect to the active link
          and removes any default background or border, ensuring consistency
          across all pages (Templates, Blog, Pricing, etc.).
        */
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .show > .nav-link {
            color: #fff;
            background-color: transparent !important;
            border-color: transparent !important;
            /* Modern underline effect */
            box-shadow: inset 0 -2px 0 0 var(--primary, #8b5cf6);
        }
    </style>
<?php $__env->stopPush(); ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo e(route('home', ['locale' => app()->getLocale()])); ?>">
                <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['class' => 'me-2','style' => 'width: 32px; height: 32px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'me-2','style' => 'width: 32px; height: 32px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
                <span class="fw-bold"><?php echo e(config('app.name', 'DoxTreet')); ?><sup>&trade;</sup></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home', ['locale' => app()->getLocale()])); ?>#templates"><?php echo e(__('messages.templates')); ?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('posts.*') ? 'active' : ''); ?>" href="<?php echo e(route('posts.index', ['locale' => app()->getLocale()])); ?>">
                            <?php echo e(__('messages.blog')); ?>

                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('pricing') ? 'active' : ''); ?>" href="<?php echo e(route('pricing', ['locale' => app()->getLocale()])); ?>"><?php echo e(__('messages.pricing')); ?></a>
                    </li>
                    
                    <?php echo $__env->make('partials._country_nav', ['active' => request()->routeIs('documents.*', 'bundles.*')], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('sign.index') ? 'active' : ''); ?>" href="<?php echo e(route('sign.index', ['locale' => app()->getLocale()])); ?>">
                            <i class="bi  me-1"></i> <?php echo e(__('messages.sign_document')); ?>

                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-translate"></i>
                            <?php if(app()->getLocale() == 'uk'): ?>
                                UA
                            <?php else: ?>
                                <?php echo e(strtoupper(app()->getLocale())); ?>

                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLang">
                            <?php $__currentLoopData = config('app.available_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale_code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('language.switch', ['language' => $locale_code])); ?>">
                                        <?php if($locale_code == 'uk'): ?>
                                            UA
                                        <?php else: ?>
                                            <?php echo e(strtoupper($locale_code)); ?>

                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>

                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login', app()->getLocale())); ?>"><?php echo e(__('messages.login')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary btn-sm text-white px-3" href="<?php echo e(route('register', app()->getLocale())); ?>"><?php echo e(__('messages.register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-person-circle me-1"></i> <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('profile.show', ['locale' => app()->getLocale()])); ?>">
                                    <i class="bi bi-person-square me-2"></i><?php echo e(__('messages.my_account')); ?>

                                </a>
                                <?php if(Auth::user()->is_admin): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('admin.dashboard', ['locale' => app()->getLocale()])); ?>">
                                        <i class="bi bi-shield-lock me-2"></i><?php echo e(__('messages.admin_panel')); ?>

                                    </a>
                                <?php endif; ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right me-2"></i><?php echo e(__('messages.logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div style="padding-top: 56px;"></div>
<?php /**PATH /home/1507933.cloudwaysapps.com/nkpgfkrnfq/public_html/resources/views/partials/header.blade.php ENDPATH**/ ?>