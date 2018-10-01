<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <h3 class="menu-title">Inventario y Facturaci&oacute;n</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Productos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Productos y Servicios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Facturaci&oacute;n</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Facturas</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Devoluciones</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Clientes</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Clientes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Clientes</a></li>
                        </ul>
                    </li>
					<h3 class="menu-title">Administraci&oacute;n</h3><!-- /.menu-title -->
                   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="usuario.php">Usuarios</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Roles</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="roles.php">Roles</a></li>
                        </ul>
                    </li>
                   
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="login.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>



                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Inicio</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Usuarios</a></li>
                            <li class="active">Creaci&oacute;n de cliente</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">

                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Creaci&oacute;n de cliente</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">ID cliente</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static">ID</p>
                            </div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Tipo de persona</label></div>
                            <div class="col-12 col-md-5">
                              <select name="select" id="estado_civil" class="form-control">
                                <option value="0">Escoja una opci&oacute;n</option>
                                <option value="1">Persona natural</option>
                                <option value="2">Persona juri&oacute;dica</option>
                                
                              </select>
                            </div>
                          </div>
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Primer nombre</label></div>
                            <div class="col-12 col-md-3"><input type="text" id="nombre" name="text-input" placeholder="Primer nombre" class="form-control"></div>
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Segundo nombre</label></div>
                            <div><input type="text" id="nombre" name="text-input" placeholder="Segundo nombre" class="form-control"></div>
                          </div>
						  
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Primer apellido</label></div>
                            <div class="col-12 col-md-3"><input type="text" id="apellido" name="text-input" placeholder="Apellido" class="form-control"></div>
                          
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Segundo apellido</label></div>
                            <div><input type="text" id="apellido" name="text-input" placeholder="Segundo apellido" class="form-control"></div>
                          </div>
						  
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre comercial</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="apellido" name="text-input" placeholder="Nombre comercial" class="form-control"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fecha Ingreso</label></div>
                            <div class="col-12 col-md-3"><input type="text" id="fecha" name="text-input" placeholder="dd/mm/yyyy" class="form-control"></div>
                          </div>
						  
						
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Estado civil</label></div>
                            <div class="col-12 col-md-3">
                              <select name="select" id="estado_civil" class="form-control">
                                <option value="0">Escoja una opci&oacute;n</option>
                                <option value="1">Soltero</option>
                                <option value="2">Casado</option>
								<option value="2">Union libre</option>
                                
                              </select>
                            </div>
                          </div>
						  
						 
						  
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Estado en la base de datos</label></div>
                            <div class="col-12 col-md-3">
                              <select name="select" id="estado_civil" class="form-control">
                                <option value="0">Escoja una opci&oacute;n</option>
                                <option value="1">Activo</option>
                                <option value="2">Casado</option>
                                <option value="3">Uni&oacute;n libre</option>
                              </select>
                            </div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">RTN</label></div>
                            <div class="col-12 col-md-4"><input type="text" id="apellido" name="text-input" placeholder="RTN" class="form-control"></div>
                          </div>
						  
						
						  <!-- DATOS EMPLEADO -->
						  
						  <hr>
						  
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Direcci&oacute;n</label></div>
                            <div class="col-12 col-md-7"><textarea name="textarea-input" id="direccion" rows="3" placeholder="Direcci&oacute;n" class="form-control"></textarea></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pais</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="apellido" name="text-input" placeholder="Pais" class="form-control"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Estado</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="apellido" name="text-input" placeholder="Estado" class="form-control"></div>
                          </div>
						  
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ciudad</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="apellido" name="text-input" placeholder="Ciudad" class="form-control"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefono 1</label></div>
                            <div class="col-12 col-md-3"><input type="text" id="apellido" name="text-input" placeholder="Telefono 1" class="form-control"></div>
                        
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefono 2</label></div>
                            <div class=""><input placeholder="Telefono 2" class="form-control"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefono 3</label></div>
                            <div class="col-12 col-md-3"><input type="text" id="apellido" name="text-input" placeholder="Telefono 3" class="form-control"></div>
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefono 4</label></div>
                            <div class=""><input type="text" id="apellido" name="text-input" placeholder="Telefono 4" class="form-control"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fax </label></div>
                            <div class="col-12 col-md-3"><input type="text" id="apellido" name="text-input" placeholder="Fax" class="form-control"></div>
                          </div>
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Correo Electr&oacute;nico 1</label></div>
                            <div class="col-12 col-md-5"><input type="email" id="email-input" name="email-input" placeholder="Correo Electr&oacute;nico 1" class="form-control"></div>
                          </div>  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Correo Electr&oacute;nico 2 </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="apellido" name="text-input" placeholder="Correo electr&oacute;nico 2" class="form-control"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Correo electr&oacute;nico 3 </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="apellido" name="text-input" placeholder="Correo electr&oacute;nico 3" class="form-control"></div>
                          </div>
						  

						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fecha Suspensi&oacute;n</label></div>
                            <div class="col-12 col-md-3"><input type="text" id="fecha" name="text-input" placeholder="dd/mm/yyyy" class="form-control"></div>
                          </div>
                                 
                
                        </form>
                      </div>
					  
					  
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Agregar
                        </button>
                        <button type="reset" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Actualizar
                        </button>
						
						<button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Eliminar
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Salir
                        </button>
                      </div>
					  
					  
                    </div>

                  </div>



                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
	<!--<script src="assets/js/bootstrap-datetimepicker.js"></script>-->

<script>
jQuery( document ).ready(function() {
    //jQuery('.datepicker').datepicker();
	//jQuery('.selectpicker').selectpicker();
});
</script>

</body>
</html>
