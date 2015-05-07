
var zoom;
var map;
var map2;
var map3;
var geocoder;
var myUbi;
var myLatlng;
var marker_geolocation;
var marker_myubication;
var marker2;

function initialize(lat,lng,lat2,lng2){
    geocoder = new google.maps.Geocoder();
    myLatlng = new google.maps.LatLng(lat,lng);
    if(lat2 && lng2){
        myUbi = new google.maps.LatLng(lat2, lng2);
    }
    if($(window).width()<500)
        zoom = 15;
    else if($(window).width()>500)
        zoom = 15;
    var mapOptions = {
        center: myLatlng,
        zoom: zoom,
        mapTypeControl: false,
        panControl:false,
        rotateControl:false,
        streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    map = new google.maps.Map(document.getElementById("map_canvas"),
    mapOptions);
    
    map2 = new google.maps.Map(document.getElementById("map_canvas_2"),
    mapOptions);
    
    var contentString = '<div id="mapInfo">'+
            '<p><strong>'+$(this).attr('anunciante')+'</strong><br>'+
            '<br>'+$(".dir-calle").html()+' '+$(".dir-num").html()+'<br>' +
             $(".dir-localidad").html()+'<br>'+
            '</div>';
    
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ubicación anuncio",
        maxWidth: 200,
        maxHeight: 200
    });
    
    marker_geolocation = new google.maps.Marker({
        position: myLatlng,
        map: map2,
        title:"Mi ubicación",
        icon: "https://maps.gstatic.com/mapfiles/ms2/micons/man.png",
        maxWidth: 200,
        maxHeight: 200
    });
    
    if(myUbi){
        marker_myubication = new google.maps.Marker({
            position: myUbi,
            map: map,
            title:"Mi ubicación",
            icon: "https://maps.gstatic.com/mapfiles/ms2/micons/man.png",
            maxWidth: 200,
            maxHeight: 200
        });
    }
    
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
}

function load_map_registro(){
    zoom = 16;
    myLatlng = new google.maps.LatLng(-31.416614, -64.183376);
    var mapOptions = {
                center: myLatlng,
                zoom: zoom,
                zoomControl: false,
                scrollwheel: false,
                scaleControl: false,
                mapTypeControl: false,
                panControl:false,
                rotateControl:false,
                streetViewControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map3 = new google.maps.Map(document.getElementById("map_canvas_3"),
    mapOptions);
    
    marker2 = new google.maps.Marker({
        position: myLatlng,
        map: map3,
        title:"Ubicación negocio anunciante",
        maxWidth: 200,
        maxHeight: 200
    });
}
    google.maps.event.addDomListener(window, 'load', initialize);
    google.maps.event.addDomListener(window, 'load', load_map_registro);
    
 //start of modal google map
$('#mapmodals').on('shown.bs.modal', function () {
    google.maps.event.trigger(map, "resize");
    if(myUbi){
        map.setCenter(myUbi);
    }else{
        map.setCenter(myLatlng);   
    }
});


$('#map-cercanas').on('shown.bs.modal', function () {
    google.maps.event.trigger(map2, "resize");
    map2.setCenter(myLatlng);
});
//end of modal google map

function geolocalizar() {
    $(".rpta-geosearch").html("");
    if (navigator.geolocation) {
        var options = {
                 enableHighAccuracy : false,
                 maximumAge : 20000,
                 timeout : 5000
        };

        $(".img-localization-2").css("display","initial");
        $(".img-localization-1").css("display","none");
        navigator.geolocation.getCurrentPosition(function(coordenadas){
             initialize(coordenadas.coords.latitude,coordenadas.coords.longitude);
             addressByCoords(myLatlng);
        }, error, options);
    }else{
        alert('Este navegador es algo antiguo, actualiza para usar el API de localización');  
    }
}

function error(error){
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("El Usuario negó la solicitud de Geolocalización.");
            $(".img-localization-2").css("display","none");
            $(".img-localization-1").css("display","initial");
            break;

        case error.POSITION_UNAVAILABLE:
            alert("La información de la localización no está disponible");
            $(".img-localization-2").css("display","none");
            $(".img-localization-1").css("display","initial");            break;

        case error.TIMEOUT:
            alert("La petición para obtener la ubicación del usuario ha excedido su tiempo");
            $(".img-localization-2").css("display","none");
            $(".img-localization-1").css("display","initial");
            break;

        case error.UNKNOWN_ERROR:
            alert("Ha ocurrido un error desconocido");
            $(".img-localization-2").css("display","none");
            $(".img-localization-1").css("display","initial");
            break;
    }
}
//address by coords.
function addressByCoords(coords) {
    geocoder.geocode({
        latLng: coords
    }, function(responses) {
        if (responses && responses.length > 0) {
            $(".rpta-geosearch").html(responses[0].address_components[1].short_name+' '+responses[0].address_components[0].short_name+', '+responses[0].address_components[2].short_name);
            $("#address").val(responses[0].address_components[1].short_name+' '+responses[0].address_components[0].short_name+', '+responses[0].address_components[2].short_name);
            $('#btn-guardar-ubicacion').show();
            $("#latitud").val(coords.lat());
            $("#longitud").val(coords.lng());
        } else {
            $('#btn-guardar-ubicacion').hide();
            $(".rpta-geosearch").html('Dirección no existe.');
        }
    });
}

function codeAddress(){
    address = $("#myaddress").val();
    //         alert(' '+address);
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            var address = (results[0].address_components[1].short_name+' '+results[0].address_components[0].short_name+', '+results[0].address_components[2].short_name);
            marker_geolocation.setPosition(results[0].geometry.location);
            map2.setCenter(results[0].geometry.location);
            addressByCoords(results[0].geometry.location);
            $(".rpta-geosearch").html(address);
            $("#myaddress").val("");
            $('#btn-guardar-ubicacion').show();
        } else {
            $('#btn-guardar-ubicacion').hide();
            $(".rpta-geosearch").html("Error: ingrese datos correctos");
        }
    });
}

function codeAddressMapReg(){
    address = $('#calle').val()+' '+$('#numero').val()+' '+$('#local option:selected').text()+' '+$('#prov option:selected').text();
    geocoder.geocode({
        'address': address}, function(results, status){
        if(status === google.maps.GeocoderStatus.OK){
            var address = (results[0].address_components[1].short_name+' '+results[0].address_components[0].short_name+', '+results[0].address_components[2].short_name);
            marker2.setPosition(results[0].geometry.location);
            map3.setCenter(results[0].geometry.location);
           // coords = (results[0].geometry.location);
            $("#latitudAn").val((results[0].geometry.location).lat());
            $("#longitudAn").val((results[0].geometry.location).lng());
        }
    });
}

$('#calle').keyup(function(){ 
    $('#numero').val('');
    $("#latitudAn").val('');
    $("#longitudAn").val('');
    codeAddress();
});

$('#numero').change(function(){
    codeAddressMapReg();
}); 

