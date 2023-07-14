<?php
/*Template Name: Spary Page */
get_header(); ?>

    <!--Page-Slider-->
    <div class="page-container">
        <div class="video-slider ">
        <?php
    $file = get_field('slider-video');
    if ($file) {
    echo '<video src="' . $file['url'] . '" autoplay muted loop></video>';
    }       ?>
            <p class="text-white  page-name"><?php echo get_the_title();?></p>
        </div>
    </div>

    <!--about-section-1-->
    <div class="about-section-1">

<div class="container-fluid about-section-one-main bg-light">
    <div class="container">

        <div class="row ">
            <h2 class="pt-5"><?php echo get_field("about-main-title")?></h2>
            <h5><?php echo get_field("about-main-subtitle")?></h5>
            <p><?php echo get_field("about-main-text")?></p>
        </div>
        <div class="row p-5 " style="height: 100%;">
            <div class="col-md-6">
                <h2><?php echo get_field("about-normal-title")?> </h2>
                <p><?php echo get_field("about-normal-text-1")?></p>
                <ul>
                    <li><?php echo get_field("about-normal-list-1")?></li>
                    <li><?php echo get_field("about-normal-list-2")?></li>
                </ul>
                <p><?php echo get_field("about-normal-text-2")?></p>
                <p><?php echo get_field("about-normal-text-3")?></p>

            </div>
            <div class="col-md-6 " style="height: 100%; display: flex; align-items: center;">
                <img src="<?php echo get_field("about-normal-image")?>"
                    class="card-img-top">
            </div>
        </div>
    </div>
</div>
</div>

   <!--contact-section-->
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

     
            <div class=" col-md-4 me-0 pe-0">
                <iframe
                    class='map'
                    src="<?php echo get_field("company-localtion-url")?>"
                    width="420" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="bg-dark align-center form-main  col-md-4 ms-0 ps-0">
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



<?php get_footer(); ?>