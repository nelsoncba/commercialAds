//$(document).ready(function(){
//        load_map();
//        mapOnFooter();
//});

// VARIABLES GLOBALES JAVASCRIPT
var geocoder;
var marker;
var latLng;
var latLng2;
var map;
var zoon;

// INICiALIZACION DE MAPA
function load_map(lat,long) {
    zoon = 14;
    geocoder = new google.maps.Geocoder();	
    latLng = new google.maps.LatLng(lat,long);   //(-31.416614, -64.183376);
    var mapOptions = {
                center: latLng,
                zoom: zoon,
                mapTypeControl: false,
                panControl:false,
                rotateControl:false,
                streetViewControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"),
    mapOptions);
    
    // CREACION DEL MARCADOR  
    marker = new google.maps.Marker({
        position: latLng,
        title: 'Arrastra el marcador para buscar tu dirección',
        map: map,
        draggable: true
    });
 
    // Escucho el CLICK sobre el mapa y si se produce actualizo la posicion del marcador 
//    google.maps.event.addListener(marker, 'mouseup', function(event) {
//        updateMarker(event.latLng);
//    }); 
    
    // Inicializo los datos del marcador
//    updateMarkerPosition(latLng);
//    
//    geocodePosition(latLng);
//    
    // Permito los eventos drag/drop sobre el marcador
//    google.maps.event.addListener(marker, 'dragstart', function() {
//        updateMarkerAddress('Arrastrando...');
//    });
//    
//    google.maps.event.addListener(marker, 'drag', function() {
//        updateMarkerStatus('Arrastrando...');
//        updateMarkerPosition(marker.getPosition());
//    });
//    
//    google.maps.event.addListener(marker, 'dragend', function() {
//        updateMarkerStatus('Arrastre finalizado');
//        geocodePosition(marker.getPosition());
//    });  
}


// Permito la gesti¢n de los eventos DOM
google.maps.event.addDomListener(window, 'load', initialize);

//start of modal google map
$('#mapmodals').on('shown.bs.modal', function () {
    google.maps.event.trigger(map, "resize");
    map.setCenter(latLng);
});

 //ESTA FUNCION OBTIENE LA DIRECCION A PARTIR DE LAS COORDENADAS POS
function geocodePosition(pos) {
    geocoder.geocode({
        latLng: pos
    }, function(responses) {
        if (responses && responses.length > 0) {
            updateMarkerAddress(responses[0].formatted_address);
        } else {
            updateMarkerAddress('No puedo encontrar esta direccion.');
        }
    });
}

// OBTIENE LA DIRECCION A PARTIR DEL LAT y LON DEL FORMULARIO
function codeLatLon() { 
      str= $("#longitud").value()+" , "+$("#latitud").value();
      latLng2 = new google.maps.LatLng($("#latitud").value() ,$("#longitud").value());
      marker.setPosition(latLng2);
      map.setCenter(latLng2);
      geocodePosition (latLng2);
      // document.form_mapa.direccion.value = str+" OK";
}

//function localizarAviso(lat, long){
//   $("#latitud").val(lat); $("#longitud").val(long);
//   latLng2 = new google.maps.LatLng(lat, long);
//      marker.setPosition(latLng2);
//      map.setCenter(latLng2);
//      zoom = 25;
//      geocodePosition (latLng2);                       
//}

//OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress() {
    var address = $("#direccion").val();
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            updateMarkerAddress(results[0].formatted_address);
            updateMarkerPosition(results[0].geometry.location);
            marker.setPosition(results[0].geometry.location);
            map.setCenter(results[0].geometry.location);
            zoon = 25;
        } else {
            updateMarkerAddressError("Ingrese datos a buscar");
        }
    });
}

// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress2 (address) {
    
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            updateMarkerPosition(results[0].geometry.location);
            marker.setPosition(results[0].geometry.location);
            map.setCenter(results[0].geometry.location);
            document.form_mapa.direccion.value = address;
        } else {
            alert('ERROR : ' + status);
        }
    });
}

function updateMarkerStatus(str) {
    $("#direccion-guardada").val(str);
}

// RECUPERO LOS DATOS LON LAT Y DIRECCION Y LOS PONGO EN EL FORMULARIO
function updateMarkerPosition (latLng) {
    $("#longitud").val(latLng.lng()); //para formularios hidden 
    $("#latitud").val(latLng.lat()); //para formulario hidden
}

function updateMarkerAddress(str) {
    $("#direccion").val("");
    $("#direccion-guardada").val(str).css({"color":"black"});
    if($("#direccion-guardada").val().length > 50){
        $(".direccion-guardada").css({"color":"black", "padding": "2px"});
    }
}

function updateMarkerAddressError(str){
    $("#direccion-guardada").val(str).css("color", "red");
}

// ACTUALIZO LA POSICION DEL MARCADOR
function updateMarker(location) {
    marker.setPosition(location);
    updateMarkerPosition(location);
    geocodePosition(location);
}

function geolocalizar() {
    if (navigator.geolocation) {
        var options = {
                 enableHighAccuracy : false,
                 maximumAge : 20000,
                 timeout : 5000
                };

        $(".button-loc").addClass("button-loc-active");
        navigator.geolocation.getCurrentPosition(coordenadas, error, options);
        $("#direccion-guardada").val("Buscando....");
    }else{
        alert('Este navegador es algo antiguo, actualiza para usar el API de localización');                  }
}
function coordenadas(position) {
    var lat = position.coords.latitude; 
    var lon = position.coords.longitude;
    $("#direccion-guardada").val("Usted se encuentra en este punto.");
    latLng = new google.maps.LatLng(lat, lon); 
    updateMarker(latLng);
    map.setCenter(latLng);
}

function error(error)
{
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("El Usuario negó la solicitud de Geolocalización.");
            $(".button-loc").removeClass("button-loc-active");
            $("#direccion-guardada").val(" ");
            break;

        case error.POSITION_UNAVAILABLE:
            alert("La información de la localización no está disponible");
            $("#direccion-guardada").val(" ");
            break;

        case error.TIMEOUT:
            alert("La petición para obtener la ubicación del usuario ha excedido su tiempo");
            $(".button-loc").removeClass("button-loc-active");
            $("#direccion-guardada").val(" ");
            break;

        case error.UNKNOWN_ERROR:
            alert("Ha ocurrido un error desconocido");
            $("#direccion-guardada").val("");
            break;
    }
}

function mapOnFooter(){
   $(window).scroll(function(){
      var total =  $(document).height() - $(window).height();
          //alert("footer altura " + total );
         if($(window).scrollTop() === total ){
         //$(".right-section").css("background","green");
             $(".right-section").addClass("extraright-section");
         }else{
             $(".right-section").removeClass("extraright-section");
         }
   });
}