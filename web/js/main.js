$(function(){
    $('#side-menu').metisMenu();
});

$(document).keypress(function(e){
       if(e.which === 13){
        codeAddress();
    }
}); 

$(window).load(function() {
       $('#preloader').fadeOut('slow');
       $('body').css({'overflow':'visible'});
});
$('#btn-guardar-ubicacion').hide();

$(function(){
      $('#provincia').change(function(){

       var url =  $('#provincia option:selected').attr('data-url');
        window.location = url; 
      });
});

$(function(){
    $(window).bind('load resize', function (){
        if($(window).width() < 750){
            $('#sidebar-anun').hide();
            $('article.col-main').hide(); 
            $('#col-sidebar').removeClass('hidden-xs');
            if($('.bread-prov').html() && $('.bread-local').html() && $('.bread-subcat').html() || $('.filtro-address').html() && $('.bread-subcat').html() || $('.filtro-querySearch').html()){
                    //   alert($(".breadcrumb .bread-prov").html() +" "+ $(".breadcrumb .bread-local").html() +" "+ $(".breadcrumb .bread-subcat").html());
                $('nav.sidebar').addClass('collapse'); 
                $('article.col-main').show();
            }else{
                $('article.col-main').addClass('collapse');                
            }
        }else{
            $('article.col-main').removeClass('collapse');
            $('nav.sidebar').removeClass('collapse');
            $('article.col-main').show(); 
        }
    });
    
});
/*
 * desplega panel lateral movil
 */
$('#opciones').click(function (){
     $('#sidebar-anun').toggle();
});

$(function startloading(){
    var cl = new CanvasLoader('canvasloader-container');
        cl.setDiameter(94); // default is 40
        cl.setDensity(108); // default is 40
        cl.setRange(0.9); // default is 1.3
        cl.setSpeed(3); // default is 2
        cl.setFPS(22); // default is 24
        cl.show(); // Hidden by default
});

function cargarLocalidades(url){
    var data = {
        region: $('#prov').val()
    };
    $('#local').html('<option value=0>Espere...</option>');
    $.ajax({
        dataType:'json',
        type: 'get',
        url: url,
        data:data,
        success: function(data) 
        {
            $('#local').html('<option value=0>Seleccionar localidad</option>');
            for(localidad in data){
                var city_name =data[localidad].name;
                var city_id =data[localidad].id;
                $('#local').append("<option value='"+city_id+"' id="+'localidadoption'+">"+city_name+"</option>");
            }
        }
    });
};

function cargarSubcategorias(url){
    var data = {
        category: $('#categoria').val()
    };
    $('#subcategoria').html('<option value=0>Espere...</option>');
    $.ajax({
        dataType:'json',
        type: 'get',
        url: url,
        data:data,
        success: function(data) 
        {
            $('#subcategoria').html('<option value=0>Seleccionar Subcategoria</option>');
            for(subcategoria in data){
                var subcat_name =data[subcategoria].name;
                var subcat_id =data[subcategoria].id;
                $('#subcategoria').append("<option value='"+subcat_id+"'>"+subcat_name+"</option>");
            }
        }
    });
};

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('file', [numFiles, label]);
});

$(":file").filestyle({input: false});
$(":file").filestyle({badge:false});

$(window).load(function(){
/* image preview */
    $('.photo-aviso').change(function(){
        var id = $(this).attr('id');
        var reader = new FileReader();
        var file = this.files[0];
        var size = file.size/1024;
        var p;
        reader.readAsDataURL(this.files[0]);
        reader.onload = function (e) {
            var photos = $('.mini-photo').length;
            for(i = 1; i <= photos; i++){
              p = 'photo'+i;
              if(id === p){
                  if(size < 1024){
                    $('#mini-photo'+i).html('<img src="'+e.target.result+'" class="mini-photo-default'+i+'" width="58" height="48"/>');
                    $('.invalid-message'+i).html($('.invalid-message'+i).attr('data-photo-ins')).css('color','darkgray');
                  }else{
                    $('.invalid-message'+i).html("Invalid size, maximun 1 Mb.").css('color','red');
                    $("#photo"+i).filestyle('clear');
                    $('.mini-photo-default'+i).css('display','none');
                  }
              }
            }
        };
    });
});

function selectImg(url){
    var src = $(url).attr('src');
    //alert(''+src);
    if(src !== "/CommercialAds/web/img/img-camara.png"){
        $('.img-replace').html('<img src="'+src+'" class="img-aviso"/>');
    }   
}