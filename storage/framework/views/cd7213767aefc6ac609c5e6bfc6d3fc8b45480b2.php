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
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes/' . config('app.settings.theme') . '/styles.css')); ?>">
    <script src="<?php echo e(asset('vendor/Shortcode/Shortcode.js')); ?>"></script>
    <script src="<?php echo e(asset('js/peel1.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo config('app.settings.global.css'); ?>

</head>

<body>
    <div class="mantis-theme">
        <div class="container mx-auto p-5 md:p-0">
            <div class="flex items-center">
                <a href="<?php echo e(route('home')); ?>">
                    <?php if(Illuminate\Support\Facades\Storage::disk('local')->has('public/images/custom-logo.png')): ?>
                    <img class="max-w-logo" src="<?php echo e(url('storage/images/custom-logo.png')); ?>" alt="logo">
                    <?php else: ?>
                    <img class="max-w-logo" src="<?php echo e(asset('images/logo.png')); ?>" alt="logo">
                    <?php endif; ?>
                </a>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.nav')->html();
} elseif ($_instance->childHasBeenRendered('uUMCHIm')) {
    $componentId = $_instance->getRenderedChildComponentId('uUMCHIm');
    $componentTag = $_instance->getRenderedChildComponentTagName('uUMCHIm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uUMCHIm');
} else {
    $response = \Livewire\Livewire::mount('frontend.nav');
    $html = $response->html();
    $_instance->logRenderedChild('uUMCHIm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.actions', ['in_app' => isset($page) ? true : false])->html();
} elseif ($_instance->childHasBeenRendered('JB1B78r')) {
    $componentId = $_instance->getRenderedChildComponentId('JB1B78r');
    $componentTag = $_instance->getRenderedChildComponentTagName('JB1B78r');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JB1B78r');
} else {
    $response = \Livewire\Livewire::mount('frontend.actions', ['in_app' => isset($page) ? true : false]);
    $html = $response->html();
    $_instance->logRenderedChild('JB1B78r', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <div class="container mx-auto">
            <?php if(config('app.settings.ads.two')): ?>
            <div class="flex justify-center items-center max-w-full m-4 ads-two"><?php echo config('app.settings.ads.two'); ?></div>
            <?php endif; ?>
            <?php if(isset($page)): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.page', ['page' => $page])->html();
} elseif ($_instance->childHasBeenRendered('v9AvdLV')) {
    $componentId = $_instance->getRenderedChildComponentId('v9AvdLV');
    $componentTag = $_instance->getRenderedChildComponentTagName('v9AvdLV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('v9AvdLV');
} else {
    $response = \Livewire\Livewire::mount('frontend.page', ['page' => $page]);
    $html = $response->html();
    $_instance->logRenderedChild('v9AvdLV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php else: ?> 
                <div class="spacer mt-5"></div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.app')->html();
} elseif ($_instance->childHasBeenRendered('ICnqkci')) {
    $componentId = $_instance->getRenderedChildComponentId('ICnqkci');
    $componentTag = $_instance->getRenderedChildComponentTagName('ICnqkci');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ICnqkci');
} else {
    $response = \Livewire\Livewire::mount('frontend.app');
    $html = $response->html();
    $_instance->logRenderedChild('ICnqkci', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>
            <?php if(config('app.settings.ads.three')): ?>
            <div class="flex justify-center items-center max-w-full m-4 ads-three"><?php echo config('app.settings.ads.three'); ?></div>
            <?php endif; ?>
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
            document.getElementById('counter').style.width = document.getElementById('counter').offsetHeight + 'px'
            document.querySelector('#counter div.filler').style.width = (((parseInt(<?php echo e(config('app.settings.fetch_seconds')); ?>) - counter) * 100) / parseInt(<?php echo e(config('app.settings.fetch_seconds')); ?>)) + '%'
            document.querySelector('#counter span.text').innerText = counter
            if (counter === 0 && document.getElementById('imap-error') === null && !document.hidden) {
                document.getElementById('refresh').classList.remove('pause-spinner');
                let even = true
                let temp = setInterval(() => {
                    if(even) {
                        document.getElementById('refresh').parentElement.style.backgroundColor = '#000'
                    } else {
                        document.getElementById('refresh').parentElement.style = null
                    }
                    even = !even
                }, 100);
                setTimeout(() => {
                    clearInterval(temp)
                }, 1000);
                Livewire.emit('fetchMessages');
                counter = parseInt(<?php echo e(config('app.settings.fetch_seconds')); ?>) + 1;
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
            document.querySelector('.gamora-theme').remove()
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
<?php /**PATH /home/tmailcpuser95/public_html/resources/views/themes/mantis/app.blade.php ENDPATH**/ ?>