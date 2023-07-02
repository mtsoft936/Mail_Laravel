<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if(isset($page))
    {!! $page->header !!}
    <title>{{ $page->title }} - {{ config('app.settings.name') }}</title>
    @else
    <title>{{ config('app.settings.name') }}</title>
    @endif
    {!! config('app.settings.global.header') !!}
    @if(Illuminate\Support\Facades\Storage::disk('local')->has('public/images/custom-favicon.png'))
    <link rel="icon" href="{{ url('storage/images/custom-favicon.png') }}" type="image/png">
    @else
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    @endif
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <script src="{{ asset('vendor/Shortcode/Shortcode.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
    {!! config('app.settings.global.css') !!}
    @if(!isset($page))
    {!! config('app.settings.app_header') !!}
    @endif
    @include('frontend.common.header')
</head>
<body>
    <div class="nebula-theme flex flex-col">
        <header class="bg-blue-700 text-white order-1" style="background-color: {{ config('app.settings.colors.primary') }}">
            <div class="container mx-auto pb-24">
                <div class="flex flex-wrap items-center">
                    <a class="px-3 py-5 ml-5 lg:ml-0" href="{{ route('home') }}">
                        @if(Illuminate\Support\Facades\Storage::disk('local')->has('public/images/custom-logo.png'))
                        <img class="max-w-logo" src="{{ url('storage/images/custom-logo.png') }}" alt="logo">
                        @else
                        <img class="max-w-logo" src="{{ asset('images/logo.png') }}" alt="logo">
                        @endif
                    </a>
                    <div class="flex-1">
                        @livewire('frontend.nav')
                    </div>
                </div>
                @if(config('app.settings.ads.five'))
                <div class="flex justify-center items-center max-w-full m-4 ads-five">{!! config('app.settings.ads.five') !!}</div>
                @endif
                <div class="actions">
                    @livewire('frontend.actions', ['in_app' => isset($page) ? true : false])
                </div>
                @if(config('app.settings.ads.one'))
                <div class="flex justify-center items-center max-w-full m-4 ads-one">{!! config('app.settings.ads.one') !!}</div>
                @endif
            </div>
        </header>
        <div class="container mx-auto min-h-tm-half order-2 bg-white md:rounded-md shadow-md flex flex-col md:flex-row md:space-x-2 justify-center z-10 -mt-16 -mb-16">
            @if(config('app.settings.ads.two'))
            <div class="flex justify-center items-center max-w-full ads-two">{!! config('app.settings.ads.two') !!}</div>
            @endif
            @if(isset($page))
                @livewire('frontend.page', ['page' => $page])
            @else 
                @livewire('frontend.app')
            @endif
            @if(config('app.settings.ads.three'))
            <div class="flex justify-center items-center max-w-full ads-three">{!! config('app.settings.ads.three') !!}</div>
            @endif
        </div>
        <footer class="bg-blue-700 order-3 text-white text-center pt-20 pb-6 z-0" style="background-color: {{ config('app.settings.colors.primary') }}">
            {{ __('Copyright') }} &copy; {{ date("Y") }} - {{ config('app.settings.name') }}
        </footer>
    </div>
    @if(config('app.settings.cookie.enable'))
    <div id="cookie" class="hidden fixed w-full bottom-0 left-0 p-4 bg-gray-900 text-white justify-between z-20">
        <div class="py-2">
            {!! __(config('app.settings.cookie.text')) !!}
        </div>
        <div id="cookie_close" class="px-3 py-2 bg-yellow-300 text-gray-900 rounded-md cursor-pointer">
            {{ __('Close') }}
        </div>
    </div>
    @endif

    <!--- Helper Text for Language Translation -->
    <div class="hidden language-helper">
        <div class="error">{{ __('Error') }}</div>
        <div class="success">{{ __('Success') }}</div>
        <div class="copy_text">{{ __('Email ID Copied to Clipboard') }}</div>
    </div>

    @livewireScripts
    @if(!isset($page))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const email = '{{ App\Models\TMail::getEmail(true) }}';
            const add_mail_in_title = "{{ config('app.settings.add_mail_in_title') ? 'yes' : 'no' }}"
            if(add_mail_in_title === 'yes') {
                document.title += ` - ${email}`;
            }
            Livewire.emit('syncEmail', email);
            Livewire.emit('fetchMessages');
        });
    </script>
    @endif
    <script>
        document.addEventListener('stopLoader', () => {
            document.querySelectorAll('.refresh').forEach(el => {
                el.classList.add('pause-spinner');
            });
        });
        let counter = parseInt({{ config('app.settings.fetch_seconds') }});
        setInterval(() => {
            if (counter === 0 && document.getElementById('imap-error') === null && !document.hidden) {
                document.querySelectorAll('.refresh').forEach(el => {
                    el.classList.remove('pause-spinner');
                });
                Livewire.emit('fetchMessages');
                counter = parseInt({{ config('app.settings.fetch_seconds') }});
            }
            counter--;
            if(document.hidden) {
                counter = 1;
            }
        }, 1000);
    </script>
    {!! config('app.settings.global.js') !!}
    {!! config('app.settings.global.footer') !!}
    @if(config('app.settings.ad_block_detector_filename'))
    <script src="{{ asset('storage/js/' . config('app.settings.ad_block_detector_filename')) }}" defer></script>
    <script defer>
    setTimeout(() => {
        const enable_ad_block_detector = "{{ config('app.settings.enable_ad_block_detector', false) ? 1 : 0 }}"
        if(!document.getElementById('Q8CvrZzY9fphm6gG') && enable_ad_block_detector == "1") {
            document.querySelector('.nebula-theme').remove()
            document.querySelector('body > div').insertAdjacentHTML('beforebegin', `
                <div class="fixed w-screen h-screen bg-red-800 flex flex-col justify-center items-center gap-5 z-50 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="text-4xl font-bold">{{ __('Ad Blocker Detected') }}</h1>
                    <h2>{{ __('Disable the Ad Blocker to use ') . config('app.settings.name') }}</h2>
                </div>
            `)
        }
    }, 500);
    </script>
    @endif
</body>
</html>