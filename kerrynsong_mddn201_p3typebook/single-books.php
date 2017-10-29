<?php
// Custom Fields variables
$book_title          = get_field('book_title');
$notes               = get_field('notes');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Typebook</title>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.css" rel="stylesheet">
    </head>
<body>
    <!-- ====== preloader ====== 
    <div id="preloader2">
        <p class="load-text">typing pages...</p>
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    ====== end preloader ====== -->
    <div class="hidden">
    <section class="fullpage">
            <img src="http://localhost:8888/201P3/wp-content/uploads/2017/10/logo.png" id="store-back">
        <div class="logout1">
            <a id="logout" href="http://localhost:8888/201P3/">logout</a>
        </div>

  <!-- Posts Area -->
  <main class="book_listings">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="post" role="article" itemscope itemtype="http://schema.org/Article">

        <div class="postcontent_list" itemprop="articleBody" data-type-cleanup="true">
            <div contenteditable="true" class="scroll">
              <span class='arialtext'>
              <!-- main content -->
              <?php echo $notes; ?>
              </span>
            </div>

            <p id=page-arrow>&lt;</p>
            <a href="http://localhost:8888/201P3/books/" id="page-select">notes</a>

            <div class="text-styles">
              <select name="fonts" id="fonts">
                  <option value="arialtext">Arial</option>
                  <option value="timestext">Times New Roman</option>
              </select>
              <select id="styles">
                  <option value="regular">Regular</option>
                  <option value="italic">Italic</option>
                  <option value="bold">Bold</option>
                  <option value="boldItalic">Bold Italic</option>
              </select>
            </div>
            <div class="finish">
                  <a id="save" href="#">save notes</a>
            </div>

        </div>
      </article>
    <?php endwhile; endif; ?>

  </main>
<?php get_footer(); ?>
