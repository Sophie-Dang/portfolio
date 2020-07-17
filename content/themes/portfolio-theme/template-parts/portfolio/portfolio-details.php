<?php
global $post;
$post_slug = $post->post_name;

$project_url = get_field('site_link');
$other_image = get_field('other_image');
$more_text_title = get_field('more_text_title');
$more_text = get_field('more_text');
$video_url =  get_field('project_video');
?>
<!--Modal-->
<div id="<?= $post_slug ?>" class="modal-wrap ">
    <div class="modal">
        <span class="modal__icon remove"><i class="fa fa-times" aria-hidden="true"></i></span>
        <h4 class="modal__title"><?= the_title() ?></h4>

        <div class="modal-content">
            <div class="modal-row">
                <img class="modal-row__img" src="<?= $other_image['url'] ?>" alt="">
                <div class="modal-row__text">
                    <!-- <span class="txt-title">Projet de fin de formation</span> -->
                    <?= the_content() ?>
                </div>
            </div>

            <?php if (!empty($video_url) || !empty($more_text)) : ?>
                <div class="modal-row">
                    <iframe class="modal-row__img" height="315" src="<?= $video_url ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <div class="modal-row__text">

                        <?php if (!empty($more_text_title)) : ?>
                            <span class="txt-title"><?= $more_text_title ?></span>
                        <?php endif; ?>

                        <?= $more_text ?>

                    </div>
                </div>
            <?php endif; ?>

            <div class="modal-content__link">
                <a href="<?= $project_url ?>" target="_blank" class="btn-link modal-link">Voir le site</a>
            </div>
        </div>
    </div>
</div>