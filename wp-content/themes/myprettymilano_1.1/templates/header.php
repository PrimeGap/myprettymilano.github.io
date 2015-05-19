    <div id="wrap">
      <div id="header" class="container">
        <div id="free-ribbon"></div>
        <h1 id="logo"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
        <nav id="menu">
          <a id="home" href="<?php echo home_url(); ?>/">Home</a>
          <a id="blog" href="<?php echo home_url(); ?>/blog">Appunti</a>
          <a id="team" href="<?php echo home_url(); ?>/team">Team</a>
        </nav>
        <div class="row">
          <div id="devices" class="span6">
            <img src="<?php echo bloginfo( 'template_directory' ) . '/assets/img/phones.png' ?>" />
          </div>
          <div id="hero" class="span6">
            <h2>Un’amica fidata sempre con te</h2>
          <?php if (is_front_page()) { ?>
            <p>
              Pensi di conoscere tutto di Milano? Allora allontanati dal tue percorso abituale e scopri nuove strade con noi, che vogliamo svelarti una Milano diversa, talvolta poco nota anche a chi ci abita e ci lavora.
            </p>
            <p>
              My Pretty Milano è la guida più chic e trendy della nostra città, che ti farà scoprire nuovi indirizzi, curiosi e originali, da segnalare a tutte voi amanti della moda, cultura e lifestyle.
            </p>
            <p class="lead align-center">
              Per le milanesi doc ma anche per chi viene in città per un viaggio o è solo di passaggio.
            </p>
            <br />
          <?php } else { ?>
            <p>
              My Pretty Milano è la guida più chic e trendy della nostra città, che ti farà scoprire nuovi indirizzi, curiosi e originali, da segnalare a tutte voi amanti della moda, cultura e lifestyle.
            </p>
          <?php } ?>
            <div id="badges">
              <a href="https://itunes.apple.com/it/app/my-pretty-milano/id441382471">
                <img src="<?php echo bloginfo( 'template_directory' ) . '/assets/img/app_store_badge.png' ?>" alt="" />
              </a>
              <a href="http://play.google.com/store/apps/details?id=net.primegap.myprettymilano">
                <img src="<?php echo bloginfo( 'template_directory' ) . '/assets/img/play_store_badge.png' ?>" alt="" />
              </a>
            </div>
            <div id="social">
              <!-- AddThis Follow BEGIN -->
              <div class="addthis_toolbox addthis_32x32_style addthis_default_style">
                <a class="addthis_button_facebook_follow" addthis:userid="myprettymilano"></a>
                <a class="addthis_button_twitter_follow" addthis:userid="myprettymilano"></a>
                <a class="addthis_button_instagram_follow" addthis:userid="myprettymilano"></a>
                <a class="addthis_button_pinterest_follow" addthis:userid="myprettymilano"></a>
              </div>
              <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50b9e92d5ef02f74"></script>
              <!-- AddThis Follow END -->
            </div>
            <div id="teaser">
              <a href="#teaser-modal" data-toggle="modal" class="btn btn-warning">Guarda il video teaser</a>
            </div>
          </div>
        </div>
      </div><!-- End Header -->
    </div><!-- End Wrap -->
