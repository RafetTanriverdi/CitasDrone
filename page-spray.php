<?php
/*Template Name: Spary Page */
get_header(); ?>

    <!--Page-Slider-->
    <div class="page-container">
        <div class="video-slider ">
            <video src="DJI.mp4" autoplay muted loop></video>
            <p class="text-white  page-name">İlaçlama</p>
        </div>
    </div>

    <!--about-section-1-->
    <div class="about-section-1">

        <div class="container-fluid about-section-one-main bg-light">
            <div class="container">

                <div class="row ">
                    <h2 class="pt-5">Lorem ipsum dolor sit.</h2>
                    <h5>Lorem, ipsum.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quas repudiandae quae, mollitia
                        odit
                        accusantium excepturi neque ex? Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="row p-5 " style="height: 100%;">
                    <div class="col-md-6">
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus esse nihil praesentium quas
                            quam asperiores fugit maxime ratione doloremque veniam et ipsum id quos molestias aliquam
                            ipsam tenetur laboriosam distinctio vitae repellendus, ut culpa? Nihil?</p>
                        <ul>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem dignissimos reiciendis
                                illo consequuntur accusamus, ea ratione ad error perferendis sit ipsa aperiam illum quia
                                rem, dicta exercitationem repudiandae omnis cumque voluptas vero? Sint modi, sunt
                                nesciunt eos, quasi dicta nulla saepe consectetur eius facere error.</li>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem dignissimos reiciendis
                                illo consequuntur accusamus, ea ratione ad error perferendis sit ipsa aperiam illum quia
                                rem, dicta exercitationem repudiandae omnis cumque voluptas vero? Sint modi, sunt
                                nesciunt eos, quasi dicta nulla saepe consectetur eius facere error.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt reiciendis ab numquam,
                            nemo maiores expedita non iusto magni perferendis doloribus id deserunt enim quae
                            architecto, dolor alias assumenda blanditiis quibusdam corporis. Voluptatum adipisci veniam
                            sequi.</p>
                        <p>Lorem ipsum dolor sit amet.</p>

                    </div>
                    <div class="col-md-6 " style="height: 100%; display: flex; align-items: center;">
                        <img src="https://agrispraydrones.com/wp-content/uploads/2022/08/moreland_family.jpg-2048x1463.jpg"
                            class="card-img-top" alt="...">
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


<?php get_footer(); ?>