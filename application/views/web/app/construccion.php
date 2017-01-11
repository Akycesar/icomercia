<!DOCTYPE html>
<html lang="en-US" class="backgroundImage">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="http://webnovant.com">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Lemon' rel='stylesheet' type='text/css'>
        
        <link rel="shortcut icon" href="images/favicon.jpg">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>application/css/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>application/css/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>application/css/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>application/css/css/YTPlayer.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>application/css/css/supersized.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>application/css/css/styles.css" />

        
    </head>
    <body>

        <!-- CONTAINER -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section clearfix">
                            <div id="text_slider">
                            <div class="slide clearfix"><h1>Nos encontramos mejorando esta sección para usted.</h1></div>

                            <div class="slide clearfix"><h1>Nos vemos Pronto!</h1></div>
                        </div>
                        
                    </div>

                    <!-- COUNTDOWN -->
                    <div class="section clearfix animated fadeIn" id="countdown">
                        <!-- Days -->
                        <div class="countdown_group">
                            <span class="countdown_value">{dnn}</span> 
                            <span class="countdown_help">{dl}</span>
                        </div>

                        <!-- Hours --> 
                        <div class="countdown_group">
                            <span class="countdown_value">{hnn}</span> 
                            <span class="countdown_help">{hl}</span>
                        </div> 

                        <!-- Minutes -->
                        <div class="countdown_group">
                            <span class="countdown_value">{mnn}</span> 
                            <span class="countdown_help">{ml}</span> 
                        </div>

                        <!-- Seconds -->
                        <div class="countdown_group">
                            <span class="countdown_value">{snn}</span> 
                            <span class="countdown_help">{sl}</span>
                        </div>
                    </div>
                    <!-- END COUNTDOWN -->

                    <div class="section clearfix animated fadeIn">
                        <p>Want to be notified when the website is ready?</p>
                        <form id="form_newsletter">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="input-group input-group-lg">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email" >
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-check"></i> Notify me!</button>
                                        </span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div id="form_newsletter_result"></div>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="section clearfix animated fadeIn" id="contact">
                        <a href="#"><i class="fa fa-envelope-o"></i> email@ycompany.com</a>
                        <a href="#"><i class="fa fa-phone"></i> (+00) 123 4567</a>
                    </div>

                </div>
            </div>
        </div>

        <!-- END ABOUT US -->
        
		<!-- JS -->
        <script src="<?= base_url(); ?>application/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>application/js/jquery.plugin.js"></script>
        <script src="<?= base_url(); ?>application/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>application/js/jquery.countdown.min.js"></script>
        <script src="<?= base_url(); ?>application/js/supersized.min.js"></script>
        <script src="<?= base_url(); ?>application/js/jquery.cycle.min.js"></script>
        <script src="<?= base_url(); ?>application/js/jquery.mb.YTPlayer.js"></script>
        <script src="<?= base_url(); ?>application/js/scripts.js"></script>
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </body>
</html>