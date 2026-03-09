<div class="row" id="address">
    <div class="col-sm-6 left-of-map">
        <div class="lom-content">
            <h2>{{ (!App::isLocale('de')) ? 'Address' : 'Adresse'}}</h2>
            <h4>{{ (!App::isLocale('de')) ? '(also for navigation devices or Google Maps)' : '(auch für Navigationsgerät oder google maps)'}}</h4>
            <p>{{ $address }}</p>
            <a href="{{ $gmaps_nav}}" class="btn-jimmys space-above {{ empty($dark) ? 'light-bg' : '' }}" target="_blank">Navigation</a>
        </div>
    </div>
    <div id="map" class="col-sm-6">
        <iframe src="{{ $gmaps_embed }}" allowfullscreen></iframe>
    </div>
</div>
