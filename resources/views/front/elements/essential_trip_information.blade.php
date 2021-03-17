@if ($essential_trip_informations)
<div class="mb-8 bg-white p-2 lg:p-4">
    <h2 class="mb-2 font-display text-2xl text-primary uppercase">Essential Trip Info</h2>
    <ul class="text-sm px-2">
        @foreach ($essential_trip_informations as $trip_info)
        <li class="mb-1">
            <a href="{!! ($trip_info->link)?$trip_info->link:'javascript:;' !!}" target="_blank">
                <svg class="w-4 h-4 mr-1 text-gray">
                    <use xlink:href="{{ asset('assets/front/img/sprite.svg') }}#arrownarrowright" />
                </svg>
                {{ $trip_info->name }}
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endif
