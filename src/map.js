//Main Page Map
let map;
let currentMarker;

function initMap() {
    const mapOptions = {
        center: { lat: 33.75243, lng: -84.39354 },
        zoom: 12, 
    };
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
}


async function searchZipCode() {
const zipCode = document.getElementById('zip-code').value;
if (zipCode) {
    try {
        const location = await geocodeZipCode(zipCode);
        
        
        if (currentMarker) {
            currentMarker.setMap(null);
        }

        
        currentMarker = new google.maps.Marker({
            map: map,
            position: location,
            title: 'Zip Code Location',
        });

        map.setCenter(location);
    } catch (error) {
        console.error('Error geocoding zip code:', error);
        alert('Invalid zip code or unable to find location.');
    }
} else {
    alert('Please enter a zip code.');
}
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