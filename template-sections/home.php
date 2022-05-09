<section class="front-page">

<?php 

$slide1 = get_field('slide_1');
$slide_1_bg = $slide1['bg_slide_1'];
$slide_1_heading = $slide1['heading_slide_1'];
$slide_1_description = $slide1['description_slide_1'];
$slide_1_button_url = $slide1['button_url_slide_1'];
$slide_1_button_text = $slide1['button_text_slide_1'];

$slide2 = get_field('slide_2');
$slide_2_bg = $slide2['bg_slide_2'];
$slide_2_heading = $slide2['heading_slide_2'];
$slide_2_description = $slide2['description_slide_2'];
$slide_2_button_url = $slide2['button_url_slide_2'];
$slide_2_button_text = $slide2['button_text_slide_2'];


$slide3 = get_field('slide_3');
$slide_3_bg = $slide3['bg_slide_3'];
$slide_3_heading = $slide3['heading_slide_3'];
$slide_3_description = $slide3['description_slide_3'];
$slide_3_button_url = $slide3['button_url_slide_3'];
$slide_3_button_text = $slide3['button_text_slide_3'];



?>

<div class="sm-front">
    <div class="container-md d-flex justify-content-end align-items-end">
        <div class="col d-flex justify-content-end sm-row">
            <div class="sm-icons">
            <ul>
                        <li><a href="#">
                        <svg class="sm-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 39.811 39.81" style="enable-background:new 0 0 39.811 39.81;" xml:space="preserve">
                            <g>
                                <g id="XMLID_193_">
                                    <g id="XMLID_196_">
                                        <g id="XMLID_199_">
                                            <rect x="11.552" y="16.725" style="fill:#eed40c;" width="3.939" height="12.724"/>
                                        </g>
                                        <g id="XMLID_197_">
                                            <path style="fill:#eed40c;" d="M13.502,15.058c1.286,0,2.329-1.052,2.329-2.348s-1.042-2.347-2.329-2.347      c-1.287,0-2.329,1.051-2.329,2.347S12.215,15.058,13.502,15.058z"/>
                                        </g>
                                    </g>
                                    <g id="XMLID_194_">
                                        <path style="fill:#eed40c;" d="M21.786,22.769c0-1.789,0.823-2.854,2.4-2.854c1.448,0,2.144,1.023,2.144,2.854     c0,1.833,0,6.679,0,6.679h3.92c0,0,0-4.648,0-8.056c0-3.408-1.932-5.056-4.629-5.056c-2.699,0-3.834,2.102-3.834,2.102v-1.714     h-3.778v12.724h3.778C21.786,29.448,21.786,24.729,21.786,22.769z"/>
                                    </g>
                                </g>
                                    <g>
                                        <path style="fill:#eed40c;" d="M39.809,39.81H0V0.001h39.809V39.81z M1,38.81h37.809V1.001H1V38.81z"/>
                                    </g>
                                </g>
                            </svg>
                        
                        </a>
                        </li>
                        <li>
                        <a href="#">
                        <svg class="sm-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 39.811 39.81" style="enable-background:new 0 0 39.811 39.81;" xml:space="preserve">
                            <g>
                                <g id="XMLID_1_">
                                    <path style="fill:#eed40c;" d="M17.284,31.408h4.632V19.808h3.232l0.345-3.884h-3.577c0,0,0-1.45,0-2.212    c0-0.916,0.184-1.278,1.07-1.278c0.712,0,2.507,0,2.507,0V8.403c0,0-2.643,0-3.208,0c-3.447,0-5.001,1.518-5.001,4.424    c0,2.531,0,3.097,0,3.097h-2.41v3.933h2.41V31.408z"/>
                                </g>
                                <g>
                                    <path style="fill:#eed40c;" d="M39.811,39.81H0.002V0.001h39.809V39.81z M1.002,38.81h37.809V1.001H1.002V38.81z"/>
                                </g>
                            </g>
                        </svg>
                        </a>
                        </li>
                        </ul> 
                        <div class="find-us text-white">
                        znajdź nas
                        </div> 
                    </div>

        </div>
    </div>
</div>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" data-aos="fade">
    <div class="carousel-item active">
    <div class="carousel-content">
        <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h1><?php echo $slide_1_heading; ?></h1>
                        <p><?php echo $slide_1_description; ?></p>
                    </div>
                    <div>
                        <a href="<?php echo $slide_1_button_url; ?>">
                            <button class="custom-btn text-white"> 
                                <?php echo $slide_1_button_text; ?>
                            </button>
                        </a>
                    </div>

                    <div class="col-2">

                    </div>
                </div>
        </div>
      </div>
      <div class="container-fluid d-block w-100 h-100 slide-bg" style="background-image: url('<?php echo $slide_1_bg; ?>');"></div>
    </div>
    <div class="carousel-item">
    <div class="carousel-content">
        <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h1><?php echo $slide_2_heading; ?></h1>
                        <p><?php echo $slide_2_description; ?></p>
                    </div>
                    <div>
                        <a href="<?php echo $slide_2_button_url; ?>">
                            <button class="custom-btn text-white"> 
                                <?php echo $slide_2_button_text; ?>
                            </button>
                        </a>
                    </div>

                    <div class="col-2">
                    
                    </div>
                </div>
        </div>
      </div>
      <div class="container-fluid d-block w-100 h-100 slide-bg" style="background-image: url('<?php echo $slide_2_bg; ?>');"></div>
    </div>

    <div class="carousel-item">
    <div class="carousel-content">
        <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h1><?php echo $slide_3_heading; ?></h1>
                        <p><?php echo $slide_3_description; ?></p>
                    </div>
                    <div>
                        <a href="<?php echo $slide_3_button_url; ?>">
                            <button class="custom-btn text-white"> 
                                <?php echo $slide_3_button_text; ?>
                            </button>
                        </a>
                    </div>

                    <div class="col-2">

                    </div>
                </div>
        </div>
      </div>
      <div class="container-fluid d-block w-100 h-100 slide-bg" style="background-image: url('<?php echo $slide_3_bg; ?>');"></div>
    </div>

  </div>
</div>

</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>