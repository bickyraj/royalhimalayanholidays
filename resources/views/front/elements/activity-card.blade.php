<a href="{{ route('front.activities.show', $activity->slug) }}">
    <div class="activity relative">
        <img src="{{ $activity->imageUrl }}" alt="" class="block w-full" style="padding-right: 10px;">
        <div class="text absolute">
            <h2 class="font-display uppercase text-white px-2 py-4">{{ $activity->name }}</h2>
        </div>
        <!-- <div class="tours">
            <div class="fs-xl bold">10</div>
            <div class="fs-sm">tours</div>
        </div> -->
    </div>
</a>
