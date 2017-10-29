<!-- /** 
    Template Name: Store 
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
        <a href="http://localhost:8888/201P3/?page_id=51&preview=true" id="store-back">
            <img src="http://localhost:8888/201P3/wp-content/uploads/2017/10/logo.png" id="store-logo">
        </a>
        
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active"> <!-- new Slide -->
                <div class="bannerImage">
                    <div>
                        <div onClick="stop()">
                            <a href="#"><img src="http://localhost:8888/201P3/wp-content/uploads/2017/10/notebook.jpg" alt=""></a>
                        </div>
                    </div>
                </div>                                                        
            </div> 
            <div class="item"> <!-- new Slide -->          
                <div class="bannerImage">
                    <a href="#"><img src="http://localhost:8888/201P3/wp-content/uploads/2017/10/notebook-open.jpg" alt=""></a>
                </div>                                                         
            </div>
        </div>
        <div class="control-box">                            
            <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
        </div> 
    </div>

            <section class="container-fluid" id="listing">
                <p id="title">A5 Typebook</p>
                <p>$80</p>
                <div class="quantity">
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <section class="listing-text">
                <p id="measure">
                    216mm L x 155mm W x 25mm H<br>8.5" L x 6.1" W x 0.98" H
                </p>
                <p id="specs">
                    256 lined smartpages<br>100gsm<br>Hard, casebound bonded leather cover<br>Elastic closure<br>Ribbon page marker
                </p>
                </section>
                <section class="cart">
                <a href="#">Add to cart</a>
                </section>
            </section>
<?php get_footer(); ?>