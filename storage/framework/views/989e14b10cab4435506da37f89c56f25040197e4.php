<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if(isset($page)): ?>
        <?php echo $page->header; ?>

        <title><?php echo e($page->title); ?> - <?php echo e(config('app.settings.name')); ?></title>
    <?php else: ?>
        <title><?php echo e(config('app.settings.name')); ?></title>
    <?php endif; ?>
    <?php echo config('app.settings.global.header'); ?>

    <?php if(Illuminate\Support\Facades\Storage::disk('local')->has('public/images/custom-favicon.png')): ?>
        <link rel="icon" href="<?php echo e(url('storage/images/custom-favicon.png')); ?>" type="image/png">
    <?php else: ?>
        <link rel="icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/png">
    <?php endif; ?>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes/' . config('app.settings.theme') . '/styles.css')); ?>">
    <script src="<?php echo e(asset('vendor/Shortcode/Shortcode.js')); ?>"></script>
    <script src="<?php echo e(asset('js/peel1.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo config('app.settings.global.css'); ?>

</head>

<body class="bg-gray-200">
    <div class="groot-theme">
        <header class="bg-gray-800 text-white pt-10"
            style="background-color: <?php echo e(config('app.settings.colors.primary')); ?>">
            <div class="container mx-auto flex justify-between items-center">
                <div class="logo flex justify-center w-full md:w-1/5 order-2">
                    <a href="<?php echo e(route('home')); ?>">
                        <?php if(Illuminate\Support\Facades\Storage::disk('local')->has('public/images/custom-logo.png')): ?>
                            <img class="max-w-logo" src="<?php echo e(url('storage/images/custom-logo.png')); ?>" style="height:70px !important;" alt="logo">
                        <?php else: ?>
                            <img class="max-w-logo" src="<?php echo e(asset('images/logo.png')); ?>" style="height:70px !important;" alt="logo">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="socials hidden md:flex w-2/5 order-1">
                    <?php $__currentLoopData = config('app.settings.socials'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($social['link']); ?>" target="_blank"
                            class="text-lg mr-2 px-2 py-1 rounded hover:bg-white hover:bg-opacity-25"
                            rel="noopener noreferrer"><i class="<?php echo e($social['icon']); ?>"></i></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="locale hidden md:flex justify-end w-2/5 order-3">
                    <div class="relative">
                        <form action="<?php echo e(route('locale', '')); ?>" id="locale-form" method="post">
                            <?php echo csrf_field(); ?>
                            <select
                                class="block appearance-none bg-gray-200 cursor-pointer text-gray-800 px-2 py-1 pr-5 rounded-md focus:outline-none"
                                name="locale" id="locale">
                                <?php $__currentLoopData = config('app.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e(app()->getLocale() == $locale ? 'selected' : ''); ?>>
                                        <?php echo e($locale); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </form>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-1 text-gray-800">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="bg-gray-800 text-white py-10" style="background-color: <?php echo e(config('app.settings.colors.primary')); ?>">
            <div class="container mx-auto flex flex-col md:flex-row">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.actions', ['in_app' => isset($page) ? true : false])->html();
} elseif ($_instance->childHasBeenRendered('RVY39gu')) {
    $componentId = $_instance->getRenderedChildComponentId('RVY39gu');
    $componentTag = $_instance->getRenderedChildComponentTagName('RVY39gu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RVY39gu');
} else {
    $response = \Livewire\Livewire::mount('frontend.actions', ['in_app' => isset($page) ? true : false]);
    $html = $response->html();
    $_instance->logRenderedChild('RVY39gu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="ads md:w-30p order-1">
                    <?php if(config('app.settings.ads.one')): ?>
                        <div class="flex justify-center items-center max-w-full m-4 ads-one"><?php echo config('app.settings.ads.one'); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="ads md:w-30p order-3">
                    <?php if(config('app.settings.ads.five')): ?>
                        <div class="flex justify-center items-center max-w-full m-4 ads-five"><?php echo config('app.settings.ads.five'); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <main class="py-10 px-5 md:px-0">
            <div class="container mx-auto flex flex-col md:flex-row">
                <?php if(isset($page)): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.page', ['page' => $page])->html();
} elseif ($_instance->childHasBeenRendered('6ytmorj')) {
    $componentId = $_instance->getRenderedChildComponentId('6ytmorj');
    $componentTag = $_instance->getRenderedChildComponentTagName('6ytmorj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6ytmorj');
} else {
    $response = \Livewire\Livewire::mount('frontend.page', ['page' => $page]);
    $html = $response->html();
    $_instance->logRenderedChild('6ytmorj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php else: ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.app')->html();
} elseif ($_instance->childHasBeenRendered('wtDF39v')) {
    $componentId = $_instance->getRenderedChildComponentId('wtDF39v');
    $componentTag = $_instance->getRenderedChildComponentTagName('wtDF39v');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wtDF39v');
} else {
    $response = \Livewire\Livewire::mount('frontend.app');
    $html = $response->html();
    $_instance->logRenderedChild('wtDF39v', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endif; ?>
                <div class="w-full md:w-1/6 order-1">
                    <?php if(config('app.settings.ads.two')): ?>
                        <div class="flex justify-center items-center max-w-full m-4 ads-two"><?php echo config('app.settings.ads.two'); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="w-full md:w-1/6 order-3">
                    <?php if(config('app.settings.ads.three')): ?>
                        <div class="flex justify-center items-center max-w-full m-4 ads-three"><?php echo config('app.settings.ads.three'); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(!isset($page) && isset($in_page->content)): ?>
                <div class="in-app-page page container mx-auto pt-10">
                    <?php echo $in_page->content; ?>

                </div>
            <?php endif; ?>
        </main>
        <footer class="bg-gray-800 py-10" style="background-color: <?php echo e(config('app.settings.colors.primary')); ?>">
            <div class="container mx-auto md:space-y-10">
                <div>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.nav')->html();
} elseif ($_instance->childHasBeenRendered('n8pcG2X')) {
    $componentId = $_instance->getRenderedChildComponentId('n8pcG2X');
    $componentTag = $_instance->getRenderedChildComponentTagName('n8pcG2X');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('n8pcG2X');
} else {
    $response = \Livewire\Livewire::mount('frontend.nav');
    $html = $response->html();
    $_instance->logRenderedChild('n8pcG2X', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <div class="hidden md:block border-2 border-dashed border-white border-opacity-10"></div>
                <div class="copyright text-white text-center text-sm">
                    <?php echo e(__('Copyright ')); ?>

                    <script>
                        document.write((new Date()).getFullYear())

                    </script>
                    - <?php echo e(config('app.settings.name')); ?>

                </div>
            </div>
        </footer>
    </div>
    <?php if(config('app.settings.cookie.enable')): ?>
        <div id="cookie" class="hidden fixed w-full bottom-0 left-0 p-4 bg-gray-900 text-white justify-between">
            <div class="py-2">
                <?php echo __(config('app.settings.cookie.text')); ?>

            </div>
            <div id="cookie_close" class="px-3 py-2 bg-yellow-300 text-gray-900 rounded-md cursor-pointer">
                <?php echo e(__('Close')); ?>

            </div>
        </div>
    <?php endif; ?>

    <!--- Helper Text for Language Translation -->
    <div class="hidden language-helper">
        <div class="error"><?php echo e(__('Error')); ?></div>
        <div class="success"><?php echo e(__('Success')); ?></div>
        <div class="copy_text"><?php echo e(__('Email ID Copied to Clipboard')); ?></div>
    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php if(!isset($page)): ?>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const email = '<?php echo e(App\Models\TMail::getEmail(true)); ?>';
                const add_mail_in_title = "<?php echo e(config('app.settings.add_mail_in_title', true) ? 'yes' : 'no'); ?>"
                if(add_mail_in_title === 'yes') {
                    document.title += ` - ${email}`;
                }
                Livewire.emit('syncEmail', email);
                Livewire.emit('fetchMessages');
            });

        </script>
    <?php endif; ?>
    <script>
        document.addEventListener('stopLoader', () => {
            document.getElementById('refresh').classList.add('pause-spinner');
        });
        let counter = parseInt(<?php echo e(config('app.settings.fetch_seconds')); ?>);
        setInterval(() => {
            if (counter === 0 && document.getElementById('imap-error') === null && !document.hidden) {
                document.getElementById('refresh').classList.remove('pause-spinner');
                Livewire.emit('fetchMessages');
                counter = parseInt(<?php echo e(config('app.settings.fetch_seconds')); ?>);
            }
            counter--;
            if(document.hidden) {
                counter = 1;
            }
        }, 1000);

    </script>
    <?php echo config('app.settings.global.js'); ?>

    <?php echo config('app.settings.global.footer'); ?>

    <script defer>
    setTimeout(() => {
        const enable_ad_block_detector = <?php echo e(config('app.settings.enable_ad_block_detector', false) ? 1 : 0); ?>

        if(!document.getElementById('Q8CvrZzY9fphm6gG') && enable_ad_block_detector) {
            document.querySelector('.groot-theme').remove()
            document.querySelector('body > div').insertAdjacentHTML('beforebegin', `
                <div class="fixed w-screen h-screen bg-red-800 flex flex-col justify-center items-center gap-5 z-50 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="text-4xl font-bold"><?php echo e(__('Ad Blocker Detected')); ?></h1>
                    <h2><?php echo e(__('Disable the Ad Blocker to use ') . config('app.settings.name')); ?></h2>
                </div>
            `)
        }
    }, 500);
    </script>
</body>

</html>
<?php /**PATH /home/admin/domains/tmail.io/public_html/resources/views/themes/groot/app.blade.php ENDPATH**/ ?>