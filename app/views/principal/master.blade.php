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

        <?= HTML::script('js/library/jquery-2.1.0.min.js') ?>
        <?= HTML::script('js/library/bootstrap.min.js') ?>   
        <?= HTML::script('js/library/angular.min.js') ?> 
        <?= HTML::script('js/library/angular-sanitize.js') ?> 
        <?= HTML::script('js/library/ui-bootstrap-tpls-0.14.3.min.js') ?>    

        <?= HTML::script('js/app.js') ?>   
        <?= HTML::script('js/angular/controllers/master.js') ?>   

        @yield('javascript-ini')
        @yield('css')
    </head>
    <body  ng-app="app">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid" ng-controller="ctrlMaster">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li id="home"><?= HTML::link("core/principal", "Principal", array()) ?></li>
                        <li id="about"><?= HTML::link("core/principal", "Acerca de Nosotros", array()) ?></li>
                        <li id="activity"><?= HTML::link("core/principal", "Actividades", array()) ?></li>
                        <li id="contacts"><?= HTML::link("core/principal", "Contáctanos", array()) ?></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a id="btnLogin" style="cursor: pointer;">
                                <span class="glyphicon glyphicon-log-in" id="btnLogin"></span>Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
            @yield('content')
        </section>
        <footer>pie</footer>
    </body>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</html>
