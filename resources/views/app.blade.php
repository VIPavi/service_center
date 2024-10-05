<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Service Center</title>
        @include('includes.styles')
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body class="font-sans">
        @include('includes.navbar')
        <main id="main">
            {{-- @yield('sections') --}}
            @component('components.hero')@endcomponent
            @component('components.callback')@endcomponent
            @component('components.locations')@endcomponent
            @component('components.services')@endcomponent
            @component('components.offer')@endcomponent
            @component('components.contact')@endcomponent
            @component('components.gallery')@endcomponent
            @component('components.about')@endcomponent
            @component('components.testimonials')@endcomponent
        </main>
        @include('includes.footer')
        @include('includes.scripts')
        <script>
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            const imageView = document.getElementById('image-view');
            const closeModalButton = document.getElementById('closeModal');
            function fullView(e, src) {
                e.preventDefault();
                modal.show();
                imageView.src = src;
            }
            closeModalButton.addEventListener('click', function (e) {
                e.preventDefault();
                modal.hide();
            });
        </script>
    </body>
</html>