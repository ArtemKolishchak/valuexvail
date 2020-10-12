// function initMap() {
//     var element = document.getElementById('map');
//     var options = {
//         zoom: 17,
//         center: { lat: 39.614431, lng: -104.887666 }
//     };

//     var myMap = new google.maps.Map(element, options);
//     var marker = new google.maps.Marker({
//         position: { lat: 39.614431, lng: -104.887666 },
//         icon: '/assets/imgs//marker.png',
//         map: myMap
//     });
// };

(function($) {

    jQuery(document).ready(function() {

        let map;

        function initMap() {
            
            map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: parseInt(valuexvail_map.lat), lng: parseInt(valuexvail_map.lng) },
            zoom: parseInt(valuexvail_map.zoom)
            });
        }

        initMap();  

    });
    
})(jQuery);