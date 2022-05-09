<section class="company">

<div class="container mb-5">
    <div class="row g-5">
        <div class="col-lg-6">

            <div class="section-heading big-heading">
            <?php the_field('heading_1'); ?>
            </div>

            <div class="my-4">
            <?php the_field('text_1'); ?>
            </div>

            <div>
                <a href="<?php the_field('button_top_url_1'); ?>"><button class="custom-btn "><?php the_field('button_top_1'); ?></button></a>
                <a href="<?php the_field('button_top_url_2'); ?>"><button class="custom-btn ms-sm-5 mt-2"><?php the_field('button_top_2'); ?></button></a>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="company-top-image" style="background-image: url('<?php the_field('photo_top'); ?>');"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col text-white pt-4">
            <div class="full-width-image pos-1 py-5 ps-5 ms-n4" style="background-image: url('<?php the_field('banner_1_photo'); ?>');">
                <div class="section-heading big-heading my-3">
                    <?php the_field('banner_1_text'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col my-5">
         <?php the_field('section_2_tekst'); ?>
            <a href="<?php the_field('button_top_url_3'); ?>"><button class="custom-btn mt-5"><?php the_field('button_top_3'); ?></button></a>

        </div>
    </div>
</div>

<div class="container text-white">
    <div class="row">
        <div>
            <div class="full-width-image pos-1 py-3 px-5 ms-n4 d-flex" style="background-image: url('<?php the_field('banner_2_photo'); ?>');">
                <div class="col-12 col-lg-10 section-heading small-heading">
                    <?php the_field('banner_2_text'); ?>
                </div>
                <div class="col-2 m-auto text-end d-none d-lg-block"><img src="http://localhost:8888/ks-ozimek/wp-content/uploads/2021/08/Logo-white.png" /></div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row d-flex">
        <div class="col-lg-10 pt-5 pb-4">

            <div class="section-heading big-heading">
                <?php the_field('heading_2'); ?>
            </div>

        </div>

        <div class="col-lg-2 tex-end m-auto">
            <img src="<?php the_field('photo_25_years'); ?>" />
        </div>

        <div class="row">
            <div class="col">
                <?php the_field('text_2'); ?>
            </div>
        </div>

        <div class="row d-flex">
                <div class="col-12 col-lg-4 py-2">
                    <a href="<?php the_field('button_top_url_4'); ?>"><button class="custom-btn"><?php the_field('button_top_4'); ?></button></a>
                </div>
                <div class="col-12 col-lg-8 m-auto text-end py-2">
                <div class="text-thick-border-right"><strong><?php the_field('text_3'); ?></strong></div>
                </div>
            </div>
    </div>
</div>

<div class="container text-white">
    <div class="row">
        <div>
            <div class="full-width-image pos-2 py-5 px-5 ms-n4 d-flex" style="background-image: url('<?php the_field('banner_3_photo'); ?>');">
                <div class="col-12 col-lg-10 m-auto section-heading small-heading">
                    <?php the_field('banner_3_text'); ?>
                </div>
                <div class="col-2 m-auto text-end d-none d-lg-block"><img src="<?php the_field('white_logo_banner'); ?>" /></div>
            </div>
        </div>
    </div>
</div>


</section>