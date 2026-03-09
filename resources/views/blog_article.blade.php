@isset($blog->cover_image)
    @section('og_image', asset('storage/articles/'.$blog->slug.'/'.$blog->cover_image))
    @section('og_image_width', getimagesize('storage/articles/'.$blog->slug.'/'.$blog->cover_image)[0])
    @section('og_image_height', getimagesize('storage/articles/'.$blog->slug.'/'.$blog->cover_image)[1])
@endisset
@section('head_title', $blog['title_' . $app->getLocale()])
@section('head_desc', \Illuminate\Support\Str::words(strip_tags($blog['body_' . $app->getLocale()]),35))

@include('_partials/_header')

<main id="article"></main>

@include('_partials/_footer')

</body>
</html>
