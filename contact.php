<?php 
include 'includes/include.inc.php';

echo get_header("Contact");
?>


<section class="container-fluid" style="padding-top: 4rem">
    <div class="row">
        <div class="col-12">
            <div class="col-12 d-flex flex-column" style = "background-image:url(img/about.webp);">
                <a href="#" class="py-5 pb-5 fs-1 text-center text-decoration-none text-light fw-bold">Contact</a>
            </div>
        </div>
    </div>


    <div class="row p-0 m-0 justify-content-center">
        <div class="col-10 py-md-5 py-5 d-md-flex">
            <div class="col-md-6 col-12 my-5 d-flex align-items-center justify-content-center " style="border: 1px solid lightgrey">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h4 class="text-center my-3">Send Us A Message</h4>
                    <input type="text" class="my-2 p-2 w-100" placeholder="Your Email address..." style="border: 1px solid lightgrey">
                    <textarea class="my-2 p-2 w-100" cols="30" rows="10" placeholder="How can we Help?" style="border: 1px solid lightgrey"></textarea>
                    <button class="btn rounded-pill text-white m-3 bg-dark">Submit</button>
                </div>

            </div>

            <div class="col-md-6 col-12 my-5 d-flex align-items-center justify-content-center " style="border: 1px solid lightgrey">
                <div class="col-8 d-flex flex-column justify-content-center align-items-center">
                    <div class="row m-0 p-0 w-100 justify-content-center align-items-center">
                        <div class="col-2">
                            <i class="fas fa-map-marker-alt  fs-3  "></i>
                        </div>
                        <div class="col-10">
                            <div>
                                <h3>Address</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab sequi eveniet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-0 p-0 w-100">
                        <div class="col-2">
                            <i class="fas fa-phone-alt  fs-3  "></i>
                        </div>
                        <div class="col-10">
                            <h3>Lets Talk</h3>
                            <p> +1234567890 </p>
                        </div>
                    </div>

                    <div class="row m-0 p-0 w-100">
                        <div class="col-2">
                            <i class="fas fa-envelope  fs-3  "></i>
                        </div>
                        <div class="col-10">
                            <div>
                                <h3>Sale Support</h3>
                            <p>support@fc.com</p>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
    
</section>










<?php 
echo get_footer();
?>