<?php get_header() ?>

<main class="main">

  <!--Header banner-->
  <?php get_template_part('template-parts/headerbann-part'); ?>

  <div>
    <!--Skills-->
    <?php get_template_part('template-parts/skills-part'); ?>

    <section id="portfolio" class="section-wrap">

      <h3 id="portfolio-title" class="section__title ">Projets</h3>
      <p class="section__subtitle ">Vous trouverez ici les projets personnels réalisés jusqu'à ce jour</p>
      <div class="portfolio-container">

        <?php
        $args = [
          'post_type' => 'project',
          'post_status' => 'publish'
        ];

        $the_query = new WP_Query($args); ?>

        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <?php get_template_part('template-parts/portfolio/portfolio-part'); ?>

        <?php endwhile;
        endif;
        wp_reset_query(); ?>

      </div>
    </section>
  </div>


  <!--Career-->
  <section id="career" class="section-wrap fadInBottom">
    <div class="career-content">
      <h3 class="section__title">Parcours</h3>
      <div class="career-items">
        <div class="career-items__link">
          <h6 id="education-link" class="link btn-link is-active">Formations</h6>
        </div>
        <div class="career-items__link">
          <h6 id="experience-link" class="link btn-link ">Expériences</h6>
        </div>
      </div>
    </div>

    <div class="career-wrap">
      <!--education-->
      <div id="education" class="career-container is-active">
        <div " class=" career-content is-active">
          <article class="textbloc">
            <div class="textbloc-container">
              <h3 class="textbloc__title">Formation Développeur web & web mobile</h3>
              <span class="textbloc__date">26 août 2019 - 6 février 2020</span>
              <ul class="textbloc__list">
                <li class="textbloc__list__item">
                  <a class="textbloc__link" href="https://oclock.io/" target="_blank">O’clock</a>
                </li>
                <li class="textbloc__list__item">Format télé-présentiel, 700h intensives :</li>
                <li class="textbloc__list__item">3 mois de socle</li>
                <li class="textbloc__list__item">1 mois de spécialisation Wordpress</li>
                <li class="textbloc__list__item">1 mois de projet en groupe et en autonomie</li>
              </ul>
            </div>
          </article>

          <article class="textbloc">
            <div class="textbloc-container">
              <h3 class="textbloc__title">Parcours</h3>
              <span class="textbloc__date">Avril 2019 - Avril 2020</span>
              <ul class="textbloc__list">
                <li class="textbloc__list__item">
                  <a class="textbloc__link" href="http://www.seineouest-entreprise.com/" target="_blank">Mission locale Seine Ouest Entreprise et emploi
                  </a>
                </li>
                <li class="textbloc__list__item">92100, Boulogne-Billancourt</li>
                <li class="textbloc__list__item">Accompagnement et accès à l'emploi et à la formation</li>
              </ul>
            </div>
          </article>

          <article class="textbloc">
            <div class="textbloc-container">
              <h3 class="textbloc__title">Formation Stylisme & Modélisme</h3>
              <span class="textbloc__date">2016 - 2017</span>
              <p class="textbloc__text">
                <a class="textbloc__link" href="https://www.studiomode.fr/" target="_blank">Studio Mode Paris</a>
              </p>
            </div>
          </article>

          <article class="textbloc">
            <div class="textbloc-container">
              <h3 class="textbloc__title">Mise à Niveau aux Arts Appliqués (MANAA)</h3>
              <span class="textbloc__date">2015 - 2016</span>
              <p class="textbloc__text">
                <a class="textbloc__link" href="https://ecoles-conde.com/" target="_blank">Ecole de Condé Paris</a>
              </p>
            </div>
          </article>

        </div>
      </div>

      <!--experience-->
      <div id="experience" class="career-container">
        <div class="career-content">
          <article class="textbloc">
            <div class="textbloc-container">
              <h3 class="textbloc__title">Stage Développeur web fullstack</h3>
              <span class="textbloc__date">16 mars 2020 - 16 septembre 2020</span>
              <ul class="textbloc__list">
                <li class="textbloc__list__item">
                  <a class="textbloc__link" href="https://stevegates.co/" target="_blank">Steve Gates</a>
                </li>
                <li class="textbloc__list__item">Participation à l'élaboration de sites web vitrine, e-commerce et sites plus spécifiques, autant en front qu'en back</li>
                <li class="textbloc__list__item"><span class="text-bold">Technos utilisées :</span> HTML, CSS, PHP, Smarty, Javascript/ jQuery, MySQL, Wordpress, Prestashop</li>
              </ul>
            </div>
          </article>

          <article class="textbloc">
            <div class="textbloc-container">
              <h3 class="textbloc__title">Vendeuse en prêt à porter</h3>
              <span class="textbloc__date">Juin 2019 - Juillet 2019</span>
              <ul class="textbloc__list">
                <li class="textbloc__list__item">
                  <a class="textbloc__link" href="https://www.promod.fr/nos-boutiques/Montparnasse-121.html" target="_blank">Promod Montparnasse
                  </a>
                </li>
                <li class="textbloc__list__item">Mise en rayon, étiquetage, conseil vente, accueil clientèle, réassort, traitement de la marchandise, entretien du magasin, encaissement</li>
              </ul>
            </div>
          </article>

          <article class="textbloc">
            <div class="textbloc-container">
              <h3 class="textbloc__title">Stagiaire costumière</h3>
              <span class="textbloc__date">Avril 2017 - Mai 2017</span>
              <!-- <p class="textbloc__text">
                <a class="textbloc__link" href="https://www.facebook.com/Decaurdesignandco-880035208735852/" target="_blank">Decaur Design & co</a>
              </p> -->
              <ul class="textbloc__list">
                <li class="textbloc__list__item">
                  <a class="textbloc__link" href="https://www.facebook.com/Decaurdesignandco-880035208735852/" target="_blank">Decaur Design & co</a>
                </li>
                <li class="textbloc__list__item">Réalisation d'une robe de cérémonie, recherche et commande des matières premières, patronage, couture machine, couture main</li>
              </ul>
            </div>
          </article>

        </div>
      </div>
    </div>

    <div class="cv-pdf-link">
      <a href="<?= get_theme_file_uri('public/images/CV_Sophie_DANG.pdf') ?>" target="_blank">Voir le CV</a>
    </div>
  
  </section>

  <!--Presentation-->
  <section id="presentation" class="div-wrap" style="background-image: url(<?= get_theme_file_uri('public/images/bann-light-xl-dark.png') ?>);">
    <div id="presentation-container" class="presentation-container fadInBottom">
      <div class="presentation-content">
        <h3 class="section__title">Qui suis-je ?</h3>
        <p class="presentation-content__text">
          <span class="br">
            <i class="fa fa-flag" aria-hidden="true"></i>
            Au départ, j'étais partie pour des études en art...
          </span>
          J'ai donc fait une Mise à Niveau aux Arts Appliqués (MANAA), dans laquelle je me suis rendue compte que la couture me fascinait. Eh bien soit ! J'ai donc commencé la mode en Stylisme & Modélisme ! Tout ne s'est pas passé comme prévu, je fus obligée de quitter, mais la passion reste là.

          <span class="br">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            Et le dev dans tout ça ?
          </span>
          Vous l'aurez compris, je suis en reconversion. Je ne pensais pas atterrir là mais me voilà ! Mes premières lignes de code ? Pour mon blog mode ! C'était génial, archi cool même ! Une nouvelle passion est alors née. Et du coup me voilà, formation en poche avec spécialisation au CMS WordPress, pleine de joie à l'idée de faire vivre tous pleins de projets grâce à la programmation :D

          <span class="br">
            <i class="fa fa-map-pin" aria-hidden="true"></i>
            Mes objectifs ?
          </span>
          Un CDD ou un CDI, qui me permettrait de partager mes compétences, les level up, en apprendre de nouvelles, et faire de nouvelles rencontres !
        </p>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>