
<div class="container-fluid">
    <div class="row" id="feedback">
        <div class="col-md-12 text-center">
            <h2>
                {{__('Was für den Künstler der Applaus, ist für uns eine gute (oder auch sehr gute) Bewertung. Danke :-)')}}
            </h2>
        </div>
    </div>
    <div class="row" id="more-questions">
        <div class="col-md-12 text-center">
            <h2>
                {{__('Noch Fragen?')}}
            </h2>
            <p>{!!__('Wenn Sie sonst noch Fragen haben, helfen wir gerne wo wir können - am besten per E&#8209;Mail, wir antworten üblicherweise wirklich schnell:')!!}</p>
            <a href="mailto:office@jimmys.at" class="btn-jimmys space-above space-below {{ empty($dark) ? 'light-bg' : '' }}" >{{__('E-Mail senden')}}</a>
            <p>{{__('Telefon')}}: <a href="tel:+4319970010">+43&nbsp;1&nbsp;997&nbsp;0010</a></p>
        </div>
    </div>
    <div class="row" id="thank-you">
        <div class="col-md-12 text-center">
            <h2>
                {{__('Wir wünschen Ihnen schon jetzt eine angenehme Anreise und eine gute Zeit in Wien!')}}
            </h2>
            <div class="signature">
                <span>{{__('Ihr')}}</span>
                <div class="sig-logo">
                    <img src="{{asset('img/jimmys_signature.png')}}" srcset="{{asset('img/jimmys_signature.svg')}} 1x" alt="Jimmy's Apartments Signature Logo">
                </div>
                <span>Team</span>
            </div>
            <p>{{__('P.S.: Wir haben uns wirklich Mühe gegeben, alle Informationen richtig und auf dem neuesten Stand wiederzugeben. Haftung können wir aber dafür leider keine übernehmen.')}}</p>
        </div>
    </div>
</div>
