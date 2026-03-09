@include('_partials/_head')
<body class="newsletter-lp d-flex flex-column justify-content-center">
    
        <div class="menu-case d-flex flex-column align-items-center align-items-md-start large-pad py-4 my-auto">
            <div class="d-flex justify-content-center align-items-center logo-wrapper">
                <img src="{{ asset('img/jimmys_lp_logo.png') }}" srcset="{{ asset('img/jimmys_lp_logo.svg') }} 1x" class="img-fluid">
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center btn-wrapper">
                <a hreflang="de" href="{{ route('newsletter-signup') }}" class="btn btn-black mb-4">Deutsch</a>
                <a hreflang="en" href="/en/newsletter-signup" class="btn btn-black">English</a>
            </div>
        </div>
    
        <footer class="d-flex flex-column align-items-center align-items-md-start flex-md-row large-pad pb-md-5">
            <div class="mr-md-5 mb-5 mb-md-0 d-flex flex-column align-items-center align-items-md-start">
                <a href="mailto:office@jimmys.at">office@jimmys.at</a>
                <span class="text-center text-md-left">Am einfachsten, Sie schicken uns ein kurzes<br class="d-none d-md-block"> e-mail - wir Antworten wirklich schnell!</span>
            </div>
            <div class="d-flex flex-column align-items-center align-items-md-start">
                <a href="tel:+4319970010">+43&nbsp;1&nbsp;997&nbsp;0010</a>
                <span class="text-center text-md-left">Gerne stehen wir Ihnen werktags von 8:00-18:00 Uhr zur Verfügung.</span>
            </div>
        </footer>
    
        <div class="background-container">
            <img src="{{ asset('img/home_background_de.jpg') }}" class="img-fluid">
        </div>
        {{-- @if(App::isLocale('en'))

        @else
                
        @endif --}}

    @include('_partials/_scripts')
</body>
</html>