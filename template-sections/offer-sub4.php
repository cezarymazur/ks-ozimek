<section class="offer-sub1">

<?php 

/* ACF */



?>

<div class="container">
    <div class="row">
        <div class="col text-white pt-0">
            <div class="full-width-image pos-4 py-5 ps-5 ms-n4" style="background-image: url('<?php the_field('bg_photo'); ?>');">
                <div class="section-heading big-heading ms-n4 mt-4">
                    <?php the_field('heading'); ?>
                </div>
                <p class="col-12 col-lg-5 mt-4 mb-5">
                    <?php the_field('text'); ?>
                </p>
                <a href="<?php the_field('button_url_1'); ?>"><button class="custom-btn text-white my-4"><?php the_field('button_1'); ?></button></a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col mt-4">
            <p class="mt-4"><?php the_field('text_2'); ?></p>
        </div>
    </div>
</div>

<div class="container mt-n5">
    <div class="row">
        <div class="col-12 col-lg-6 text-center">
            <img class="p-5" src="<?php the_field('real_photo_1'); ?>" />
            <p class="mt-n5"><?php the_field('real_desc_1'); ?></p>
        </div>

        <div class="col-12 col-lg-6 text-center">
            <img class="p-5" src="<?php the_field('real_photo_2'); ?>" />
            <p class="mt-n5"><?php the_field('real_desc_2'); ?></p>
        </div>

        <div class="col-12 col-lg-6 text-center">
            <img class="p-5" style="max-width: 400px;" src="<?php the_field('real_photo_3'); ?>" />
            <p class="mt-n4"><?php the_field('real_desc_3'); ?></p>
        </div>

        <div class="col-12 col-lg-6 text-center">
            <img class="p-5" style="max-width: 400px;" src="<?php the_field('real_photo_4'); ?>" />
            <p class="mt-n4"><?php the_field('real_desc_4'); ?></p>
        </div>


    </div>
</div>


<div class="container">
    <div class="row d-flex align-items-center my-5">
        <div class="col d-flex">
            <div class="text-uppercase left-big-separator">
                <strong><?php the_field('text_3'); ?></strong>
            </div>
        </div>
        <div class="col d-flex justify-content-end">
            <div>
                <a href="<?php the_field('button_url_2'); ?>"><button class="custom-btn "><?php the_field('button_2'); ?></button></a>
                <a href="<?php the_field('button_url_3'); ?>"><button class="custom-btn ms-lg-4 ms-0 mt-4 mt-lg-0"><?php the_field('button_3'); ?></button></a>
            </div>
        </div>
    </div>
</div>


</section>