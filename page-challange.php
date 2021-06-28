<?php get_header();?>

<main>
    <section class="contact__section">
      <div class="contact__section-container">
        <div class="contact__section-photo">
          <img class="contact__section-img" src="<?php echo get_theme_file_uri('/assets/images/Karolina-trenerka.jpg') ?>"alt="Zdjęcie Karoliny Szymkowicz">
        </div>

        <div class="contact__section-box flex-column">
          <h1 class="contact__section-heading challange-heading">Wyzwanie</h1>
          <p class="contact__section-text">To jest nowe wzywanie
          </p>
          <div><?php the_content (); ?></div>
        </div>
      </div>
    </section>
    <div class="section__instagram-container padding-top">
      <h2 class="section__instagram-heading">Instagram</h2>
    <?php echo do_shortcode('[instagram-feed]'); ?></div>
</main>

<?php get_footer();?>
