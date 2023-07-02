<div x-data="{ in_app: <?php echo e($in_app ? 'true' : 'false'); ?> }" class="bg-teal-400 bg-actions-pattern relative" style="background-color: <?php echo e(config('app.settings.colors.primary')); ?>">
    <div class="container mx-auto bg-gray-500 bg-opacity-30">
        <div class="px-5 md:px-0">
            <div x-show.transition.in="!in_app" class="in-app-actions flex flex-col md:flex-row items-center justify-center" style="display: none;">
                <?php if(config('app.settings.ads.one')): ?>
                <div wire:ignore class="flex justify-center items-center max-w-full m-4 ads-one"><?php echo config('app.settings.ads.one'); ?></div>
                <?php endif; ?>
                <div class="flex-1 py-10 space-y-5">
                    <h2 class="text-xl text-white font-bold text-center"><?php echo e(__('Your temporary email address is ready')); ?></h2>
                    <form class="lg:max-w-lg lg:mx-auto flex space-x-5" action="#" method="post">
                        <div class="relative flex-1">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['align' => 'top','width' => 'w-full']]); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['align' => 'top','width' => 'w-full']); ?>
                                 <?php $__env->slot('trigger', null, []); ?> 
                                    <div class="block appearance-none w-full bg-white py-4 px-5 pr-8 cursor-pointer focus:outline-none select-none border-b-4 border-b-orange-500" style="border-color: <?php echo e(config('app.settings.colors.secondary')); ?>" id="email_id"><?php echo e($email); ?></div>
                                 <?php $__env->endSlot(); ?>
                                 <?php $__env->slot('content', null, []); ?> 
                                    <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('switch', $email)).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('switch', $email)).'']); ?>
                                        <?php echo e($email); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php $__env->endSlot(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        <div id="counter" class="bg-gray-50 flex items-center justify-center relative">
                            <div class="filler h-full absolute top-0 left-0 transition-all ease-in-out" style="background-color: <?php echo e(config('app.settings.colors.primary')); ?>50"></div>
                            <span class="text"></span>
                        </div>
                    </form>
                </div>
                <?php if(config('app.settings.ads.five')): ?>
                <div wire:ignore class="flex justify-center items-center max-w-full m-4 ads-five"><?php echo config('app.settings.ads.five'); ?></div>
                <?php endif; ?>
                <div class="w-full md:w-auto grid grid-cols-4 md:grid-cols-1 text-white space-x-0.5 md:space-x-0 md:space-y-0.5">
                    <div class="btn_copy bg-black bg-opacity-30 text-center cursor-pointer py-3 px-4 hover:bg-opacity-25">
                        <i class="far fa-copy"></i>
                        <div class="text-xs"><?php echo e(__('Copy')); ?></div>
                    </div>
                    <div onclick="document.getElementById('refresh').classList.remove('pause-spinner')" wire:click="$emit('fetchMessages')" class="bg-black bg-opacity-30 text-center cursor-pointer py-3 px-4 hover:bg-opacity-25">
                        <i id="refresh" class="fas fa-sync-alt fa-spin"></i>
                        <div class="text-xs"><?php echo e(__('Refresh')); ?></div>
                    </div>
                    <div x-on:click="in_app = true" class="bg-black bg-opacity-30 text-center cursor-pointer py-3 px-4 hover:bg-opacity-25">
                        <i class="far fa-plus-square"></i>
                        <div class="text-xs"><?php echo e(__('New')); ?></div>
                    </div>
                    <div wire:click="deleteEmail" class="bg-black bg-opacity-30 text-center cursor-pointer py-3 px-4 hover:bg-opacity-25">
                        <i class="far fa-trash-alt"></i>
                        <div class="text-xs"><?php echo e(__('Delete')); ?></div>
                    </div>
                </div>
            </div>
            <div x-show.transition.in="in_app" class="app-action flex flex-col md:flex-row" style="display: none;">
                <?php if(config('app.settings.ads.one')): ?>
                <div wire:ignore class="flex justify-center items-center max-w-full m-4 ads-one"><?php echo config('app.settings.ads.one'); ?></div>
                <?php endif; ?>
                <div class="mx-auto py-10">
                    <div class="flex space-x-3">
                        <form wire:submit.prevent="create" method="post" class="flex-1 space-x-3 flex">
                            <div class="flex-1 space-y-3">
                                <?php if(config('app.settings.captcha') == 'hcaptcha' || config('app.settings.captcha') == 'recaptcha2'): ?>
                                <div>
                                    <?php if (isset($component)) { $__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Captcha::class, ['field' => 'captcha']); ?>
<?php $component->withName('captcha'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243)): ?>
<?php $component = $__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243; ?>
<?php unset($__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243); ?>
<?php endif; ?>
                                </div>
                                <?php endif; ?>
                                <input class="block appearance-none w-full py-4 px-5 bg-white border-0 focus:outline-none placeholder-opacity-50" type="text" name="user" id="user" wire:model="user" placeholder="<?php echo e(__('Enter Username')); ?>">
                                <div class="relative">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['align' => 'top','width' => 'w-full']]); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['align' => 'top','width' => 'w-full']); ?>
                                         <?php $__env->slot('trigger', null, []); ?> 
                                            <input x-ref="domain" type="text"
                                                class="block appearance-none w-full md:w-96 bg-white py-4 px-5 pr-8 cursor-pointer focus:outline-none select-none placeholder-opacity-50 border-0"
                                                placeholder="<?php echo e(__('Select Domain')); ?>" name="domain" id="domain"
                                                wire:model="domain" readonly>
                                         <?php $__env->endSlot(); ?>
                                         <?php $__env->slot('content', null, []); ?> 
                                            <?php $__currentLoopData = $domains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $domain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a x-on:click="$refs.domain.value = '<?php echo e($domain); ?>'; $wire.setDomain('<?php echo e($domain); ?>')"
                                                    class='block px-4 py-2 text-sm leading-5 text-gray-700 cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'><?php echo e($domain); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php $__env->endSlot(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button id="create"
                                class="flex items-center bg-indigo-600 text-white text-center py-4 px-5 hover:bg-opacity-75 cursor-pointer"
                                style="background-color: <?php echo e(config('app.settings.colors.secondary')); ?>">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </form>
                        <div class="flex items-center">
                            <div class="border border-dashed border-white h-6"></div>
                        </div>
                        <form wire:submit.prevent="random" method="post" class="flex">
                            <button id="random"
                                class="flex items-center bg-green-400 text-white text-center py-4 px-5 hover:bg-opacity-75 cursor-pointer"
                                style="background-color: <?php echo e(config('app.settings.colors.tertiary')); ?>">
                                <i class="fas fa-random"></i>
                            </button>
                        </form>
                    </div>
                    <?php if(count($emails) > 0 && $in_app): ?>
                        <div class="mt-5">
                            <a href="<?php echo e(route('mailbox')); ?>"
                                class="flex items-center bg-white bg-opacity-25 text-white text-center py-3 px-5 space-x-3 hover:bg-opacity-10 cursor-pointer text-sm">
                                <i class="fas fa-chevron-left"></i>
                                <span><?php echo e(__('Get back to MailBox')); ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if(!$in_app): ?>
                        <div class="mt-5">
                            <div x-on:click="in_app = false"
                                class="flex justify-center items-center bg-white bg-opacity-25 text-white text-center py-3 px-5 hover:bg-opacity-10 cursor-pointer text-sm">
                                <span><?php echo e(__('Cancel')); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if(config('app.settings.ads.five')): ?>
                <div wire:ignore class="flex justify-center items-center max-w-full m-4 ads-five"><?php echo config('app.settings.ads.five'); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if(config('app.settings.captcha') == 'recaptcha3'): ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(config('app.settings.recaptcha3.site_key')); ?>"></script>
    <script>
        const handle = (e) => {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php echo e(config('app.settings.recaptcha3.site_key')); ?>', { action: 'submit' }).then(function(token) {
                    Livewire.emit('checkReCaptcha3', token, e.target.id);
                });
            });
        }
        document.getElementById('create').addEventListener('click', handle);
        document.getElementById('random').addEventListener('click', handle);
    </script>
    <?php endif; ?>
</div><?php /**PATH /home/tmailcpuser95/public_html/resources/views/themes/mantis/components/actions.blade.php ENDPATH**/ ?>