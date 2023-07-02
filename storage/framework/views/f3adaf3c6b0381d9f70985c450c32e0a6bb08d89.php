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
} elseif ($_instance->childHasBeenRendered('kr2I5rR')) {
    $componentId = $_instance->getRenderedChildComponentId('kr2I5rR');
    $componentTag = $_instance->getRenderedChildComponentTagName('kr2I5rR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kr2I5rR');
} else {
    $response = \Livewire\Livewire::mount('backend.update.auto');
    $html = $response->html();
    $_instance->logRenderedChild('kr2I5rR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.update.manual')->html();
} elseif ($_instance->childHasBeenRendered('TB2MaYI')) {
    $componentId = $_instance->getRenderedChildComponentId('TB2MaYI');
    $componentTag = $_instance->getRenderedChildComponentTagName('TB2MaYI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TB2MaYI');
} else {
    $response = \Livewire\Livewire::mount('backend.update.manual');
    $html = $response->html();
    $_instance->logRenderedChild('TB2MaYI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php endif; ?><?php /**PATH /home/admin/domains/tmail.io/public_html/resources/views/backend/update/index.blade.php ENDPATH**/ ?>