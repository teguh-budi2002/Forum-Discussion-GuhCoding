<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Forum GuhCoding</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    {{-- Flowbite --}}
    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>

    {{-- Plugin no tel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    {{-- CK Editor --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    {{-- Vue-Multiselect Style --}}
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
    @notifyCss
    @stack('styles')
    {{-- Nav Style --}}
    <link rel="stylesheet" href="{{ asset('/css/nav-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/master-styles.css') }}">
</head>

<body class="bg-slate-600">

    {{-- navbar --}}
    @include('partial.nav')

    <div class="w-full h-full" id="modal-regis">
        @include('notify::components.notify')
        <x:notify-messages />
        {{-- Main --}}
        @yield('content')
        {{-- Search Component --}}
        <div class="{{ Request::is('/') ? "hidden" : '' }}" id="live-search">
            <live-search-component/>
        </div>
    </div>
    {{-- Footer --}}
    @include('partial.footer')
    {{-- Mix Js --}}
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/nav.js') }}"></script>
    @stack('js-stack')
    @notifyJs
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('editor', {
                toolbarCanCollapse: true,
                skin: 'office2013'
            })
        })
    </script>
</body>

</html>
