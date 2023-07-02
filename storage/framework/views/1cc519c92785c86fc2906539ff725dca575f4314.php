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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo e(asset('css/vendor.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
    <script src="<?php echo e(asset('vendor/Shortcode/Shortcode.js')); ?>"></script>
    <script src="<?php echo e(asset('js/peel1.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo config('app.settings.global.css'); ?>

    <?php if(!isset($page)): ?>
    <?php echo config('app.settings.app_header'); ?>

    <?php endif; ?>
</head>
<body>
    <div class="default-theme">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/4 bg-blue-700 py-6 lg:min-h-screen" style="background-color: <?php echo e(config('app.settings.colors.primary')); ?>">
                <div class="flex justify-center p-3 mb-10">
                    <a href="<?php echo e(route('home')); ?>">
                        <?php if(Illuminate\Support\Facades\Storage::disk('local')->has('public/images/custom-logo.png')): ?>
                        <img class="max-w-logo" src="<?php echo e(url('storage/images/custom-logo.png')); ?>" alt="logo">
                        <?php else: ?>
                        <img class="max-w-logo" src="<?php echo e(asset('images/logo.png')); ?>" alt="logo">
                        <?php endif; ?>
                    </a>
                </div>
                <?php if(config('app.settings.ads.five')): ?>
                <div class="flex justify-center items-center max-w-full m-4 ads-five"><?php echo config('app.settings.ads.five'); ?></div>
                <?php endif; ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.actions', ['in_app' => isset($page) ? true : false])->html();
} elseif ($_instance->childHasBeenRendered('E0d5kRP')) {
    $componentId = $_instance->getRenderedChildComponentId('E0d5kRP');
    $componentTag = $_instance->getRenderedChildComponentTagName('E0d5kRP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('E0d5kRP');
} else {
    $response = \Livewire\Livewire::mount('frontend.actions', ['in_app' => isset($page) ? true : false]);
    $html = $response->html();
    $_instance->logRenderedChild('E0d5kRP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php if(config('app.settings.ads.one')): ?>
                <div class="flex justify-center items-center max-w-full m-4 ads-one"><?php echo config('app.settings.ads.one'); ?></div>
                <?php endif; ?>
            </div>
            <div class="w-full lg:w-3/4">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.nav')->html();
} elseif ($_instance->childHasBeenRendered('IqGbtsX')) {
    $componentId = $_instance->getRenderedChildComponentId('IqGbtsX');
    $componentTag = $_instance->getRenderedChildComponentTagName('IqGbtsX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IqGbtsX');
} else {
    $response = \Livewire\Livewire::mount('frontend.nav');
    $html = $response->html();
    $_instance->logRenderedChild('IqGbtsX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="flex flex-col lg:min-h-tm-default">
                    <?php if(config('app.settings.ads.two')): ?>
                    <div class="flex justify-center items-center max-w-full ads-two"><?php echo config('app.settings.ads.two'); ?></div>
                    <?php endif; ?>
                    <?php if(isset($page)): ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.page', ['page' => $page])->html();
} elseif ($_instance->childHasBeenRendered('JoehfL0')) {
    $componentId = $_instance->getRenderedChildComponentId('JoehfL0');
    $componentTag = $_instance->getRenderedChildComponentTagName('JoehfL0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JoehfL0');
} else {
    $response = \Livewire\Livewire::mount('frontend.page', ['page' => $page]);
    $html = $response->html();
    $_instance->logRenderedChild('JoehfL0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php else: ?> 
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.app')->html();
} elseif ($_instance->childHasBeenRendered('8No3lbQ')) {
    $componentId = $_instance->getRenderedChildComponentId('8No3lbQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('8No3lbQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8No3lbQ');
} else {
    $response = \Livewire\Livewire::mount('frontend.app');
    $html = $response->html();
    $_instance->logRenderedChild('8No3lbQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endif; ?>
                    <?php if(config('app.settings.ads.three')): ?>
                    <div class="flex justify-center items-center max-w-full ads-three"><?php echo config('app.settings.ads.three'); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
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
            const add_mail_in_title = "<?php echo e(config('app.settings.add_mail_in_title') ? 'yes' : 'no'); ?>"
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
            document.querySelector('.default-theme').remove()
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
</html><?php /**PATH /home/tmailcpuser95/public_html/resources/views/themes/default/app.blade.php ENDPATH**/ ?>