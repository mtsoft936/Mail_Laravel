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
} elseif ($_instance->childHasBeenRendered('WROYlFE')) {
    $componentId = $_instance->getRenderedChildComponentId('WROYlFE');
    $componentTag = $_instance->getRenderedChildComponentTagName('WROYlFE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WROYlFE');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.general');
    $html = $response->html();
    $_instance->logRenderedChild('WROYlFE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.engine')->html();
} elseif ($_instance->childHasBeenRendered('CP8mtns')) {
    $componentId = $_instance->getRenderedChildComponentId('CP8mtns');
    $componentTag = $_instance->getRenderedChildComponentTagName('CP8mtns');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CP8mtns');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.engine');
    $html = $response->html();
    $_instance->logRenderedChild('CP8mtns', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div id="imap-settings" class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8" style="<?php echo e(config('app.settings.engine') == 'imap' ? '' : 'display: none'); ?>">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.imap')->html();
} elseif ($_instance->childHasBeenRendered('DfC9HRH')) {
    $componentId = $_instance->getRenderedChildComponentId('DfC9HRH');
    $componentTag = $_instance->getRenderedChildComponentTagName('DfC9HRH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DfC9HRH');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.imap');
    $html = $response->html();
    $_instance->logRenderedChild('DfC9HRH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.configuration')->html();
} elseif ($_instance->childHasBeenRendered('VqdTVT9')) {
    $componentId = $_instance->getRenderedChildComponentId('VqdTVT9');
    $componentTag = $_instance->getRenderedChildComponentTagName('VqdTVT9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VqdTVT9');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.configuration');
    $html = $response->html();
    $_instance->logRenderedChild('VqdTVT9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.ads')->html();
} elseif ($_instance->childHasBeenRendered('hImmSHF')) {
    $componentId = $_instance->getRenderedChildComponentId('hImmSHF');
    $componentTag = $_instance->getRenderedChildComponentTagName('hImmSHF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hImmSHF');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.ads');
    $html = $response->html();
    $_instance->logRenderedChild('hImmSHF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.socials')->html();
} elseif ($_instance->childHasBeenRendered('9LBdqak')) {
    $componentId = $_instance->getRenderedChildComponentId('9LBdqak');
    $componentTag = $_instance->getRenderedChildComponentTagName('9LBdqak');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9LBdqak');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.socials');
    $html = $response->html();
    $_instance->logRenderedChild('9LBdqak', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.advance')->html();
} elseif ($_instance->childHasBeenRendered('4Owge2D')) {
    $componentId = $_instance->getRenderedChildComponentId('4Owge2D');
    $componentTag = $_instance->getRenderedChildComponentTagName('4Owge2D');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4Owge2D');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.advance');
    $html = $response->html();
    $_instance->logRenderedChild('4Owge2D', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <?php if(config('app.settings.theme') == 'groot' || config('app.settings.theme') == 'drax'): ?>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.settings.theme')->html();
} elseif ($_instance->childHasBeenRendered('EnXAJHr')) {
    $componentId = $_instance->getRenderedChildComponentId('EnXAJHr');
    $componentTag = $_instance->getRenderedChildComponentTagName('EnXAJHr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EnXAJHr');
} else {
    $response = \Livewire\Livewire::mount('backend.settings.theme');
    $html = $response->html();
    $_instance->logRenderedChild('EnXAJHr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH /home/admin/domains/tmail.io/public_html/resources/views/backend/settings/index.blade.php ENDPATH**/ ?>