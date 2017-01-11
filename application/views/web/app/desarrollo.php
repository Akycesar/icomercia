<style type="text/css">
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
.box {
    border-radius: 3px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 10px 25px;
    background-color: white;
    text-align: right;
    display: block;
    margin-top: 60px;
}
.box-icon {
    background-color: #57a544;
    border-radius: 50%;
    display: table;
    height: 100px;
    margin: 0 auto;
    width: 100px;
    margin-top: -61px;
}
.box-icon span {
    color: #fff;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}
.info h4 {
    font-size: 26px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.info > p {
    color: #717171;
    font-size: 16px;
    padding-top: 10px;
    text-align: justify;
}
.info > a {
    background-color: #03a9f4;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}
.info > a:hover {
    background-color: #0288d1;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}
.panel
{
    text-align: center;
}
.panel:hover { box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px 5px rgba(130, 130, 130, 0.35); }
.panel-body
{
    padding: 0px;
    text-align: center;
}

.the-price
{
    background-color: rgba(220,220,220,.17);
    box-shadow: 0 1px 0 #dcdcdc, inset 0 1px 0 #fff;
    padding: 20px;
    margin: 0;
}

.the-price h1
{
    line-height: 1em;
    padding: 0;
    margin: 0;
}

.subscript
{
    font-size: 25px;
}

/* CSS-only ribbon styles    */
.cnrflash
{
    /*Position correctly within container*/
    position: absolute;
    top: -9px;
    right: 4px;
    z-index: 1; /*Set overflow to hidden, to mask inner square*/
    overflow: hidden; /*Set size and add subtle rounding        to soften edges*/
    width: 100px;
    height: 100px;
    border-radius: 3px 5px 3px 0;
}
.cnrflash-inner
{
    /*Set position, make larger then            container and rotate 45 degrees*/
    position: absolute;
    bottom: 0;
    right: 0;
    width: 145px;
    height: 145px;
    -ms-transform: rotate(45deg); /* IE 9 */
    -o-transform: rotate(45deg); /* Opera */
    -moz-transform: rotate(45deg); /* Firefox */
    -webkit-transform: rotate(45deg); /* Safari and Chrome */
    -webkit-transform-origin: 100% 100%; /*Purely decorative effects to add texture and stuff*/ /* Safari and Chrome */
    -ms-transform-origin: 100% 100%;  /* IE 9 */
    -o-transform-origin: 100% 100%; /* Opera */
    -moz-transform-origin: 100% 100%; /* Firefox */
    background-image: linear-gradient(90deg, transparent 50%, rgba(255,255,255,.1) 50%), linear-gradient(0deg, transparent 0%, rgba(1,1,1,.2) 50%);
    background-size: 4px,auto, auto,auto;
    background-color: #aa0101;
    box-shadow: 0 3px 3px 0 rgba(1,1,1,.5), 0 1px 0 0 rgba(1,1,1,.5), inset 0 -1px 8px 0 rgba(255,255,255,.3), inset 0 -1px 0 0 rgba(255,255,255,.2);
}
.cnrflash-inner:before, .cnrflash-inner:after
{
    /*Use the border triangle trick to make                 it look like the ribbon wraps round it's                container*/
    content: " ";
    display: block;
    position: absolute;
    bottom: -16px;
    width: 0;
    height: 0;
    border: 8px solid #800000;
}
.cnrflash-inner:before
{
    left: 1px;
    border-bottom-color: transparent;
    border-right-color: transparent;
}
.cnrflash-inner:after
{
    right: 0;
    border-bottom-color: transparent;
    border-left-color: transparent;
}
.cnrflash-label
{
    /*Make the label look nice*/
    position: absolute;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    padding-bottom: 5px;
    color: #fff;
    text-shadow: 0 1px 1px rgba(1,1,1,.8);
    font-size: 0.95em;
    font-weight: bold;
    text-align: center;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-cube"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Paginas Web Estaticas</h4>
                    <p>Estas web corresponden a paginas con contenido estaticos o sin cambios en el tiempo. No poseen mantenedores, son páginas que entregan información de alguna empresa, organización o productos. Son mas baratas que las páginas dinámicas. Te ponemos una lista de valores con diferentes caracteristicas.</p>
                    <a href="<?= base_url(); ?>index.php/web/contacto" class="btn">Necesitas mas información?</a>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-cubes"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Paginas Web Dinàmicas</h4>
                    <p>Las páginas dinámicas tienen la misión de hacer mas fácil el manejo de la información en la web, proporsionando mantenedores de información, manejo de usuarios, estadísticas, correos, etc. Además que utilizan bases de datos, hace que la informacion entregada a los clientes se pueda hacer de forma rápida y oportuna.</p>
                    <a href="<?= base_url(); ?>index.php/web/contacto" class="btn">Cotiza tu página dinámica.</a>
                </div>
            </div>
        </div>
	</div>
</div>
<br>
<div class="container">
    <div class="row">
<div class="col-xs-12 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Básico 1 Estáticas</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $50.000<span class="subscript"></span></h1>
                        <small>1 solo pago</small>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                1 Dominio
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Hosting
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5 paginas enlaces (Inicio, nosotros, etc)
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                3 Correos Corporativos
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Diseños de paginas personalizadas
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                6 Imagenes de productos
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Duración de 1 año
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="<?= base_url(); ?>index.php/web/contacto" class="btn btn-success" role="button">Solicitar</a>
                    <a href="#" class="btn btn-danger" role="button">Ejemplo</a>
                    </div>
            </div>
        </div><div class="col-xs-12 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Básico 2 Estáticas</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $65.000<span class="subscript"></span></h1>
                        <small>1 solo pago</small>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                1 Dominio
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Hosting
                            </td>
                        </tr>
                        <tr>
                            <td>
                                7 paginas enlaces (Inicio, nosotros, etc)
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                5 Correos Corporativos
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Diseños de paginas personalizadas
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                10 Imagenes de productos
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Duración de 1 año
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="<?= base_url(); ?>index.php/web/contacto" class="btn btn-success" role="button">Solicitar</a>
                    <a href="#" class="btn btn-danger" role="button">Ejemplo</a>
                    </div>
            </div>
        </div><div class="col-xs-12 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Básico 3 Estáticas</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $80.000<span class="subscript"></span></h1>
                        <small>1 solo pago</small>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                1 Dominio
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Hosting
                            </td>
                        </tr>
                        <tr>
                            <td>
                                10 paginas enlaces (Inicio, nosotros, etc)
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                7 Correos Corporativos
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Diseños de paginas personalizadas
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                15 Imagenes de productos
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Duración de 1 año
                            </td>
                        </tr>
                    </table>
                </div>
               <div class="panel-footer">
                    <a href="<?= base_url(); ?>index.php/web/contacto" class="btn btn-success" role="button">Solicitar</a>
                    <a href="#" class="btn btn-danger" role="button">Ejemplo</a>
                    </div>
            </div>
        </div><div class="col-xs-12 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Básico 4 Estáticas</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $100.000<span class="subscript"></span></h1>
                        <small>1 solo pago</small>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                1 Dominio
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Hosting
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15 paginas enlaces (Inicio, nosotros, etc)
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                10 Correos Corporativos
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Diseños de paginas personalizadas
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                20 Imagenes de productos
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Duración de 1 año
                            </td>
                        </tr>
                    </table>
                </div>
               <div class="panel-footer">
                    <a href="<?= base_url(); ?>index.php/web/contacto" class="btn btn-success" role="button">Solicitar</a>
                    <a href="#" class="btn btn-danger" role="button">Ejemplo</a>
                    </div>
            </div>
        </div>
    </div>
</div>
