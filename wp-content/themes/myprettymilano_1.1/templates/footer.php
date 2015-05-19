    <div id="footer" class="container">
      <hr>
      <p>
        <small><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <a href="mailto:contacts@myprettymilano.it">Contatti</a> <a href="mailto:help@myprettymilano.it">Help</a></small>
      </p>
    </div>

    <div id="teaser-modal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Guarda il teaser di My Pretty Milano</h3>
      </div>
      <div class="modal-body">
        <iframe src="http://player.vimeo.com/video/63567888" width="530" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
      </div>
      <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn">Chiudi</a>
      </div>
    </div>

    <script>
      $(document).ready(function() {
        if ($.cookie("teaser_shown") != "1") {
          $("#teaser-modal").modal();
        }
        $('#teaser-modal').on('hidden', function () {
          $.cookie("teaser_shown", "1", { expires: 15 });
        });
      });
    </script>

    <?php if (GOOGLE_ANALYTICS_ID) : ?>
    <script>
      var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    <?php endif; ?>

    <?php wp_footer(); ?>
