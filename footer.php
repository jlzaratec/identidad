</div>
<footer id="sticky-footer" class="bg-dark text-white-50">
  <!-- Footer morado -->
  <div class="container-fluid footer-morado">
    <div class="row">
      <div class="col-md-12">
       
      </div>
    </div>
  </div>
  <!-- Footer barra de colores -->
  <div class="contianer-fluid tabs-foot">
    <?php if (has_nav_menu('menu-footer')) : ?>
     <div class=" menu-footer align-items-center">
      <div class="">
         <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-footer',
          'menu_id'        => 'menu-footer',
          'container'      => 'ul',
          'menu_class'     => 'nav nav-pills nav-fill',
          
        ) );
      ?>
      </div>
    </div>
   <?php endif; ?>


   
  </div>
  <!-- Footer gris con fondo -->
  <div class="container-fluid site-footer">
    <div class="container">
      <div class="row foot-info">
        <div class="col-md-4">
        
          <?php dynamic_sidebar('footer_uno'); ?>
        </div>
        <div class="col-md-4">

            <?php dynamic_sidebar('footer_dos'); ?>
        </div>
        <div class="col-md-4">

            <?php dynamic_sidebar('footer_tres'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer negro -->
  <div class="container-fluid info-pie">
    <div class="row">
      <div class="col">
        <a href="http://www.oaxaca.gob.mx/" class="oaxaca-link">Oaxaca<b>.</b>gob<b>.</b>mx</a>
      </div>
      <div class="col txtA-r">
        <h6>Contáctanos:</h6>
        <small><a href="mailto:webadmin@finanzasoaxaca.gob.mx" class="oaxaca-link">webadmin@finanzasoaxaca.gob.mx</a></small>
      </div>
    </div>
  </div>


</footer>


<?php wp_footer(); ?>

<!--<div id="app_icon" style="display: block;position: fixed;z-index: 100;background-color: #f6f6f6;color: #545454;width: 100%;bottom: 0px;padding: 20px 0;border-top: 1px solid #ddd;">
    <div>
      <div style="width: 20%; text-align: center; float: left;">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/oaxaca-travel.png" style="width: 40px;">
      </div>
      <div style="width: 55%; float: left;">
        <span>Oaxaca Travel</span>
        <br>
        <span style="color: #009d61;">DGTID Oaxaca Eventos</span>
      </div>
      <div style="width: 25%;float: left;padding-top: 10px;">
        <a id="rr" href="#" style="display: inline; padding: 8px; border: 1px solid #ccc; color: #545454; border-radius: 5px; font-size: 14px;">Instalar</a>
      </div>
    </div>
</div>-->

  <script>
    var md = new MobileDetect(window.navigator.userAgent);
    var url_redirect1 = "https://play.google.com/store/apps/details?id=com.oaxaca.turismo";
    var url_redirect2 = "https://apps.apple.com/mx/app/oaxaca-travel/id1473533822";
    if (md.mobile() === null) {
      document.getElementById("app_icon").style.display = 'none';   
    } else {
      if (md.os() == "AndroidOS") {
        document.getElementById("rr").href = url_redirect1;
        document.getElementById("app_icon").style.display = 'block';
      }
      else {
        if (md.os() == "iOS") {
          document.getElementById("rr").href = url_redirect2;
          document.getElementById("app_icon").style.display = 'block';
        }
        else
          document.getElementById("app_icon").style.display = 'none';
      }
    }
  </script>

</body>
</html>
