<div class="list-group">
    
    <?php if(!Auth::user()->isEmployeeAdmin()): ?>
        <a href="<?php echo e(route('admin.dashboard', app()->getLocale())); ?>" class="list-group-item list-group-item-action">
            <i class="bi bi-speedometer"></i> Панель управления
        </a>
    <?php endif; ?>

    
    <a href="<?php echo e(route('admin.categories.index', app()->getLocale())); ?>" class="list-group-item list-group-item-action">
        <i class="bi bi-tags"></i> Категории
    </a>

    <a href="<?php echo e(route('admin.templates.index', app()->getLocale())); ?>" class="list-group-item list-group-item-action">
        <i class="bi bi-file-earmark-code"></i> Шаблоны
    </a>

    <a href="<?php echo e(route('admin.posts.index', app()->getLocale())); ?>" class="list-group-item list-group-item-action">
        <i class="bi bi-newspaper"></i> Статьи
    </a>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->routeIs('admin.bundles.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.bundles.index')); ?>">
            <i class="bi bi-collection-fill"></i> <?php echo e(__('Пакеты документов')); ?>

        </a>
    </li>
    
    <?php if(!Auth::user()->isEmployeeAdmin()): ?>
        <a href="<?php echo e(route('admin.users.index', app()->getLocale())); ?>" class="list-group-item list-group-item-action">
            <i class="bi bi-people"></i> Пользователи
        </a>
    <?php endif; ?>
</div>
<?php /**PATH /home/1507933.cloudwaysapps.com/nkpgfkrnfq/public_html/resources/views/admin/partials/_sidebar.blade.php ENDPATH**/ ?>