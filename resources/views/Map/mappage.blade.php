@extends('master')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="dashboard-box">
        <h4 class="text-dark text-center fw-bold mb-4" style="font-size: 2rem;">
            🗺️ Coffee Branch Locator
        </h4>
        <div id="map"></div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet" />
<style>
    #map {
        width: 100%;
        height: 70vh; /* Bigger height */
        min-height: 100px;
        border-radius: 10px;
    }

    .dashboard-box {
        background-color: #f5fdf8;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        padding: 25px;
    }

    .marker {
        background-image: url('https://cdn-icons-png.freepik.com/512/5125/5125143.png');
        background-size: cover;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
    }
</style>
@endpush

@push('scripts')
<script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibmVha3NlbmJlc3RmcmkiLCJhIjoiY205cXhkb3c3MTF3MzJ2b2doamJiM2NmaSJ9.zTnzZvYetGaqX0CODz4qoQ';

    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [104.9282, 11.5564], // Phnom Penh
        zoom: 13
    });

    const branches = [
        { name: 'Branch 1', lng: 104.9282, lat: 11.5564 },
        { name: 'Branch 2', lng: 104.9300, lat: 11.5600 }
    ];

    branches.forEach(branch => {
        const el = document.createElement('div');
        el.className = 'marker';

        new mapboxgl.Marker(el)
            .setLngLat([branch.lng, branch.lat])
            .setPopup(new mapboxgl.Popup({ offset: 25 }).setHTML(`<h5>${branch.name}</h5>`))
            .addTo(map);
    });
</script>
@endpush
