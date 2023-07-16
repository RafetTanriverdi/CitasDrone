<?php
/*Template Name: About Page */
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
                    <p><?php echo get_field("about-main-subtitle")?></p>
                    <p><?php echo get_field("about-main-text")?></p>
                </div>
                <div class="row p-5 " style="height: 100%;">
                    <div class="col-md-6">
                        <p><?php echo get_field("about-normal-title")?> </p>
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
    <!--Section 2 parallax-->
    <div class="parallax container-fluid" style="background-image: url('<?php echo get_field("about-parallax-image")?>')">
  <div class="parallax-inner row">
    <div class="card-parallax  offset-md-2 col-lg-6 offset-lg-3 bg-white rounded-3 p*2">
      <h1 class="parallax-heading pt-3"> <?php echo get_field("about-parallax-title")?></h1>
      <p class="parallax-text"><?php echo get_field("about-parallax-text")?></p>
    </div>
  </div>
</div>

    <!--section-team  -->
    <div class="container-fluid bg-light">
        <div class="container py-3">
            <div class="row text-center">
                <h1><?php echo get_field("team-section-title")?></h1>
                    <p><?php echo get_field("team-section-text")?></p>
            </div>
            <div class="row mb-4">
                <div class="col-lg-4 team-card">
                    <img src="<?php echo get_field("team-section-teamlead-image")?>"
                        height="450px">
                </div>
                <div class="col-lg-8 d-flex flex-column justify-content-center border border-1 my-3 py-3 team-text-card ">
                    <h3><?php echo get_field("team-section-teamlead-name")?></h3>
                    <h5><?php echo get_field("team-section-teamlead-position")?></h5>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                    <p><?php echo get_field("team-section-teamlead-composition")?>
                    </p>
                    <p class="text-end"><b>- <?php echo get_field("team-section-teamlead-name")?></b></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center ">
                
<?php


$counter = 0;

$args = array(
    'post_type' => 'TeamMembers',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
       ?>
        <div class="col-md-3 mini-team-card  mb-3">
        <div class="card" >
            <img src="<?php echo get_field("team-section-teammember-image")?>"
                class="card-img-top" >
            <div class="card-body">
                <p><b><?php echo get_field("team-section-teammember-name")?></b></p>
                <p><?php echo get_field("team-section-teammember-role")?></p>
                <i class="bi bi-envelope"></i>
            </div>
        </div>
    </div>
      <?php  
    endwhile;
else :
    echo 'No posts found';
endif;

wp_reset_postdata();

?>
              
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