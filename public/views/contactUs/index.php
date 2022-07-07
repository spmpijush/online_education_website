<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

?>
<section class="contuct_section section" id="contuctt">
    <div class="container contact_us_sub_section">
        <div class="section_title">
            <h1 class="text-center">Get In Touch</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="contuct_item">
                    <a href="callto:+91 8167874215">
                        <div class="contuct_item_inner outer_shadow">
                            <i class="fas fa-phone"></i>
                            <span>Phone</span>
                            <p>+91 8167874215</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="contuct_item">
                    <a href="mailto:pijush.gazole369@gmail.com">
                        <div class="contuct_item_inner outer_shadow">
                            <i class="fas fa-envelope"></i>
                            <span>Email</span>
                            <p>pijush.gazole369@gmail.com</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="contuct_item">
                    <a href="https://goo.gl/maps/vgs1csbEUeswfbhu5" target="_blanck">
                        <div class="contuct_item_inner outer_shadow">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Location</span>
                            <p>Vill & Po - Kailabad</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="">
                    <div class="input_group outer_shadow hover_in_shadow">
                        <input type="text" required name="name" id="name" autocomplete="off" placeholder="Name" class="input_controler">
                    </div>
                    <div class="input_group outer_shadow hover_in_shadow">
                        <input type="email" required name="email" id="email" autocomplete="off" placeholder="Email" class="input_controler">
                    </div>
                    <div class="input_group outer_shadow hover_in_shadow">
                        <input type="text" required name="subject" id="Subject" autocomplete="off" placeholder="Subject" class="input_controler">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="">
                    <div class="input_group outer_shadow hover_in_shadow">
                        <textarea name="message" required id="message" autocomplete="off" cols="30" rows="10" class="input_controler" placeholder="Message"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="submite_btn">
            <button type="submite" name="sendmessage" class="btn_1 outer_shadow hover_in_shadow">Send Message</button>
        </div>
    </div>
</section>
<!-- contuct section end  -->