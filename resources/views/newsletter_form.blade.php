@include('_partials/_head')
<body class="newsletter-lp">
    <div class="page-wrapper d-flex flex-column justify-content-between">
        
        @if(App::isLocale('en'))
        
            <div class="content-wrapper d-flex flex-column justify-content-center large-pad">
                <img src="{{ asset('img/jimmys_lp_logo.png') }}" srcset="{{ asset('img/jimmys_lp_logo.svg') }} 1x" class="img-fluid logo mb-5">
            
                <div>
                    <h1 class="mb-4">Stay in touch</h1>
                    <p class="mb-4 mb-xl-5">Subscribe to our newsletter and receive exclusive offers<br> and news about Jimmy’s Apartments directly by e-mail.</p>

                    <form id="sub_form" method="post" action="{{ route('subscribe') }}" novalidate>
                        @csrf
                        <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
                        <input type="hidden" class="recaptchaResponse" name="g-recaptcha-response">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="vorname" name="first_name" placeholder="First name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="nachname" name="last_name" placeholder="Last name">
                            </div>

                            <div class="form-group col-12 col-md-9">
                                <input type="e-mail" class="form-control" id="email" name="sub_email" placeholder="Your email adress">
                            </div>

                            <div class="col-12 col-md-3 d-flex d-md-block justify-content-center">
                                <button type="submit" class="btn btn-submit btn-black">Subscribe</button> 
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-4 bk-bleu col-mit">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="agree-sub" value="1" id="agree-sub-popup" >
                                    <label class="form-check-label lowercase" for="agree-sub-popup"><span>By clicking the subscribe button, you agree to the <a target="_blank" href="{{route('DSGVO')}}">{{ __('DSGVO') }}</a></span></label>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3 lowercase"><span>
                                    This site is protected by reCAPTCHA and the Google
                                    <a class="text-black" target="_blank" rel="noopener noreferrer" href="https://policies.google.com/privacy">Privacy Policy</a> and
                                    <a class="text-black" target="_blank" rel="noopener noreferrer" href="https://policies.google.com/terms">Terms of Service</a> apply.
                            </span></div>

                        </div>
                    </form>
                    <div id="sub_msg" class="d-none py-2 text-center"></div>
                </div>
            </div>

            <div class="large-pad footer-info d-flex flex-column align-items-start lowercase pt-5 pb-md-5 pb-lg-0 bk-bleu">
                    <p class="mb-0"><strong>Bookings and more information:</strong></p>
                    <a href="https://jimmys.at">jimmys.at</a>
                    <a href="mailto:office@jimmys.at">office@jimmys.at</a>
                    <a href="tel:+4319970010" class="mb-4 mb-md-0">+43&nbsp;1&nbsp;997&nbsp;0010</a>
                </div>

            <div class="background-lang-container">
                <img src="{{ asset('img/background_en.jpg') }}" class="img-fluid bk-img-en">
            </div>
        
        @else

            <div class="content-wrapper d-flex flex-column justify-content-center large-pad">
                <img src="{{ asset('img/jimmys_lp_logo.png') }}" srcset="{{ asset('img/jimmys_lp_logo.svg') }} 1x" class="img-fluid logo mb-5">
            
                <div>
                    <h1 class="mb-4">Bleiben wir in Verbindung</h1>
                    <p class="mb-4 mb-xl-5">Für unseren Newsletter anmelden und exklusive Angebote<br> und Neuigkeiten zu Jimmy’s Apartments direkt per E-Mail erhalten.</p>

                    <form id="sub_form" method="post" action="{{ route('subscribe') }}" novalidate>
                        @csrf
                        <input type="hidden" class="recaptchaResponse" name="g-recaptcha-response">
                        <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="vorname" name="first_name" placeholder="Vorname">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="nachname" name="last_name" placeholder="Nachname">
                            </div>

                            <div class="form-group col-12 col-md-9">
                                <input type="e-mail" class="form-control" id="email" name="sub_email" placeholder="Ihre email adresse">
                            </div>

                            <div class="col-12 col-md-3 d-flex d-md-block justify-content-center">
                                <button type="submit" class="btn btn-submit btn-black">Anmelden</button> 
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-4 bk-yellow col-mit">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="agree-sub" value="1" id="agree-sub-popup" >
                                    <label class="form-check-label lowercase" for="agree-sub-popup"><span>Mit der Registrierung für den Newsletter stimmen Sie den <a target="_blank" href="{{route('DSGVO')}}">Daten schutzbestimmungen</a> zu.</span></label>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3 lowercase"><span>
                                Diese Website ist durch reCAPTCHA geschützt und es gelten die Google-
                                <a class="text-black" target="_blank" rel="noopener noreferrer" href="https://policies.google.com/privacy?hl=de">Datenschutzrichtlinien</a> und
                                <a class="text-black" target="_blank" rel="noopener noreferrer" href="https://policies.google.com/terms?hl=de">Nutzungsbedingungen.</a>
                            </div>
                    </form>
                    <div id="sub_msg" class="d-none py-2 text-center"></div>
                </div>
            </div>

            <div class="large-pad footer-info d-flex flex-column align-items-start lowercase pt-5 pb-md-5 pb-lg-0 bk-yellow">
                    <p class="mb-0"><strong>Buchen, anfragen, informieren:</strong></p>
                    <a href="https://jimmys.at">jimmys.at</a>
                    <a href="mailto:office@jimmys.at">office@jimmys.at</a>
                    <a href="tel:+4319970010" class="mb-4 mb-md-0">+43&nbsp;1&nbsp;997&nbsp;0010</a>
                </div>

            <div class="background-lang-container">
                <img src="{{ asset('img/home_background_de.jpg') }}" class="img-fluid">
            </div>
        
        @endif

    </div>    

    @include('_partials/_scripts')
</body>
</html>