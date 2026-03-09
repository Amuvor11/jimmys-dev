@php
	 if (App::getLocale() === 'en') {
        $title = 'Modern Vienna Apartments with Classic Style';
        $description = "Experience the comfort of Emerald Apartments with classic Viennese elements. Ideal for business travelers and family vacations, featuring fully equipped kitchens and modern amenities.";
    } else if (App::getLocale() === 'de') {
        $title = 'Moderne Apartments in Wien mit klassischem Stil';
        $description = "Erleben Sie den Komfort der Emerald Apartments mit klassischen Wiener Elementen. Ideal für Geschäftsreisende und Familienurlaube, ausgestattet mit einer voll ausgestatteten Küche und modernen Annehmlichkeiten.";
    }
    $logo = 'jimmys_emerald_logo';
    $color = '#00623F';
    $dark = true;
    $address = "Steingasse 33";
    $zip = "1030 Wien";
    $l = (App::isLocale('en')) ? 'en' : 'de';
    $gmaps_nav = "https://www.google.com/maps/dir//Steingasse+33,+1030+Wien/@48.1923786,16.390964,17z/dcoma=!4m8!4m7!1m0!1m5!1m1!1s0x476d0766cf0342dd:0xc618632f44df27de!2m2!1d16.3931527!2d48.1923786";
    $gmaps_embed = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.7390772852973!2d16.3909640159191!3d48.1923785792279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d0766cf0342dd%3A0xc618632f44df27de!2sSteingasse%2033%2C%201030%20Wien!5e0!3m2!1s" . $l . "!2sat!4v1579174268791!5m2!1s" . $l . "!2sat";
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
                    <li><a href="#parking">Parking</a></li>
                    <li><a href="#garage">Public Garage</a></li>
                    <li><a href="#transport">Public Transport</a></li>
                    <li><a href="#taxi">Taxi</a></li>
                    <li><a href="#equipment">Equipment</a></li>
                    <li><a href="#special-requests">Special Requests</a></li>
                    <li><a href="#cleaning">Cleaning</a></li>
                    <li><a href="#laundry">Laundry</a></li>
                    <!-- <li><a href="#lounge">Lounge</a></li> -->
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
            <div id="parking" class="answer">
                <h2>Parking</h2>
                <p>Generally there is on-street parking in the surrounding area. However parking fees have to be paid in nearly every district in Vienna <strong>(subject to charge in this district: Mon – Fri 9am to 10pm, free of charge: overnight and on weekends).</strong></p>
                <p>The required parking tickets can be bought at gas stations, post shops, tobacco shops or online on <a href="https://www.handyparken.at/" target="_blank">www.handyparken.at</a> (registration required).</p>
            </div>
            <div id="garage" class="answer">
                <h2>Public Garage</h2>
                <p>If you don’t require your car for a longer time, we suggest using a parking garage, please see list enclosed:</p>
                <ul class="mb-0 pl-3">
                    <li><a href="https://www.bestinparking.com/en/at/garage/garage-klinik-landstrasse" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Garage Klinik Landstraße</strong><br>Boerhaavegasse 8a, 1030 Wien</a></li>
                    <li><a href="https://www.parking.ai/en/wien/detail-park-garage-auto-cleanic-car-park-barak-garagen-gmbh-m-c12710-ppd/" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Park Garage Auto Cleanic</strong><br>Trubelgasse 17, 1030 Wien</a></li>
                    <li><a href="https://www.apcoa.at/en/parking/vienna/zentrum-rennweg-vienna-apcoa/" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Garage Rennweg</strong><br>Ungargasse 66, 1030 Wien</a></li>
                </ul>
            </div>
            <div id="transport" class="answer">
                <h2>Public transport</h2>
                <p><strong>Apartment to city center (Kärntner Ring, Oper)</strong> direct connection to the city center with the tram 71 to Kärtner Ring, Oper (13 min.)</p>
                <p><strong>From the airport:</strong> Train (S-Bahn) S7 to Wien St. Marx - then transfer to tram 71 direction Börse until Oberzellergasse. After a walk of 6 min. you will reach Steingasse 33 (40 min.)</p>
                <p><strong>From the main train station (Hauptbahnhof):</strong> Train/S-Bahn to Rennweg then transfer to tram 71 direction Zentralfriedhof until Oberzellergasse. Then walk 6 min. until Steingasse 33 (30 min.)</p>
                <p><strong>Train Station (S-Bahn) Wien Rennweg:</strong> is just 16 min. by foot or 2 stations with tram 71</p>
                <p><strong>Train Station (S-Bahn) Wien St. Marx</strong> is just 15 min. by foot or 1 station with tram 71</p>
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
                <a href="{{asset('pdf/Inventory_Emerald.pdf')}}" target="_blank" class="btn-jimmys space-below">Download PDF</a>
                <p>Please inform us as early as possible if you require a sofa bed, baby bed etc. (provided upon availability).</p>
            </div>
            <div id="special-requests" class="answer">
                <h2>Special Requests</h2>
                <p>If you have special requirements (e.g. an additional bed, sofa bed, baby bed) please inform us as early as possible. It will be provided upon availability and might be subject to an extra charge.</p>
                <p>Please make a reservation for the required category or get in contact with us as as soon as possible: <a href="mailto:office@jimmys.at">office@jimmys.at</a></p>
            </div>
            <div id="cleaning" class="answer">
                <h2>Cleaning</h2>
                <p>Our apartments are cleaned by a professional cleaning company after departures and the final cleaning is included in the room rate, as well as a set of fresh towels/laundry (as per guests booked).</p>
            </div>
            <div id="laundry" class="answer">
                <h2>Laundry</h2>
                <p>At the ground floor in the lounge area you will find washing machines. The use of the washing machine and dryer are free of charge. Please bring your own washing powder.</p>
            </div>
            <!-- <div id="lounge" class="answer">
                <h2>Lounge Area</h2>
                <p>At the ground floor, you will find our lounge area. A relaxing and comfortable space where you can catch up on your e-mails or meet fellow guests, family or friends while you are waiting for your check-in time. There is also a children’s corner. Guests are welcome to use the lounge area at any time.</p>
            </div> -->
            <div id="garbage" class="answer">
                <h2>Garbage Room</h2>
                <p>The garbage room is located at the groundfloor outside, just beside the entrance. The door opener is located inside, next to the entrance. Please dispose your garbage properly.</p>
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
                <p>Wi-Fi is included in the room rate. Choose the network „Jimmys“, password: top and your apartment number, e.g.: top01</p>
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
                    <li><a href="#parking">Parken</a></li>
                    <li><a href="#garage">Öffentliche Garagen</a></li>
                    <li><a href="#transport">Öffentliche Verkehrsmittel</a></li>
                    <li><a href="#taxi">Taxi</a></li>
                    <li><a href="#equipment">Ausstattung</a></li>
                    <li><a href="#balcony">Zusatzbetten</a></li>
                    <li><a href="#cleaning">Reinigung</a></li>
                    <li><a href="#laundry">Waschküche</a></li>
                    {{-- <li><a href="#lounge">Aufenthaltsraum</a></li> --}}
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

            <div id="parking" class="answer">
                <h2>Parken</h2>
                <p>Grundsätzlich sind Parkplätze in der Umgebung vorhanden. In Wien sind aber fast flächendeckend Gebühren für das Parken zu bezahlen <strong>(in dieser Gegend: Mo-Fr. 09:00-22:00 gebührenpflichtig. Über Nacht und am Wochenende kostenlos!)</strong>. Dafür notwendige Parkscheine erhalten Sie bei der Post, an Tankstellen, in Trafiken oder online unter <a href="https://www.handyparken.at/" target="_blank">www.handyparken.at</a> (Registrierung erforderlich).</p>
            </div>
            <div id="garage" class="answer">
                <h2>Öffentliche Garagen</h2>
                <p>Wenn das Auto länger nicht benötigt wird, empfehlen wir Parkhäuser in der Umgebung, siehe Liste anbei.</p>
                <ul class="mb-0 pl-3">
                    <li><a href="https://www.bestinparking.com/de/at/garage/garage-klinik-landstrasse" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Garage Klinik Landstraße</strong><br>Boerhaavegasse 8a, 1030 Wien</a></li>
                    <li><a href="https://www.parking.ai/de/wien/detail-park-garage-auto-cleanic-parkplatz-barak-garagen-gmbh-m-c12710-ppd/" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Park Garage Auto Cleanic</strong><br>Trubelgasse 17, 1030 Wien</a></li>
                    <li><a href="https://www.apcoa.at/parken/wien/zentrum-rennweg-wien-apcoa/" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Garage Rennweg</strong><br>Ungargasse 66, 1030 Wien</a></li>
                </ul>
            </div>

            <div id="transport" class="answer">
                <h2>Öffentliche Verkehrsmittel</h2>
                <p><strong>Apartment ins Zentrum (Kärntner Ring, Oper):</strong> Direktverbindung zur Innenstadt mit der Straßenbahn 71 fährt bis Kärntner Ring, Oper (13 Min.)</p>
                <p><strong>Anreise vom Flughafen:</strong> Schnellbahn S7 bis Wien St. Marx - umsteigen in die Straßenbahn 71 Richtung Börse bis Oberzellergasse. 6 Min. zu Fuß bis zum Apartment (40 Min.)</p>
                <p><strong>Anreise vom Hauptbahnhof:</strong> Schnellbahn bis Rennweg  - umsteigen in die Straßenbahn 71 Richtung Zentralfriedhof bis Oberzellergasse. 6 Min. zu Fuß bis zum Apartment (30 Min.)</p>
                <p><strong>Bahnhofstation Wien Rennweg:</strong> nur 16 Minuten zu Fuß entfernt, oder 2 Stationen mit Straßenbahn 71</p>
                <p><strong>Bahnhofstation Wien St. Marx</strong> nur 15 Minuten zu Fuß entfernt, oder 1 Station mit Straßenbahn 71</p>
                <p>Alles weitere sowie Ticketpreise und Routen unter: <a href="https://www.wienerlinien.at" target="_blank">www.wienerlinien.at</a>. Sie können auch die App WienMobil auf Ihr Smartphone laden. Dies ist der perfekte Begleiter für den Alltag in Wien.</p>
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
                <a href="{{asset('pdf/Inventory_Emerald.pdf')}}" target="_blank" class="btn-jimmys space-below">Download PDF</a>
            </div>
            <div id="balcony" class="answer">
                <h2>Zusatzbetten</h2>
                <p>Sollten Sie spezielle Wünsche haben (zweites Bett, Zusatzbetten, Babybett, etc.) bieten wir das gerne nach Verfügbarkeit (ggfs. kleiner Aufpreis) an.</p>
                <p>Bitte buchen Sie ggfs. die entsprechende Kategorie oder  nehmen Sie so schnell wie möglich Kontakt per email mit uns auf: <a href="mailto:office@jimmys.at">office@jimmys.at</a></p>
            </div>

            <div id="cleaning" class="answer">
                <h2>Reinigung</h2>
                <p>Unsere Apartments werden von Profis gereinigt übergeben. Die Endreinigung nach Abreise sowie Ausstattung mit Hand- und Badetüchern sowie Bettwäsche (alles nach Personenanzahl) ist im Preis inkludiert.</p>
            </div>
            <div id="laundry" class="answer">
                <h2>Waschküche</h2>
                <p>Im Erdgeschoss finden Sie den Aufenthaltsraum, in dem sich die Waschmaschinen befinden. Die Benutzung der Waschmaschinen und der Trockner ist kostenlos. Bitte bringen Sie Ihr eigenes Waschpulver mit.</p>
            </div>
            {{-- <div id="lounge" class="answer">
                <h2>Aufenthaltsraum</h2>
                <p>Im Erdgeschoss finden Sie unseren Aufenthaltsraum mit Kinderspielecke. Der Aufenthaltsraum steht Ihnen rund um die Uhr zur Verfügung, z.B. auch wenn Sie früher Anreisen und Ihr Apartment noch nicht fertig ist.</p>
            </div> --}}

            <div id="garbage" class="answer">
                <h2>Müllraum</h2>
                <p>Der Müllraum befindet sich im Erdgeschoss, außen links neben dem Eingang. Der Türöffner dafür ist neben der Eingangstüre zu finden. Wir bitten Sie, Ihren Abfall dort selbst zu entsorgen.</p>
            </div>
            <div id="wifi" class="answer">
                <h2>WLAN</h2>
                <p>WLAN ist kostenlos. Wählen Sie Netzwerk ‚Jimmys‘, Password: top und ihre Apartmentnummer, z.B. top01</p>
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
