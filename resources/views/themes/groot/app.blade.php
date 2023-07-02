<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (isset($page))
        {!! $page->header !!}
        <title>{{ $page->title }} - {{ config('app.settings.name') }}</title>
    @else
        <title>{{ config('app.settings.name') }}</title>
    @endif
    {!! config('app.settings.global.header') !!}
    @if (Illuminate\Support\Facades\Storage::disk('local')->has('public/images/custom-favicon.png'))
        <link rel="icon" href="{{ url('storage/images/custom-favicon.png') }}" type="image/png">
    @else
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    @endif
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/' . config('app.settings.theme') . '/styles.css') }}">
    <script src="{{ asset('vendor/Shortcode/Shortcode.js') }}"></script>
    <script src="{{ asset('js/peel1.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
    {!! config('app.settings.global.css') !!}
</head>

<body class="bg-gray-200">
    <div class="groot-theme">
        <header class="bg-gray-800 text-white pt-10"
            style="background-color: {{ config('app.settings.colors.primary') }}">
            <div class="container mx-auto flex justify-between items-center">
                <div class="logo flex justify-center w-full md:w-1/5 order-2">
                    <a href="{{ route('home') }}">
                        @if (Illuminate\Support\Facades\Storage::disk('local')->has('public/images/custom-logo.png'))
                            <img class="max-w-logo" src="{{ url('storage/images/custom-logo.png') }}" style="height:70px !important;" alt="logo">
                        @else
                            <img class="max-w-logo" src="{{ asset('images/logo.png') }}" style="height:70px !important;" alt="logo">
                        @endif
                    </a>
                </div>
                <div class="socials hidden md:flex w-2/5 order-1">
                    @foreach (config('app.settings.socials') as $social)
                        <a href="{{ $social['link'] }}" target="_blank"
                            class="text-lg mr-2 px-2 py-1 rounded hover:bg-white hover:bg-opacity-25"
                            rel="noopener noreferrer"><i class="{{ $social['icon'] }}"></i></a>
                    @endforeach
                </div>
                <div class="locale hidden md:flex justify-end w-2/5 order-3">
                    <div class="relative">
                        <form action="{{ route('locale', '') }}" id="locale-form" method="post">
                            @csrf
                            <select
                                class="block appearance-none bg-gray-200 cursor-pointer text-gray-800 px-2 py-1 pr-5 rounded-md focus:outline-none"
                                name="locale" id="locale">
                                @foreach (config('app.locales') as $locale)
                                    <option {{ app()->getLocale() == $locale ? 'selected' : '' }}>
                                        {{ $locale }}</option>
                                @endforeach
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
        <div class="bg-gray-800 text-white py-10" style="background-color: {{ config('app.settings.colors.primary') }}">
            <div class="container mx-auto flex flex-col md:flex-row">
                @livewire('frontend.actions', ['in_app' => isset($page) ? true : false])
                <div class="ads md:w-30p order-1">
                    @if (config('app.settings.ads.one'))
                        <div class="flex justify-center items-center max-w-full m-4 ads-one">{!! config('app.settings.ads.one') !!}
                        </div>
                    @endif
                </div>
                <div class="ads md:w-30p order-3">
                    @if (config('app.settings.ads.five'))
                        <div class="flex justify-center items-center max-w-full m-4 ads-five">{!! config('app.settings.ads.five') !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <main class="py-10 px-5 md:px-0">
            <div class="container mx-auto flex flex-col md:flex-row">
                @if (isset($page))
                    @livewire('frontend.page', ['page' => $page])
                @else
                    @livewire('frontend.app')
                @endif
                <div class="w-full md:w-1/6 order-1">
                    @if (config('app.settings.ads.two'))
                        <div class="flex justify-center items-center max-w-full m-4 ads-two">{!! config('app.settings.ads.two') !!}
                        </div>
                    @endif
                </div>
                <div class="w-full md:w-1/6 order-3">
                    @if (config('app.settings.ads.three'))
                        <div class="flex justify-center items-center max-w-full m-4 ads-three">{!! config('app.settings.ads.three') !!}
                        </div>
                    @endif
                </div>
            </div>
            @if (!isset($page) && isset($in_page->content))
                <div class="in-app-page page container mx-auto pt-10">
                    {!! $in_page->content !!}
                </div>
            @endif
        </main>
        <footer class="bg-gray-800 py-10" style="background-color: {{ config('app.settings.colors.primary') }}">
            <div class="container mx-auto md:space-y-10">
                <div>
                    @livewire('frontend.nav')
                </div>
                <div class="hidden md:block border-2 border-dashed border-white border-opacity-10"></div>
                <div class="copyright text-white text-center text-sm">
                    {{ __('Copyright ') }}
                    <script>
                        document.write((new Date()).getFullYear())

                    </script>
                    - {{ config('app.settings.name') }}
                </div>
            </div>
        </footer>
    </div>
    @if (config('app.settings.cookie.enable'))
        <div id="cookie" class="hidden fixed w-full bottom-0 left-0 p-4 bg-gray-900 text-white justify-between">
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
    @if (!isset($page))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const email = '{{ App\Models\TMail::getEmail(true) }}';
                const add_mail_in_title = "{{ config('app.settings.add_mail_in_title', true) ? 'yes' : 'no' }}"
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
            document.getElementById('refresh').classList.add('pause-spinner');
        });
        let counter = parseInt({{ config('app.settings.fetch_seconds') }});
        setInterval(() => {
            if (counter === 0 && document.getElementById('imap-error') === null && !document.hidden) {
                document.getElementById('refresh').classList.remove('pause-spinner');
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
    <script defer>
    setTimeout(() => {
        const enable_ad_block_detector = {{ config('app.settings.enable_ad_block_detector', false) ? 1 : 0 }}
        if(!document.getElementById('Q8CvrZzY9fphm6gG') && enable_ad_block_detector) {
            document.querySelector('.groot-theme').remove()
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
</body>

</html>
