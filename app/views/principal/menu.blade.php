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
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="cursor: pointer; color: #4CAF50;" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('logout') }}">Logout</a></li>
                            </ul>
                        </li>                       
                    @else
                        @if (Session::has('login_error'))
                        <li>    
                            <a id="btnLogin" style="cursor: pointer; color: #E91E63;">
                                <span class="glyphicon glyphicon-log-in" id="btnLogin"></span>Login
                            </a>
                        </li>     
                        @else
                        <li>    
                            <a id="btnLogin" style="cursor: pointer; ">
                                <span class="glyphicon glyphicon-log-in" id="btnLogin"></span>Login
                            </a>
                        </li>      
                        @endif                            
                    @endif
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
                <h4 class="modal-title" align="center">Ingrese sus credenciales</h4>
            </div>
            <div class="modal-body">

            {{ Form::open(['route' => 'login', 'method' => 'POST']) }}
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail Address</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">Login</button>

                        <a class="btn btn-link" href="#">Forgot Your Password?</a>
                    </div>
                </div>                
            {{ Form::close() }}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?= HTML::script('js/angularjs/controllers/menu.js') ?>