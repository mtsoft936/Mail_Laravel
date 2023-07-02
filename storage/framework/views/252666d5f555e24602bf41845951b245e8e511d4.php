<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-20 py-10 bg-white">
                    <div class="text-2xl">
                        <?php echo e(__('Hi')); ?> <?php echo e(Auth::user()->name); ?>!
                    </div>
                    <div class="mt-2 text-gray-500">
                        <?php echo e(__('Welcome to TMail Dashboard')); ?>

                    </div>
                </div>
                <div class="bg-gray-50 text-gray-800 grid gap-5 grid-cols-1 md:grid-cols-3 px-20 py-10">
                    <div>
                        <div class="flex items-center">
                            <div class="text-lg leading-7 font-semibold"><a href="https://support.thehp.in/articles/100015613" target="_blank"><?php echo e(__('Articles')); ?></a></div>
                        </div>
                        <div class="">
                            <div class="mt-2 text-sm">
                                <?php echo e(__('A bunch of helpful articles related to TMail can be found in the below portal. This will help you to get more details and help on various features of TMail.')); ?>

                            </div>
                            <a href="https://support.thehp.in/articles/100015613" target="_blank">
                                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div><?php echo e(__('Explore the Articles')); ?></div>
                                    <div class="ml-1 text-indigo-700">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <div class="text-lg leading-7 font-semibold"><a href="https://support.thehp.in/submit/#100015613" target="_blank"><?php echo e(__('Support')); ?></a></div>
                        </div>
                        <div class="">
                            <div class="mt-2 text-sm">
                                <?php echo e(__('In case if you\'re not able to find the right solution of your problem in the Articles section, we\'re always here to help you out at our Support Portal. ')); ?>

                            </div>
                            <a href="https://support.thehp.in/submit/#100015613" target="_blank">
                                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div><?php echo e(__('Create a Support Ticket')); ?></div>
                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <div class="text-lg leading-7 font-semibold"><a href="https://tmail.thehp.in" target="_blank"><?php echo e(__('Themes')); ?></a></div>
                        </div>
                        <div class="">
                            <div class="mt-2 text-sm">
                                <?php echo e(__('TMail 6 now supports Themes that opens the door for unlimited possibilities like making your TMail just the way you want without impacting the codebase.')); ?>

                            </div>
                            <a href="https://tmail.thehp.in" target="_blank">
                                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div><?php echo e(__('Get Exciting Themes')); ?></div>
                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white grid grid-cols-1 md:grid-cols-2">
                    <div class="px-20 py-10">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-24 h-24 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                            </svg>
                            <div class="ml-6">
                                <div class="text-lg text-gray-600 leading-7 font-semibold"><?php echo e(__('Email IDs Created')); ?></div>
                                <div class="mt-2 text-2xl text-gray-500"><?php echo e(number_format(App\Models\Meta::getEmailIdsCreated())); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="px-20 py-10">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-24 h-24 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                            </svg>
                            <div class="ml-6">
                                <div class="text-lg text-gray-600 leading-7 font-semibold"><?php echo e(__('Messages Received')); ?></div>
                                <div class="mt-2 text-2xl text-gray-500"><?php echo e(number_format(App\Models\Meta::getMessagesReceived())); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/tmailcpuser95/public_html/resources/views/backend/dashboard.blade.php ENDPATH**/ ?>