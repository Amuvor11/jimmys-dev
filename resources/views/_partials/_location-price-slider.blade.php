<div id="location-slider">
    @foreach($locations as $index => $slider_location)
        @if (Route::currentRouteName() == 'location' && !empty($location) && $location['slug'] == $slider_location['slug']) 
            @continue
        @endif
        @if ($slider_location['status'] == 1)
            <div class="slider-panel">
                <div class="slider-logo"><img src="{{asset('img/'. $slider_location['logo'].'.png')}}" alt="{{ $slider_location['title']}}" srcset="{{asset('img/'. $slider_location['logo'].'.svg')}} 1x"></div>
                <div class="slider-panel-content" style="background-image:
                    @if (!empty($slider_location['images']))
                    url('{{ asset('img/slider_'.str_replace('-', '_', $slider_location['slug']) . '.jpg')}}');
                    @elseif ($index & 1)
                    url(' {{ asset('img/slider_inactive_1.jpg')}}');
                    @else
                    url('{{ asset('img/slider_inactive_0.jpg')}}');
                    @endif">
                </div>
                <div class="slider-text">
                    <?php /* <h4 <?php echo ($slider_location['status']) ? '' : 'class="mb-4"'; ?>><?php echo $slider_location['title']; ?></h4> */ ?>
                    @if ($slider_location['status'])
                        <p class="my-3 fw-300">
                            <span class="fw-700 d-block">
                                {{ $slider_location['address'] }}
                            </span>
                            {{$slider_location['zip'] . ' ' . $slider_location['ort']}}
                        </p>
                        <a href="{{route('location', $slider_location['slug'])}}" class="btn-jimmys">Details</a>
                    @else
                        <div class="btn-jimmys inactive">{{__('in Kürze')}}</div>
                    @endif
                </div>
            </div>
            @endif
    @endforeach
</div>