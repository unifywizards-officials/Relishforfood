@foreach ($blogs as $index => $blog)
    @include('guest.blog.blog_item', ['blog' => $blog, 'index' => $baseIndex + $index])
@endforeach
