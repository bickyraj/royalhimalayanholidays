<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- meta tags --}}
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta property="og:title" content="@yield('meta_og_title')" />
    <meta property="og:url" content="@yield('meta_og_url')" />
    <meta property="og:site_name" content="@yield('meta_og_site_name', Setting::get('site_name')??'Namaste Nepal Trekking & Research Hub Pvt.Ltd')" />
    <meta property="og:image" content="@yield('meta_og_image')" />
    <meta property="og:description" content="@yield('meta_og_description')" />
    {{-- end of meta tags --}}

    <!-- Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/app.css') }}">
    <link href="{{ asset('assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/front-style.css') }}">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    @stack('styles')
</head>

<body class="home-page" x-data="{searchWidgetOpen: false}">
    <!-- scrollspy for tour-details page -->

    <!-- Header -- Topbar & Navbar-->
    @include('front.elements.header')
    {{-- end of header --}}

    @yield('content')

    <!-- Footer -->
    @include('front.elements.footer')
    {{-- end of footer --}}

    <!-- Scripts -->
    <!-- jQuery-->
    <script src="{{ asset('assets/front/js/jQuery-3.3.1.min.js') }}"></script>
    <!-- Popper -->
    <!-- Bootstrap -->
    {{-- <script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script> --}}
    <!-- App.js -->
    <script src="{{ asset('assets/front/js/app.js') }}"></script>
    <script src="{{ asset('assets/front/js/home.js') }}"></script>
    <script src="{{ asset('assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/toastr-option.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    var status = jqXHR.status;
                    if (status == 404) {
                        toastr.warning("Element not found.");
                    } else if (status == 422) {
                        toastr.info(jqXHR.responseJSON.message);
                    }
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
