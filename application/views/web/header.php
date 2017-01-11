<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Icomercia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?= base_url(); ?>application/img/favicon.png" />
<link rel="stylesheet" href="<?= base_url(); ?>application/css/styles.css" />
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<script class="include" type="text/javascript" src="<?= base_url(); ?>application/css/jquery.min.js"></script>
<link href="<?= base_url(); ?>application/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="<?= base_url(); ?>application/css/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>application/css/bootstrap.min.js"></script>

</head>
<style type="text/css">

#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}
</style>
<body>
<img id="bg" src="<?= base_url(); ?>application/img/fondoindex.jpg"/>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="<?= base_url(); ?>application/img/logoxl.png"/>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url(); ?>">Inicio</a></li>
        <li><a href="<?= base_url(); ?>index.php/web/nosotros">Nosotros</a></li>
        <li><a href="<?= base_url(); ?>index.php/web/desarrollo">Proyectos</a></li>
        <li><a href="<?= base_url(); ?>index.php/web/contacto">Contacto</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistemas Web <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?= base_url(); ?>index.php/web/proyectos">Venta</a></li>
            <li><a href="<?= base_url(); ?>index.php/web/proyectos">Arriendo</a></li>
            <li><a href="<?= base_url(); ?>index.php/web/proyectos">Gratis</a></li>
            <li class="divider"></li>
            <li><a href="#">Desarrollo</a></li>
            <li class="divider"></li>
            <li><a href="#">Actualizaciones</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Ingreso</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                                Ingresa con
                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                </div>
                                o
                                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputEmail2">Correo Electronico</label>
                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Correo Electronico" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña" required>
                                             <div class="help-block text-right"><a href="">Olvidaste tu contraseña?</a></div>
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                                        </div>
                                        <div class="checkbox">
                                             <label>
                                             <input type="checkbox"> Mantener sesión activa
                                             </label>
                                        </div>
                                 </form>
                            </div>
                            <div class="bottom text-center">
                                Eres nuevo ? <a href="registro"><b>Únete</b></a>
                            </div>
                     </div>
                </li>
            </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>