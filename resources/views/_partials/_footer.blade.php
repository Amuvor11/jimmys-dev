<footer class="jv-footer">
    <div class="jv-footer__logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/Jimmy_logo.svg') }}" alt="Jimmy's XXL Apartments" width="173" height="60">
        </a>
    </div>
    <div class="jv-footer__col">
        <a href="tel:+4319970010">+43-1-9970010</a><br>
        <a href="mailto:office@jimmys.at">office@jimmys.at</a><br>
        <a href="https://www.instagram.com/jimmys.xxl/" target="_blank" rel="noopener noreferrer">Instagram</a><br>
        <a href="https://www.tiktok.com/@jimmys.xxl" target="_blank" rel="noopener noreferrer">Tik Tok</a><br>
        <a href="https://www.facebook.com/profile.php?id=61573558692688" target="_blank" rel="noopener noreferrer">Facebook</a>
    </div>
    <div class="jv-footer__col">
        <a href="{{ route('home') }}">{{ __('Home') }}</a><br>
        <a href="{{ route('location', 'xxl_apartments') }}">{{ __('Locations') }}</a><br>
        @foreach ($locations ?? [] as $nav_location)
            @if ($nav_location->status == 1 && !empty($nav_location->info_slug) && $nav_location->slug == 'xxl_apartments')
                <a href="{{ route($nav_location->info_slug) }}">{{ __('About') }}</a><br>
            @endif
        @endforeach
        <a href="{{ (App::currentLocale() == 'de') ? 'https://apartments.jimmys.at/apartments/' : 'https://apartments.jimmys.at/en/apartments-2/' }}">{{ __('Book') }}</a><br>
        <a href="{{ route('blog') }}">{{ __('Blog') }}</a>
    </div>
    <div class="jv-footer__col">
        <a href="{{ route('hausordnung') }}">{{ __('House rules') }}</a><br>
        <a href="{{ route('AGB') }}">{{ __('Booking conditions') }}</a><br>
        <a href="{{ route('DSGVO') }}">{{ __('Privacy Policy') }}</a><br>
        <a href="{{ route('AGB') }}">{{ __('Terms & Conditions') }}</a><br>
        <a href="{{ route('impressum') }}">{{ __('Imprint') }}</a>
    </div>
</footer>

<!-- <div id="ukraine" class="promo-card ukraine d-flex align-items-center px-5 py-3" style="display:none;">
    <div class="text-center w-100">We support Ukraine!</div>
    <button class="promo-close btn d-inline-block" id="ukraine-close"><span>&times;</span></button>
</div>

<div id="subscribe-popup" class="popup-wrapper" style="display:none;">
    <div class="popup-wrapper-img position-relative">
        <img src="{{ asset('img/popup_banner_img.jpg') }}" class="img-fluid" alt="">
        <h2 class="popup-h">{{ (App::currentLocale() == 'de') ? 'Abonnieren' : 'Subscribe' }}</h2>
        <button id="sub-popup-close">&times;</button>
    </div>
    <div class="popup-wrapper-text p-4">
        <form id="newsletter-form-popup" action="{{ route('subscribe') }}" method="POST" class="d-flex flex-column align-items-center" novalidate>
            @csrf
            <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
            <input type="hidden" class="recaptchaResponse" name="g-recaptcha-response">
            <input type="email" class="form-control mb-3" name="sub_email" placeholder="{{ (App::currentLocale() == 'de') ? 'Deine E-Mail' : 'Your email' }}">
            <button type="submit" class="btn-jimmys">{{ (App::currentLocale() == 'de') ? 'Abonnieren' : 'Subscribe' }}</button>
        </form>
        <div id="result-sub-popup"></div>
    </div>
</div> -->

@include('_partials._scripts')
