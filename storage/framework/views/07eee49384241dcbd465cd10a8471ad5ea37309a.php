<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Settings')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.general')->html();
} elseif ($_instance->childHasBeenRendered('TofvMB3')) {
    $componentId = $_instance->getRenderedChildComponentId('TofvMB3');
    $componentTag = $_instance->getRenderedChildComponentTagName('TofvMB3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TofvMB3');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.general');
    $html = $response->html();
    $_instance->logRenderedChild('TofvMB3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.imap')->html();
} elseif ($_instance->childHasBeenRendered('xRbYEL0')) {
    $componentId = $_instance->getRenderedChildComponentId('xRbYEL0');
    $componentTag = $_instance->getRenderedChildComponentTagName('xRbYEL0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xRbYEL0');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.imap');
    $html = $response->html();
    $_instance->logRenderedChild('xRbYEL0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.configuration')->html();
} elseif ($_instance->childHasBeenRendered('Q71n5PA')) {
    $componentId = $_instance->getRenderedChildComponentId('Q71n5PA');
    $componentTag = $_instance->getRenderedChildComponentTagName('Q71n5PA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Q71n5PA');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.configuration');
    $html = $response->html();
    $_instance->logRenderedChild('Q71n5PA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.ads')->html();
} elseif ($_instance->childHasBeenRendered('aYTOYh6')) {
    $componentId = $_instance->getRenderedChildComponentId('aYTOYh6');
    $componentTag = $_instance->getRenderedChildComponentTagName('aYTOYh6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aYTOYh6');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.ads');
    $html = $response->html();
    $_instance->logRenderedChild('aYTOYh6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.socials')->html();
} elseif ($_instance->childHasBeenRendered('6684nkq')) {
    $componentId = $_instance->getRenderedChildComponentId('6684nkq');
    $componentTag = $_instance->getRenderedChildComponentTagName('6684nkq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6684nkq');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.socials');
    $html = $response->html();
    $_instance->logRenderedChild('6684nkq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.advance')->html();
} elseif ($_instance->childHasBeenRendered('fmH8TpF')) {
    $componentId = $_instance->getRenderedChildComponentId('fmH8TpF');
    $componentTag = $_instance->getRenderedChildComponentTagName('fmH8TpF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fmH8TpF');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.advance');
    $html = $response->html();
    $_instance->logRenderedChild('fmH8TpF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <?php if(config('app.settings.theme') == 'groot'): ?>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.theme')->html();
} elseif ($_instance->childHasBeenRendered('6xCtn5k')) {
    $componentId = $_instance->getRenderedChildComponentId('6xCtn5k');
    $componentTag = $_instance->getRenderedChildComponentTagName('6xCtn5k');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6xCtn5k');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.theme');
    $html = $response->html();
    $_instance->logRenderedChild('6xCtn5k', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/tmailcpuser95/public_html/resources/views/backend/settings/index.blade.php ENDPATH**/ ?>