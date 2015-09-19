@extends('layout.main')

@section('mapHeader')


@endsection

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div id="map" ></div>
        </div>
    </div>


    <style>
        #map { height: 540px; }
    </style>

    <script>

        var map = L.map('map').setView([51.505, -0.09], 13);

        var marker = L.marker([51.5, -0.09]).addTo(map);

        var circle = L.circle([51.508, -0.11], 500, {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5
        }).addTo(map);

        var polygon = L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).addTo(map);

        L.tileLayer('https://api.tiles.mapbox.com/v4/eklvyn.cieqqw8ij010cwgkm4kvdk2vt/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZWtsdnluIiwiYSI6ImNpZXFxdzlsMzAxMWo5dGt0anFpdmltNW8ifQ.hr18VHXCG6NHW0-RdxpKQg', {
            attribution: false,
            maxZoom: 18,
            id: 'eklvyn.cieqqw8ij010cwgkm4kvdk2vt',
            accessToken: 'pk.eyJ1IjoiZWtsdnluIiwiYSI6ImNpZXFxdzlsMzAxMWo5dGt0anFpdmltNW8ifQ.hr18VHXCG6NHW0-RdxpKQg'
        }).addTo(map);

        var popup = L.popup();

        function onMapClick(e) {
            popup
                    .setLatLng(e.latlng)
                    .setContent("You clicked the map at " + e.latlng.toString())
                    .openOn(map);
        }

        map.on('click', onMapClick);

    </script>

@endsection