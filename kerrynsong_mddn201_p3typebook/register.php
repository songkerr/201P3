<!-- /** 
    Template Name: Register
*/ -->

<!DOCTYPE html>
<html>
    <head>
        <title>Typebook</title>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.css" rel="stylesheet">
    </head>
    
<body>
    <section class="fullpage">
        <div class="hidden">
            <a href="http://localhost:8888/201P3/">
                <img src="http://localhost:8888/201P3/wp-content/uploads/2017/10/icon.png" id="register-icon">
            </a>
        </div>
        <div align="center">
            <div class="col-md-6 col-xl-7">
                <form action="#" id="register-input">
                    <div class="row">
                        <div class="col-md-6 col-xl-7">
                            <div class="input">
                                <input type="text" placeholder="Typebook ID">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-7">
                            <div class="input">
                                <input type="text" placeholder="first name">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-7">
                            <div class="input">
                                <input type="text" placeholder="last name">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-7">
                            <div class="input">
                                <input type="text" placeholder="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-7">
                            <div class="input">
                                <input type="text" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <div class="registerbtn">
                        <a id="registerbtn" href="http://localhost:8888/201P3/">register</a>
                    </div>
                </form>
            </div>
        </div>
<?php get_footer(); ?>