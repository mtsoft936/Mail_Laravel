<nav>
    <div class="hidden md:flex items-baseline justify-center space-x-4">
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($menu->hasChild()): ?>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-3 py-2 text-sm text-white font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline hover:bg-white hover:bg-opacity-10 focus:outline-none">
                        <span><?php echo e(__($menu->name)); ?></span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-0': open, 'rotate-180': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute bottom-11 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-lg shadow dark-mode:bg-gray-800">
                            <?php $__currentLoopData = $menu->getChild(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-gray-700 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
                                    href="<?php echo e($child->link); ?>" target="<?php echo e($child->target); ?>"><?php echo e(__($child->name)); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <?php if($menu->parent_id === null): ?>
                    <a href="<?php echo e($menu->link); ?>"
                        class="px-3 py-2 text-sm font-semibold text-left bg-transparent text-white <?php echo e(url()->current() === $menu->link ? 'bg-white bg-opacity-25' : ''); ?> rounded-lg md:w-auto md:inline hover:bg-white hover:bg-opacity-10 focus:outline-none"
                        target="<?php echo e($menu->target); ?>"><?php echo e(__($menu->name)); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::check() && Auth::user()->role == 7): ?>
            <a href="<?php echo e(route('admin')); ?>" target="_blank"
                class="px-3 py-2 text-sm font-semibold text-left bg-transparent border-dashed border-2 border-red-500 text-red-500 rounded-lg md:w-auto md:inline hover:bg-red-900"><?php echo e(__('Admin')); ?></a>
        <?php endif; ?>
    </div>
    <div class="md:hidden" x-data="{ open: false }">
        <div @click="open = true" class="absolute top-12 right-6 w-8 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </div>
        <div style="display: none;" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" @click.away="open = false" class="flex-col md:hidden fixed top-0 left-0 min-h-screen w-full bg-black bg-opacity-75">
            <div @click="open = false" class="absolute top-12 right-6 w-8 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <div class="w-full mx-auto mt-20">
                <div class="flex flex-col items-center justify-between">
                    <div class="flex flex-col items-center space-y-2">
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($menu->hasChild()): ?> 
                            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                <button @click="open = !open" class="flex flex-row items-center w-full px-3 py-2 text-sm text-white font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline focus:text-gray-900 focus:bg-gray-200 focus:outline-none">
                                    <span><?php echo e(__($menu->name)); ?></span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                    <div class="px-2 py-2 text-center bg-white rounded-lg shadow dark-mode:bg-gray-800">
                                        <?php $__currentLoopData = $menu->getChild(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="block text-sm font-semibold bg-transparent rounded-lg text-gray-600 md:mt-0 focus:text-gray-900 focus:bg-gray-100 focus:outline-none" href="<?php echo e($child->link); ?>" target="<?php echo e($child->target); ?>"><?php echo e(__($child->name)); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <?php if($menu->parent_id === null): ?>
                                <a href="<?php echo e($menu->link); ?>" class="px-3 py-2 text-sm font-semibold text-left bg-transparent text-white <?php echo e(url()->current() === $menu->link ? 'bg-gray-200' : ''); ?> rounded-lg md:w-auto md:inline focus:text-gray-900 focus:bg-gray-200 focus:outline-none" target="<?php echo e($menu->target); ?>"><?php echo e(__($menu->name)); ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(Auth::check() && Auth::user()->role == 7): ?>
                            <a href="<?php echo e(route('admin')); ?>" class="px-3 py-2 text-sm font-semibold text-left bg-transparent border-dashed border-2 border-red-400 text-red-400 rounded-lg md:w-auto md:inline hover:bg-red-100"><?php echo e(__('Admin')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col items-center space-y-2 mt-10">
                        <div class="text-white space-x-2">
                            <?php $__currentLoopData = config('app.settings.socials'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($social['link']); ?>" target="_blank" class="text-lg" rel="noopener noreferrer"><i class="<?php echo e($social['icon']); ?>"></i></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="relative">
                                <form action="<?php echo e(route('locale', '')); ?>" id="locale-form-mobile" method="post">
                                    <?php echo csrf_field(); ?>
                                    <select class="block appearance-none bg-gray-200 cursor-pointer text-gray-800 px-2 py-1 pr-5 rounded-md focus:outline-none" name="locale" id="locale-mobile">
                                        <?php $__currentLoopData = config('app.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e((app()->getLocale() == $locale ) ? "selected" : ""); ?>><?php echo e($locale); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </form>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-1 text-gray-800">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH /home/tmailcpuser95/public_html/resources/views/themes/groot/components/nav.blade.php ENDPATH**/ ?>