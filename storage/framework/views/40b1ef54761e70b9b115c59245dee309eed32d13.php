<div>
    <div class="grid grid-cols-6 gap-6">
        <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-span-2 shadow-md rounded-lg bg-white p-3">
                <img class="rounded-lg max-w-full" src="<?php echo e(asset('themes/' . $theme . '/screenshot.jpg')); ?>" alt=""
                    onerror="this.src='<?php echo e(asset('images/nopreview.jpg')); ?>'">
                <div class="rounded-b-lg pt-3 flex justify-between">
                    <div class="flex items-center">
                        <span class="pr-2"><?php echo e(ucfirst($theme)); ?></span>
                        <?php if($current === $theme): ?>
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-green-600 bg-green-200 uppercase last:mr-0 mr-1">
                                <?php echo e(__('Current')); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="flex items-center">
                        <?php if($current !== $theme): ?>
                            <span wire:click="set('<?php echo e($theme); ?>')"
                                class="text-xs cursor-pointer font-semibold inline-block py-1 px-3 rounded-full text-blue-600 bg-blue-200 last:mr-0 mr-1">
                                <?php echo e(__('Set as Current')); ?>

                            </span>
                            <?php if($theme !== 'default'): ?>
                                <span onclick="confirm('Are you sure? You cannnot reverse this action!') || event.stopImmediatePropagation()" wire:click="delete('<?php echo e($theme); ?>')"
                                    class="text-xs cursor-pointer font-semibold inline-block py-1 px-3 rounded-full text-red-600 bg-red-200 last:mr-0 mr-1">
                                    <i class="fas fa-trash-alt"></i>
                                </span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if(!env('APP_DEMO', false)): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.form-section','data' => ['class' => 'pt-20','submit' => 'upload']]); ?>
<?php $component->withName('jet-form-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'pt-20','submit' => 'upload']); ?>
         <?php $__env->slot('title', null, []); ?> 
            <?php echo e(__('Add New Theme')); ?>

         <?php $__env->endSlot(); ?>

         <?php $__env->slot('description', null, []); ?> 
            <?php echo e(__('You can add new Theme for TMail here.')); ?>

         <?php $__env->endSlot(); ?>

         <?php $__env->slot('form', null, []); ?> 
            <?php if($error): ?>
                <div class="col-span-6">
                    <div class="text-white px-6 py-4 border-0 rounded-lg relative bg-red-500">
                        <span class="inline-block align-middle mr-8">
                            <b class="capitalize"><?php echo e(__('Error')); ?>!</b> <?php echo $error; ?>

                        </span>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($success): ?>
                <div class="col-span-6">
                    <div class="text-white px-6 py-4 border-0 rounded-lg relative bg-green-500">
                        <span class="inline-block align-middle mr-8">
                            <b class="capitalize"><?php echo e(__('Success')); ?>!</b> <?php echo $success; ?>

                        </span>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-span-6 sm:col-span-4">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'new','value' => ''.e(__('Upload Zip')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'new','value' => ''.e(__('Upload Zip')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <input id="new" type="file" class="mt-2" wire:model="new" />
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'new','class' => 'mt-2']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'new','class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('actions', null, []); ?> 
            <div wire:loading.remove>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => []]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(__('Upload')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div wire:loading>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['disabled' => true]]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['disabled' => true]); ?>
                    <?php echo e(__('Wait')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /home/tmailcpuser95/public_html/resources/views/backend/themes/theme.blade.php ENDPATH**/ ?>