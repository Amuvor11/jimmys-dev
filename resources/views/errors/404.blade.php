{{-- @include('_partials/_header') --}}
@include('_partials._head')

<body class="404">
<div id="kontakt-hero">
    <div class="error-page-container h-100">
        <div class="content-container large-pad pt-5 pb-lg-5">
            <div class="row h-100 position-relative">
                <div class="col-lg-7 d-flex align-items-start py-5 order-2 order-lg-1">
                    <div class="text-center text-sm-left d-flex flex-column justify-content-between h-100 w-100">
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <h1 class="mb-4">Page not found</h1>
                            <a href={{route('home')}} class="btn btn-jimmys mb-5">{{__('Home page')}}</a>
                        </div>
                        <div>
                            <a href="tel:+4319970010" class="subtitle d-block">+43&nbsp;1&nbsp;997&nbsp;0010</a>
                            <p class="mb-4">{{__('Gerne stehen wir Werktags von 8:00-18:00 zur Verfügung.')}}</p>
                            {{-- <p><strong>{{__('Emergency Phone')}}</strong></p>
                            <a href="tel:+436601881221" class="subtitle">+43&nbsp;660&nbsp;188&nbsp;1221</a>
                            <p class="mb-4">{{__('Nur für Notfälle im Apartment.')}}</p> --}}
                            <p class="mt-4"><strong>E-Mail</strong></p>
                            <a class="subtitle" href="mailto:office@jimmys.at">office@jimmys.at</a>
                            <p class="mb-4">{{__('Schicken Sie uns einfach ein kurzes E-Mail - wir antworten wirklich schnell')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex justify-content-center align-items-start py-lg-5 order-1 order-lg-2 h-100">
                    <div class="error-img-wrapper">
                        <img src="{{ asset( 'img/error_404.png') }}" srcset="{{ asset( 'img/error_404.svg') }} 1x" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('_partials/_footer')

</body>
</html>
