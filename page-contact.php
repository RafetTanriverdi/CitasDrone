<?php
/*Template Name: Contact Page */
get_header(); ?>

    <!--Page-Slider-->
    <div class="page-container">
        <div class="video-slider ">
            <video src="DJI.mp4" autoplay muted loop></video>
            <p class="text-white  page-name">İletişim</p>
        </div>
    </div>

    <!--contact-section-->
    <div class="container-fluid" style="background-color: white;">

        <div class="container section-five-main py-5 ">
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
        </div>
    </div>

    <!--faq -->
    <div class="container mb-5">
        <div class="row text-center my-3">
            <h1>Sık Sorulan Sorular</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Lorem ipsum dolor sit.</h3>
                <div class="accordion  " id="accordionExample">
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingOne">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body ">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, dolore sequi molestiae
                                    blanditiis ullam doloribus explicabo debitis aliquam id vitae similique autem,
                                    beatae cupiditate aperiam excepturi. Quasi laborum animi commodi harum vel
                                    voluptatum odit, omnis quam nesciunt dolores maxime. Suscipit repudiandae ab aliquid
                                    earum dolorem eum accusantium labore praesentium consequatur?</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, dolore sequi molestiae
                                    blanditiis ullam doloribus explicabo debitis aliquam id vitae similique autem,
                                    beatae cupiditate aperiam excepturi. Quasi laborum animi commodi harum vel
                                    voluptatum odit, omnis quam nesciunt dolores maxime. Suscipit repudiandae ab aliquid
                                    earum dolorem eum accusantium labore praesentium consequatur?</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, dolore sequi molestiae
                                    blanditiis ullam doloribus explicabo debitis aliquam id vitae similique autem,
                                    beatae cupiditate aperiam excepturi. Quasi laborum animi commodi harum vel
                                    voluptatum odit, omnis quam nesciunt dolores maxime. Suscipit repudiandae ab aliquid
                                    earum dolorem eum accusantium labore praesentium consequatur?</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Accordion Item #4
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, dolore sequi molestiae
                                    blanditiis ullam doloribus explicabo debitis aliquam id vitae similique autem,
                                    beatae cupiditate aperiam excepturi. Quasi laborum animi commodi harum vel
                                    voluptatum odit, omnis quam nesciunt dolores maxime. Suscipit repudiandae ab aliquid
                                    earum dolorem eum accusantium labore praesentium consequatur?</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Accordion Item #5
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, dolore sequi molestiae
                                    blanditiis ullam doloribus explicabo debitis aliquam id vitae similique autem,
                                    beatae cupiditate aperiam excepturi. Quasi laborum animi commodi harum vel
                                    voluptatum odit, omnis quam nesciunt dolores maxime. Suscipit repudiandae ab aliquid
                                    earum dolorem eum accusantium labore praesentium consequatur?</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Accordion Item #6
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, dolore sequi molestiae
                                    blanditiis ullam doloribus explicabo debitis aliquam id vitae similique autem,
                                    beatae cupiditate aperiam excepturi. Quasi laborum animi commodi harum vel
                                    voluptatum odit, omnis quam nesciunt dolores maxime. Suscipit repudiandae ab aliquid
                                    earum dolorem eum accusantium labore praesentium consequatur?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Lorem ipsum dolor sit.</h3>
                <div class="accordion" id="accordionExample1">
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingOne1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                Soru #1
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Bu bir metin örneğidir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingTwo1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                Soru #2
                            </button>
                        </h2>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Bu bir metin örneğidir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingThree1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                Soru #3
                            </button>
                        </h2>
                        <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Bu bir metin örneğidir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="headingFour1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                                Soru #4
                            </button>
                        </h2>
                        <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Bu bir metin örneğidir.</p>
                            </div>
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