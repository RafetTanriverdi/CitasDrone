<?php
/*Template Name: Contact Page */
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

    <!--contact-section-->
    <div class='contact-main-one'>
        <div class="container section-five-main py-5 ">
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
</div>
<!--faq -->
<div class="container mb-5">
    <div class="row text-center my-3">
        <h1>Sık Sorulan Sorular</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="accordion" id="accordionExample">
                <?php
                $args = array(
                    'post_type' => 'faqs',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $counter = 1;

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        if ($counter % 2 == 1) {
                            ?>
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>">
                                        <?php echo get_field("ask"); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse " aria-labelledby="heading<?php echo $counter; ?>"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo get_field("question"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            get_template_part('template-parts/content', 'right');
                        }
                        $counter++;
                    endwhile;
                else :
                    echo 'No posts found';
                endif;

                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="accordion" id="accordionExample1">
                <?php
                $args = array(
                    'post_type' => 'faqs',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $counter = 1;

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        if ($counter % 2 == 0) {
                            ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="false" aria-controls="collapse<?php echo $counter; ?>">
                                        <?php echo get_field("ask"); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $counter; ?>"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p><?php echo get_field("question"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            get_template_part('template-parts/content', 'left');
                        }
                        $counter++;
                    endwhile;
                else :
                    echo 'No posts found';
                endif;

                wp_reset_postdata();
                ?>
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