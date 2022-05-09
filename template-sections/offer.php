<section class="offer">

<?php 

/* ACF */



?>

<div class="container">
    <div class="row">
        <div class="col text-white pt-4">
            <div class=" row full-width-image pos-2 py-5 ps-5 ms-n4" style="background-image: url('<?php the_field('banner_1_photo'); ?>');">
                <div class="my-3 col-lg-6">
                    <div class="section-heading big-heading">
                        <?php the_field('banner_1_text'); ?>
                    </div>
                </div>
                <div class="col-lg-6 text-white">
                    <div class="offer-catalogue d-flex">

                    <div class="col text-end catalogue-heading">
                            <?php the_field('banner_3_text'); ?>
                        <div>
                            <i class="bi bi-arrow-right-short"></i>
                            <a href="<?php the_field('button_top_url_6'); ?>"><button class="custom-btn"><?php the_field('button_top_6'); ?></button></a>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="container mb-5 my-4">
    <div class="row">
        <div class="col">
            <p>
             <?php the_field('text_1'); ?>
            </p>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-lg-6">

            <div>
                <p>
                    <?php the_field('text_2'); ?>
                </p>
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
            <div class="full-width-image pos-3 py-5 ps-5 ms-n4" style="background-image: url('<?php the_field('banner_2_photo'); ?>');">
                <div class="section-heading big-heading my-3">
                    <?php the_field('banner_2_text'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col my-5">
            <p>
                <?php the_field('text_3'); ?>
            </p>

            <!-- <table class="offer-table">
                <tr>
                    <td>Ramy fundamentowe</br>pod maszyny i urządzenia</td>
                    <td>Łoża maszyn<br/>ze zintegrowanymi<br />zbiornikami oleju lub bez</td>
                    <td>Stojaki, statywy</td>
                    <td>Elementy konstrukcji<br/>wsporczych reklam<br/>i billboardów</td>
                    <td>Elementy stalowe<br/>konstrukcji: wind,<br/>wyciągów, taśmociągów</td>
                </tr>
                <tr>
                    <td>Maszty, słupy,</br>dźwigary, przęsła</td>
                    <td>Kompletne konstrukcje</br>stalowe hal przemysłowych,<br/>magazynów, itp</td>
                    <td>Silosy na materiały<br/>sypkie dla branż:<br/>budowniczej, rolnej<br/>i przemysłu</td>
                    <td>Silosy przeznaczone<br/>dla działalności związanej<br/>z ochroną środowiska,<br/>na szlamy i inne odpady<br/>poprodukcyjne</td>
                    <td>Kontenery</td>
                </tr>
            </table> -->

            <div>
                <a href="<?php the_field('button_top_url_3'); ?>"><button class="custom-btn "><?php the_field('button_top_3'); ?></button></a>
                <a href="<?php the_field('button_top_url_4'); ?>"><button class="custom-btn ms-sm-5 mt-2"><?php the_field('button_top_4'); ?></button></a>
            </div>

        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row d-flex">
        <div class="col-lg-6 col-12">

            <div class="section-heading big-heading mb-4" >
                <?php the_field('heading_1'); ?>
            </div>
            <p>
                <?php the_field('text_4'); ?>
            </p>
                <div class="bordered-text mt-4 mb-3">
                    <?php the_field('text_sep_1'); ?>
                </div>
                <div class="bordered-text mt-4 mb-3">
                    <?php the_field('text_sep_2'); ?>
                </div>
                <div class="bordered-text mt-4 mb-3">
                    <?php the_field('text_sep_3'); ?>
                </div>
                <a href="<?php the_field('button_top_url_5'); ?>"><button class="custom-btn mt-5 mb-4"><?php the_field('button_top_5'); ?></button></a>
        </div>
        <div class="col-lg-6 text-white">
            <div class="offer-catalogue d-flex align-items-end p-4" style="background-image: url('<?php the_field('banner_3_photo'); ?>');">

            <!-- <div class="col-12 text-end catalogue-heading">
                    <?php the_field('banner_3_text'); ?>
                <div>
                    <i class="bi bi-arrow-right-short"></i>
                    <a href="<?php the_field('button_top_url_6'); ?>"><button class="custom-btn"><?php the_field('button_top_6'); ?></button></a>
                </div>
            </div> -->
        </div>
               
            
    </div>
</div>

</section>