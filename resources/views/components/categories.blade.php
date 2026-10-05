<ul class="portfolio-filter nav nav-tabs justify-content-center border-0 fw-500 pb-4">
    @if ($category->isNotEmpty())
        <li class="nav active"><a data-filter="*" href="#">All</a></li>
        @foreach ($category as $category)
            <li class="nav"><a data-filter=".{{ $category->id }}" href="#">{{ $category->name }}</a></li>
        @endforeach
    @endif
</ul>
