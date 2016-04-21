<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= HTML::style('css/bootstrap.min.css') ?>
        <?= HTML::style('css/style.css') ?>

        <?= HTML::script('js/library/jquery-2.1.0.min.js') ?>
        <?= HTML::script('js/library/bootstrap.min.js') ?>   
        <?= HTML::script('js/library/angular.min.js') ?> 
        <?= HTML::script('js/library/angular-sanitize.js') ?> 
        <?= HTML::script('js/library/ui-bootstrap-tpls-0.14.3.min.js') ?>    

        <?= HTML::script('js/app.js') ?>   
        <?= HTML::script('js/angular/controllers/master.js') ?>   
        <?= HTML::script('js/angular/controllers/menu.js') ?>   

        @yield('javascript-ini')
        @yield('css')
    </head>
    <body  ng-app="app">
        @include('principal.menu')        
        <section>
            <div class="container">
                @yield('content')                
            </div>
        </section>
        <footer>
            @include('principal.footer')
        </footer>
    </body>
    
</html>
