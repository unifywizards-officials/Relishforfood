<div class="col-md-{{ $index < 2 ? '4' : '4' }} mb-4">
    <div class="card bg-transparent border-0 h-100">
        <div class="blog-image position-relative overflow-hidden border-radius-4px">
            <a href="{{ route('blog.detail', $blog->slug) }}">
                <img src="{{ $blog->image }}" style="width:100%"  alt="{{ $blog->title }}" />
            </a>
        </div>
        <div class="card-body p-3">
            <span class="fs-13 text-uppercase mb-2 d-block">
                <a href="" class="text-dark-gray fw-600">
                    
                </a>
                <a href="#" class="text-dark-gray">{{ \Carbon\Carbon::parse($blog->publish_date)->format('d F Y') }}</a>
            </span>
            <a href="{{ route('blog.detail', $blog->slug) }}"
               class="card-title mb-2 fw-600 fs-17 lh-26 text-dark-gray d-inline-block w-95">
               {{ Str::limit($blog->heading, 80) }}
            </a>
            <p class="mb-2 w-95">{{ Str::limit(strip_tags($blog->short_description), 70) }}</p>
            <a href="{{ route('blog.detail', $blog->slug) }}"
               class="card-link fs-12 text-uppercase text-dark-gray fw-700">
               More reading<i class="feather icon-feather-arrow-right icon-very-small"></i>
            </a>
        </div>
    </div>
</div>
