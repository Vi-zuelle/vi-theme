<?php

// =============== Scripts and stylesheets
function scripts() {
  // wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
  wp_enqueue_style( 'style', get_template_directory_uri().'/app/assets/stylesheets/style.css' );
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
  wp_enqueue_style( 'boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

  wp_enqueue_script( 'customjs', get_template_directory_uri() . '/app/assets/javascript/custom.js', array('jquery'), '', true );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'scripts' );
// =============== .Scripts and stylesheets


// =============== Google fonts
function google_fonts() {
  // wp_register_style( 'Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
  // wp_enqueue_style( 'Raleway', sans-serif );
}
add_action( 'wp_print_styles', 'google_fonts' );
// =============== .Google fonts


// =============== Wordpress titles
add_theme_support( 'title_tag' );
// =============== .Wordpress titles


// =============== Featured images
add_theme_support( 'post-thumbnails' );
// =============== .Featured images


// =============== Email
function shortcode_adresse_email() {
  $adresse = explode('@', get_field('email', pll_current_language('slug')));
  $prefixe = $adresse[0];
  $suffixe = $adresse[1];
  $email = '
    <script type="text/javascript">
      function genereadresse(nom,reste) {
         document.write("<a href=" + "mail" + "to:" + nom + "@" + reste + ">" + nom + "@" + reste + "</a>")
      }
      genereadresse("' . $prefixe . '","' . $suffixe . '");
    </script>
  ';
  return $email;
}
add_shortcode('adresse-email', 'shortcode_adresse_email');
// =============== .Email




?>