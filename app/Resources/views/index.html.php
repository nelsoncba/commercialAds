<!DOCTYPE html>
<html ng-app="Ads">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1">
        <title>Welcome!</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="bundles/commercialadsuser/css/login.css">
        <link rel="stylesheet" href="bundles/commercialadsad/css/detalle.css">
        <link rel="stylesheet" href="css/jquery.metisMenu.css">
        <link rel="stylesheet" href="css/parsley/parsley.css">
        <link rel="stylesheet" href="bundles/commercialadsad/css/lista-avisos.css" type="text/css" />
        <link rel="icon" type="image/x-icon" href="img/logo-mini-rojo-extra.png" />
        <link rel="stylesheet" href="app/lib/ngPager/ngpager.min.css">
        
        <!--jQuery-->
        <!--<script src="//code.jquery.com/jquery-2.0.3.js"></script>-->
        <script src="js/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.0/metisMenu.js"></script>
        <!--<script src="js/jquery.metisMenu.js"></script>-->
        
        <!--Bootstrap-->
        <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css">-->
        <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
        <script src="js/vendor/bootstrap.min.js"></script>
        
        <!--Angular-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>-->
        <script src="app/lib/angular/angular.js"></script>
        <script src="app/lib/angular/angular-ui-router.min.js"></script>
        <script src="app/lib/angular/angular-cookies.min.js"></script>
        <script src="app/lib/angular/angular-route.min.js"></script>
        <script src="app/app.js"></script> 
    </head>
    <body>
        <!--<div id="preloader">
            <div id="loader">
            </div>
        </div>-->
        <nav id="nav" class="navbar navbar-default navbar-fixed-top" ui-view="header" ></nav>
        <div class="wrapper" ui-view="container">

        </div>                 
         <footer class="">
            <div class="col-xs-12">&copy; - LocalOfertas -</div>
            <div class="col-xs-12"><a href="#"> Ayuda | </a>
            <a href="#"> Contacto | </a>
            <a href="#"> Privacidad |</a>
            <a href="#"> Sobre nosotros </a></div>
        </footer>

      <!--  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>-->
      <!--  <script> window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.11.0.min.js')}}"><\/script>');</script>-->
        <script src="app/controller/FilterController.js"></script>
        <script src="app/lib/simplePagination/simplePagination.js"></script>
        <script src="app/lib/ngPager/ngpager.min.js"></script>
        <script src="app/service/PaginateService.js"></script>
        <script src="app/service/AdService.js"></script>
        <script src="app/service/WebService.js"></script>
      <!--  <script src="{{asset("js/map.js")}}"></script>
        <script src="{{asset("js/parsley/parsley-standalone.min.js")}}"></script>
        <script src="{{asset("js/parsley/parsley.extend.min.js")}}"></script>
        <script src="{{asset("js/parsley/parsley.min.js")}}"></script>-->
        <script src="js/main.js"></script>
    </body>
</html>
