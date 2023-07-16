<?php
/*Template Name: Sales Page */
get_header(); ?>

<!--Page-Slider-->
<div class="page-container ">
    <div class="video-slider ">
    <?php
    $file = get_field('slider-video');
    if ($file) {
    echo '<video src="' . $file['url'] . '" autoplay muted loop></video>';
    }       ?>
        <p class="text-white  page-name"><?php echo get_the_title(); ?></p>
    </div>
</div>

<!--product-section-->

<?php


$counter = 0;

$args = array(
    'post_type' => 'Drones',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
        $counter++;

        if ($counter % 2 == 1) {

            ?>
            <div class="container-fluid product-section-main ">
            <div class="picture-main container my-2">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-8">
                        <h1><?php the_title(); ?> </h1>
                        <p><?php echo get_field("drone-text-1")?></p>
                        <p><?php echo get_field("drone-text-2")?></p>
                        <p><?php echo get_field("drone-text-3")?></p>
                        <p><?php echo get_field("drone-advantage-list-title")?></p>
                        <ul>
                            <li><?php echo get_field("drone-list-item-1")?></li>
                            <li><?php echo get_field("drone-list-item-2")?></li>
                            <li><?php echo get_field("drone-list-item-3")?></li>
                            <li><?php echo get_field("drone-list-item-4")?>.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div id="myCarousel" class="image-container" >
                    
                    <img src="<?php echo get_field("drone-image")?>" ></div>
                        <p class="text-center my-2"><?php the_title(); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark element">
    <div class="container">
        <div class="row d-flex justify-content-center align-center py-4">
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-activity fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-1")?></p>
            </div>
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-battery-charging fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-2")?></p>
            </div>
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-bar-chart fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-3")?></p>
            </div>
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-flower1 fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-4")?></p>
            </div>
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-graph-up-arrow fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-5")?></p>
            </div>

        </div>

    </div>
</div>

<?php
            // çift numaralı postlar için tasarım (örneğin, sağda)
            get_template_part('template-parts/content', 'right');
        } else {
?>
           <div class="container-fluid product-section-main">
            <div class="picture-main container my-2">
                <div class="row d-flex justify-content-between">
                <div class="col-lg-4">
                        <div id="myCarousel" class="image-container" >
                    
                    <img src="<?php echo get_field("drone-image")?>" ></div>
                     
                        <p class="text-center my-2"><?php the_title(); ?></p>
                    </div>
                    <div class="col-lg-8">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo get_field("drone-text-1")?></p>
                        <p><?php echo get_field("drone-text-2")?></p>
                        <p><?php echo get_field("drone-text-3")?></p>
                        <p><?php echo get_field("drone-advantage-list-title")?></p>
                        <ul>
                            <li><?php echo get_field("drone-list-item-1")?></li>
                            <li><?php echo get_field("drone-list-item-2")?></li>
                            <li><?php echo get_field("drone-list-item-3")?></li>
                            <li><?php echo get_field("drone-list-item-4")?>.</li>
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark element">
    <div class="container">
        <div class="row d-flex justify-content-center align-center py-4">
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-activity fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-1")?></p>
            </div>
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-battery-charging fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-2")?></p>
            </div>
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-bar-chart fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-3")?></p>
            </div>
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-flower1 fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-4")?></p>
            </div>
            <div class="col-sm-2 text-center text-white ">
                <i class="bi bi-graph-up-arrow fs-1"></i>
                <p class="fs-6"><?php echo get_field("drone-black-feature-5")?></p>
            </div>

        </div>

    </div>
</div>
<?php
            // tek numaralı postlar için tasarım (örneğin, solda)
            get_template_part('template-parts/content', 'left');
        }
    endwhile;
else :
    echo 'No posts found';
endif;

wp_reset_postdata();

?>


<!--table section-->

<div class="container">
    <div class="row d-flex justify-content-center py-5">
        <div class="col-md-10">
            <table class="table table-striped border text-center">
                <thead>
                    <tr>
                        <?php
                        $args = array(
                            'post_type' => 'Drones',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC'
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) : 
                            while ($query->have_posts()) : 
                                $query->the_post(); ?>
                                <th><?php the_title(); ?></th>
                        <?php
                            endwhile; 
                        endif;
                        wp_reset_postdata(); 
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $args = array(
                            'post_type' => 'Drones',
                            'posts_per_page' => -1
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) : 
                            while ($query->have_posts()) : 
                                $query->the_post(); ?>
                                <td><?php echo get_field("drone-black-feature-1"); ?></td>
                        <?php
                            endwhile; 
                        endif;
                        wp_reset_postdata(); 
                        ?>
                    </tr>
                    <tr>
                        <?php
                        $args = array(
                            'post_type' => 'Drones',
                            'posts_per_page' => -1
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) : 
                            while ($query->have_posts()) : 
                                $query->the_post(); ?>
                                <td><?php echo get_field("drone-black-feature-2"); ?></td>
                        <?php
                            endwhile; 
                        endif;
                        wp_reset_postdata(); 
                        ?>
                    </tr>
                    <tr>
                        <?php
                        $args = array(
                            'post_type' => 'Drones',
                            'posts_per_page' => -1
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) : 
                            while ($query->have_posts()) : 
                                $query->the_post(); ?>
                                <td><?php echo get_field("drone-black-feature-3"); ?></td>
                        <?php
                            endwhile; 
                        endif;
                        wp_reset_postdata(); 
                        ?>
                    </tr>
                    <tr>
                        <?php
                        $args = array(
                            'post_type' => 'Drones',
                            'posts_per_page' => -1
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) : 
                            while ($query->have_posts()) : 
                                $query->the_post(); ?>
                                <td><?php echo get_field("drone-black-feature-4"); ?></td>
                        <?php
                            endwhile; 
                        endif;
                        wp_reset_postdata(); 
                        ?>
                    </tr>
                    <tr>
                        <?php
                        $args = array(
                            'post_type' => 'Drones',
                            'posts_per_page' => -1
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) : 
                            while ($query->have_posts()) : 
                                $query->the_post(); ?>
                                <td><?php echo get_field("drone-black-feature-5"); ?></td>
                        <?php
                            endwhile; 
                        endif;
                        wp_reset_postdata(); 
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--contact-section-->
<div class="container section-five-main my-5">
    <div class="row">
        <div class="col-md-4">
            <h2><?php echo get_field("contact-left-title") ?></h2>

            <h4><?php echo get_field("contact-left-subtitle-1") ?></h4>
            <p><?php echo get_field("contact-left-text-1") ?></p>

            <h4><?php echo get_field("contact-left-subtitle-2") ?></h4>
            <p><?php echo get_field("contact-left-text-2") ?></p>

            <h4><?php echo get_field("contact-left-socialmedia-title") ?></h4>
            <div class="icon">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-whatsapp"></i>
            </div>
        </div>


        <div class=" col-md-4 me-0 pe-0">
            <iframe class='map' src="<?php echo get_field("company-localtion-url") ?>" width="420" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="bg-dark align-center form-main  col-md-4 ms-0 ps-0">
            <div class="p-5">
                <div>

                    <h2 class="text-white"><?php echo get_field("contact-form-title") ?></h2>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-white"><?php echo get_field("contact-form-name-username") ?></label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-white"><?php echo get_field("contact-form-email") ?></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-white"><?php echo get_field("contact-form-massage") ?></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <Button class="btn btn-success">
                            <?php echo get_field("contact-form-submit-button") ?>
                        </Button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>