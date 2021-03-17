<div class="p-2">
    <div class="md:flex items-start">
        <div class="mb-4 md:mr-4 flex-shrink-0">
            <img src="{{ $item->imageUrl }}" width="160" class="alt="">
        </div>
        <div>
            <h2 class="mb-1 font-display text-2xl text-primary">{{ $item->name }}</h2>
            <div class="mb-2 text-gray">{{ $item->position }}</div>
            <p class="mb-4">
                {!! truncate(strip_tags($item->description)) !!}
            </p>
            <a href="{{ route('front.teams.show', ['slug' => $item->slug]) }}" class="btn btn-sm btn-primary">Read more</a>
        </div>
    </div>
</div>
