<a href="{{ route('front.blogs.show', $blog->slug) }}">
    <div class="article">
        <div class="image">
            <img src="{{ $blog->imageUrl }}" alt="{{ $blog->name }}">
        </div>
        <div class="content">
            <h2>{{ $blog->name }}</h2>
            <div class="flex items-center text-xs text-gray"><svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                {{ formatDate($blog->blog_date) }}
            </div>
            <p class="text-sm">
                {{ truncate(strip_tags($blog->description)) }}
            </p>
        </div>
    </div>
</a>
