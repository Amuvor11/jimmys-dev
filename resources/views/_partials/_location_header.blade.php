<div class="large-pad pad-top pad-bottom text-center location-header position-relative margin-bottom" {!! (!empty($color)) ? 'style="background-color: ' . htmlspecialchars($color) .';"' : '' !!}>
    <div class="d-flex justify-content-center align-items-center mx-auto mb-5 loc-header-logo">
        <img src="{{asset('img/'.$logo.'.png')}}" alt="{{$address}}" srcset="{{asset('img/'.$logo.'.svg')}} 1x">
    </div>
    <h1 class="mb-0 fw-700 {{ (!empty($dark)) ? 'white' : '' }}">{{$address}}</h1>
    <h2 class="mb-0 fw-300 {{ (!empty($dark)) ? 'white' : '' }}">{{$zip}}</h2>
    <div class="covid-icons-container">
        @include( '../../_partials/_covid_icons')
    </div>
</div>
