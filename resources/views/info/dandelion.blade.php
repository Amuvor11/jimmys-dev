@php
	 if (App::getLocale() === 'en') {
        $title = 'Spacious Apartments for Your Vienna Stay';
        $description = "Dandelion Apartments provide a convenient and stylish space for your Vienna visit. With separate bedrooms, a private kitchen, and a balcony, it’s ideal for family vacations or business trips.";
    } else if (App::getLocale() === 'de') {
        $title = 'Geräumige Apartments für Ihren Aufenthalt in Wien';
        $description = "Die Dandelion Apartments bieten einen bequemen und stilvollen Raum für Ihren Aufenthalt in Wien. Mit separaten Schlafzimmern, eigener Küche und Balkon – ideal für Familienurlaube oder Geschäftsreisen.";
    }
    $logo = 'jimmys_dandelion_logo';
    $color = '#FBB311';
    $dark = false;
    $address = "Knöllgasse 23";
    $zip = "1100 Wien";
    $l = (App::isLocale('en')) ? 'en' : 'de';
    $gmaps_nav = "https://www.google.ro/maps/dir//Kn%C3%B6llgasse+23,+1100+Wien,+Austria/@48.1744906,16.355573,21z/data=!4m9!4m8!1m0!1m5!1m1!1s0x476da834fda9c125:0xa8e12d456e0c897a!2m2!1d16.3556394!2d48.1745302!3e0";
    $gmaps_embed = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1330.3313191989446!2d16.354439109582348!3d48.17458294492178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da834fda9c125%3A0xa8e12d456e0c897a!2sKn%C3%B6llgasse%2023%2C%201100%20Wien%2C%20Austria!5e0!3m2!1s" . $l . "!2sat!4v1649272344804!5m2!1s" . $l . "!2sat";
@endphp

@section('head_title', $title) {{-- Встановлює заголовок сторінки без "Jimmy's Apartments" --}}
@section('head_desc', $description) {{-- Встановлює опис сторінки --}}

@include( '../_partials/_header')

@include('../_partials/_location_header')

@if (App::isLocale('en'))
    <div id="location-content" class="container">

        @include('../_partials/_location_address')

        <div class="row" id="topics">
            <div class="col-md-12">
                <hr class="my-4">
                <p>Topic:</p>
                <ul>
                    <li><a href="#checkin">Check in</a></li>
                    <li><a href="#breakfast">Breakfast</a></li>
                    <li><a href="#parking">Parking</a></li>
                    <li><a href="#garage">Public Garage</a></li>
                    <li><a href="#transport">Public Transport</a></li>
                    <li><a href="#taxi">Taxi</a></li>
                    <li><a href="#equipment">Equipment</a></li>
                    <li><a href="#special-requests">Special Requests</a></li>
                    <li><a href="#cleaning">Cleaning</a></li>
                    <li><a href="#laundry">Laundry</a></li>
                    <li><a href="#lounge">Lounge</a></li>
                    <li><a href="#garbage">Garbage</a></li>
                    <li><a href="#checkout">Check out</a></li>
                    <li><a href="#invoice">Invoice</a></li>
                    <li><a href="#wifi">WiFi</a></li>
                </ul>
                <hr class="my-4">
            </div>
        </div>

        <div id="answers">
            <div id="checkin" class="answer">
                <h2>Check-in / Access to the apartment</h2>
                <p>Your apartment is available from 3pm on the day of arrival at the latest - the electronic key is also valid from this point in time.</p>
                <p>On the day of arrival until midday we will send you an e-mail with your acces code for the main entrance and for your apartment.</p>
                <p>This code is valid until 11am on the day of departure.</p>
                <!-- <div class="row">
                    <div class="col-8"><img src="{{asset('img/soga_entrance.jpg')}}" alt="Jimmys apartments Entrance" class="img-fluid"></div>
                    <div class="col-4"><img src="{{asset('img/soga_door.jpg')}}" alt="Jimmys apartments Door" class="img-fluid"></div>
                </div> -->
{{--                <p>You can find more important information for your arrival, the Jimmy's Apartments concept as well as the Covid-19 guidelines <a href="{{ route('travelinfo') }}">here</a>.</p>--}}
            </div>
            <div id="breakfast" class="answer">
                <h2>Breakfast</h2>
                <p>Start your morning with varied and nicely prepared breakfast, which is served daily from 7 am to 10 am in Restaurant Chez Marie.</p>
                <p>Price: €18,90 per person</p>
                <a href="{{ route('dandelion.chezmarie') }}"><img src="{{ asset('img/chez-marie-location.png') }}" alt="Chez Marie" srcset="{{ asset('img/chez-marie-location.svg') }} 1x"></a>
            </div>
            <div id="parking" class="answer">
                <h2>Parking</h2>
                <p>Generally there is on-street parking in the surrounding area. However parking fees have to be paid in nearly every district in Vienna <strong>(subject to charge in this district: Mon – Fri 9am to 10pm, free of charge: overnight and on weekends).</strong></p>
                <p>The required parking tickets can be bought at gas stations, post shops, tobacco shops or online on <a href="https://www.handyparken.at/" target="_blank">www.handyparken.at</a> (registration required).</p>
            </div>
            <div id="garage" class="answer">
                <h2>Public Garage</h2>
                <p>If you don’t require your car for a longer time, we suggest using a parking garage:</p>
                <ul class="mb-0 pl-3">
                    <li><a href="https://www.parken.at/garage/7734/raxstra%C3%9Fe---wien-%7C-apcoa" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Raxstraße - Wien | APCOA</strong><br>1100 Wien, Raxstraße 38</a></li>
                    <li><a href="https://www.parken.at/garage/125/twin-towers" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">WIPARK Vienna Twin Tower</strong><br>1100 Wien, Wienerbergstraße, Maria-Kuhn-Gasse 11</a></li>
                    <li><a href="https://www.parken.at/garage/123/parken-oberfl%C3%A4che-klinik-favoriten" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Oberfläche Klinik Favoriten</strong><br>1100 Wien, Kundratstraße 3</a></li>
                </ul>
            </div>
            <div id="transport" class="answer">
                <h2>Public transport</h2>
                <p><strong>From the main train station (Hauptbahnhof)</strong>: tram 18 to Matzleinsdorfer Platz then transfer to tram 1 to Davidgasse, 4-minute walk to the apartment (17 min.) or take train (S-Bahn) S1 or S3 to Matzleinsdorfer Platz, walk 14 min. to the apartment (16 min.)</p>
                <p><strong>From Westbahnhof</strong>: tram 6 to Knöllgasse, walk 9 min. to the apartment (21 min.)</p>
                <p><strong>From the airport</strong>: train (S-Bahn) S7 to Rennweg, then transfer to train (S-Bahn) S3 to Matzleinsdorfer Platz, take tram line 1, walk 4 min.utes to apartment (49 min.) Or CAT (City Airport Train) to Wien Mitte Landstraße, transfer to train (S-Bahn) S2 or S1 or Regional Train R2237 until Matzleinsdorfer Platz, take tram 1 direction Stefan-Fadinger-Platz until Davidgasse, then walk 4 min.utes to apartment. (53 min.)</p>
                <p><strong>Apartment to city center (Oper/Karlsplatz)</strong>: direct connection to the city center (Oper/Karlsplatz) with tram 1 (21 min.)</p>
                <p><strong>Train Station (S-Bahn) Matzleinsdorfer Platz</strong>: reachable with tram 1 within 7 min.</p>
                <p>Detailed information regarding routes, tickets, etc. can be found on <a href="https://www.wienerlinien.at" target="_blank">www.wienerlinien.at</a>. You can also download the WienMobil app onto your smartphone, the perfect companion for everyday life in Vienna.</p>
            </div>
            <div id="taxi" class="answer">
                <h2>Taxi</h2>
                <p>You can get taxis at the main train stations or airport - usually available.</p>
                <p>To call a taxi to the apartment we recommend one of the largest taxi companies in Vienna: <a href="tel:+43160160">+43&nbsp;1&nbsp;60&nbsp;1&nbsp;60</a> or <a href="tel:+43131300">+43&nbsp;1&nbsp;31&nbsp;300</a></p>
                <p>We also suggest the taxi company for transfer from airport to hotel (or v.v) <strong>Airport Driver:</strong> <a href="tel:+43122822">+43&nbsp;1&nbsp;22&nbsp;8&nbsp;22</a> oder <a href="tel:+43144444">+43&nbsp;1&nbsp;44&nbsp;4&nbsp;44</a></p>
                <p>For more information, you can visit the website: <a href="https://www.airportdriver.at" target="_blank">www.airportdriver.at</a></p>
            </div>
            <div id="equipment" class="answer">
                <h2>Equipment</h2>
                <p>Enclosed you can find the inventory list of your apartment.</p>
                <a href="{{asset('pdf/Inventory_Dandelion.pdf')}}" target="_blank" class="btn-jimmys light-bg space-below">Download PDF</a>
                <p>Please inform us as early as possible if you require a sofa bed, baby bed etc. (provided upon availability).</p>
            </div>
            <div id="special-requests" class="answer">
                <h2>Special Requests</h2>
                <p>If you have special requirements (e.g. an additional bed, sofa bed, baby bed) please inform us as early as possible. It will be provided upon availability and might be subject to an extra charge.</p>
                <p>Please make a reservation for the required category or get in contact with us as as soon as possible: <a href="mailto:res.dandelion@jimmys.at">res.dandelion@jimmys.at</a></p>
            </div>
            <div id="cleaning" class="answer">
                <h2>Cleaning</h2>
                <p>Our apartments are cleaned by a professional cleaning company after departures and the final cleaning is included in the room rate, as well as a set of fresh towels/laundry (as per guests booked).</p>
            </div>
            <div id="laundry" class="answer">
                <h2>Laundry</h2>
                <p>At the ground floor in the lounge area you will find washing machines. The use of the washing machine and dryer are free of charge. Please bring your own washing powder.</p>
            </div>
            <div id="lounge" class="answer">
                <h2>Lounge Area</h2>
                <p>At the ground floor, you will find our lounge area. A relaxing and comfortable space where you can catch up on your e-mails or meet fellow guests, family or friends while you are waiting for your check-in time. There is also a children’s corner. Guests are welcome to use the lounge area at any time.</p>
            </div>
            <div id="garbage" class="answer">
                <h2>Garbage Room</h2>
                <p>The garbage room is located at the groundfloor inside, just beside the entrance. The door opener is located inside, next to the entrance. Please dispose your garbage properly.</p>
            </div>
            <div id="checkout" class="answer">
                <h2>Check-out</h2>
                <p>Your apartment is available until 11:00 on the departure day - until then the codes are valid.</p>
                <p>There is no seperate check-out necessary.</p>
            </div>
            <div id="invoice" class="answer">
                <h2>Invoice</h2>
                <p>You will receive your invoice by e-mail as soon as we received the payment, latest 1 day prior arrival. If you require the invoice to be issued to a specific address, please inform us in advance.</p>
            </div>
            <div id="wifi" class="answer">
                <h2>Wi-Fi</h2>
                <p>Wi-Fi is included in the room rate. Choose the network „Jimmys“ and log in with your email address.</p>
            </div>
            <div class="grid-sizer"></div>
        </div>

    </div>
@else
    <div id="location-content" class="container">

        @include('../_partials/_location_address')

        <div class="row" id="topics">
            <div class="col-md-12">
                <hr class="my-4">
                <p>Themen:</p>
                <ul>
                    <li><a href="#checkin">Check in</a></li>
                    <li><a href="#breakfast">Frühstück</a></li>
                    <li><a href="#parking">Parken</a></li>
                    <li><a href="#garage">Öffentliche Garagen</a></li>
                    <li><a href="#transport">Öffentliche Verkehrsmittel</a></li>
                    <li><a href="#taxi">Taxi</a></li>
                    <li><a href="#equipment">Ausstattung</a></li>
                    <li><a href="#cleaning">Reinigung</a></li>
                    <li><a href="#laundry">Waschküche</a></li>
                    <li><a href="#lounge">Aufenthaltsraum</a></li>
                    <li><a href="#garbage">Müllraum</a></li>
                    <li><a href="#wifi">WLAN</a></li>
                    <li><a href="#checkout">Check-out</a></li>
                    <li><a href="#invoice">Rechnung</a></li>
                </ul>
                <hr class="my-4">
            </div>
        </div>

        <div id="answers">
            <div id="checkin" class="answer">
                <h2>Check-in / Zugang zum Apartment</h2>
                <p>Ihr Apartment steht am Anreisetag ab spätestens 15:00 Uhr zur Verfügung - von diesem Zeitpunkt an ist auch der elektronische Schlüssel gültig.</p>
                <p>Sie erhalten am Tag der Anreise am Vormittag per E-Mail einen Code für den Haupteingang und für Ihr Apartment. Dieser Code ist am Abreisetag bis 11:00 Uhr gültig.</p>
                <!-- <div class="row">
                    <div class="col-8"><img src="img/soga_entrance.jpg" alt="Jimmys Apartments Entrance" class="img-fluid"></div>
                    <div class="col-4"><img src="img/soga_door.jpg" alt="Jimmys Apartments Door" class="img-fluid"></div>
                </div> -->
{{--                <p>Weitere wichtige Informationen zu Ihrer Anreise, dem Wohnkonzept von Jimmy's Apartments sowie einen Covid-19 Leitfaden finden Sie <a href="{{ route('travelinfo') }}">hier</a>.</p>--}}
            </div>
            <div id="breakfast" class="answer">
                <h2>Frühstück</h2>
                <p>Beginnen Sie Ihren Morgen mit dem abwechslungsreichen und mit viel Liebe hergerichteten Frühstück, das im Restaurant Chez Marie täglich von 07:00 bis 10:00 Uhr serviert wird. </p>
                <p>Preis: €18,90 pro Person</p>
                <a href="{{ route('dandelion.chezmarie') }}"><img src="{{ asset('img/chez-marie-location.png') }}" alt="Chez Marie" srcset="{{ asset('img/chez-marie-location.svg') }} 1x"></a>
            </div>

            <div id="parking" class="answer">
                <h2>Parken</h2>
                <p>Grundsätzlich sind Parkplätze in der Umgebung vorhanden. In Wien sind aber fast flächendeckend Gebühren für das Parken zu bezahlen <strong>(in dieser Gegend: Mo-Fr. 09:00-22:00 gebührenpflichtig. Über Nacht und am Wochenende kostenlos!)</strong>. Dafür notwendige Parkscheine erhalten Sie bei der Post, an Tankstellen, in Trafiken oder online unter <a href="https://www.handyparken.at/" target="_blank">www.handyparken.at</a> (Registrierung erforderlich).</p>
            </div>
            <div id="garage" class="answer">
                <h2>Öffentliche Garagen</h2>
                <p>Wenn das Auto länger nicht benötigt wird, empfehlen wir Parkhäuser in der Umgebung:</p>
                <ul class="mb-0 pl-3">
                    <li><a href="https://www.parken.at/garage/7734/raxstra%C3%9Fe---wien-%7C-apcoa" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Raxstraße - Wien | APCOA</strong><br>1100 Wien, Raxstraße 38</a></li>
                    <li><a href="https://www.parken.at/garage/125/twin-towers" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">WIPARK Vienna Twin Tower</strong><br>1100 Wien, Wienerbergstraße, Maria-Kuhn-Gasse 11</a></li>
                    <li><a href="https://www.parken.at/garage/123/parken-oberfl%C3%A4che-klinik-favoriten" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Oberfläche Klinik Favoriten</strong><br>1100 Wien, Kundratstraße 3</a></li>
                </ul>
            </div>

            <div id="transport" class="answer">
                <h2>Öffentliche Verkehrsmittel</h2>
                <p><strong>Anreise vom Hauptbahnhof</strong>: Straßenbahn 18 bis Matzleinsdorfer Platz, umsteigen in die Straßenbahn 1 bis Davidgasse, 4 Minuten zu Fuß bis zum Apartment (17 Min.) Alternativ nehmen Sie die Schnellbahn S1/S3 bis Matzleinsdorfer Platz, umsteigen in die Straßenbahn 1 bis Davidgasse, 4 Minuten zu Fuß bis zum Apartment (16 Min)</p>
                <p><strong>Anreise vom Westbahnhof</strong>: Straßenbahn 6 bis Knöllgasse, 9 Min. zu Fuß bis zum Apartment (21 Min.)</p>
                <p><strong>Anreise vom Flughafen</strong>: Schnellbahn S7 bis Rennweg, umsteigen in die Schnellbahn S3 bis Matzleinsdorfer Platz, umsteigen in die Straßenbahn 1, dann 4 Minuten zu Fuß bis zum Apartment (49 Min.) oder CAT (City Airport Train) bis Wien Mitte Landstraße, umsteigen in die Schnellbahn S1, S2 oder R2237 bis Matzleinsdorfer Platz, umsteigen in die Straßenbahn 1 Richtung Stefan-Fadinger-Platz bis Davidgasse, dann 4 Minuten zu Fuß bis zum Apartment (53 Min.)</p>
                <p><strong>Apartment ins Zentrum (Oper/Karlsplatz)</strong>: direkte Verbindung zum Zentrum mit Straßenbahn 1 bis Oper/Karlsplatz (21 Min.)</p>
                <p><strong>Bahnhofstation Matzleinsdorfer Platz</strong>: Straßenbahn 1 (7 Min.)</p>
                <p>Weitere Informationen (Tickets, Routenplaner, etc.) finden Sie unter: <a href="https://www.wienerlinien.at" target="_blank">www.wienerlinien.at</a>. Sie können auch die App WienMobil auf Ihr Smartphone laden. Dies ist der perfekte Begleiter für den Alltag in Wien.</p>
            </div>
            <div id="taxi" class="answer">
                <h2>Taxi</h2>
                <p>Taxis stehen Ihnen üblicherweise an den Bahnhöfen oder am Flughafen zur Verfügung.</p>
                <p>Wenn Sie sich zum Apartment ein Taxi rufen möchten, empfehlen wir die zwei größten / renommierten Wiener Anbieter: <a href="tel:+43160160">+43&nbsp;1&nbsp;60&nbsp;1&nbsp;60</a> oder <a href="tel:+43131300">+43&nbsp;1&nbsp;31&nbsp;300</a></p>
                <p>Wir empfehlen auch folgendes Taxiunternehmen für den Transfer vom Flughafen zum Hotel oder umgekehrt: <strong>Airport Driver:</strong> <a href="tel:+43122822">+43&nbsp;1&nbsp;22&nbsp;8&nbsp;22</a> oder <a href="tel:+43144444">+43&nbsp;1&nbsp;44&nbsp;4&nbsp;44</a></p>
                <p>Für weitere Informationen können Sie die Website besuchen: <a href="https://www.airportdriver.at" target="_blank">www.airportdriver.at</a></p>
            </div>

            <div id="equipment" class="answer">
                <h2>Ausstattung</h2>
                <p>Anbei finden Sie eine Ausstattungliste des Apartments.</p>
                <a href="{{asset('pdf/Inventory_Dandelion.pdf')}}" target="_blank" class="btn-jimmys light-bg space-below">Download PDF</a>
            </div>
            <div id="balcony" class="answer">
                <h2>Zusatzbetten</h2>
                <p>Sollten Sie spezielle Wünsche haben (zweites Bett, Zusatzbetten, Babybett, etc.) bieten wir das gerne nach Verfügbarkeit (ggfs. kleiner Aufpreis) an.</p>
                <p>Bitte buchen Sie ggfs. die entsprechende Kategorie oder  nehmen Sie so schnell wie möglich Kontakt per email mit uns auf: <a href="mailto:res.dandelion@jimmys.at">res.dandelion@jimmys.at</a></p>
            </div>

            <div id="cleaning" class="answer">
                <h2>Reinigung</h2>
                <p>Unsere Apartments werden von Profis gereinigt übergeben. Die Endreinigung nach Abreise sowie Ausstattung mit Hand- und Badetüchern sowie Bettwäsche (alles nach Personenanzahl) ist im Preis inkludiert.</p>
            </div>
            <div id="laundry" class="answer">
                <h2>Waschküche</h2>
                <p>Im Erdgeschoss finden Sie den Aufenthaltsraum, in dem sich die Waschmaschinen befinden. Die Benutzung der Waschmaschinen und der Trockner ist kostenlos. Bitte bringen Sie Ihr eigenes Waschpulver mit.</p>
            </div>
            <div id="lounge" class="answer">
                <h2>Aufenthaltsraum</h2>
                <p>Im Erdgeschoss finden Sie unseren Aufenthaltsraum mit Kinderspielecke. Der Aufenthaltsraum steht Ihnen rund um die Uhr zur Verfügung, z.B. auch wenn Sie früher Anreisen und Ihr Apartment noch nicht fertig ist.</p>
            </div>

            <div id="garbage" class="answer">
                <h2>Müllraum</h2>
                <p>Der Müllraum befindet sich im Erdgeschoss, drinnen neben dem Eingang. Der Türöffner dafür ist neben der Eingangstüre zu finden. Wir bitten Sie, Ihren Restmüll dort selbst zu entsorgen.</p>
            </div>
            <div id="wifi" class="answer">
                <h2>WLAN</h2>
                <p>WLAN ist kostenlos. Wählen Sie das Netzwerk ‚Jimmys‘ und melden Sie sich mit Ihrer E-Mail-Adresse. </p>
            </div>

            <div id="checkout" class="answer">
                <h2>Check-out</h2>
                <p>Ihr Apartment steht Ihnen am Abreisetag bis 11:00 zur Verfügung. Bis dahin sind auch die Codes gültig.</p>
                <p>Es ist kein weiterer Check-out notwendig.</p>
            </div>
            <div id="invoice" class="answer">
                <h2>Rechnung</h2>
                <p>Ihre Rechnung erhalten Sie von uns vorab sobald Ihre Zahlung per E-Mail eingegangen ist. Sollten Sie eine spezielle Anschrift (z.B. Firmenanschrift) benötigen, geben Sie uns bitte vorab Bescheid.</p>
            </div>
            <div class="grid-sizer"></div>
        </div>
    </div>
@endif
@include('../_partials/_location_footer')
@include('../_partials/_footer')
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    $('#answers').masonry({
        itemSelector: '.answer',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        gutter: 30
    });
</script>
</body>
</html>
