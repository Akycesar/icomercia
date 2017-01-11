<style type="text/css">
*{
    font-family: 'Open Sans', sans-serif;
}

.well {
    margin-top:-20px;
    background-color:#007FBD;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 25px;
    padding: 15px;
    border-radius: 0px !important;
}

.well:hover {
    margin-top:-20px;
    background-color:#0077B2;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 25px;
    padding: 15px;
    border-radius: 0px !important;
    border-bottom : 2px solid rgba(97, 203, 255, 0.65);
}

body {
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-size: 14px;
line-height: 1.42857143;
background-color: #F1F1F1;
}



.bg_blur
{
    background-image:url('<?= base_url(); ?>/application/img/e1.jpg');
    height: 300px;
    background-size: cover;
}

.follow_btn {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid #007FBE;
}

.follow_btn:hover {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid rgba(255, 255, 255, 0.8);
}

.header{
    color : #808080;
    margin-left:10%;
    margin-top:70px;
}

.picture{
    height:150px;
    width:150px;
    position:absolute;
    top: 75px;
    left:-75px;
}

.picture_mob{
    position: absolute;
    width: 35%;
    left: 35%;
    bottom: 70%;
}

.btn-style{
    color: #fff;
    background-color: #007FBE;
    border-color: #adadad;
    width: 33.3%;
}

.btn-style:hover {
    color: #333;
    background-color: #3D5DE0;
    border-color: #adadad;
    width: 33.3%;
   
}


@media (max-width: 767px) {
    .header{
        text-align : center;
    }
    
    
    
    .nav{
        margin-top : 30px;
    }
}
    .animate {
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    .info-card {
        width: 100%;
        border: 1px solid rgb(215, 215, 215);
        position: relative;
        font-family: 'Lato', sans-serif;
        margin-bottom: 20px;
        overflow: hidden;
    }
    .info-card > img {
        width: 100px;
        margin-bottom: 60px;
    }
    .info-card .info-card-details,
    .info-card .info-card-details .info-card-header  {
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: -100%;
        left: 0;
        padding: 0 15px;
        background: rgb(255, 255, 255);
        text-align: center;
    }
    .info-card .info-card-details::-webkit-scrollbar {
        width: 8px;
    }
    .info-card .info-card-details::-webkit-scrollbar-button {
        width: 8px;
        height: 0px;
    }
    .info-card .info-card-details::-webkit-scrollbar-track {
        background: transparent;
    }
    .info-card .info-card-details::-webkit-scrollbar-thumb {
        background: rgb(160, 160, 160);
    }
    .info-card .info-card-details::-webkit-scrollbar-thumb:hover {
        background: rgb(130, 130, 130);
    }           

    .info-card .info-card-details .info-card-header {
        height: auto;       
        bottom: 100%;
        padding: 10px 5px;
    }
    .info-card:hover .info-card-details {
        bottom: 0px;
        overflow: auto;
        padding-bottom: 25px;
    }
    .info-card:hover .info-card-details .info-card-header {
        position: relative;
        bottom: 0px;
        padding-top: 45px;
        padding-bottom: 25px;
    }
    .info-card .info-card-details .info-card-header h1, 
    .info-card .info-card-details .info-card-header h3 {
        color: rgb(62, 62, 62);
        font-size: 22px;
        font-weight: 900;
        text-transform: uppercase;
        margin: 0 !important;
        padding: 0 !important;
    }
    .info-card .info-card-details .info-card-header h3 {
        color: rgb(142, 182, 52);
        font-size: 15px;
        font-weight: 400;
        margin-top: 5px;
    }
    .info-card .info-card-details .info-card-detail .social {
        list-style: none;
        padding: 0px;
        margin-top: 25px;
        text-align: center;
    }
    .info-card .info-card-details .info-card-detail .social a {
        position: relative;
        display: inline-block;
        min-width: 40px;
        padding: 10px 0px;
        margin: 0px 5px;
        overflow: hidden;
        text-align: center;
        background-color: rgb(215, 215, 215);
        border-radius: 40px;
    }

    a.social-icon {
        text-decoration: none !important;
        box-shadow: 0px 0px 1px rgb(51, 51, 51);
        box-shadow: 0px 0px 1px rgba(51, 51, 51, 0.7);
    }
    a.social-icon:hover {
        color: rgb(255, 255, 255) !important;
    }
    a.facebook {
        color: rgb(59, 90, 154) !important;
    }
    a.facebook:hover {      
        background-color: rgb(59, 90, 154) !important;
    }
    a.twitter {
        color: rgb(45, 168, 225) !important;
    }
    a.twitter:hover {
        background-color: rgb(45, 168, 225) !important;
    }
    a.github {
        color: rgb(51, 51, 51) !important;
    }
    a.github:hover {
        background-color: rgb(51, 51, 51) !important;
    }
    a.google-plus {
        color: rgb(244, 94, 75) !important;
    }
    a.google-plus:hover {
        background-color: rgb(244, 94, 75) !important;
    }
    a.linkedin {
        color: rgb(1, 116, 179) !important;
    }
    a.linkedin:hover {
        background-color: rgb(1, 116, 179) !important;
    }
</style>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="<?= base_url(); ?>application/css/font-awesome.min.css" rel="stylesheet">

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<div class="col-md-4 bg_blur ">
    	    <a href="#" class="follow_btn hidden-xs">Seguir</a>
		</div>
        <div class="col-md-8  col-xs-12">
           <div class="header">
                <h1>Sobre nosotros...</h1>
                <h4>Desarrolladores web</h4>
                <p><b>Icomercia.cl</b>, es propiedad de <b>Websertec E.I.R.L</b>, con ROL 0000000. La componemos una serie de profesionales del ámbito informatico relacionados con la actividad de desarrollos de sistemas web, mantenimientos y soporte de los servicios en arriendo.</p> 
<p>La idea de <b>Icomercia</b> nace a principios de 2.012, a raíz de una serie de estudios y consultas, principalmente a autónomos y pymes, sobre la situación empresarial y el entorno económico actual.</p>
<p>Originalmente, nuestro objetivo se centraba en poner a disposición de <a href="#" target="_blank">autónomos y empresas</a> las herramientas necesarias para la optimización y el desarrollo de su actividad empresarial, como el posicionamiento en internet, a través del desarrollo web, redes sociales o publicidad, procurando la mayor difusión a todo lo relativo a su actividad (ofertas, productos o servicios, eventos...etc.) y combinándolo con servicios de asesoramiento, e información sobre ayudas y subvenciones, así como <a href="#" target="_blank">exposiciones</a> donde mostrar visualmente todo lo relativo a su actividad empresarial.</p>
<p>Posteriormente decidimos ampliar nuestra oferta a usuarios <a href="#" target="_blank">particulares</a>, buscando una perfecta combinación entre estos y las empresas, ya que son los usuarios de a pie quienes, a través de las redes sociales, tienen mayor poder de difusión de la información, convirtiéndose así en actores principales.</p>
<p>Para más información, ponte en <a href="contacto">contacto</a> con nosotros.<b></b></p><br>
           </div>
        </div>
    </div>  
   <div class="container">
        <div class="row">
            <div class="[ col-sm-6 col-md-offset-2 col-md-4 ]">
                <div class="[ info-card ]">
                    <img style="width: 100%" src="<?= base_url(); ?>application/img/cesar.jpg" />
                    <div class="[ info-card-details ] animate">
                        <div class="[ info-card-header ]">
                            <h1> César Espinoza </h1>
                            <h3> CEO Icomercia </h3>
                        </div>
                        <div class="[ info-card-detail ]">
                            <!-- Description -->
                            <p>Siempre tuve la motivación por mezclar mi pasión por el arte y mi pasion por el desarrollo. Cuando iniciamos Icomercia sentí que todo lo que esperaba lograr para las empresas, era mezclar lo visual, lo hermoso que podia ser mostrarle al mundo su empresa con nuestra mirada.</p>
                            <div class="social">
                                <a href="#" class="[ social-icon facebook ] animate"><span class="fa fa-facebook"></span></a>

                                <a href="#" class="[ social-icon twitter ] animate"><span class="fa fa-twitter"></span></a>

                                <a href="#" class="[ social-icon google-plus ] animate"><span class="fa fa-google-plus"></span></a>

                                <a href="#" class="[ social-icon linkedin ] animate"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="[ col-sm-6 col-md-4 ]">
                <div class="[ info-card ]">
                    <img style="width: 100%" src="<?= base_url(); ?>application/img/david.jpg" />
                    <div class="[ info-card-details ] animate">
                        <div class="[ info-card-header ]">
                            <h1> David Fernandez </h1>
                            <h3> CEO Icomercia </h3>
                        </div>
                        <div class="[ info-card-detail ]">
                            <!-- Description -->
                            <p>Proximamente en las mejores paginas de Icomercia.</p>
                         <div class="social">
                                <a href="#" class="[ social-icon facebook ] animate"><span class="fa fa-facebook"></span></a>

                                <a href="#" class="[ social-icon twitter ] animate"><span class="fa fa-twitter"></span></a>

                                <a href="#" class="[ social-icon google-plus ] animate"><span class="fa fa-google-plus"></span></a>

                                <a href="#" class="[ social-icon linkedin ] animate"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>   
