<?php $__env->startSection('title', __('messages.admin_panel') . ' - ' . config('app.name')); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .icon-lg {
            font-size: 2.5rem;
            opacity: 0.3;
        }
        .card-body .card-title {
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php echo $__env->make('admin.partials._sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
            <div class="col-md-9">
                
                <?php if(!Auth::user()->isEmployeeAdmin()): ?>
                    <h1><i class="bi bi-speedometer2"></i> <?php echo e(__('messages.dashboard')); ?></h1>
                    <p><?php echo e(__('messages.admin_welcome')); ?></p>

                    
                    <div class="row mb-4">
                        <div class="col-12">
                            <h4>Статистика Активности</h4>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card bg-info text-white h-100">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="card-title"><?php echo e($onlineUsers ?? 0); ?></div>
                                        <p class="card-text small">Пользователей онлайн</p>
                                    </div>
                                    <i class="bi bi-person-check-fill icon-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card bg-primary text-white h-100">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="card-title"><?php echo e($visitsToday ?? 0); ?></div>
                                        <p class="card-text small">Посещений сегодня</p>
                                        <small>(Уникальных: <?php echo e($uniqueVisitorsToday ?? 0); ?>)</small>
                                    </div>
                                    <i class="bi bi-calendar-day icon-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card bg-warning text-dark h-100">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="card-title"><?php echo e($visitsWeek ?? 0); ?></div>
                                        <p class="card-text small">Посещений за неделю</p>
                                    </div>
                                    <i class="bi bi-calendar-week icon-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card bg-secondary text-white h-100">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="card-title"><?php echo e($visitsMonth ?? 0); ?></div>
                                        <p class="card-text small">Посещений за месяц</p>
                                    </div>
                                    <i class="bi bi-calendar-month icon-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <div class="row">
                        <div class="col-12">
                            <h4>Статистика Контента и Подписок</h4>
                        </div>
                        <div class="col-md-6 col-xl-4 mb-3">
                            <div class="card border-success">
                                <div class="card-header">Подписки "Pro"</div>
                                <div class="card-body text-success d-flex justify-content-between align-items-center">
                                    <div class="card-title"><?php echo e($subscriptionStats['pro'] ?? 0); ?></div>
                                    <i class="bi bi-trophy-fill icon-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mb-3">
                            <div class="card border-primary">
                                <div class="card-header">Подписки "Standard"</div>
                                <div class="card-body text-primary d-flex justify-content-between align-items-center">
                                    <div class="card-title"><?php echo e($subscriptionStats['standard'] ?? 0); ?></div>
                                    <i class="bi bi-award-fill icon-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mb-3">
                            <div class="card border-info">
                                <div class="card-header">Пользователей на "Base"</div>
                                <div class="card-body text-info d-flex justify-content-between align-items-center">
                                    <div class="card-title"><?php echo e($subscriptionStats['base'] ?? ($subscriptionStats[null] ?? 0)); ?></div>
                                    <i class="bi bi-person-fill icon-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title text-dark"><?php echo e($totalTemplates); ?></h5>
                                        <p class="card-text"><?php echo e(__('messages.total_templates')); ?></p>
                                    </div>
                                    <i class="bi bi-file-earmark-text icon-lg text-muted"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title text-dark"><?php echo e($totalCategories); ?></h5>
                                        <p class="card-text"><?php echo e(__('messages.total_categories')); ?></p>
                                    </div>
                                    <i class="bi bi-folder-fill icon-lg text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    
                    <h1><?php echo e(__('messages.admin_panel')); ?></h1>
                    <p>Добро пожаловать в панель управления. Используйте боковое меню для навигации.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/1507933.cloudwaysapps.com/nkpgfkrnfq/public_html/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>