<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') – Royal Himalayan Holidays</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Roboto+Condensed:wght@700&display=swap"
        rel="stylesheet">
    {{-- Smartmenus --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/smartmenus@1.1.1/dist/css/sm-core-css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/smartmenus@1.1.1/dist/css/sm-simple/sm-simple.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @stack('styles')

    <style>
        [x-cloak] {
            display: none;
        }
        .sm-simple >li> a{
            font-family: 'Roboto Condensed', sans-serif;
            color: #124b80;
        }
        .sm-simple >li> a:hover, .sm-simple >li> a:focus, .sm-simple >li> a:active{
            font-family: 'Roboto Condensed', sans-serif;
            background: #124b80;
            color: white;
        }
        .sm-simple a, .sm-simple a:hover, .sm-simple  a:focus, .sm-simple a:active {
            font-family: 'Inter', sans-serif;
            color: unset;
        }
        @media (min-width: 768px){
            .sm-simple{
                border: none;
                background: transparent;
                box-shadow: none;
            }
            .sm-simple >li {
                border-left: none;
            }
            .sm-simple ul {
                border: none
            }
            .sm-simple a{
                color: #124b80;
            }
            .sm-simple a:hover, .sm-simple a:focus, .sm-simple a:active, .sm-simple a.highlighted{
                background: #124b80;
                color: white;
            }
        }
    </style>

</head>

<body>

    @include('partials.header')

    <div id="topIO"></div>

    @yield('content')

    @include('partials.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/smartmenus@1.1.1/dist/jquery.smartmenus.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<script>
    // 
    // Initialize jQuery Smartmenus
    $(function() {
        $('#main-nav').smartmenus();
    });

    const header = document.querySelector('header')
    const target = document.querySelector('#topIO')
    window.addEventListener('DOMContentLoaded', () => {

        const headerScrollObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if(!entry.isIntersecting){
                    header.classList.add('bg-white')
                    header.classList.add('shadow-md')
                }else {
                    header.classList.remove('bg-white')
                    header.classList.remove('shadow-md')
                }
            })
        })
        headerScrollObserver.observe(target)
    })
</script>

@stack('scripts')

</html>