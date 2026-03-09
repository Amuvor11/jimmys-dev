@include('_partials/_header')

{{-- Hero --}}
<section class="jv-hero" style="background-image: url('{{ asset('img/Jimmy_main.png') }}');">
    <div class="jv-hero__overlay"></div>
    <div class="jv-hero__content">
        <div style="height: 80px"></div>
        <div>
            <h1 class="jv-hero__title">{{ __("Jimmy's Vienna - where Vienna lives through you") }}</h1>
            <p class="jv-hero__subtitle">{{ __('Boutique residences designed to match your rhythm, your mood, your Vienna.') }}</p>
        </div>
        <a href="{{ (App::currentLocale() == 'de') ? 'https://apartments.jimmys.at/apartments/' : 'https://apartments.jimmys.at/en/apartments-2/' }}" class="jv-hero__cta">{{ __('Reserve your stay') }}</a>
    </div>
</section>

{{-- Choose your Vienna story — carousel (4 items, 2 per slide) --}}
<section class="jv-story-block">
    <h2 class="jv-story-block__title">
        <span class="jv-story-block__title-line">CHOOSE <span class="jv-story-block__title-script">{{ __('Your') }}</span></span>
        <span class="jv-story-block__title-line">VIENNA STORY</span>
    </h2>
    <div class="jv-story-viewport">
        <div class="jv-story-viewport__inner">
        <div class="jv-story-track" id="jv-story-track">
            @php
                $storyItems = ($locations ?? collect())->take(4);
                $fallbacks = [
                    (object)['slug' => 'xxl_apartments', 'title' => 'Emerald', 'address' => 'Steingasse 33', 'zip' => '1030', 'ort' => 'Wien'],
                    (object)['slug' => 'xxl_apartments', 'title' => 'Dandelion', 'address' => 'Knöllgasse 23', 'zip' => '1100', 'ort' => 'Wien'],
                    (object)['slug' => 'xxl_apartments', 'title' => 'Sapphire', 'address' => 'Praterstraße 1', 'zip' => '1020', 'ort' => 'Wien'],
                    (object)['slug' => 'xxl_apartments', 'title' => 'Siena', 'address' => 'Mariahilfer Straße 51', 'zip' => '1060', 'ort' => 'Wien'],
                ];
                $defaultBg = asset('img/Jimmy_main.png');
            @endphp
            @for ($i = 0; $i < 4; $i++)
                @php
                    $loc = $storyItems->get($i) ?? $fallbacks[$i];
                    $slugSafe = str_replace('-', '_', $loc->slug ?? 'xxl_apartments');
                    $bg = $storyItems->has($i) ? asset('img/locations/' . $slugSafe . '/' . $slugSafe . '_0.jpg') : $defaultBg;
                @endphp
                <div class="jv-story-cell">
                    <div class="jv-story__card" style="background-image: url('{{ $bg }}');">
                        <h3>{{ $loc->title ?? str_replace('_', ' ', ucfirst($loc->slug ?? 'xxl_apartments')) }}</h3>
                        <p>{{ $loc->address ?? '' }}{{ !empty($loc->zip) ? ', ' . $loc->zip : '' }}{{ !empty($loc->ort) ? ' ' . $loc->ort : '' }}</p>
                        <a href="{{ route('location', $loc->slug ?? 'xxl_apartments') }}"></a>
                    </div>
                </div>
            @endfor
        </div>
        </div>
    </div>
    <div class="jv-dots jv-story-dots" id="jv-story-dots" role="tablist" aria-label="{{ __('Carousel') }}">
        <span class="jv-dots__dot jv-dots__dot--active" data-slide="0" role="tab" aria-selected="true" tabindex="0"></span>
        <span class="jv-dots__dot" data-slide="1" role="tab" aria-selected="false" tabindex="0"></span>
        <span class="jv-dots__dot jv-dots__dot--mobile" data-slide="2" role="tab" aria-selected="false" tabindex="0"></span>
        <span class="jv-dots__dot jv-dots__dot--mobile" data-slide="3" role="tab" aria-selected="false" tabindex="0"></span>
    </div>
</section>
<script>
(function(){
    var track = document.getElementById('jv-story-track');
    var dots = document.getElementById('jv-story-dots');
    if (!track || !dots) return;
    var dotsList = dots.querySelectorAll('[data-slide]');
    var currentSlide = 0;
    var autoplayMs = 6000;
    var autoplayTimer = null;
    function isMobile() { return window.matchMedia('(max-width: 900px)').matches; }
    function getTotalSlides() { return isMobile() ? 4 : 2; }
    function getStepPercent() { return isMobile() ? 25 : 50; }
    function goTo(slideIndex) {
        var total = getTotalSlides();
        currentSlide = Math.max(0, Math.min(slideIndex, total - 1));
        track.style.transform = 'translateX(-' + (currentSlide * getStepPercent()) + '%)';
        dotsList.forEach(function(dot, i) {
            var show = isMobile() ? true : (i < 2);
            dot.style.display = show ? '' : 'none';
            dot.classList.toggle('jv-dots__dot--active', i === currentSlide);
            dot.setAttribute('aria-selected', i === currentSlide);
        });
    }
    function next() { goTo((currentSlide + 1) % getTotalSlides()); }
    function startAutoplay() { stopAutoplay(); autoplayTimer = setInterval(next, autoplayMs); }
    function stopAutoplay() { if (autoplayTimer) { clearInterval(autoplayTimer); autoplayTimer = null; } }
    function onResize() {
        var total = getTotalSlides();
        if (currentSlide >= total) goTo(0);
        else goTo(currentSlide);
    }
    dotsList.forEach(function(dot, i) {
        dot.addEventListener('click', function() { goTo(i); startAutoplay(); });
        dot.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); goTo(i); startAutoplay(); }
        });
    });
    window.addEventListener('resize', onResize);
    goTo(0);
    startAutoplay();
})();
</script>

<section class="jv-text-block">
    <p class="jv-text-block__script">Jimmy's Vienna</p>
    <h2 class="jv-text-block__heading">{{ __("You don't just visit – you live the city") }}</h2>
    <p class="jv-text-block__body">
        {{ __("Jimmy's Vienna offers boutique residences throughout the city, each one inspired by its neighborhood, atmosphere, and unique story. Designed for travelers who value space, comfort, and character. Every residence is thoughtfully designed and gives you the freedom to enjoy Vienna on your own terms, whether you stay for a few nights or longer. Each of our locations shows a different side of Vienna, but all share the same qualities: comfort, quality, and a sense of home.") }}
    </p>
</section>

<div class="jv-book-container">
    <section class="jv-book-cta" style="background-image: url('{{ asset('img/Jimmy_book.png') }}');">
        <div class="jv-book-cta__inner">
            <h2 class="jv-book-cta__title">{{ __('BOOK WITH CONFIDENCE') }}</h2>
            <p class="jv-book-cta__subtitle">{{ __('BEST RATE GUARANTEED WHEN YOU BOOK DIRECT') }}</p>
            <a href="{{ (App::currentLocale() == 'de') ? 'https://apartments.jimmys.at/apartments/' : 'https://apartments.jimmys.at/en/apartments-2/' }}" class="jv-book-cta__btn">{{ __('book now') }}</a>
        </div>
    </section>
</div>

<section class="jv-begins-block">
    <h2 class="jv-begins-block__title">
        <span class="jv-begins-block__title-line">WHERE <span class="jv-begins-block__title-script">{{ __('Your') }}</span></span>
        <span class="jv-begins-block__title-line">VIENNA STORY BEGINS</span>
    </h2>
    <div class="jv-begins-block__grid" id="jv-begins-grid">
        <div class="jv-grid__item" style="background-image: url('{{ asset('img/locations/xxl_apartments/102/jimmys_apartments_xxl_apartments_102_0.jpg') }}');"></div>
        <div class="jv-grid__item" style="background-image: url('{{ asset('img/locations/xxl_apartments/123/jimmys_apartments_xxl_apartments_123_0.jpg') }}');"></div>
        <div class="jv-grid__item" style="background-image: url('{{ asset('img/locations/xxl_apartments/126/jimmys_apartments_xxl_apartments_126_0.jpg') }}');"></div>
        <div class="jv-grid__item" style="background-image: url('{{ asset('img/locations/xxl_apartments/128/jimmys_apartments_xxl_apartments_128_0.jpg') }}');"></div>
    </div>
</section>
<script>
(function(){
    var grid = document.getElementById('jv-begins-grid');
    if (!grid) return;
    function resetScroll() { grid.scrollLeft = 0; }
    resetScroll();
    window.addEventListener('load', resetScroll);
    window.addEventListener('pageshow', function(e) { if (e.persisted) resetScroll(); });
})();
</script>

<section class="jv-newsletter-cta">
    <h2 class="jv-newsletter-cta__title">
        <span class="jv-newsletter-cta__title-line">STAY INSPIRED <span class="jv-newsletter-cta__title-script">{{ __('And') }}</span> JOIN</span>
        <span class="jv-newsletter-cta__title-line">5K+ VIENNA LOVERS</span>
    </h2>
    <p class="jv-newsletter-cta__subtitle">{{ __("Subscribe for Vienna tips, exclusive offers, and Jimmy's stories") }}</p>
    <a href="{{ route('newsletter-signup') }}" class="jv-newsletter-cta__btn">{{ __('Newsletter signup') }}</a>
</section>

<section class="jv-blog">
    <h2 class="jv-blog__title">{{ __('blog') }}</h2>
    <div class="jv-blog__grid">
        <a href="{{ route('blog') }}" class="jv-blog-card">
            <div class="jv-blog-card__img" style="background-image: url('{{ asset('img/blog_placeholder.jpg') }}');"></div>
            <h3 class="jv-blog-card__title">{{ __('Summer in Vienna: Rooftops, Danube & Open-Air Culture') }}</h3>
        </a>
        <a href="{{ route('blog') }}" class="jv-blog-card">
            <div class="jv-blog-card__img" style="background-image: url('{{ asset('img/blog_placeholder.jpg') }}');"></div>
            <h3 class="jv-blog-card__title">{{ __('Vienna in Spring: Where to See It Bloom') }}</h3>
        </a>
        <a href="{{ route('blog') }}" class="jv-blog-card">
            <div class="jv-blog-card__img" style="background-image: url('{{ asset('img/blog_placeholder.jpg') }}');"></div>
            <h3 class="jv-blog-card__title">{{ __('Christmas in Vienna: Markets, Lights & Slow Evenings') }}</h3>
        </a>
        <a href="{{ route('blog') }}" class="jv-blog-card">
            <div class="jv-blog-card__img" style="background-image: url('{{ asset('img/blog_placeholder.jpg') }}');"></div>
            <h3 class="jv-blog-card__title">{{ __('Long-Term Stay in Vienna: What to Consider') }}</h3>
        </a>
    </div>
</section>

@include('_partials/_footer')

</body>
</html>
