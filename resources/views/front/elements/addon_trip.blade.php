<a href="{{ $trip->link }}" class="block mb-2">
    <div class="px-2 py-4 text-white" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), center / cover url('{{ $trip->thumbImageUrl }}')">
        <h1 class="font-display text-xl uppercase">{{ $trip->name }}</h1>
        <div class="days mb-4">{{ $trip->days }} days</div>
        <div class="price"><span class="text-xs">from</span> <br><b>USD {{ number_format($trip->offer_price) }}</b></div>
    </div>
</a>
