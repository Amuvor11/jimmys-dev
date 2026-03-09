@php
	 if (App::getLocale() === 'en') {
        $title = 'Spacious Apartments for Your Vienna Stay';
        $description = "Dandelion Apartments provide a convenient and stylish space for your Vienna visit.";
    } else if (App::getLocale() === 'de') {
        $title = 'Geräumige Apartments für Ihren Aufenthalt in Wien';
        $description = "Die Dandelion Apartments bieten einen bequemen und stilvollen Raum für Ihren Aufenthalt in Wien.";
    }
@endphp
@section('head_title', $title)
@section('head_desc', $description)

@include('../_partials/_header')

<main id="location-content"></main>

@include('../_partials/_footer')

</body>
</html>
