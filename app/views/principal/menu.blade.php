<nav ng-controller="ctrlMenu" class="navbar navbar-inverse">
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
                <li id="home"><?= HTML::link("/", "Principal", array()) ?></li>
                <li id="about"><?= HTML::link("core/about", "Acerca de Nosotros", array()) ?></li>
                <li id="activity"><?= HTML::link("core/activity", "Actividades", array()) ?></li>
                <li id="contacts"><?= HTML::link("core/contacts", "Contáctanos", array()) ?></li>
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
<?= HTML::script('js/angularjs/controllers/menu.js') ?>