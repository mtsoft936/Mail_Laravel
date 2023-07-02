<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.form-section','data' => ['submit' => 'apply']]); ?>
<?php $component->withName('jet-form-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['submit' => 'apply']); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e(__('OTA Updates')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('description', null, []); ?> 
        <?php echo e(__('You can apply OTA Updates here if available.')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('form', null, []); ?> 
        <div class="col-span-6">
            <div class="w-full py-3 px-4 overflow-hidden rounded-md flex items-center border <?php echo e($status['available'] ? 'bg-blue-50' : 'bg-gray-50'); ?> <?php echo e($status['available'] ? 'border-blue-500' : 'border-gray-500'); ?>">
                <div class="<?php echo e($status['available'] ? 'text-blue-500' : 'text-gray-500'); ?> w-10"> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </div>
                <div class="ml-4 flex-1">
                    <div class="text-lg text-gray-600 font-semibold"><?php echo e(__($status['available'] ? 'Update Available' : 'You\'re on Latest Version')); ?></div>
                    <div class="text-sm"><?php echo $status['message']; ?></div>
                </div>
            </div>
        </div>
        <?php if($progress): ?>
        <div class="col-span-6 bg-black px-5 py-4 rounded-md max-h-96 overflow-scroll">
            <?php echo $progress; ?>

        </div>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('actions', null, []); ?> 
        <?php if($status['available'] && !$status['disabled']): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => []]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(__('Apply')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php elseif($status['disabled']): ?>
        <small class="text-red-500 font-bold"><?php echo e(__('Please upgrade your PHP version to apply update.')); ?></small>
        <?php else: ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['disabled' => true]]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['disabled' => true]); ?>
            <?php echo e(__('Apply')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /home/tmailcpuser95/public_html/resources/views/backend/update/auto.blade.php ENDPATH**/ ?>