<!--Scripts-->

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js" integrity="sha256-qXBd/EfAdjOA2FGrGAG+b3YBn2tn5A6bhz+LSgYD96k=" crossorigin="anonymous"></script>
@if(config('app.recaptcha_key') && !in_array(request()->getHost(), config('app.recaptcha_skip_hosts', []), true))
<script src="https://www.google.com/recaptcha/api.js?render={{config('app.recaptcha_key')}}&hl={{App::getLocale()}}"></script>
@endif
<script src="{{ asset('js/jquery.ihavecookies.min.js')}} "></script>
@if ( in_array(Route::currentRouteName(), array('home', 'location')))
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
@endif

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    $('.scroll-to-top').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    $(window).on("load", function() {
        setTimeout(function(){
            var dismiss_ts = window.localStorage.getItem('dismiss_promo_0621');
            if (dismiss_ts === null || (Date.now() - parseInt(dismiss_ts)) > 12*60*60*1000) {
                $('#promo').addClass('visible');
            }

            if (!window.sessionStorage.getItem('we_support_ukraine')) {
                $('#ukraine').addClass('visible');
                top_banner_size();
            }
        },1000);
    });

    setTimeout(function(){
    var dismiss_sub = window.localStorage.getItem('dismiss_subscribe');
        if (dismiss_sub === null || (Date.now() - parseInt(dismiss_sub)) > 168*60*60*1000) {
            $('#subscribe-popup').addClass('visible');
        }
    },3000);
    
    $('#promo-close').on('click', function(){
        $('#promo').removeClass('visible');
        var ts = Date.now().toString();
        window.localStorage.setItem('dismiss_promo_0621', ts)
    });

    $('#sub-popup-close').on('click', function(){
        $('#subscribe-popup').removeClass('visible');
        var ts = Date.now().toString();
        window.localStorage.setItem('dismiss_subscribe', ts)
    });

    $('#ukraine-close').on('click', function(){
        $('#ukraine').removeClass('visible');
        $('body').css('padding-top', 0)
        window.sessionStorage.setItem('we_support_ukraine', true)
    });

    $(window).on('resize', _.debounce(top_banner_size, 50));

    function top_banner_size() {
        if (!window.sessionStorage.getItem('we_support_ukraine')) {
            $('body').css('padding-top', $('#ukraine').outerHeight())
        }
    }

    var useRecaptcha = typeof grecaptcha !== 'undefined' && grecaptcha.ready && "{{ config('app.recaptcha_key') }}";
    function submitForm(form, msgEl) {
        msgEl.removeClass('text-success text-danger').addClass('d-none');
        var doSubmit = function(token) {
            form.find(".recaptchaResponse").val(token || '');
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                success: function (response) {
                    msgEl.removeClass('d-none text-danger').addClass('text-success mt-3').text(response);
                },
                error: function (err) {
                    var errors = err.responseJSON && err.responseJSON.errors;
                    msgEl.removeClass('d-none text-success').addClass('text-danger mt-3').text(errors ? errors[Object.keys(errors)[0]][0] : 'Error');
                }
            });
        };
        if (useRecaptcha) {
            grecaptcha.ready(function() {
                grecaptcha.execute("{{ config('app.recaptcha_key') }}", { action: 'submit' }).then(doSubmit);
            });
        } else {
            doSubmit('');
        }
    }
    $('#sub_form').submit(function (e) {
        e.preventDefault();
        submitForm($(this), $('#sub_msg'));
    });
    $('#newsletter-form-popup').submit(function (e) {
        e.preventDefault();
        submitForm($(this), $('#result-sub-popup'));
    });
});
</script>

<script type="text/javascript">
    $('body').ihavecookies({
        link: "{{route('DSGVO')}}",
        delay: 800,
        moreInfoLabel: "{{__('Weitere Informationen')}}",
        acceptBtnLabel: "{{__('Akzeptieren')}}",
        advancedBtnLabel: "{{__('Cookies verwalten')}}",
        title: "{{__('Cookies & Datenschutz')}}",
        message:'{{__('Cookies ermöglichen es, Ihr Nutzungserlebnis auf unserer Website zu personalisieren, diese zeigen uns, welche Bereiche unserer Website besucht wurden und erlauben uns, die Effektivität von Werbeanzeigen und Websuchen zu messen. Mit diesem Einblick in das Nutzungsverhalten der Benutzer können wir unsere Kommunikation und unsere Produkte fortlaufend verbessern.')}}',
        cookieTypesTitle: "{{__('Zugelassene Cookies auswählen:')}}",
        fixedCookieTypeLabel: "{{__('Notwendig')}}",
        fixedCookieTypeDesc: "{{__('Dies sind Cookies, die für eine korrekte Funktionalität der Website notwendig sind')}}",
        cookieTypes: [
            {
                type: "{{__('Analytische Zwecke')}}",
                value: 'analytics',
                description: '{{ __("Google Analytics Cookies sind Analyse/Leistungs-Cookies, mit deren Hilfe wir anonyme Informationen über die Besuchernutzung unserer Website sammeln.") }}',
            },
            {
                type: 'Marketing',
                value: 'marketing',
                description: 'Diese Cookies helfen uns, Ihnen die Art von Inhalten und Werbung zu zeigen, die Sie bevorzugen.',
            }
        ],
        onAccept: cookiesOn,
    });

    function cookiesOn() {
        if ($.fn.ihavecookies.preference('analytics') === true) {
            gtag('consent', 'update', {'analytics_storage': 'granted'});
        }

        if ($.fn.ihavecookies.preference('marketing') === true) {
            gtag('consent', 'update', {'ad_storage': 'granted'});
            fbq('consent', 'grant');
        }
    }
</script>