<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #map {
                height: 600px; /*altura del mapa*/
                width: 80%;    /*anchura del mapa*/
            }
        </style>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-90613555-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <div>Globalapps.tk</div>
        <div id="map"></div>
        <script>

            var citymap = {
                vancouver: {
                    center: {lat: 9.392081, lng: -83.710422},
                    population: 502
                }
            };

            function initMap() {
                // Create the map.
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: {lat: 9.996271, lng: -84.206824},
                    mapTypeId: google.maps.MapTypeId.TERRAIN
                });

                // Construct the circle for each value in citymap.
                // Note: We scale the area of the circle based on the population.
                for (var city in citymap) {
                    // Add the circle for this city to the map.
                    var cityCircle = new google.maps.Circle({
                        strokeColor: '#FF0000',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#FF0000',
                        fillOpacity: 0.35,
                        map: map,
                        center: citymap[city].center,
                        radius: Math.sqrt(citymap[city].population) *2
                    });
                }
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXiD2owiQD4RPGon2qIStiH-Id-QttqmE&callback=initMap">
        </script>
    </body>
</html>
