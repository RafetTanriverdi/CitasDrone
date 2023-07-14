<?php
/*Template Name: Home Page */
get_header(); ?>

<!--Slider-->
<div class="slide-container">
    <div class="video-slider">
    <?php
    $file = get_field('slider-video');
    if ($file) {
    echo '<video src="' . $file['url'] . '" autoplay muted loop></video>';
    }       ?>
    <div class="slide-body">
            <p class=" text-white text-uppercase"><?php echo get_field("homeslider-title")?></p>
            <a class="btn btn-outline-success btn-lg " type="button" href="<?php echo get_field("homeslider-button-target")?>" style="color: white;"><?php echo get_field("homeslider-button-text")?></a>
        </div>
    </div>
</div>

<!--section-1-->
<div class="section-1">
    <div class="container section-one-main">
        <div class="row">
            <div class="col-md-4">
            <video class="slow-video" src="<?php echo get_field("homesevicevideo-1")?>" 
                autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
                <h2 class="text-center"><?php echo get_field("homeservicetitle-1")?></h2>
                <p class="text-center"><?php echo get_field("homeservicestext-1")?></p>
            </div>
            <div class="col-md-4 middle" >
            <video class="slow-video" src="<?php echo get_field("homesevicevideo-2")?>" 
                autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
                <h2 class="text-center"><?php echo get_field("homeservicetitle-2")?></h2>
                <p class="text-center"><?php echo get_field("homeservicestext-2")?></p>
            </div>
            <div class="col-md-4   ">
            <video class="slow-video" src="<?php echo get_field("homesevicevideo-3")?>" 
                autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
                <h2 class="text-center"><?php echo get_field("homeservicetitle-3")?></h2>
                <p class="text-center"><?php echo get_field("homeservicestext-3")?></p>
            </div>
        </div>
    </div>
</div>
<!--Section 2 info-->

<div class="container-fluid section-two-main">
    <div class="row justify-content-center">
        <div class="col-md-4 m-5 text-white txt-left">
            <h3><?php echo get_field("home-sc2-left-title-1")?></h3>
            <h1> <?php echo get_field("home-sc2-left-title-2")?></h1>
            <h4><?php echo get_field("home-sc2-left-title-3")?></h4>
            <a class="btn btn-outline-success" href='<?php echo get_field("home-sc2-button-page")?>'><?php echo get_field("home-sc2-button-text")?></a>
        </div>
        <div class="col-md-6 m-5 text-white">
            <h3><?php echo get_field("home-sc2-right-title-1")?></h3>
            <p><?php echo get_field("home-sc2-right-text-1")?></p>

            <h3><?php echo get_field("home-sc2-right-title-2")?></h3>
            <p><?php echo get_field("home-sc2-right-text-2")?></p>

        </div>
    </div>
</div>

<!--section-3-social-media-->

<div class="container-fluid section-three-main">
    <div class="row">
        <div class="imgBorder">
            <img src="<?php echo get_field("followsectionfullimage")?>">
        </div>
        <div class="card  mb-3 card-main" style="max-width: 18rem;">
            <div class="card-body">
                <div class="socail-media">
                    <i class="bi bi-instagram"></i>
                    <h1 class="card-title text-white"><?php echo get_field("followcardtitle")?></h1>
                </div>
                <p class="text-white"><?php echo get_field("followcardtext")?></p>
                <a class="btn btn-outline-light  justify-content-end" href="<?php echo get_field("followbuttontargetlink")?>"> <?php echo get_field("followbuttontext")?></a>
            </div>
        </div>
    </div>
</div>

<!-- section-4 saying-->

<div class="container-fluid bg-dark ">
    <div class="container ml-5 py-5 ">
        <div class="row ">
            <div class="col-md-12 text-white pb-3">
                <h1><?php echo get_field("company-goals-title")?></h1>
            </div>
        </div>
        <div class="row justify-content-between mobile-card-column ">

            <div class="col-md-4   ">
                <div class="card bg-light" style="width: 20rem;">
                    <div class="card-body">
                        <p class="card-text"><?php echo get_field("company-goals-card-text-1")?></p>
                        <a href="<?php echo get_field("company-goals-card-link-1")?>" class="card-link"><?php echo get_field("company-goals-card-link-text-1")?></a>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo get_field("company-goals-card-subtitle-1")?></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4   ">
                <div class="card bg-light" style="width: 20rem;">
                    <div class="card-body">
                        <p class="card-text"><?php echo get_field("company-goals-card-text-2")?></p>
                        <a href="<?php echo get_field("company-goals-card-link-2")?>" class="card-link"><?php echo get_field("company-goals-card-link-text-2")?></a>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo get_field("company-goals-card-subtitle-2")?></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4   ">
                <div class="card bg-light" style="width: 20rem;">
                    <div class="card-body">
                        <p class="card-text"><?php echo get_field("company-goals-card-text-3")?></p>
                        <a href="<?php echo get_field("company-goals-card-link-3")?>" class="card-link"><?php echo get_field("company-goals-card-link-text-3")?></a>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo get_field("company-goals-card-subtitle-3")?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Sectıon-5 contact mini -->

<div class="container section-five-main my-5">
    <div class="row">
        <div class="col-md-4">
            <h2><?php echo get_field("contact-left-title")?></h2>

            <h4><?php echo get_field("contact-left-subtitle-1")?></h4>
            <p><?php echo get_field("contact-left-text-1")?></p>

            <h4><?php echo get_field("contact-left-subtitle-2")?></h4>
            <p><?php echo get_field("contact-left-text-2")?></p>

            <h4><?php echo get_field("contact-left-socialmedia-title")?></h4>
            <div class="icon">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-whatsapp"></i>
            </div>
        </div>

     
            <div class=" col-md-4 me-0 pe-0  map-container">
                <iframe
                    class='map'
                    src="<?php echo get_field("company-localtion-url")?>"
                    width="420" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="bg-dark align-center form-main  col-md-4 ms-0 ps-0 form-container ">
                <div class="p-5" >    
                    <div>

                        <h2 class="text-white"><?php echo get_field("contact-form-title")?></h2>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-white"><?php echo get_field("contact-form-name-username")?></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-white"><?php echo get_field("contact-form-email")?></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                       >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-white"><?php echo get_field("contact-form-massage")?></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <Button class="btn btn-success">
                            <?php echo get_field("contact-form-submit-button")?>
                            </Button>
                        </div>
                    </div>
                </div>
                
            </div>
    </div>
</div>



<?php get_footer(); ?>