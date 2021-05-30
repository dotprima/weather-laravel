<div class="center">

    @if (session()->has('message'))
    <div id='map' style='width: 100%; height: 500px;'></div>
    <script>
    mapboxgl.accessToken =
        'pk.eyJ1IjoicHJpbWFmYW5ib3kiLCJhIjoiY2tvMW5uMmxzMGFzcjJucWhma3BybmFoaiJ9.lMBrIuip9ZDUrE7y3WsA9g';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [<?=$response['coord']['lon']?>, <?=$response['coord']['lat']?>], // starting position
        zoom: 12 // starting zoom
    });

    // Add zoom and rotation controls to the map.
    map.addControl(new mapboxgl.NavigationControl());
    </script>
    @endif
</div>