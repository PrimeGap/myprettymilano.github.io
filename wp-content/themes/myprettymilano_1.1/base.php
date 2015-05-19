
  <?php get_template_part('templates/head'); ?>

  <body <?php body_class(); ?>>

    <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

    <?php get_template_part('templates/header'); ?>

    <div id="content" class="container">
    <?php if (roots_display_sidebar()) : ?>
      <div id="articles" class="row">
        <div class="span9">
          <?php include roots_template_path(); ?>
        </div>
        <aside id="sidebar" class="span3 <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php get_template_part('templates/sidebar'); ?>
        </aside>
      </div>
    <?php else : ?>
      <?php include roots_template_path(); ?>
    <?php endif; ?>
    </div><!-- /#content -->

    <?php get_template_part('templates/footer'); ?>

  </body>
</html>