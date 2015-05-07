//var map = null;
//var infoWindow = null;
//// Creamos el Objeto Geocoder
//
//function load_map() {
//    var myLatlng = new google.maps.LatLng(-31.416614, -64.183376);
//    var myOptions = {
//        zoom: 14,
//        center: myLatlng,
//        mapTypeId: google.maps.MapTypeId.ROADMAP
//    };
//    map = new google.maps.Map($("#map_canvas").get(0), myOptions);
//    
//    var marker = new google.maps.Marker({
//        position: myLatlng,
//        draggable: true,
//        map: map
//    });
//    
//      google.maps.event.addListener(marker, 'dragstart', function() {
//        $("#respuesta").val('Arrastrando...');
//      });
//
//      google.maps.event.addListener(marker, 'drag', function() {
//        $("#respuesta").val('Arrastrando...');
//      });
//
//      google.maps.event.addListener(marker, 'dragend', function() {
//        $("#respuesta").val('Arrastre finalizado');
//        geocodePosition(marker);
//      });
//}
//
//
//function geocodePosition(marker){
//    var geocoder = new google.maps.Geocoder();
//    var posicion = marker.getPosition();
//    //alert(posicion.lat()+" "+posicion.lng());
//    geocoder.geocode({'posicion': posicion}, function(responses){
//        
//        if(responses && responses.lenght > 0){
//            var res = responses[0].formatted_address;
//            alert("la direccion es "+res);
//            $("#respuesta").val(responses[0].formatted_address);
//        }else{
//            $("#respuesta").val("no se encontro resultado");
//        }
//    });
//}
//
//$('#search').click( function() {
//    var geocoder = new google.maps.Geocoder();
//    // Obtenemos la dirección y la asignamos a una variable
//    var address = $('#direccion').val();
//    // Hacemos la petición indicando la dirección e invocamos la función
//    // geocodeResult enviando todo el resultado obtenido
//    geocoder.geocode({ 'address': address}, geocodeResult);
//});
//
//function geocodeResult(results, status) {
//    // Verificamos el estatus
//    if (status === 'OK') {
//        alert(results[0].formatted_address);
//        // Si hay resultados encontrados, centramos y repintamos el mapa
//        // esto para eliminar cualquier pin antes puesto
//        var mapOptions = {
//            center: results[0].geometry.location,
//            mapTypeId: google.maps.MapTypeId.ROADMAP
//        };
//        $("#direccion").val(results[0].formatted_address);
//        map = new google.maps.Map($("#map_canvas").get(0), mapOptions);
//        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
//        map.fitBounds(results[0].geometry.viewport);
//        // Dibujamos un marcador con la ubicación del primer resultado obtenido
//        var markerOptions = { position: results[0].geometry.location, draggable: true };
//        var marker = new google.maps.Marker(markerOptions);
//        marker.setMap(map);
//      
//    } else {
//        // En caso de no haber resultados o que haya ocurrido un error
//        // lanzamos un mensaje con el error
//        alert("Geocoding no tuvo éxito debido a: " + status);
//    }
//}