//google API key
const apiKey = 'AIzaSyAkW0iGM8DniteJO7xa_yEuJseeFGQJLBM'






//Main Page Map
//Variables for Map Functions
let map;
let currentMarker;
let currentMarkerTitle;
let currentMarkerLocation;
let coordinates = [];
let hardCodedMarker = [];

let markers = [];

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
  



//Route Distance via Driving Functions
async function calculateAndDisplayRoute() {
    var start = document.getElementById('start').value;
    var end = document.getElementById('end').value;

    directionsService.route(
        {
            origin: start,
            destination: end,
            travelMode: 'DRIVING',
        },
        function (response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);

                // Extract distance and duration from the response
                const route = response.routes[0].legs[0];
                const distance = route.distance;
                const duration = route.duration;

                // Update the distance and time information on the page
                updateDistanceTimeInfo(distance, duration);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        }
    );
}

// Rest of the code remains the same.
function updateDistanceTimeInfo(distance, duration) {
    const infoElement = document.getElementById('distance-time-info');
    infoElement.innerHTML = `Distance: ${distance.text}<br>Duration: ${duration.text}`;
}

//Location and Zip Functions
async function useMyLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            async (position) => {
                currentMarkerLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
                currentMarkerTitle = 'User Location';
                updateLocation(currentMarkerTitle, currentMarkerLocation);
            },

            (error) => {
            console.error('Error getting user location:', error);
            }, 
            {
                //This fixes the delay (not sure if it affects accuracy by too much)
                enableHighAccuracy: false,
                timeout: 5000,
                maximumAge: Infinity
            }
        );
    } else {
        alert('Geolocation is not supported by your browser.');
    }
}

async function searchZipCode() {
    const zipCode = document.getElementById('zip-code').value;
    if (zipCode) {
        try {
            currentMarkerLocation = await geocodeZipCode(zipCode);
            
            currentMarkerTitle = 'Zip Code Location'
            updateLocation(currentMarkerTitle, currentMarkerLocation);

        } catch (error) {
            console.error('Error geocoding zip code:', error);
            alert('Invalid zip code or unable to find location.');
        }
    } else {
        alert('Please enter a zip code.');
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

function geocodeAddress() {
    var geocoder = new google.maps.Geocoder();
    var address = document.getElementById('addressInput').value;

    geocoder.geocode({ 'address': address }, function (results, status) {
        if (status === 'OK') {
            var location = results[0].geometry.location;
            console.log('Latitude: ' + location.lat());
            console.log('Longitude: ' + location.lng());
        } else {
            console.error('Geocode was not successful for the following reason: ' + status);
        }
    });
}


async function updateLocation(markerTitle, location)
{
    map.setCenter(location);

    if (currentMarker) {
        currentMarker.setMap(null);
    }
}




// 40.7484° N, 73.9857° W

//-----------------------------------------------------------------------------------------------------------------------------


async function addMarker(toMap, title, location, address) {
    var marker = new google.maps.Marker({
        position: location,
        map: toMap,
        title: title
    });

    markers.push(marker);

    var distance = google.maps.geometry.spherical.computeDistanceBetween(map.center, location) * 0.000621371;
    distance = distance.toFixed(2);

    var infoContent = `<div style="color: black;">
        <h3 style="color: black;">${title}</h3>
        <p style="color: black;">${address}</p>
        <p style="color: black;">${distance}mi</p>
        <p style="color: black;">Link: <a href="#" id="linkPlaceholder">[Link]</a></p>
        </div>`;

    // Create an InfoWindow with the content
    var infowindow = new google.maps.InfoWindow({
        content: infoContent
    });

   
    //Opens and closes the Marker's InfoWindow
    google.maps.event.addListener(marker, 'mouseover', function () {
        infowindow.open(map, marker);
    });
    google.maps.event.addListener(marker, 'mouseout', function () {
        infowindow.close(map, marker);
    });

    return marker;
}



// Function to calculate the zoom level based on the selected radius
function calculateZoomLevel(radius) {
    // You can customize this formula based on your specific requirements
    // For example, you may want to set a minimum and maximum zoom level
    // This is a simple example, you may need to adjust it based on your specific use case
    const minZoom = 3;
    const maxZoom = 25;
    const zoomIncrement = 5;

    // Calculate the zoom level based on the radius
    const zoomLevel = Math.min(maxZoom, Math.max(minZoom, Math.ceil(radius / zoomIncrement) * zoomIncrement));

    return zoomLevel;
}
