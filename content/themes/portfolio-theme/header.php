<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sophie Dang - Développeuse web fullstack avec spécialisation au CMS Wordpress">
  <?php wp_head(); ?>
</head>
<body>
  
  <header class="header">
    <nav class="nav">
      <ul class="nav-list">
        <!--------------------->
        <li class="nav-list__item">
          <a href="#head" class="nav-link">Contact</a>
        </li>
        <!--------------------->
        <li class="nav-list__item">
          <a href="#skills-wrap" class="nav-link">Compétences</a>
        </li>
        <!--------------------->
        <li class="nav-list__item">
          <a href="#portfolio-title" class="nav-link">Projets</a>
        </li>
        <!--------------------->
        <li class="nav-list__item">
          <a href="#career" class="nav-link">Parcours</a>
        </li>
        <!--------------------->
        <li class="nav-list__item">
          <a href="#presentation-container" class="nav-link">A propos</a>
        </li>
        <!--------------------->
      </ul>
      <a class="nav-link burger">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>
      <a class="nav-link remove">
        <i class="fa fa-times" aria-hidden="true"></i>
      </a>
    </nav>
  </header>