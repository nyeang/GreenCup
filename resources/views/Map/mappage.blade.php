@extends('master')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="dashboard-box">
        <h4 class="text-dark text-center fw-bold mb-4" style="font-size: 2rem;">
            🗺️ Coffee Branch Locator
        </h4>

        <!-- 🌗 Theme Buttons -->
        <div class="btn-group d-flex justify-content-center mb-3" role="group" id="theme-buttons">
            <button type="button" class="btn btn-outline-primary active" data-style="mapbox://styles/mapbox/navigation-day-v1">☀️ Day</button>
            <button type="button" class="btn btn-outline-primary" data-style="mapbox://styles/mapbox/navigation-night-v1">🌙 Night</button>
            <button type="button" class="btn btn-outline-primary" data-style="mapbox://styles/mapbox/streets-v12">🏙️ Map</button>
            <button type="button" class="btn btn-outline-primary" data-style="mapbox://styles/mapbox/satellite-streets-v12">🛰️ Satellite</button>
        </div>

        <!-- 🔍 Geocoder Search -->
        <div class="d-flex justify-content-center mb-3">
            <div id="geocoder" class="w-100" style="max-width: 1200px;"></div>
        </div>

        <!-- 🗺️ Map -->
        <div id="map"></div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet" />
<link href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" rel="stylesheet" />
<style>
    #map {
        width: 100%;
        height: 70vh;
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

    .btn-group .btn.active {
        background-color: #0d6efd;
        color: white;
    }
</style>
@endpush

@push('scripts')
<script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibmVha3NlbmJlc3RmcmkiLCJhIjoiY205cXhkb3c3MTF3MzJ2b2doamJiM2NmaSJ9.zTnzZvYetGaqX0CODz4qoQ';
    let currentStyle = 'mapbox://styles/mapbox/satellite-streets-v12';

    const map = new mapboxgl.Map({
        container: 'map',
        style: currentStyle,
        center: [104.9282, 11.5564],
        zoom: 16,
        pitch: 60,
        bearing: -20,
        antialias: true
    });

    // 📦 Branch Markers
    const branches = [
        { name: 'Branch 1', lng: 104.9282, lat: 11.5564 },
        { name: 'Branch 2', lng: 104.9300, lat: 11.5600 }
    ];

    // 📍 Add markers
// 📍 Add markers
// 📍 Add markers
function addMarkers() {
    branches.forEach(branch => {
        const el = document.createElement('div');
        el.className = 'marker';

        const googleMapsLink = `https://www.google.com/maps/search/?api=1&query=${branch.lat},${branch.lng}`;

        new mapboxgl.Marker(el)
            .setLngLat([branch.lng, branch.lat])
            .setPopup(
                new mapboxgl.Popup({ offset: 25 }).setHTML(`
                    <div style="min-width: 200px;">
                        <h5 class="mb-2">${branch.name}</h5>
                        <a href="${googleMapsLink}" target="_blank" class="btn btn-sm btn-success">
                            📍 Open in Google Maps
                        </a>
                    </div>
                `)
            )
            .addTo(map);
    });
}



    // 🧱 Add 3D buildings
    function addBuildings() {
        if (map.getLayer('3d-buildings')) return;
        map.addLayer({
            id: '3d-buildings',
            source: 'composite',
            'source-layer': 'building',
            filter: ['==', 'extrude', 'true'],
            type: 'fill-extrusion',
            minzoom: 15,
            paint: {
                'fill-extrusion-color': '#aaa',
                'fill-extrusion-height': ['get', 'height'],
                'fill-extrusion-base': ['get', 'min_height'],
                'fill-extrusion-opacity': 0.6
            }
        });
    }

    // 🌍 Add terrain (for elevation realism)
    function addTerrain() {
        if (!map.getSource('mapbox-dem')) {
            map.addSource('mapbox-dem', {
                type: 'raster-dem',
                url: 'mapbox://mapbox.mapbox-terrain-dem-v1',
                tileSize: 512,
                maxzoom: 14
            });
            map.setTerrain({ source: 'mapbox-dem', exaggeration: 1.5 });
        }
    }

    // ☁️ Add sky layer
    function addSky() {
        if (!map.getLayer('sky')) {
            map.addLayer({
                id: 'sky',
                type: 'sky',
                paint: {
                    'sky-type': 'atmosphere',
                    'sky-atmosphere-sun': [0.0, 0.0],
                    'sky-atmosphere-sun-intensity': 15
                }
            });
        }
    }

    map.on('load', () => {
        addTerrain();
        addBuildings();
        addSky();
        addMarkers();
    });

    // 🔘 Theme button toggle
    document.querySelectorAll('#theme-buttons .btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('#theme-buttons .btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const newStyle = btn.dataset.style;
            map.setStyle(newStyle);
            currentStyle = newStyle;

            map.once('styledata', () => {
                addTerrain();
                addBuildings();
                addSky();
                addMarkers();
            });
        });
    });

    // 🔍 Search
    const geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        placeholder: 'Search for a place...',
        marker: true
    });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
</script>
@endpush
