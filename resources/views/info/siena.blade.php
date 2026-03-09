@php
    header('Location: ' . route('home') );




    $title = "Siena";
    $logo = 'jimmys_siena_logo';
    $color = '#EE5731';
    $dark = true;
    $address = "Sonnergasse 48";
    $zip = "1120 Wien";
    $l = (App::isLocale('en')) ? 'en' : 'de';
    $gmaps_nav = "https://www.google.com/maps/dir//Sonnergasse+48+1120+Wien/@48.1678156,16.3194274,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x476da868b0c76bc7:0x9c574350e71dce5f!2m2!1d16.3194274!2d48.1678156";
    $gmaps_embed = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d665.2534967670179!2d16.318888933965354!3d48.167811685382595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da868b0c76bc7%3A0x9c574350e71dce5f!2sSonnergasse+48%2C+1120+Wien!5e0!3m2!1s" . $l . "!2sat!4v1522310472999!5m2!1s" . $l . "!2sat";
@endphp

@include( '../_partials/_header')

@include('../_partials/_location_header')

@if (App::isLocale('en'))
    <div id="location-content" class="container">

        @include('../_partials/_location_address')

        <div class="row" id="topics">
            <div class="col-md-12">
                <hr>
                <p>Topic:</p>
                <ul>
                    <li><a href="#checkin">Check in</a></li>
                    <li><a href="#parking">Parking</a></li>
                    <li><a href="#garage">Public Garage</a></li>
                    <li><a href="#transport">Public Transport</a></li>
                    <li><a href="#taxi">Taxi</a></li>
                    <li><a href="#equipment">Equipment</a></li>
                    <li><a href="#special-requests">Balcony</a></li>
                    <li><a href="#special-requests">Terrace</a></li>
                    <li><a href="#special-requests">Special Requests</a></li>
                    <li><a href="#cleaning">Cleaning</a></li>
                    <li><a href="#laundry">Laundry</a></li>
                    <li><a href="#garbage">Garbage</a></li>
                    <li><a href="#checkout">Check out</a></li>
                    <li><a href="#invoice">Invoice</a></li>
                    <li><a href="#wifi">WiFi</a></li>
                </ul>
                <hr>
            </div>
        </div>

        <div id="answers">
            <div id="checkin" class="answer">
                <h2>Check-in / Access to the apartment</h2>
                <p>Your apartment is available from 3pm on the day of arrival at the latest - the electronic key is also valid from this point in time.</p>
                <p>On the day of arrival until midday we will send you an e-mail with your acces code for the main entrance and for your apartment.</p>
                <p>This code is valid until 11am on the day of departure.</p>
                {{-- <div class="row">
                    <div class="col-8"><img src="{{asset('img/soga_entrance.jpg')}}" alt="Jimmys apartments Entrance" class="img-fluid"></div>
                    <div class="col-4"><img src="{{asset('img/soga_door.jpg')}}" alt="Jimmys apartments Door" class="img-fluid"></div>
                </div> --}}
{{--                <p>You can find more important information for your arrival, the Jimmy's Apartments concept as well as the Covid-19 guidelines <a href="{{ route('travelinfo') }}">here</a>.</p>--}}
            </div>
            <div id="parking" class="answer">
                <h2>Parking</h2>
                <p>Generally there is on-street parking in the surrounding area. However parking fees have to be paid in nearly every district in Vienna <strong>(subject to charge in this district: Mon – Fri 9am to 10pm, free of charge: overnight and on weekends).</strong></p>
                <p>The required parking tickets can be bought at gas stations, post shops, tobacco shops or online on <a href="https://www.handyparken.at/" target="_blank">www.handyparken.at</a> (registration required).</p>
            </div>
            <div id="garage" class="answer">
                <h2>Public Garage</h2>
                <p>If you don't require your car for longer time, we suggest using parking garage, please see list enclosed:</p>
                <ul class="mb-0 pl-3">
                    <li><a href="https://www.boe-parking.at/boe/en/garage/vienna/arcademeidling" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Arcade Meidling</strong><br>1120 Wien, Vivenotgasse 66</a></li>
                    <li><a href="https://www.parken.at/garage/139/parkgarage-meidling" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Parkgarage Meidling</strong><br>1120 Wien, Vivenotgasse 56</a></li>
                </ul>
            </div>
            <div id="transport" class="answer">
                <h2>Public transport</h2>
                <p><strong>From the main train station (Hauptbahnhof):</strong> train (S-Bahn) S1 or S3 to Wien Meidling, tram 62 to Sonnergasse (18 min.)</p>
                <p><strong>From Westbahnhof:</strong> underground U6 to Philadelphia Brücke, tram 62 to Sonnergasse (19 min.)</p>
                <p><strong>From station Wien Meidling:</strong> tram 62 to station Sonnergasse (6 min.)</p>
                <p><strong>From the airport:</strong> CAT (City Airport Train) to Wien Mitte, underground U4 - change to U6 - Bahnhof Meidling change to tram 62 to Sonnergasse (52 min.)</p>
                <p><strong>Apartment to city center</strong> (Karlsplatz/opera): tram 62 (in front of the building) direct to Karlsplatz/opera (25 min.)</p>
                <p>Detailed information (tickets, routes etc.): <a href="https://www.wienerlinien.at" target="_blank">www.wienerlinien.at</a>. You can also download the app WienMobil on your smartphone as your perfect companion for day-to-day travel in Vienna.</p>
            </div>
            <div id="taxi" class="answer">
                <h2>Taxi</h2>
                <p>You can get taxis at main train stations or airport - usually available.</p>
                <p>To call a taxi (eg to Apartment) we suggest some of the largest companies in Vienna: <a href="tel:+43160160">+43&nbsp;1&nbsp;60&nbsp;1&nbsp;60</a> or <a href="tel:+43131300">+43&nbsp;1&nbsp;31&nbsp;300</a></p>
                <p>We also suggest the taxi company for transfer from airport to hotel (or v.v) <strong>Airport Driver:</strong> <a href="tel:+43122822">+43&nbsp;1&nbsp;22&nbsp;8&nbsp;22</a> oder <a href="tel:+43144444">+43&nbsp;1&nbsp;44&nbsp;4&nbsp;44</a></p>
                <p>For more information, you can visit the website: <a href="https://www.airportdriver.at" target="_blank">www.airportdriver.at</a></p>
            </div>
            <div id="equipment" class="answer">
                <h2>Equipment</h2>
                <p>Enclosed you find the list of Equipment of your Apartment.</p>
                <a href="{{asset('pdf/Inventory_Siena.pdf')}}" target="_blank" class="btn-jimmys space-below">Download PDF</a>
                <p>Please inform as as early as possible if you require sofa bed, baby bed etc. (provided upon availability).</p>
            </div>
            <div id="special-requests" class="answer">
                <h2>Balcony / Terrace / Special Requests</h2>
                <p>Some of our apartments have a balcony or a terrace (shown at booked category). If you have special requirements (e.g. an additional bed, sofa bed, baby bed) please inform us as early as possible. It will be provided upon availability and might be subject to an extra charge.</p>
                <p>Please make a reservation for the required category or get in contact with us as as soon as possible: <a href="mailto:office@jimmys.at">office@jimmys.at</a></p>
            </div>
            <div id="cleaning" class="answer">
                <h2>Cleaning</h2>
                <p>Our Apartments are cleaned by professionals. Cleaning after departure as well as laundry/towels (as per booked persons) are included in roomrate.</p>
            </div>
            <div id="laundry" class="answer">
                <h2>Laundry</h2>
                <p>At the ground floor you will find the laundry room, opposite the elevator. The use of the washing machine and dryer are free of charge. Please bring your own washing powder.</p>
            </div>
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
                <p>Wi-Fi is included in the room rate. Choose the network „Jimmys“, password: Siena1120</p>
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
                    <li><a href="#checkin">Schlüssel</a></li>
                    <li><a href="#parking">Parken</a></li>
                    <li><a href="#garage">Öffentliche Garagen</a></li>
                    <li><a href="#transport">Öffentliche Verkehrsmittel</a></li>
                    <li><a href="#taxi">Taxi</a></li>
                    <li><a href="#equipment">Ausstattung</a></li>
                    {{-- <li><a href="#lounge">Aufenthaltsraum</a></li> --}}
                    <li><a href="#balcony">Balkon</a></li>
                    <li><a href="#balcony">Terrasse</a></li>
                    <li><a href="#balcony">Zusatzbetten</a></li>
                    <li><a href="#cleaning">Reinigung</a></li>
                    <li><a href="#cleaning">Wäsche</a></li>
                    <li><a href="#wifi">WLAN</a></li>
                    <li><a href="#checkout">Check-out</a></li>
                    <li><a href="#invoice">Rechnung</a></li>
                    <li><a href="#garbage">Müllraum</a></li>
                    <li><a href="#laundry">Waschküche</a></li>
                </ul>
                <hr class="my-4">
            </div>
        </div>

        <div id="answers">
            <div id="checkin" class="answer">
                <h2>Check in / Schlüssel für das Apartment</h2>
                <p>Ihr Apartment steht am Anreisetag ab spätestens 15:00 zur Verfügung - von diesem Zeitpunkt an ist auch der elektronische Schlüssel gültig.</p>
                <p>Sie erhalten am Tag der Anreise am Vormittag per E-Mail einen Code für den Haupteingang und für Ihr Apartment. Dieser Code ist am Abreisetag bis 11:00 Uhr gültig.</p>
                {{-- <div class="row">
                    <div class="col-8"><img src="{{ asset('img/soga_entrance.jpg')}}" alt="Jimmys Apartments Entrance" class="img-fluid"></div>
                    <div class="col-4"><img src="{{ asset('img/soga_door.jpg')}}" alt="Jimmys Apartments Door" class="img-fluid"></div>
                </div> --}}
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
                    <li><a href="https://www.boe-parking.at/de/garagen/wien/arcademeidling" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Arcade Meidling</strong><br>1120 Wien, Vivenotgasse 66</a></li>
                    <li><a href="https://www.parken.at/garage/139/parkgarage-meidling" class="text-black" target="_blank" rel="noopener"><strong class="text-underline">Parkgarage Meidling</strong><br>1120 Wien, Vivenotgasse 56</a></li>
                </ul>
            </div>
            <div id="transport" class="answer">
                <h2>Öffentliche Verkehrsmittel</h2>
                <p><strong>Anreise vom Hauptbahnhof:</strong> Schnellbahn S1 oder S3 nach Wien Meidling, Strassenbahn 62 nach Sonnergasse (18 Min.)</p>
                <p><strong>Anreise vom Westbahnhof:</strong> U-Bahn U6 bis Philadelphia Brücke, Strassenbahn 62 bis Sonnergasse (19 Min.)</p>
                <p><strong>Anreise von Bahnhof Wien Meidling:</strong> Strassenbahn 62 bis Station Sonnergasse (6 Min.)</p>
                <p><strong>Anreise vom Flughafen:</strong> CAT (City Airport Train) bis Wien Mitte, U-Bahn U4 - (umsteigen U6 - Bahnhof Meidling Umsteigen Strassenbahn 62 bis Sonnergasse (52 Min.)</p>
                <p><strong>Apartment ins Zentrum</strong> (Karlsplatz/Oper): Strassenbahn 62 (vor dem Haus) direkt bis Karlsplatz Oper (25 Min.)</p>
                <p>Alles weitere sowie Ticketpreise und Routen unter: <a href="https://www.wienerlinien.at" target="_blank">www.wienerlinien.at</a>. Sie können auch die App WienMobil auf Ihr Smartphone laden. Dies ist der perfekte Begleiter für den Alltag in Wien.</p>
            </div>
            <div id="taxi" class="answer">
                <h2>Taxi</h2>
                <p>Taxis stehen Ihnen üblicherweise an den Bahnhöfen oder am Flughafen zur Verfügung.</p>
                <p>Wenn Sie sich zum Apartment ein Taxi rufen möchten, empfehlen wir die zwei größten / renommierten Wiener Anbieter: <a href="tel:+43160160">+43&nbsp;1&nbsp;60&nbsp;1&nbsp;60</a> oder <a href="tel:+43131300">+43&nbsp;1&nbsp;31&nbsp;300</a></p>
                <p>Wir empfehlen auch folgendes Taxiunternehmen für den Transfer vom Flughafen zum Hotel oder umgekehrt: <strong>Airport Driver:</strong> <a href="tel:+43122822">+43&nbsp;1&nbsp;22&nbsp;8&nbsp;22</a> oder <a href="tel:+43144444">+43&nbsp;1&nbsp;44&nbsp;4&nbsp;44</a></p>
                <p>Für weitere Informationen können Sie die Website besuchen: <a href="https://www.airportdriver.at" target="_blank">www.airportdriver.at</a></p>
            </div>
            <div class="answer" id="equipment">
                <h2>Ausstattung</h2>
                <p>Anbei finden Sie eine Ausstattungliste des Apartments.</p>
                <a href="{{ asset('pdf/Inventory_Siena.pdf')}}" target="_blank" class="btn-jimmys space-below">Download PDF</a>
                <p>Bitte geben Sie uns unbedingt rechtzeitig bekannt, wenn Sie ein Sofabett oder Babybett benötigen.</p>
            </div>
            {{-- <div id="lounge" class="answer">
                <h2>Aufenthaltsraum</h2>
                <p>Im Erdgeschoss finden Sie unseren Aufenthaltsraum mit Kinderspielecke. Der Aufenthaltsraum steht Ihnen rund um die Uhr zur Verfügung, z.B. auch wenn Sie früher Anreisen und Ihr Apartment noch nicht fertig ist.</p>
            </div> --}}
            <div id="balcony" class="answer">
                <h2>Balkon / Terrasse / Zusatzbetten</h2>
                <p>Einige unserer Apartments sind mit Balkon und/oder Terrasse ausgestattet (ist ggfs. bei der gebuchten Zimmerkategorie angeführt). Sollten Sie spezielle Wünsche haben (zweites Bett, Zusatzbetten, Babybett, etc.) bieten wir das gerne nach Verfügbarkeit (ggfs. kleiner Aufpreis) an.</p>
                <p>Bitte buchen Sie ggfs. die entsprechende Kategorie oder  nehmen Sie so schnell wie möglich Kontakt per email mit uns auf: <a href="mailto:office@jimmys.at">office@jimmys.at</a></p>
            </div>
            <div id="cleaning" class="answer">
                <h2>Reinigung / Wäsche</h2>
                <p>Unsere Apartments werden von Profis gereinigt übergeben. Die Endreinigung nach Abreise sowie Ausstattung mit Hand- und Badetüchern sowie Bettwäsche (alles nach Personenanzahl) ist im Preis inkludiert.</p>
            </div>
            <div id="wifi" class="answer">
                <h2>WLAN</h2>
                <p>WLAN ist kostenlos. Wählen Sie Netzwerk ‚Jimmys‘, Password: Siena1120</p>
            </div>
            <div id="checkout" class="answer">
                <h2>Check-out</h2>
                <p>Ihr Apartment steht Ihnen am Abreisetag bis 11:00 zur Verfügung. Bis dahin sind auch die Codes gültig.</p>
                <p>Sollten Sie eine Key Card haben, bitte einfach im Apartment liegen lassen.</p>
                <p>Sonst ist kein seperater Check-out notwendig</p>
            </div>
            <div id="invoice" class="answer">
                <h2>Rechnung</h2>
                <p>Ihre Rechnung erhalten Sie von uns vorab sobald Ihre Zahlung per E-Mail eingegangen ist. Sollten Sie eine spezielle Anschrift (z.B. Firmenanschrift) benötigen, geben Sie uns bitte vorab Bescheid..</p>
            </div>
            <div id="garbage" class="answer">
                <h2>Müllraum</h2>
                <p>Der Müllraum befindet sich im Erdgeschoss neben dem Eingang. Der Türöffner dafür ist neben der Eingangstüre zu finden.</p>
            </div>
            <div id="laundry" class="answer">
                <h2>Waschküche</h2>
                <p>Im Erdgeschoss gegenüber dem Lift, befindet sich eine Waschküche mit Waschmaschine und Trockner, die Benützung ist kostenlos. Waschpulver bitte selbst mitbringen.</p>
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
