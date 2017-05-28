  <head>
    <meta charset="utf-8">
    <title>Release 3, Wordpress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
          <ul class="nav">

              <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>

          </ul>
        </div>
        <form class="navbar-form navbar-right"><div class="search-form-container"><?php get_search_form(); ?></div></form>
      </div>
    </div>
  </div>

  <div class="container">