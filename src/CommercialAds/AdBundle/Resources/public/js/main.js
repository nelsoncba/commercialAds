$(function(){
    $('#side-menu').metisMenu();
});

$(document).keypress(function(e){
       if(e.which === 13){
        codeAddress();
    }
}); 


//$(function(){
//    if(!$('.filtros-container-ajax li').html())
//              $(this).hide();
//    $('.subcat-link').click(function(event){
//          event.preventDefault();
//          $('#avisos').load($(this).attr('href'));
//          window.history.pushState(null,null,$(this).attr('href'));
//          $('.col-filtros').css('display','block');
//          $('.filtro-subcat-nom').html($(this).html());
//          $('.dat-filtro').html($(this).html());
//          $('.mostrar-filtro-subcat').css('display','initial');
//    });
//    
//});

$(function(){
      $('#provincia').change(function(){
//           $('#avisos').load(Routing.generate('avisos_provincia_subcat'));
//            window.history.pushState('','',$('#provincia option:selected').val());
//       e.preventDefault();
       var url =  $('#provincia option:selected').attr('data-url');
        window.location = url; 
        
//    lista.onchange = function() {
//        var url = lista.options[lista.selectedIndex].getAttribute('data-url');
//        window.location = url;
//    };
//       e.preventDefault();
//       $('#avisos').load($('#provincia option:selected').attr('data-url'));
 //      window.history.pushState('','',$('#provincia option:selected').val());
      });
});

//$(function(){
//    $('.pagination .page a').click(function(event){
//        alert(' '+$(this).attr('href'));
//          event.preventDefault();
//          $('#avisos').load($(this).attr('href'));
//          
//          window.history.pushState('',"",$(this).attr('href'));
//    });
//});

//$(function(){
//    $(window).bind("load resize", function(){ 
//        if($(window).width() < 767){
//
//            if( $(".bread-prov").html() && $(".bread-local").html() && $(".bread-subcat").html()){
//             //   alert($(".breadcrumb .bread-prov").html() +" "+ $(".breadcrumb .bread-local").html() +" "+ $(".breadcrumb .bread-subcat").html());
//                $("nav.sidebar").addClass("collapse");
//            }else{
//                $("display-mini").css("display","");
//                $("article.col-main").addClass("collapse");
//            }
//        }else{
//            $("article.col-main").removeClass("collapse");
//            $("nav.sidebar").removeClass("collapse");
//        }
//    });
//});

$(function(){
    $(window).bind('load resize', function (){
        if($(window).width() < 768){
            $('#col-sidebar').removeClass('hidden-xs');
            if($('.bread-prov').html() && $('.bread-local').html() && $('.bread-subcat').html() || $('.filtro-address').html() && $('.bread-subcat').html() || $('.filtro-querySearch').html()){
                    //   alert($(".breadcrumb .bread-prov").html() +" "+ $(".breadcrumb .bread-local").html() +" "+ $(".breadcrumb .bread-subcat").html());
                $('nav.sidebar').addClass('collapse'); 
            }else{
                $('article.col-main').addClass('collapse');                
            }
        }else{
            $('article.col-main').removeClass('collapse');
            $('nav.sidebar').removeClass('collapse');
        }
    });
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
        provincia: $('#prov').val()
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
                var localidadStr =data[localidad].nombre;
                var localidadId =data[localidad].id;
                $('#local').append("<option value='"+localidadId+"'>"+localidadStr+"</option>");
            }
        }
    });
    //window.history.pushState(data,"Localidad","loalidades.html");
};

function cargarSubcategorias(url){
    var data = {
        categoria: $('#categoria').val()
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
                var subcategoriaStr =data[subcategoria].nombre;
                var subcategoriaId =data[subcategoria].id;
                $('#subcategoria').append("<option value='"+subcategoriaId+"'>"+subcategoriaStr+"</option>");
            }
        }
    });
    //window.history.pushState(data,"Localidad","loalidades.html");
};

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('file', [numFiles, label]);
});

//$('input[type=file]').bootstrapFileInput();

$(":file").filestyle({input: false});
$(":file").filestyle({badge:false});

//$(document).ready( function() {
//    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
//        
//        var input = $(this).parents('.input-group').find(':text'),
//            log = numFiles > 1 ? numFiles + ' files selected' : label;
//        
//        if( input.length ) {
//            input.val(log);
//        } else {
//            if( log ) alert(log);
//        }
//        
//    });
//});
//function readURL(input) {
//        var id = $(this).attr('id');
//        alert(''+id);
//            if (input.files && input.files[0]) {
//                var reader = new FileReader();
//
//                reader.onload = function (e) {
//                    if(id === $('.mini-photo').attr('data-img-input'));
//                        
//                        $('.mini-photo').html('<img src="'+e.target.result+'" width="58" height="48"/>');
//                };
//
//                reader.readAsDataURL(input.files[0]);
//            }
//     }

//$('.photo-aviso').on('change',function(){
//    var input = $(this);
//   // alert(''+input.val());
//    var id = $(this).attr('id');
//    if(input.files && input.files[0]){
//        var reader = new FileReader();
//        reader.onload = function(e){
//            $('.mini-photo').html('<img src="'+e.target.result+'" width="58" height="48"/>');
//        };
//        reader.readAsDataURL(input.files[0]);
//    }
//});

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
    if(src !== "/LocalOfertasProyect/web/img/img-camara.png"){
        $('.img-replace').html('<img src="'+src+'" class="img-aviso"/>');
    }   
}

//$('.img-gal').click(function(){
//    var src = $('.img-gal').attr('src');
//    if(src !== "img/img-camara.png"){
//        $('.img-gal').html(src).addClass('img-aviso');
//    }
//});


