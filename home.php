<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>Dem.OH</h1>

      <div class="wrapper intro">
        <?php if( get_field('intro-title') ): ?>
            <h2 class="h4"><?php the_field('intro-title'); ?></h2>
        <?php endif; ?>

        <?php if( get_field('intro-text') ): ?>
            <h3><?php the_field('intro-text'); ?></h3>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>