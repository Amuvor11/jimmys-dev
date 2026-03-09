@php
	 if (App::getLocale() === 'en') {
        $title = 'Top Apartments in the Best Districts of Vienna';
        $description = "Discover our apartments in different districts of Vienna. All locations offer convenient transport connections, modern comfort, and individual amenities for your perfect stay.";
    } else if (App::getLocale() === 'de') {
        $title = 'Top-Apartments in den besten Vierteln Wiens';
        $description = "Entdecken Sie unsere Apartments in verschiedenen Wiener Stadtteilen. Alle Standorte bieten eine bequeme Verkehrsanbindung, modernen Komfort und individuelle Annehmlichkeiten für Ihren perfekten Aufenthalt.";
    }
@endphp
@section('head_title', $title)
@section('head_desc', $description)

@include('_partials/_header')

<main id="locations"></main>

@include('_partials/_footer')

</body>
</html>
