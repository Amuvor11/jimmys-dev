@include('_partials/_header')
    <div class="covid-content">
        @if(App::isLocale('en'))
        
            <div class="container pad-top">

                <h2 class="my-5">What else is there to know?</h2>

                <h3>Check-in:</h3>
                <p>As soon as all documents have been uploaded and checked by us, you will automatically receive your access codes to the apartment by e-mail on the day of arrival in the morning. Your flat will be accessible with the code from 3pm onwards.</p>
                <h3>Check-out:</h3>
                <p>The codes to the apartment are valid until 11am on the day of departure. Thanks to our contactless check-in procedure, a separate check-out is not necessary.</p>
                <h3>Early Check-in/ Late Check-out:</h3>
                <p>Are you arriving earlier or do you have to leave later than the standard check-in/out times? You are welcome to contact us directly regarding an early check-in or late check-out.</p>
                <p>Depending on the booking situation and the additional cleaning measures that take more time, we unfortunately cannot guarantee an early check-in or late check-out. However, we will do our best to fulfil your wishes. Should there be no availability, you have the possibility to lock your luggage safely in our luggage rooms. All you need to do is bring your own padlock.</p>

                <p>More useful information about your stay and Jimmy's Apartments location can be found here:</p>
                <ul>
                    <li><a href="{{ route('emerald') }}">Jimmy's Apartments Emerald (Steingasse)</a></li>
                    <li><a href="{{ route('lory') }}">Jimmy's Apartments Lory (Lorystrasse)</a></li>
                    <li><a href="{{ route('siena') }}">Jimmy's Apartments Siena (Sonnergasse)</a></li>
                    <li><a href="{{ route('dandelion') }}">Jimmy's Apartments Dandelion (Knöllgasse)</a></li>
                </ul>

                <div class="container-fluid my-5">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_wash.png') }}" srcset="{{ asset('img/icon_wash.svg') }} 1x" class="img-fluid mb-4" alt="icon-wash">
                                    <p class="mb-auto text-center">Wash and disinfect your hands multiple times throughout the day</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_infected.png') }}" srcset="{{ asset('img/icon_infected.svg') }} 1x" class="img-fluid mb-4" alt="icon-temperature">
                                    <p class="mb-auto text-center">Avoid contact with possibly infected people</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_distance.png') }}" srcset="{{ asset('img/icon_distance.svg') }} 1x" class="img-fluid mb-4" alt="icon-distance">
                                    <p class="mb-auto text-center">Keep a distance to other people</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_sneeze.png') }}" srcset="{{ asset('img/icon_sneeze.svg') }} 1x" class="img-fluid mb-4" alt="icon-sneeze">
                                    <p class="mb-auto text-center">When you cough or sneeze: cover your mouth and nose with a handkerchief</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_mask_info.png') }}" srcset="{{ asset('img/icon_mask_info.svg') }} 1x" class="img-fluid mb-4" alt="icon-mask">
                                    <p class="mb-auto text-center">Wear a mask</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_home.png') }}" srcset="{{ asset('img/icon_home.svg') }} 1x" class="img-fluid mb-4" alt="icon-home">
                                    <p class="mb-auto text-center">Stay at home in case you feel sick</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_travel.png') }}" srcset="{{ asset('img/icon_travel.svg') }} 1x" class="img-fluid mb-4" alt="icon-travel">
                                    <p class="mb-auto text-center">Take travel restrictions seriously</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_shake.png') }}" srcset="{{ asset('img/icon_shake.svg') }} 1x" class="img-fluid mb-4" alt="icon-shake">
                                    <p class="mb-auto text-center">Avoid shaking hands</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="bk-grey py-5">
                <div class="container">
                    <p class="mb-5">
                        If you have any further questions, please do not hesitate to contact us on the following e-mail address: <a href="mailto:office@jimmys.at">office@jimmys.at</a><br>
                        or by phone at <a href="tel:+4319970010">+43&nbsp;1&nbsp;997&nbsp;0010</a>.
                    </p>
                    <a href="#header" class="d-flex justify-content-center justify-content-md-start align-items-center mt-5 pt-3">
                        <span class="mr-4 mb-0 bold blue">Back to top</span>
                        <img src="{{ asset('img/arrow_up.png') }}" srcset="{{ asset('img/arrow_up.svg') }} 1x" class="img-fluid">
                    </a>
                </div>
            </div>

        @else
            <div class="container pad-top">

                <h2 class="my-5">Wie ist der weitere Ablauf?</h2>

                <h3>Check-in:</h3>
                <p>Sobald alle Unterlagen hochgeladen und von uns überprüft wurden bekommen Sie am Anreisetag am Vormittag automatisch Ihre Zugangscodes zum Apartment per E-Mail zugeschickt. Ihr Apartment wird mit dem Code ab 15:00 Uhr zugänglich sein.</p>
                <h3>Check-out:</h3>
                <p>Die Codes zum Apartment sind am Abreisetag bis 11:00 Uhr gültig. Dank unserem kontaktlosen Check-in ist bereits alles erledigt und ein separater Check-out ist nicht mehr nötig.</p>
                <h3>Früher Check-in / Später Check-out:</h3>
                <p class="mb-0">Sie reisen früher an oder müssen später abreisen? Gerne können Sie uns bezüglich einem early Check-in oder late Check-out direkt kontaktieren.</p>
                <p>Abhängig von der Buchungslage und der zusätzlichen Reinigungsmaßnahmen die mehr Zeit in Anspruch nehmen, können wir leider nicht garantieren, Ihnen das Apartment schon früher bzw. noch länger zur Verfügung zu stellen. Wir versuchen aber unser Bestes zu geben und Ihre Wünsche soweit wie möglich umzusetzen.</p>
                <p>Sollte es doch einmal nicht möglich sein, haben Sie die Möglichkeit Ihr Gepäck in unseren Gepäckräumen sicher zu versperren. Sie müssen dafür lediglich ein eigenes Vorhängeschloss mitbringen.</p>

                <p>Weitere nützliche Informationen zu Ihrem Aufenthalt und Jimmy's Apartment Standort finden Sie hier:</p>
                <ul>
                    <li><a href="{{ route('emerald') }}">Jimmy's Apartments Emerald (Steingasse)</a></li>
                    <li><a href="{{ route('lory') }}">Jimmy's Apartments Lory (Lorystrasse)</a></li>
                    <li><a href="{{ route('siena') }}">Jimmy's Apartments Sienna (Sonnergasse)</a></li>
                    <li><a href="{{ route('dandelion') }}">Jimmy's Apartments Dandelion (Knöllgasse)</a></li>
                </ul>

                <div class="container-fluid my-5">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_wash.png') }}" srcset="{{ asset('img/icon_wash.svg') }} 1x" class="img-fluid mb-4" alt="icon-wash">
                                    <p class="mb-auto text-center">Täglich mehrmals Hände waschen und desinfizieren</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_infected.png') }}" srcset="{{ asset('img/icon_infected.svg') }} 1x" class="img-fluid mb-4" alt="icon-temperature">
                                    <p class="mb-auto text-center">Vermeiden von direktem Kontakt zu kranken Menschen</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_distance.png') }}" srcset="{{ asset('img/icon_distance.svg') }} 1x" class="img-fluid mb-4" alt="icon-distance">
                                    <p class="mb-auto text-center">Zu anderen Menschen Abstand halten</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_sneeze.png') }}" srcset="{{ asset('img/icon_sneeze.svg') }} 1x" class="img-fluid mb-4" alt="icon-sneeze">
                                    <p class="mb-auto text-center">Beim Husten/Niesen: bedecken von Mund und Nase mit einem Taschentuch</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_mask_info.png') }}" srcset="{{ asset('img/icon_mask_info.svg') }} 1x" class="img-fluid mb-4" alt="icon-mask">
                                    <p class="mb-auto text-center">Tragen eines Mund-Nasen-Schutz</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_home.png') }}" srcset="{{ asset('img/icon_home.svg') }} 1x" class="img-fluid mb-4" alt="icon-home">
                                    <p class="mb-auto text-center">Im Verdachtsfall zu Hause bleiben</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_travel.png') }}" srcset="{{ asset('img/icon_travel.svg') }} 1x" class="img-fluid mb-4" alt="icon-travel">
                                    <p class="mb-auto text-center">Reisewarnungen ernst nehmen</p>
                                </div>
                                <div class="col-md-6 col-lg-3 d-flex flex-column justify-content-center align-items-center py-3 px-5">
                                    <img src="{{ asset('img/icon_shake.png') }}" srcset="{{ asset('img/icon_shake.svg') }} 1x" class="img-fluid mb-4" alt="icon-shake">
                                    <p class="mb-auto text-center">Händeschütteln vermeiden</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="bk-grey py-5">
                <div class="container">
                    <p class="mb-5">
                        Sollten Sie noch weitere Fragen haben, stehen wir unter folgender E-Mail gerne für Sie zur Verfügung: <a href="mailto:office@jimmys.at">office@jimmys.at</a>.<br>
                        Telefonisch sind wir unter <a href="tel:+4319970010">+43&nbsp;1&nbsp;997&nbsp;0010</a> erreichbar.</p>
                    <a href="#" class="scroll-to-top d-flex justify-content-center justify-content-md-start align-items-center mt-5 pt-3">
                        <span class="mr-4 mb-0 bold blue">Back to top</span>
                        <img src="{{ asset('img/arrow_up.png') }}" srcset="{{ asset('img/arrow_up.svg') }} 1x" class="img-fluid">
                    </a>
                </div>
            </div>
                
        @endif

    </div>

    @include('_partials/_footer')

</body>
</html>