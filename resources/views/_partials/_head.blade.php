<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<!-- <script>
    // Include the following lines to define the gtag() function when
    // calling this code prior to your gtag.js or Tag Manager snippet
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}

    // Call the default command before gtag.js or Tag Manager runs to
    // adjust how the tags operate when they run. Modify the defaults
    // per your business requirements and prior consent granted/denied, e.g.:
    function getCookieValue(a) {
        var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
        return b ? b.pop() : '';
    }

    var analytics_cookie_status = (getCookieValue('cookieControl') && JSON.parse(getCookieValue('cookieControlPrefs')).indexOf('analytics') > -1) ? 'granted' : 'denied';
    var marketing_cookie_status = (getCookieValue('cookieControl') && JSON.parse(getCookieValue('cookieControlPrefs')).indexOf('marketing') > -1) ? 'granted' : 'denied';
    
    gtag('consent', 'default', {
        'analytics_storage': analytics_cookie_status,
        'ad_storage': marketing_cookie_status,
    });
</script>

Load gtag.js or Tag Manager as normal, e.g.: 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-73JDPD30TJ">
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'G-73JDPD30TJ');
</script>
-->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5RM69WS4');</script>
<!-- End Google Tag Manager -->	
	
<!-- Facebook Pixel Code -->
<script>
    var fb_cookie_status = (getCookieValue('cookieControl') && JSON.parse(getCookieValue('cookieControlPrefs')).indexOf('marketing') > -1) ? 'grant' : 'revoke';
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('consent', fb_cookie_status);
    fbq('init', '226417049102322');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=226417049102322&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

@php
    $default_title = (Route::currentRouteName() !== "home") ? ucwords(str_replace('-', ' ', str_replace('.', '-', Route::currentRouteName()))) : '';
@endphp

<title>@yield('head_title', $default_title){{ (Route::currentRouteName() !== "home") ? ' - ' : '' }}Jimmy's Apartments</title>

<meta name="Author" content="Jimmy's Apartments" />
<meta name="Description" content="@yield('head_desc', 'For smart travellers')" />

@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <link rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
@endforeach

<!-- FACEBOOK -->

<meta property="og:type" content="website">
<meta property="og:image" content="@yield('og_image', 'https://www.jimmys.at/og-image.jpg')">
<meta property="og:image:width" content="@yield('og_image_width', '2400')">
<meta property="og:image:height" content="@yield('og_image_height', '1260')">
<meta property="og:title" content="@yield('head_title', $default_title){{ (Route::currentRouteName() !== "home") ? ' - ' : '' }}Jimmy's Apartments">
<meta property="og:description" content="@yield('head_desc', 'For smart travellers')">
<meta property="og:url" content="{{ request()->url() }}">

<!-- FONTS (Figma: GFS Neohellenic, Monsieur La Doulaise; Lufga fallback: Outfit) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic:wght@400;700&family=Great+Vibes&family=Monsieur+La+Doulaise&family=Outfit:wght@400;500&display=swap" rel="stylesheet">
<!-- STYLE -->
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

</head>
