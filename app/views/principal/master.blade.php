<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= HTML::style('css/bootstrap.css') ?>
        <?= HTML::style('css/bootstrap.min.css') ?>
        <?= HTML::style('css/bootstrap.min.css') ?>
        <?= HTML::style('css/style.css') ?>

        <?= HTML::style('font-awesome/css/font-awesome.css') ?>
        <?= HTML::style('css/plugins/toastr/toastr.min.css') ?>

        <?= HTML::style('css/animate.css') ?>
        <?= HTML::style('css/upload.css') ?> 

         <?= HTML::script('js/angular/angular-1.3.min.js') ?>
        <?= HTML::script('js/angular/app.js') ?>
        <?= HTML::script('js/angular/controllers/master.js') ?>   
        <?= HTML::script('js/angular/controllers/header.js') ?>   
        <?= HTML::script('js/angular/controllers/menu.js') ?>   

        @yield('javascript-ini')
        @yield('css')
    </head>
    <body  ng-app="app"> 
        <div id="wrapper" ng-controller="ctrlMaster">
                    @include('principal.header')         
                    @include('principal.menu')         
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row">
                    <div class="container">
                        @yield('content')                
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            @include('principal.footer')
        </div>
        <!-- Mainly scripts -->
        <?= HTML::script('js/jquery-2.1.1.js') ?>
        <?= HTML::script('js/bootstrap.min.js') ?>
        <?= HTML::script('js/plugins/metisMenu/jquery.metisMenu.js') ?>
        <?= HTML::script('js/plugins/slimscroll/jquery.slimscroll.min.js') ?>
        <!-- Custom and plugin javascript -->
        <?= HTML::script('js/inspinia.js') ?>
        <?= HTML::script('js/plugins/pace/pace.min.js') ?>
        <!-- jQuery UI -->
        <?= HTML::script('js/plugins/jquery-ui/jquery-ui.min.js') ?>
        <!-- GITTER -->
        <!-- Toastr -->
        <?= HTML::script('js/plugins/toastr/toastr.min.js') ?>
    </body>

</html>
