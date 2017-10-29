<!-- /** 
    Template Name: Books
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
        <a href="index.html" id="back">
            <img src="http://localhost:8888/201P3/wp-content/uploads/2017/10/icon.png" id="icon">
        </a>
        <div class="logout">
            <a id="logout" href="http://localhost:8888/201P3/">logout</a>
        </div>
        <div class="book_listings">
                <!-- php loop begins  -->
                <?php $loop = new WP_Query( array( 'post_type' => 'books', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                    <?php while( $loop->have_posts() ) : $loop->the_post();?>
                
                <!-- listing box -->
                <?php
                // Custom Fields variables
                    $book_title          = get_field('book_title');
                    $notes               = get_field('notes');
                ?>
                <div class="page">
                    <div class="listing">
                        <!-- listing content -->
                        <div class="listingContent"><?php echo $notes; ?></div>
                    </div>
                </div>
                <!-- listing title -->
                <div class="listingTitle">
                    <a href="<?php the_permalink() ?>"><?php echo $book_title; ?></a>
                </div>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query ?>
        </div>
<?php get_footer(); ?>