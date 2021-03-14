<!-- Nav -->
<nav>
    <ul id="main-nav" class="header__nav sm sm-simple">
        @if($menus)
        @foreach($menus as $menu)
          <li>
            <a href="{!! ($menu->link)?$menu->link:'javascript:;' !!}" class="header__navlink">{{ $menu->name }}</a>
            @if(iterator_count($menu->children))
            <ul class="submenu">
              <!-- Level two dropdown-->
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
