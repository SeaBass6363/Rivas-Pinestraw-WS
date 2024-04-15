//google API key
const apiKey = 'AIzaSyAkW0iGM8DniteJO7xa_yEuJseeFGQJLBM'

//Main Page Map
let map;
let currentMarker;

function initMap() {
    const mapOptions = {
        center: { lat: 33.75243, lng: -84.39354 },
        zoom: 12, 
    };
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    const layer = new google.maps.FusionTablesLayer({
        query: {
            select: 'Geocodable address',
            from: '1FjVvT2lxm_meECyU7Mn1TaZOvvwu3rJnpZztPqvr',
        },
    });

    layer.addListener('click', function (event) {
        document.getElementById('end').value = event.row.Address.value;
        calculateAndDisplayRoute();
    });

    layer.setMap(map);

    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('right-panel'));

    const control = document.getElementById('floating-panel');
    control.style.display = 'block';
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

    document.getElementById('but').addEventListener('click', function () {
        calculateAndDisplayRoute();
    });
}
		
		 
function useMyLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
            const userLocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
            };
            map.setCenter(userLocation);
            
            if (currentMarker) {
                currentMarker.setMap(null);
            }
            currentMarker = new google.maps.Marker({
                map: map,
                position: userLocation,
                title: 'Zip Code Location',
            });
        }, (error) => {
            console.error('Error getting user location:', error);
        });
        
    } else {
        alert('Geolocation is not supported by your browser.');
    }
}

function geocodeZipCode(zipCode) {
    return new Promise((resolve, reject) => {
        const geocoder = new google.maps.Geocoder();
        geocoder.geocode({ address: zipCode }, (results, status) => {
            if (status === 'OK' && results.length > 0) {
                resolve(results[0].geometry.location);
            } else {
                reject(new Error('Invalid zip code or unable to find location.'));
            }
        });
    });
}