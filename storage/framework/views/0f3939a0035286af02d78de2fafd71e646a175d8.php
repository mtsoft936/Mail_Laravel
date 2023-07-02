<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Update')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.update.auto')->html();
} elseif ($_instance->childHasBeenRendered('TiS983n')) {
    $componentId = $_instance->getRenderedChildComponentId('TiS983n');
    $componentTag = $_instance->getRenderedChildComponentTagName('TiS983n');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TiS983n');
} else {
    $response = \Livewire\Livewire::mount('backend.update.auto');
    $html = $response->html();
    $_instance->logRenderedChild('TiS983n', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.update.manual')->html();
} elseif ($_instance->childHasBeenRendered('xu7oGAe')) {
    $componentId = $_instance->getRenderedChildComponentId('xu7oGAe');
    $componentTag = $_instance->getRenderedChildComponentTagName('xu7oGAe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xu7oGAe');
} else {
    $response = \Livewire\Livewire::mount('backend.update.manual');
    $html = $response->html();
    $_instance->logRenderedChild('xu7oGAe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /home/tmailcpuser95/public_html/resources/views/backend/update/index.blade.php ENDPATH**/ ?>