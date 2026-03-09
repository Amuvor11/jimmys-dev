<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Location;
use App\Models\Room;
use App\Models\RoomTranslation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $locations = [0 => ['title' => 'Vienna 03',
        'slug' => 'vienna-03',
        'info_slug' => 'stein',
        'fac_pdf' => 'Inventory_Jimmys_03.pdf',
        'booking_subdomain' => 'steingasse',
        'status' => 1,
        'logo' => 'logo_vienna_03',
        'hero' => 'logo_vienna_03',
        'address' => 'Steingasse 33',
        'zip' => 1030,
        'ort' => 'Wien',
        'intro' => 'Jimmys 03, gleich ums Eck vom Botschaftsviertel, mit der Strassenbahn in 13 Minuten direkt ins Zentrum, Nahe der S-Bahn zum Flughafen.',
        'categories' => 'Studios, 1 und 2 Bedroom Apartments',
        'desc' => 'Wenn es bei der Buchung nicht anders angegeben ist oder von uns schriftlich bestätigt, gelten folgende Buchungs- und Stornobedingungen als vereinbart:
<strong>Check-in/Check-out:</strong>
Gerne steht Ihnen das Apartment am Anreisetag ab 15:00 zur Verfügung, am Abreisetag bis 12:00.
<strong>Stornierung:</strong>
Bis 3 Tage vor Anreise kostenlose Stornierung möglich, danach werden 100% des gebuchten Gesamtpreises in Rechnung gestellt.
Sollte bis zum letzten kostenlosen Stornotermin (idR 3 Tage vor Anreise) keine Abbuchung auf der angegebenen Kreditkarte möglich sein, oder falls vereinbart, der vereinbarte Betrag nicht auf unserem Konto eingelangt sein, behalten wir uns vor, die Buchung zu stornieren.
<strong>Vorauszahlung:</strong>
Der gesamte Buchungswert wird bis zum letzten kostenlosen Stornotermin (idR 3 Tage vor Anreise) von der von Ihnen angegeben Kreditkarte abgebucht. Gegebenenfalls kann auf Wunsch auch per Banküberweisung bezahlt werden, bitte beachten Sie, dass der Betrag auch bis zu diesem Tag auf unserem Konto eingelangt sein muss.
<strong>Kinder- Zustellbetten:</strong>
Kinder bis 12 Jahre zahlen keinen Aufpreis im Apartment. Bitte aber um Bekanntgabe bis 1 Woche vor Anreise wenn Sie Zusatz- oder Babybett oder Kinderstuhl benötigen.
<strong>Sonstiges:</strong>
Bitte beachten Sie, dass keine Haustiere gestattet sind und das Rauchen im gesamten Gebäude verboten ist.',
        'features' => 'Apartments<br><small>32-72 m<sup>2</sup></small>|High Speed WLAN / Smart Sat TV|Wäsche - und Reinigungsservice|Safe|Küche - voll ausgestattet|Waschküche|Bügelbrett / Bügeleisen|Fußbodenheizung|Bad &amp; WC|Kinderbett/Kinderstuhl<small>auf Anfrage</small>|Grundausstattung Tabs, Spülmittel etc.',
        'facilities' => 'Dusche|TV|Föhn|Kühlschrank|Bügeleisen & Bügelbrett|Sitzecke|Toilette|Mikrowelle|Eigenes Badezimmer|Heizung|Satellitenprogramme|Küche|Flatscreen TV|Sofa|Parkettboden|Essbereich|Geschirr-Set|Kleiderschrank|Herdplatte|Nespresso Kaffeemaschine mit Wasserkocher|Bade- und Handtücher|Bettwäsche|Esstisch|Hochstuhl|Obere Etagen mittels Aufzug zugänglich|privates Apartment im Gebäude|Toilettenpapier|Schlafsofa|<strong>kostenloses WLAN</strong>',
        'apartments' => [
            0 => [
                'name' => 'Studio Apartment',
                'price' => 79,
                'area' => 32,
                'rooms' => [
                    0 => [
                        'name' => '',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'
                    ],
                    1 => [
                        'name' => '',
                        'sleeping' => '1 Sofabett',
                        'icon' => 'icon_sofa'],
                ],
            ],
            1 => ['name' => 'Apartment mit 1 Schlafzimmer',
                'price' => 89,
                'area' => 42,
                'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                    'sleeping' => '1 Queen Bed',
                    'icon' => 'icon_bed'],
                    1 => ['name' => 'Wohnzimmer',
                        'sleeping' => '1 Sofabett',
                        'icon' => 'icon_sofa'],],],
            2 => ['name' => 'Apartment mit 2 Schlafzimmer',
                'price' => 99,
                'area' => 72,
                'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                    'sleeping' => '1 Queen Bed',
                    'icon' => 'icon_bed'],
                    1 => ['name' => 'Schlafzimmer 2',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                    2 => ['name' => 'Wohnzimmer',
                        'sleeping' => '1 Sofabett',
                        'icon' => 'icon_sofa'],],],],
        'images' => 12,],


        1 => ['title' => 'Vienna 10',
            'slug' => 'vienna-10',
            'fac_pdf' => 'Inventory_Jimmys_10.pdf',
            'info_slug' => 'tri',
            'booking_subdomain' => 'triesterstrasse',
            'status' => 1,
            'logo' => 'logo_vienna_10',
            'hero' => 'hero_vienna_10',
            'address' => 'Triesterstraße 27',
            'zip' => 1100,
            'ort' => 'Wien',
            'intro' => 'Verkehrsgünstig gelegen, nur 15 Minuten mit der Strassenbahn direkt zur Ringstrasse. Das Auto kann in der Hauseigenen Garage parken.',
            'categories' => 'Studios, 1 und 2 Bedroom Apartments',
            'desc' => 'Wenn es bei der Buchung nicht anders angegeben ist oder von uns schriftlich bestätigt, gelten folgende Buchungs- und Stornobedingungen als vereinbart:
<strong>Check-in/Check-out:</strong>
Gerne steht Ihnen das Apartment am Anreisetag ab 15:00 zur Verfügung, am Abreisetag bis 12:00.
<strong>Stornierung:</strong>
Bis 3 Tage vor Anreise kostenlose Stornierung möglich, danach werden 100% des gebuchten Gesamtpreises in Rechnung gestellt.
Sollte bis zum letzten kostenlosen Stornotermin (idR 3 Tage vor Anreise) keine Abbuchung auf der angegebenen Kreditkarte möglich sein, oder falls vereinbart, der vereinbarte Betrag nicht auf unserem Konto eingelangt sein, behalten wir uns vor, die Buchung zu stornieren.
<strong>Vorauszahlung:</strong>
Der gesamte Buchungswert wird bis zum letzten kostenlosen Stornotermin (idR 3 Tage vor Anreise) von der von Ihnen angegeben Kreditkarte abgebucht. Gegebenenfalls kann auf Wunsch auch per Banküberweisung bezahlt werden, bitte beachten Sie, dass der Betrag auch bis zu diesem Tag auf unserem Konto eingelangt sein muss.
<strong>Kinder- Zustellbetten:</strong>
Kinder bis 12 Jahre zahlen keinen Aufpreis im Apartment. Bitte aber um Bekanntgabe bis 1 Woche vor Anreise wenn Sie Zusatz- oder Babybett oder Kinderstuhl benötigen.
<strong>Sonstiges:</strong>
Bitte beachten Sie, dass keine Haustiere gestattet sind und das Rauchen im gesamten Gebäude verboten ist.',
            'features' => 'Apartments<br><small>30-50 m<sup>2</sup></small>|High Speed WLAN / Smart Sat TV|Wäsche - und Reinigungsservice|Safe|Balkon / Terrasse (teilweise)|Küche - voll ausgestattet|Waschküche|Bügelbrett / Bügeleisen|Klimaanlage, Fußbodenheizung|Bad &amp; WC|Kinderbett/Kinderstuhl<small>auf Anfrage</small>|Grundausstattung Tabs, Spülmittel etc.',
            'facilities' => 'Dusche|Klimaanlage|Föhn|Kühlschrank|Bügeleisen & Bügelbrett|Sitzecke|Toilette|Mikrowelle|Eigenes Badezimmer|Heizung|Satellitenprogramme|Küche|Flatscreen TV|Sofa|Parkettboden|Essbereich|Geschirr-Set|Kleiderschrank|Herdplatte|Nespresso Kaffeemaschine|Bade- und Handtücher|Bettwäsche|Esstisch|Hochstuhl|Obere Etagen mittels Aufzug zugänglich|privates Apartment im Gebäude|Toilettenpapier|Schlafsofa|<strong>kostenloses WLAN</strong>',
            'apartments' => [0 => ['name' => 'Studio Apartment',
                'price' => 79,
                'area' => 30,
                'rooms' => [0 => ['name' => '',
                    'sleeping' => '1 Queen Bed',
                    'icon' => 'icon_bed'],
                    1 => ['name' => '',
                        'sleeping' => '1 Sofabett',
                        'icon' => 'icon_sofa'],],],
                1 => ['name' => 'Studio Apartment mit Balkon',
                    'price' => 89,
                    'area' => 30,
                    'rooms' => [0 => ['name' => '',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => '',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],
                        2 => ['name' => 'Balkon',
                            'icon' => 'icon_balcony'],],],
                2 => ['name' => 'Apartment mit 2 Schlafzimmer und Balkon',
                    'price' => 109,
                    'area' => 50,
                    'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Schlafzimmer 2',
                            'sleeping' => '1 Queen Bed',
                            'icon' => 'icon_bed'],
                        2 => ['name' => 'Wohnzimmer',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],
                        3 => ['name' => 'Balkon',
                            'icon' => 'icon_balcony'],],],
                3 => ['name' => 'Apartment mit 1 Schlafzimmer',
                    'price' => 89,
                    'area' => 36,
                    'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Wohnzimmer',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],],],
                4 => ['name' => 'Apartment mit 1 Schlafzimmer und Balkon',
                    'price' => 99,
                    'area' => 40,
                    'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Wohnzimmer',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],
                        2 => ['name' => 'Balkon',
                            'icon' => 'icon_balcony'],],],],
            'images' => 14,],


        2 => ['title' => 'Vienna 11',
            'slug' => 'vienna-11',
            'fac_pdf' => 'Inventory_Jimmys_11.pdf',
            'info_slug' => 'lory',
            'booking_subdomain' => 'lorystrasse',
            'status' => 1,
            'logo' => 'logo_vienna_11',
            'hero' => 'hero_vienna_11',
            'address' => 'Lorystrasse 4',
            'zip' => 1110,
            'ort' => 'Wien',
            'intro' => 'Jimmys 11 liegt in einer ruhigen Gegend, gleich ums Eck der U3 – in 20 Minuten direkt ins Zentrum, mit der S-Bahn in 25 Minuten zum Flughafen.',
            'categories' => '1 und 2 Bedroom Apartments, teilweise mit Balkon',
            'desc' => 'Wenn es bei der Buchung nicht anders angegeben ist oder von uns schriftlich bestätigt, gelten folgende Buchungs- und Stornobedingungen als vereinbart:
<strong>Check-in/Check-out:</strong>
Gerne steht Ihnen das Apartment am Anreisetag ab 15:00 zur Verfügung, am Abreisetag bis 12:00.
<strong>Stornierung:</strong>
Bis 3 Tage vor Anreise kostenlose Stornierung möglich, danach werden 100% des gebuchten Gesamtpreises in Rechnung gestellt.
Sollte bis zum letzten kostenlosen Stornotermin (idR 3 Tage vor Anreise) keine Abbuchung auf der angegebenen Kreditkarte möglich sein, oder falls vereinbart, der vereinbarte Betrag nicht auf unserem Konto eingelangt sein, behalten wir uns vor, die Buchung zu stornieren.
<strong>Vorauszahlung:</strong>
Der gesamte Buchungswert wird bis zum letzten kostenlosen Stornotermin (idR 3 Tage vor Anreise) von der von Ihnen angegeben Kreditkarte abgebucht. Gegebenenfalls kann auf Wunsch auch per Banküberweisung bezahlt werden, bitte beachten Sie, dass der Betrag auch bis zu diesem Tag auf unserem Konto eingelangt sein muss.
<strong>Kinder- Zustellbetten:</strong>
Kinder bis 12 Jahre zahlen keinen Aufpreis im Apartment. Bitte aber um Bekanntgabe bis 1 Woche vor Anreise wenn Sie Zusatz- oder Babybett oder Kinderstuhl benötigen.
<strong>Sonstiges:</strong>
Bitte beachten Sie, dass keine Haustiere gestattet sind und das Rauchen im gesamten Gebäude verboten ist.',
            'features' => 'Apartments<br><small>36-70 m<sup>2</sup></small>|Balkon/Terrasse<br><small>(teilweise)</small>|Klimaanlage, Fussbodenheizung|High Speed WLAN / Smart Sat TV|Küche - voll ausgestattet|Bad &amp; WC|Wäsche - und Reinigungsservice|Waschküche|Kinderbett/Babysitz<small>auf Anfrage</small>|Safe|Bügelbrett / Bügeleisen|Grundaustattung Tabs, Spülmittel etc.',
            'facilities' => 'Dusche|TV|Klimaanlage|Föhn|Kühlschrank|Bügeleisen & Bügelbrett|Sitzecke|Toilette|Mikrowelle|Eigenes Badezimmer|Heizung |Satellitenprogramme |Küche|Flatscreen TV|Sofa |Parkettboden|Essbereich|Geschirr-Set|Kleiderschrank|Herdplatte|Nespresso Kaffeemaschine (inkl. Wasserkocher)|Bade- und Handtücher|Bettwäsche|Esstisch|Kinder-Hochstuhl (auf Anfrage)|Obere Etagen mittels Aufzug zugänglich|privates Apartment im Gebäude|Toilettenpapier|Schlafsofa|<strong>kostenloses WLAN</strong>',
            'apartments' => [0 => ['name' => 'Apartment mit 1 Schlafzimmer und Balkon',
                'price' => 79,
                'area' => 36,
                'rooms' => [0 => ['name' => 'Schlafzimmer',
                    'sleeping' => '1 Queen Bed',
                    'icon' => 'icon_bed'],
                    1 => ['name' => 'Wohnzimmer:',
                        'sleeping' => '1 Sofabett',
                        'icon' => 'icon_sofa'],
                    2 => ['name' => 'Balkon',
                        'icon' => 'icon_balcony']]],
                1 => ['name' => 'Apartment mit 1 Schlafzimmer und Balkon',
                    'price' => 89,
                    'area' => 50,
                    'rooms' => [0 => ['name' => 'Schlafzimmer',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Wohnzimmer:',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],
                        2 => ['name' => 'Balkon',
                            'icon' => 'icon_balcony']]],
                2 => ['name' => 'Apartment mit 1 Schlafzimmer',
                    'price' => 79,
                    'area' => 50,
                    'rooms' => [0 => ['name' => 'Schlafzimmer',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Wohnzimmer:',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa']]],
                3 => ['name' => 'Apartment mit 2 Schlafzimmer und Balkon',
                    'price' => 99,
                    'area' => 70,
                    'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Schlafzimmer 2',
                            'sleeping' => '1 Queen Bed',
                            'icon' => 'icon_bed'],
                        2 => ['name' => 'Wohnzimmer:',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],
                        3 => ['name' => 'Balkon',
                            'icon' => 'icon_balcony']]],],
            'images' => 9,],


        3 => ['title' => 'Vienna 12',
            'slug' => 'vienna-12',
            'info_slug' => 'soga',
            'fac_pdf' => 'Inventory_Jimmys_12.pdf',
            'booking_subdomain' => 'booking',
            'status' => 1,
            'logo' => 'logo_vienna_12',
            'hero' => 'hero_vienna_12',
            'address' => 'Sonnergasse 48',
            'zip' => 1120,
            'ort' => 'Wien',
            'intro' => 'Nur 4 km von Schloss Schönbrunn entfernt, gleich nahe dem Verkehrsknotenpunkt Altmannsdorferstrasse und Philadelphiabrücke. Direkt ins Zentrum mit der Strassenbahn in 25 Minuten!',
            'categories' => "1 und 2 Bedroom Apartments, tw. Balkon",
            'desc' => 'Wenn es bei der Buchung nicht anders angegeben ist oder von uns schriftlich bestätigt, gelten folgende Buchungs- und Stornobedingungen als vereinbart:
<strong>Check-in/Check-out:</strong>
Gerne steht Ihnen das Apartment am Anreisetag ab 15:00 zur Verfügung, am Abreisetag bis 12:00.
<strong>Stornierung:</strong>
Bis 3 Tage vor Anreise kostenlose Stornierung möglich, danach werden 100% des gebuchten Gesamtpreises in Rechnung gestellt.
Sollte bis zum letzten kostenlosen Stornotermin (idR 3 Tage vor Anreise) keine Abbuchung auf der angegebenen Kreditkarte möglich sein, oder falls vereinbart, der vereinbarte Betrag nicht auf unserem Konto eingelang sein, behalten wir uns vor, die Buchung zu stornieren.
<strong>Vorauszahlung:</strong>
Der gesamte Buchungswert wird bis zum letzten kostenlosen Stornotermin (idR 3 Tage vor Anreise) von der von Ihnen angegeben Kreditkarte abgebucht. Gegebenenfalls kann auf Wunsch auch per Banküberweisung bezahlt werden, bitte beachten Sie, dass der Betrag auch bis zu diesem Tag auf unserem Konto eingelangt sein muss.
<strong>Kinder- Zustellbetten:</strong>
Kinder bis 12 Jahre zahlen keinen Aufpreis im Apartment. Bitte aber um bekanntgabe bis 1 Woche vor Anreise wenn Sie Zusatz- oder Babybett oder Kinderstuhl benötigen.
<strong>Sonstiges:</strong>
Bitte beachten Sie, das keine Haustiere gestattet sind und das Rauchen im gesamten Gebäude verboten ist.',
            'features' => 'Apartments<br><small>52-60 m<sup>2</sup></small>|Balkon/Terrasse<br><small>(teilweise)</small>|Klimaanlage, Fussbodenheizung|High Speed WLAN / Smart Sat TV|Küche - voll ausgestattet|Bad &amp; WC<small>(getrennt voneinander)</small>|Wäsche - und Reinigungsservice|Waschküche|Kinderbett/Babysitz<small>auf Anfrage</small>|Safe|Bügelbrett / Bügeleisen|Grundaustattung Tabs, Spülmittel etc.',
            'facilities' => 'Bathtub|TV|Air conditioning|Hairdryer|Iron|Refrigerator|Ironing facilities|Sitting area|Toilet|Microwave|Private Bathroom|Heating|Satellite channels|Kitchen|Bathtub or shower|Flat-screen TV|Sofa|Hardwood or parquet floors|Dining area|Electric kettle|Kitchenware|Wardrobe or closet|Oven|Stovetop|Coffee machine|Towels|Linens|Dining table|High chair|Upper floors accessible by elevator|Private apartment in building|Toilet paper|Sofa bed|<strong>Free WLAN!</strong>',
            'apartments' => [0 => ['name' => 'Apartment mit 1 Schlafzimmer',
                'price' => 79,
                'area' => 50,
                'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                    'sleeping' => '1 Queen Bed',
                    'icon' => 'icon_bed'],
                    1 => ['name' => 'Wohnzimmer',
                        'sleeping' => '1 Sofabett',
                        'icon' => 'icon_sofa'],],],
                1 => ['name' => 'Apartment mit 1 Schlafzimmer und Balkon',
                    'price' => 89,
                    'area' => 50,
                    'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Wohnzimmer',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],
                        2 => ['name' => 'Balkon',
                            'icon' => 'icon_balcony'],],],
                2 => ['name' => 'Apartment mit 2 Schlafzimmer',
                    'price' => 99,
                    'area' => 50,
                    'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Schlafzimmer 2',
                            'sleeping' => '1 Queen Bed',
                            'icon' => 'icon_bed'],
                        2 => ['name' => 'Wohnzimmer',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],],],
                3 => ['name' => 'Rooftop Apartment mit 1 Schlafzimmer',
                    'price' => 109,
                    'area' => 50,
                    'rooms' => [0 => ['name' => 'Schlafzimmer 1',
                        'sleeping' => '1 Queen Bed',
                        'icon' => 'icon_bed'],
                        1 => ['name' => 'Wohnzimmer',
                            'sleeping' => '1 Sofabett',
                            'icon' => 'icon_sofa'],
                        2 => ['name' => 'Balkon',
                            'icon' => 'icon_balcony'],],],],
            'images' => 7,],


        4 => ['title' => 'Vienna 04',
            'slug' => 'vienna-04',
            'info_slug' => null,
            'status' => 0,
            'logo' => 'logo_vienna_04',
            'hero' => null,
            'address' => null,
            'zip' => null,
            'ort' => 'Wien',
            'desc' => null,
            'features' => 'Apartments<br><small>52-60 m<sup>2</sup></small>|Balkon/Terrasse<br><small>(teilweise)</small>|Klimaanlage, Fussbodenheizung|High Speed WLAN / Smart Sat TV|Küche - voll ausgestattet|Bad &amp; WC<small>(getrennt voneinander)</small>|Wäsche - und Reinigungsservice|Waschküche|Kinderbett/Babysitz<small>auf Anfrage</small>|Safe|Bügelbrett / Bügeleisen|Grundaustattung Tabs, Spülmittel etc.',
            'facilities' => 'Bathtub|TV|Air conditioning|Hairdryer|Iron|Refrigerator|Ironing facilities|Sitting area|Toilet|Microwave|Private Bathroom|Heating|Satellite channels|Kitchen|Bathtub or shower|Flat-screen TV|Sofa|Hardwood or parquet floors|Dining area|Electric kettle|Kitchenware|Wardrobe or closet|Oven|Stovetop|Coffee machine|Towels|Linens|Dining table|High chair|Upper floors accessible by elevator|Private apartment in building|Toilet paper|Sofa bed|<strong>Free WLAN!</strong>',
            'apartments' => [],
            'images' => 0,],


        5 => ['title' => 'Vienna 12/2',
            'slug' => 'vienna-12-2',
            'info_slug' => null,
            'status' => 0,
            'logo' => 'logo_vienna_12_2',
            'hero' => null,
            'address' => null,
            'zip' => null,
            'ort' => 'Wien',
            'desc' => null,
            'features' => 'Apartments<br><small>52-60 m<sup>2</sup></small>|Balkon/Terrasse<br><small>(teilweise)</small>|Klimaanlage, Fussbodenheizung|High Speed WLAN / Smart Sat TV|Küche - voll ausgestattet|Bad &amp; WC<small>(getrennt voneinander)</small>|Wäsche - und Reinigungsservice|Waschküche|Kinderbett/Babysitz<small>auf Anfrage</small>|Safe|Bügelbrett / Bügeleisen|Grundaustattung Tabs, Spülmittel etc.',
            'facilities' => 'Bathtub|TV|Air conditioning|Hairdryer|Iron|Refrigerator|Ironing facilities|Sitting area|Toilet|Microwave|Private Bathroom|Heating|Satellite channels|Kitchen|Bathtub or shower|Flat-screen TV|Sofa|Hardwood or parquet floors|Dining area|Electric kettle|Kitchenware|Wardrobe or closet|Oven|Stovetop|Coffee machine|Towels|Linens|Dining table|High chair|Upper floors accessible by elevator|Private apartment in building|Toilet paper|Sofa bed|<strong>Free WLAN!</strong>',
            'apartments' => [],
            'images' => 0,],];

    public function run()
    {
//        foreach ($this->locations as $location) {
//            $db_location = Location::where('slug', $location['slug'])->first();
//            foreach ($location['apartments'] as $apartment) {
//                $db_apartment = new Apartment();
//                $db_apartment->price = $apartment['price'];
//                $db_apartment->area = $apartment['area'];
//                $db_apartment->location_id = $db_location->id;
//                $db_apartment->save();
//                $db_apartment->translateOrNew('de')->name = $apartment['name'];
//                $db_apartment->save();
//
//                foreach ($apartment['rooms'] as $room) {
//                    $db_room = new Room();
//                    $db_room->icon=$room['icon'];
//                    $db_room->apartment_id = $db_apartment->id;
//                    $db_room->save();
//                    $db_room->translateOrNew('de')->name = $room['name'];
//
//                    if (array_key_exists('sleeping', $room)) {
//                        $db_room->translateOrNew('de')->sleeping = $room['sleeping'];
//                    } else {
//                        $db_room->translateOrNew('de')->sleeping = '';
//                    }
//                    $db_room->save();
//                }
//
//
//
//            }
//        }
        $rooms = RoomTranslation::all();

        foreach ($rooms as $room) {
                $db_room = new RoomTranslation();
                if ($room->name == 'Schlafzimmer 1') {
                    $db_room->name = 'Bedroom 1';
                }
                else if ($room->name == 'Schlafzimmer 2') {
                    $db_room->name = 'Bedroom 2';
                }
                else if ($room->name == 'Schlafzimmer') {
                    $db_room->name = 'Bedroom';
                }
                else if ($room->name == 'Schlafzimmer 3') {
                    $db_room->name = 'Bedroom 3';
                }
                else if ($room->name == 'Balkon') {
                    $db_room->name = 'Balcony';
                }
                else if ($room->name == 'Wohnzimmer') {
                    $db_room->name = 'Living room';
                } else {
                    $db_room->name = '';
                }


                if ($room->sleeping == '1 Queen Bett') {
                    $db_room->sleeping = '1 Queen Bed';
                }
                else if ($room->sleeping == '1 Sofabett') {
                    $db_room->sleeping = '1 Sofabed';
                }
                else  {
                    $db_room->sleeping = '';
                }
                $db_room->locale = 'en';
                $db_room->room_id = $room->room_id;
                $db_room->save();

        }
    }

}
