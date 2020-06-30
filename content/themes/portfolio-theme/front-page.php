<?php get_header() ?>

<main class="main">
  <!--Head-->
  <section id="head" class="section-wrap" style="background-image: url('<?= get_theme_file_uri('public/images/bann-light-xl.png')?>');">
    <div class="head-content img">
      <img src="<?= get_theme_file_uri('public/images/IMG_51c75pp2.jpg')?>" alt="image de profil" class="head-img">
    </div>
    <div class="head-content text">
      <h2 class="head-content__subtitle">Sophie Dang</h2>
      <h1 class="head-content__title">Developpeuse web</h1>

      <address class="head-content-address">
        <a href="mailto:sophie.dang.kieuduyen@gmail.com" class="head-content-address__mail">sophie.dang.kieuduyen@gmail.com</a>
      </address>

      <div class="head-social-container">
        <a class="head-social__link" href="#">
          <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
        <a class="head-social__link" href="#">
          <i class="fa fa-github" aria-hidden="true"></i>
        </a>
      </div>

    </div>
  </section>

  <!--Skills-->
  <section id="skills">
    <div id="skills-wrap" class="content-container fadInBottom">
      <h3 class="section__title">Compétences</h3>
      <div class="skills-container">
        <div class="skills-content">
          <h6 class="skills-content__title">Je parle le ...</h6>
          <div class="skills-content__items">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/html5-logo.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/CSS3-logo.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/js-logo-squarre.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/html5-logo.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/CSS3-logo.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/js-logo-squarre.png')?>" alt="html5-logo">
          </div>
        </div>

        <div class="skills-content">
          <h6 class="skills-content__title">Je m'aide de ...</h6>
          <div class="skills-content__items">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/html5-logo.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/CSS3-logo.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/js-logo-squarre.png')?>" alt="html5-logo">
          </div>
        </div>

        <div class="skills-content">
          <h6 class="skills-content__title">Des notions en ...</h6>
          <div class="skills-content__items">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/html5-logo.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/CSS3-logo.png')?>" alt="html5-logo">
            <img class="img-thumbnail" src="<?= get_theme_file_uri('public/images/js-logo-squarre.png')?>" alt="html5-logo">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="section-wrap">
    <h3 id="portfolio-title" class="section__title ">Projets</h3>
    <p class="section__subtitle ">Vous trouverez ici les projets personnels réalisés jusqu'à ce jour</p>
    <div class="portfolio-container">

      <article class="portfolio-content fadInBottom">
        <a class="portfolio-content__img-link portfolio-link" href="petsbook">
          <img  class="portfolio-content__img" src="<?= get_theme_file_uri('public/images/petsbook-logo-w.png')?>" alt="">
        </a>
        <div class="portfolio-content__item">
          <h5 class="portfolio-content__title">Petsbook</h5>
          <p class="portfolio-content__texte">Site permettant d'immortaliser le quotidien de ses animaux</p>
          <a href="petsbook" class="portfolio-content__link portfolio-link">En savoir plus</a>
        </div>
      </article>

      <article class="portfolio-content fadInBottom">
        <a class="portfolio-content__img-link portfolio-link" href="cv">
          <img  class="portfolio-content__img" src="<?= get_theme_file_uri('public/images/bann-light-l.png')?>" alt="">
        </a>
        <div class="portfolio-content__item">
          <h5 class="portfolio-content__title">Mon site CV</h5>
          <p class="portfolio-content__texte">Il s'agit du site sur lequel vous êtes actuellement</p>
          <a href="cv" class="portfolio-content__link portfolio-link">En savoir plus</a>
        </div>
      </article>

    </div>
  </section>

  <!--Career-->
  <section id="career" class="section-wrap fadInBottom" >
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
        <div " class="career-content is-active">
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
        <div  class="career-content">
          <article class="textbloc">
            <div class="textbloc-container">
              <h3 class="textbloc__title">Stage Développeur web fullstack</h3>
              <span class="textbloc__date">26 août 2019 - 6 février 2020</span>
              <ul class="textbloc__list">
                <li class="textbloc__list__item">
                  <a class="textbloc__link" href="https://oclock.io/" target="_blank">Steve Gates</a>
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
    </div>
  </section>
  
  <!--Presentation-->
  <section id="presentation" class="div-wrap" style="background-image: url(<?= get_theme_file_uri('public/images/bann-light-xl-dark.png')?>);">
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
          Un stage ou un CDI, qui me permettrait de partager mes compétences, les level up, en apprendre de nouvelles, et faire de nouvelles rencontres !
        </p>
      </div>
    </div>
  </section>
</main>
  <?php get_footer() ?>
  