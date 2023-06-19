<?php
/*Template Name: Home Page */
get_header(); ?>

<!--Slider-->
<div class="slide-container">
    <div class="video-slider">
    <?php
    $file = get_field('homeslider-video');
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
            <div class="col-md-4 " style="margin-top: 150px!important;">
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
            <img src="./mosaic_bg_agrispray.jpg">
        </div>
        <div class="card text-bg-success mb-3 card-main" style="max-width: 18rem;">
            <div class="card-body">
                <div class="socail-media">
                    <i class="bi bi-instagram"></i>
                    <h1 class="card-title text-white">Follow Instagram</h1>

                </div>
                <p class="text-white">Lorem ipsum dolor sit amet.</p>
                <button class="btn btn-outline-light  justify-content-end"> Follow </button>
            </div>
        </div>
    </div>
</div>

<!-- section-4 saying-->

<div class="container-fluid bg-dark ">
    <div class="container ml-5 py-5 ">
        <div class="row ">
            <div class="col-md-12 text-white pb-3">
                <h1>Lorem ipsum dolor sit.</h1>
            </div>
        </div>
        <div class="row justify-content-between ">

            <div class="col-md-4   ">
                <div class="card bg-light" style="width: 20rem;">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur
                            commodi aut maxime officiis eveniet harum minima, ut necessitatibus officia vero ratione
                            quia in natus fugiat, quam corrupti fugit, quidem esse iure. Eum totam doloremque ipsa
                            similique molestias suscipit consectetur laboriosam distinctio quos quibusdam sit
                            voluptate vero minima eligendi, enim maxime! Some quick example text to build on the
                            card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light" style="width: 20rem;">
                    <div class="card-body ">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur
                            commodi aut maxime officiis eveniet harum minima, ut necessitatibus officia vero ratione
                            quia in natus fugiat, quam corrupti fugit, quidem esse iure. Eum totam doloremque ipsa
                            similique molestias suscipit consectetur laboriosam distinctio quos quibusdam sit
                            voluptate vero minima eligendi, enim maxime! Some quick example text to build on the
                            card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light" style="width: 20rem;">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur
                            commodi aut maxime officiis eveniet harum minima, ut necessitatibus officia vero ratione
                            quia in natus fugiat, quam corrupti fugit, quidem esse iure. Eum totam doloremque ipsa
                            similique molestias suscipit consectetur laboriosam distinctio quos quibusdam sit
                            voluptate vero minima eligendi, enim maxime! Some quick example text to build on the
                            card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="card-link ">Card link</a>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
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
            <h2>Lorem, ipsum dolor.</h2>

            <h4>Lorem, ipsum.</h4>
            <p>Lorem ipsum dolor sit.</p>

            <h4>Lorem, ipsum.</h4>
            <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit amet.</p>

            <h4>lorem</h4>
            <div class="icon">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-whatsapp"></i>
            </div>
        </div>

     
            <div class=" col-md-4 me-0 pe-0">
                <iframe
                    class='map'
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1096.5863410927373!2d34.611942174118596!3d37.93677196113557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1529ddcca810eef3%3A0x814e5d99c1aad031!2sNi%C4%9Fde%20Teknopark!5e0!3m2!1sen!2str!4v1683649258442!5m2!1sen!2str"
                    width="420" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="bg-dark align-center form-main  col-md-4 ms-0 ps-0">
                <div class="p-5" >    
                    <div>

                        <h2 class="text-white">Send a message</h2>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-white">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name Surname">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-white">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-white">Example
                            textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <Button class="btn btn-success">
                                Submit
                            </Button>
                        </div>
                    </div>
                </div>
                
            </div>
    </div>
</div>



<?php get_footer(); ?>