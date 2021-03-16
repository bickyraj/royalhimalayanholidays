<nav :class="{show: mobilenavOpen}">
    <ul id="main-nav" class="sm sm-simple">
        @if($menus)
            @foreach($menus as $menu)
            <li>
                <a href="{!! ($menu->link)?$menu->link:'javascript:;' !!}" class="font-display uppercase text-primary">{{ $menu->name }}</a>
                @if(iterator_count($menu->children))
                <ul>
                    @foreach($menu->children()->orderBy('display_order', 'asc')->get() as $child)
                    <li>
                        <a href="{!! ($child->link)?$child->link:'javascript:;' !!}">{{ $child->name }}</a>
                        @if(iterator_count($child->children))
                          @include('front.elements.child-menu', ['children' => $child->children()->orderBy('display_order', 'asc')->get(), 'n_count' => 2])
                        @endif
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        @endif
    </ul>
</nav><!-- Nav -->
@push('scripts')
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
@endpush
