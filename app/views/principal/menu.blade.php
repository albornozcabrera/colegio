<nav id="nemu-Master" class="navbar-default navbar-static-side menu-Master" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <input id="perfil" type="hidden" value="{{Session::get('usuario.codperfil')}}">
                    <div class="tittleAdraLogo">
                        <strong>IESG</strong>
                    </div>
                </div>
                <div class="logo-element">
                    SG
                </div>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">CORE Planificación</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><?= HTML::link("core/principal", "Principal", array()) ?></li>
                    <li><?= HTML::link("/core/mision", "Mision", array()) ?></li>
                    <li><?= HTML::link("/core/vision", "Vision", array()) ?></li>
                    <li><?= HTML::link("/core/linea-accion", "Gestión de Líneas de Acción", array()) ?></li>
                    <li><?= HTML::link("/core/objetivo", "Gestión de Objetivos por Líneas de Acción", array()) ?></li>
                    <li><?= HTML::link("/core/indicador", "Gestión de Indicadores", array()) ?></li>
                    <li><?= HTML::link("/core/principal/Reporte", "Reporte", array()) ?></li>
                    <li><?= HTML::link("/core/principal/Reporte2", "Reporte2", array()) ?></li>
                </ul>
            </li>
        </ul>
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