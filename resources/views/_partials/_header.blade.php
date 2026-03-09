@include('_partials._head')
<body class="{{ str_replace('.', '-', Route::currentRouteName()) }}">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RM69WS4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="jv-header">
    <div class="jv-header__left">
        <button type="button" class="jv-header__menu" id="toggler" aria-label="Menu" aria-expanded="false">
            <span class="jv-header__menu-icon">
                <span></span><span></span><span></span>
            </span>
        </button>
        <div class="jv-header__lang">
            @if(LaravelLocalization::getCurrentLocale() == 'de')
                <span class="jv-header__lang-active">DE</span> / <a class="jv-header__lang-link" rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, []) }}">EN</a>
            @else
                <a class="jv-header__lang-link" rel="alternate" hreflang="de" href="{{ LaravelLocalization::getLocalizedURL('de', null, []) }}">DE</a> / <span class="jv-header__lang-active">EN</span>
            @endif
        </div>
    </div>
    <div class="jv-header__logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/Jimmy_logo.svg') }}" alt="Jimmy's XXL Apartments" width="173" height="60">
        </a>
    </div>
    <div class="jv-header__right">
        <a href="{{ (App::currentLocale() == 'de') ? 'https://apartments.jimmys.at/apartments/' : 'https://apartments.jimmys.at/en/apartments-2/' }}" class="jv-header__btn">{{ __('Reserve your stay') }}</a>
    </div>
</header>

<div id="main-nav" class="collapse jv-nav-overlay" aria-hidden="true">
    <button type="button" class="jv-nav-overlay__close" id="nav-close" aria-label="{{ __('Close menu') }}">
        <span aria-hidden="true">&times;</span>
    </button>
    <nav class="jv-nav-overlay__inner">
        <a href="{{ route('home') }}" class="jv-nav-overlay__logo">
            <img src="{{ asset('img/Jimmy_logo.svg') }}" alt="Jimmy's XXL Apartments" width="173" height="60">
        </a>
        <ul class="jv-nav-overlay__list">
            <li><a href="{{ route('location', 'xxl_apartments') }}">{{ __('Apartment Types') }}</a></li>
            @foreach ($locations ?? [] as $nav_location)
                @if ($nav_location->status == 1 && !empty($nav_location->info_slug) && $nav_location->slug == 'xxl_apartments')
                    <li><a href="{{ route($nav_location->info_slug) }}">{{ __('Infos zum Standort') }}</a></li>
                @endif
            @endforeach
            <li><a href="mailto:office@jimmys.at">{{ __('Anfragen') }}</a></li>
            <li><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
            <li><a href="{{ route('contact') }}">{{ __('Kontakt') }}</a></li>
        </ul>
    </nav>
</div>

<div id="book-now" class="d-flex flex-md-column" aria-hidden="true">
    <a href="{{ (App::currentLocale() == 'de') ? 'https://apartments.jimmys.at/apartments/' : 'https://apartments.jimmys.at/en/apartments-2/' }}" class="book-now book-now-pink">{{ __('Reservierung') }}</a>
    <a href="tel:+4319970010" class="book-now book-now-black d-xl-none">+43 1 997 0010</a>
    <div class="dropright d-none d-xl-block">
        <a href="#" class="book-now book-now-black dropdown-toggle" data-toggle="dropdown">+43 1 997 0010</a>
        <div class="dropdown-menu">+43 1 997 0010</div>
    </div>
</div>

<script>
(function(){
    var toggler = document.getElementById('toggler');
    var nav = document.getElementById('main-nav');
    var closeBtn = document.getElementById('nav-close');
    function setMenuOpen(open) {
        if (!nav) return;
        if (open) {
            nav.classList.add('show');
            nav.setAttribute('aria-hidden', 'false');
        } else {
            nav.classList.remove('show');
            nav.setAttribute('aria-hidden', 'true');
        }
        if (toggler) toggler.setAttribute('aria-expanded', open ? 'true' : 'false');
    }
    if (toggler && nav) {
        toggler.addEventListener('click', function(){
            setMenuOpen(!nav.classList.contains('show'));
        });
    }
    if (closeBtn && nav) {
        closeBtn.addEventListener('click', function(){ setMenuOpen(false); });
    }
})();
</script>
