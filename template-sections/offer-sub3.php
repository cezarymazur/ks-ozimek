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
                <a href="<?php the_field('button_url_1'); ?>"><button class="custom-btn text-white mb-4"><?php the_field('button_1'); ?></button></a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col my-4 yellow-points">
            <?php the_field('text_2'); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row d-flex flex-md-wrap">

    <div class="col-md d-flex m-1 text-white text-center p-5 photo-item-box" style="background-image: url('<?php the_field('real_photo_1'); ?>'); ">
            <div class="col align-self-center photo-item-desc"><?php the_field('real_desc_1'); ?></div>
        </div>

        <div class="col-md d-flex m-1 text-white text-center p-5 photo-item-box" style="background-image: url('<?php the_field('real_photo_2'); ?>'); ">
            <div class="col align-self-center photo-item-desc"><?php the_field('real_desc_2'); ?></div>
        </div>

        <div class="col-md d-flex m-1 text-white text-center p-5 photo-item-box" style="background-image: url('<?php the_field('real_photo_3'); ?>'); ">
            <div class="col align-self-center photo-item-desc"><?php the_field('real_desc_3'); ?></div>
        </div>

    </div>

    <div class="row d-flex flex-md-wrap">

    <div class="col-md d-flex m-1 text-white text-center p-5 photo-item-box" style="background-image: url('<?php the_field('real_photo_4'); ?>'); ">
            <div class="col align-self-center photo-item-desc"><?php the_field('real_desc_4'); ?></div>
        </div>

        <div class="col-md d-flex m-1 text-white text-center p-5 photo-item-box" style="background-image: url('<?php the_field('real_photo_5'); ?>'); ">
            <div class="col align-self-center photo-item-desc"><?php the_field('real_desc_5'); ?></div>
        </div>

        <div class="col-md d-flex m-1 text-white text-center p-5 photo-item-box" style="background-image: url('<?php the_field('real_photo_6'); ?>'); ">
            <div class="col align-self-center photo-item-desc"><?php the_field('real_desc_6'); ?></div>
        </div>

    </div>
    
</div>


<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-end my-3">
            <div>
            <a href="<?php the_field('button_url_2'); ?>"><button class="custom-btn "><?php the_field('button_2'); ?></button></a>
            <a href="<?php the_field('button_url_3'); ?>"><button class="custom-btn ms-sm-4 mt-2"><?php the_field('button_3'); ?></button></a>
            </div>
        </div>
    </div>
</div>


</section>