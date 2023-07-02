<main class="flex-1" x-data="{ show: false, id: 0 }">
    <?php if($error): ?>
    <div id="imap-error" class="flex items-center w-full h-full fixed top-0 left-0 bg-red-900 opacity-75 z-50">
        <div class="flex flex-col mx-auto">
            <div class="w-36 mx-auto text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="text-3xl text-center text-white my-5"><?php echo e(__('IMAP Broken')); ?></div>
            <div class="p-2 mx-auto bg-red-800 text-white leading-none lg:lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="flex lg:rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3"><?php echo e(__('Error')); ?></span>
                <span class="font-semibold mr-2 text-left flex-auto"><?php echo e($error); ?></span>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="text-sm lg:rounded-lg">
        <?php if($messages): ?>
            <div class="mailbox">
                <div x-show="!show" class="list">
                    <div class="head flex items-center gap-3 pt-5 pb-6 px-7 lg:rounded-t-md" style="background-color: <?php echo e(config('app.settings.colors.primary')); ?>20">
                        <div class="w-1/2 md:w-3/12"><?php echo e(__('Sender')); ?></div>
                        <div class="w-1/2 md:w-7/12"><?php echo e(__('Subject')); ?></div>
                        <div class="hidden md:flex md:w-2/12 justify-end"><?php echo e(__('Time')); ?></div>
                    </div>
                    <div class="messages flex flex-col-reverse justify-end min-h-tm-half">
                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($i / 3 == 0 && config('app.settings.ads.four')): ?>
                                <div class="max-w-full ads-four"><?php echo config('app.settings.ads.four'); ?></div>
                            <?php endif; ?>
                            <?php if(!in_array($i, $deleted)): ?>
                            <div x-on:click="show = true; id = <?php echo e($message['id']); ?>; document.querySelector('button.delete').setAttribute('wire:click', 'delete(<?php echo e($message['id']); ?>)')"
                                class="flex items-center gap-3 hover:bg-gray-200 border-b border-dashed py-4 px-7 cursor-pointer"
                                data-id="<?php echo e($message['id']); ?>">
                                <div class="w-1/2 md:w-3/12">
                                    <?php echo e($message['sender_name']); ?>

                                    <div class="text-xs overflow-ellipsis"><?php echo e($message['sender_email']); ?>

                                    </div>
                                </div>
                                <div class="w-1/2 md:w-7/12"><?php echo e($message['subject']); ?></div>
                                <div class="hidden md:block w-full md:w-2/12">
                                    <div class="flex justify-end">
                                        <?php echo e($message['datediff']); ?>

                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div x-show="show" class="message">
                    <div class="head flex items-center text-white py-5 px-7 lg:rounded-t-md" style="background-color: <?php echo e(config('app.settings.colors.primary')); ?>99">
                        <div class="w-full flex justify-between items-center">
                            <div x-on:click="show = false" class="flex items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                                <span class="ml-2"><?php echo e(__('Go Back to Inbox')); ?></span>
                            </div>
                            <div class="flex gap-3">
                                <a class="download border-b" href="#" x-bind:data-id="id"><?php echo e(__('Download')); ?></a>
                                <button
                                    x-on:click="id = 0; show = false; document.querySelector(`.mailbox .list [data-id='<?php echo e($message['id']); ?>']`).remove()"
                                    class="delete border-b" wire:click="delete(1)"><?php echo e(__('Delete')); ?></button>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div x-show="id === <?php echo e($message['id']); ?>" id="message-<?php echo e($message['id']); ?>"
                            class="message min-h-tm-half">
                            <textarea
                                class="hidden">To: <?php echo e($this->email); ?>&#13;From: "<?php echo e($message['sender_name']); ?>" <<?php echo e($message['sender_email']); ?>>&#13;Subject: <?php echo e($message['subject']); ?>&#13;Date: <?php echo e($message['date']); ?>&#13;Content-Type: text/html&#13;&#13;<?php echo e($message['content']); ?></textarea>
                            <div class="flex justify-between items-center py-4 px-7">
                                <div>
                                    <?php echo e($message['sender_name']); ?>

                                    <div class="text-xs overflow-ellipsis">
                                        <?php echo e($message['sender_email']); ?>

                                    </div>
                                </div>
                                <div>
                                    <?php echo e(__('Date')); ?>

                                    <div class="text-xs overflow-ellipsis">
                                        <?php echo e($message['date']); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="border-t border-b border-dashed py-4 px-7">
                                <?php echo e($message['subject']); ?>

                            </div>
                            <div class="text-wrap py-4 px-7">
                                <iframe class="w-full flex flex-grow min-h-tm-half"
                                    srcdoc="<?php echo e($message['content']); ?>" frameborder="0"></iframe>
                                <?php if(count($message['attachments']) > 0): ?>
                                    <span class="pt-5 pb-3 px-6 text-xs"><?php echo e(__('Attachments')); ?></span>
                                    <div class="flex pb-5 px-6">
                                        <?php $__currentLoopData = $message['attachments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a class="py-2 px-3 mr-3 text-sm border-2 border-black lg:rounded-md hover:bg-black hover:text-white"
                                                href="<?php echo e($attachment['url']); ?>" download><i
                                                    class="fas fa-chevron-circle-down"></i><span
                                                    class="ml-2"><?php echo e($attachment['file']); ?></span></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php else: ?>
            <div class="flex items-center min-h-tm-half">
                <div class="flex-1 flex flex-col justify-center items-center text-gray-500 h-40">
                    <div class="text-lg"><?php echo e($initial ? __('Empty Inbox') : __('Fetching') . '...'); ?></div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main><?php /**PATH /home/tmailcpuser95/public_html/resources/views/themes/nebula/components/app.blade.php ENDPATH**/ ?>