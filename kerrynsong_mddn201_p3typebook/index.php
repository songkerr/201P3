<!-- /** 
    Template Name: Home Page
*/ -->

<!DOCTYPE html>
<html>
    <head>
        <title>Typebook</title>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.css" rel="stylesheet">
    </head>
    
<body>
    <div class="hidden">
    <section class="fullpage">
        <section class="store">
            <a id="store" href="http://localhost:8888/201P3/?page_id=49">&lt; store</a>
        </section>
        <section class="register">
            <a id="register" href="http://localhost:8888/201P3/register/">register your typebook</a>
        </section>
        <a href="index.html" id="back">
            <img src="http://localhost:8888/201P3/wp-content/uploads/2017/10/icon.png" id="icon">
        </a>
        <div align="center">
            <div class="col-md-6 col-xl-7">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6 col-xl-7">
                            <div class="input">
                                <input type="text" placeholder="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-7">
                            <div class="input">
                                <input type="password" name="pwd" placeholder="password">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="login">
                    <a id="login" href="http://localhost:8888/201P3/books/">login</a>
                </div>
            </div>
            <div class="col-xl-3" id="password">
                <a class="password" href="#">forgot your password?</a>
            </div>
        </div>
<?php get_footer(); ?>