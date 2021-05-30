<div>
    <div class="hero" style="background-color: #1e202b;">
        <div class="container">
            <form wire:submit.prevent="search" class="find-location">
                <input type="text" wire:model="search" placeholder="Find your location...">

            </form>
        </div>
    </div>

    @if (isset($response))
    <?php
    function kelvin_to_celsius($given_value)
    {
        $celsius=$given_value-273.15;
        return intval($celsius) ;
    }
    function wind_cardinal( $degree ) {

        switch( $degree ) {

            case ( $degree >= 348.75 && $degree <= 360 ):
                $cardinal = "N";
            break;

            case ( $degree >= 0 && $degree <= 11.249 ):
                $cardinal = "N";
            break;

            case ( $degree >= 11.25 && $degree <= 33.749 ):
                $cardinal = "NNE";
            break;

            case ( $degree >= 33.75 && $degree <= 56.249 ):
                $cardinal = "NE";
            break;

            case ( $degree >= 56.25 && $degree <= 78.749 ):
                $cardinal = "ENE";
            break;

            case ( $degree >= 78.75 && $degree <= 101.249 ):
                $cardinal = "E";
            break;

            case ( $degree >= 101.25 && $degree <= 123.749 ):
                $cardinal = "ESE";
            break;

            case ( $degree >= 123.75 && $degree <= 146.249 ):
                $cardinal = "SE";
            break;

            case ( $degree >= 146.25 && $degree <= 168.749 ):
                $cardinal = "N";
            break;

            case ( $degree >= 168.75 && $degree <= 191.249 ):
                $cardinal = "S";
            break;

            case ( $degree >= 191.25 && $degree <= 213.749 ):
                $cardinal = "SSW";
            break;

            case ( $degree >= 213.75 && $degree <= 236.249 ):
                $cardinal = "SW";
            break;

            case ( $degree >= 236.25 && $degree <= 258.749 ):
                $cardinal = "WSW";
            break;

            case ( $degree >= 258.75 && $degree <= 281.249 ):
                $cardinal = "W";
            break;

            case ( $degree >= 281.25 && $degree <= 303.749 ):
                $cardinal = "WNW";
            break;

            case ( $degree >= 303.75 && $degree <= 326.249 ):
                $cardinal = "NW";
            break;

            case ( $degree >= 326.25 && $degree <= 348.749 ):
                $cardinal = "NNW";
            break;

            default:
                $cardinal = null;

        }

       return $cardinal;

   }
    ?>
    @if ($response['cod']==='404')
    <div class="forecast-table">
        <div class="container">
            <h1>Data Not Found</h1>
        </div>
    </div>
    @else
    <div class="forecast-table">
        <div class="container">
            <div class="forecast-container">
                <div class="today forecast">
                    <div class="forecast-header">
                        <div class="day">{{date("l")}}</div>
                        <div class="date">{{date("d M")}}</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="location">{{$response['name']}}</div>
                        <div class="degree">
                            <div class="num">{{kelvin_to_celsius($response['main']['temp'])}}<sup>o</sup>C</div>
                            <div class="forecast-icon">
                                <img src="http://openweathermap.org/img/wn/{{$response['weather'][0]['icon']}}@2x.png"
                                    alt="" width=90>
                            </div>
                            <p>{{$response['weather'][0]['description']}}</p>
                        </div>
                        <span><img src="images/icon-umberella.png" alt="">{{$response['clouds']['all']}}%</span>
                        <span><img src="images/icon-wind.png" alt="">{{$response['wind']['speed']}} M/s</span>
                        <span><img src="images/icon-compass.png"
                                alt="">{{wind_cardinal($response['wind']['deg'])}}</span>
                    </div>
                </div>
                @for ($i = 0; $i < 6 ; $i++) <div class="forecast">
                    <div class="forecast-header">
                        <div class="day">{{$next['list'][$i]['dt_txt']}}</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="forecast-icon">
                            <img src="http://openweathermap.org/img/wn/{{$next['list'][$i]['weather'][0]['icon']}}@2x.png"
                                alt="" width=48>
                        </div>
                        <div class="degree">{{kelvin_to_celsius($next['list'][$i]['main']['temp'])}}<sup>o</sup>C</div>
                        <small>{{$next['list'][$i]['wind']['deg']}}<sup>o</sup></small>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    <style>
    .center {
        margin: auto;
        width: 75%;
    }
    </style>
    @if (session()->has('message'))
    <livewire:maps :response="$response" />
    @endif

</div>

@endif
@endif
</div>