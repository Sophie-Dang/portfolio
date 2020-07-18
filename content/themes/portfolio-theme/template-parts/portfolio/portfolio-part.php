<?php 
    global $post;
    $post_slug = $post->post_name;
?>
<article class="portfolio-content fadInBottom">
    <a class="portfolio-content__img-link portfolio-link" href="<?= $post_slug ?>">
        <img  class="portfolio-content__img" src="<?= get_the_post_thumbnail_url() ?>" alt="">
    </a>
    <div class="portfolio-content__item">
        <h5 class="portfolio-content__title"><?= the_title() ?></h5>
        <p class="portfolio-content__texte"><?= the_excerpt() ?></p>
        <a href="<?= $post_slug ?>" class="portfolio-content__link portfolio-link">En savoir plus</a>
    </div>
</article>