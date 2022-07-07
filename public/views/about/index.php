<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<!-- About Our Charity section start  -->
<div class="container2 my-5">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="">
                <div class="img_box">
                    <!-- <img src="<?php echo URL ?>uploads/images/pic1.png" class="resume_image" alt="..."> -->
                    <img src="<?php echo URL . $this->getAboutPageDate['path'] . $this->getAboutPageDate['file']  ?>" class="resume_image" alt="...">
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
            <div class="name_and_position_main">
                <div class="name_and_position">
                    <h2 class="name display-3"><?php echo $this->getAboutPageDate['name']; ?></h2>
                    <P class="position"><?php echo $this->getAboutPageDate['position']; ?></P>
                </div>
            </div>
        </div>
    </div>




    <div class="row resume_content_part">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="pt-5 resume_contact_main">
                <h2 class="resume_contact pt-5 mb-3">C O N T A C T</h2>
                <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="resume_location">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-10">
                        <div class="resume_location_text">
                            <p><?php echo $this->getPersonalInfoPageDate['po'] . ' , ' . $this->getPersonalInfoPageDate['ps'] . ' , ' . $this->getPersonalInfoPageDate['dist']; ?> </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="resume_location">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-10">
                        <div class="resume_location_text">
                            <p><?php echo $this->getPersonalInfoPageDate['phone_no']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="resume_location">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-10">
                        <div class="resume_location_text">
                            <p>+91 <?php echo $this->getPersonalInfoPageDate['whatsapp_no']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="resume_location">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-10">
                        <div class="resume_location_text">
                            <p><?php echo $this->getPersonalInfoPageDate['email_id']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="mt-5 resume_education">
                <h2 class="resume_contact">E D U C A T I O N</h2>
                <div class="row mb-3 resume_education_text">
                    <strong>Master Degree</strong>
                    <small>University Of Gour Banga | Year : 2021 - 2023</small>
                    <small>Computer Science | Percentage : 75 %</small>
                </div>


                <div class="row mb-3 resume_education_text">
                    <strong>Bachelor Degree</strong>
                    <small>Gour Mahavidyalaya | Year : 2018 - 2021</small>
                    <small>Computer Science | Percentage : 75 %</small>
                </div>

                <div class="row mb-3 resume_education_text">
                    <strong>ITI</strong>
                    <small>Gour Mahavidyalaya | Year : 2018 - 2021</small>
                    <small>Computer Science | Percentage : 75 %</small>
                </div>

                <div class="row mb-3 resume_education_text">
                    <strong>Higher Secondary</strong>
                    <small>Gour Mahavidyalaya | Year : 2018 - 2021</small>
                    <small>Computer Science | Percentage : 75 %</small>
                </div>


                <div class="row mb-3 resume_education_text">
                    <strong>Madhyamik</strong>
                    <small>Gour Mahavidyalaya | Year : 2018 - 2021</small>
                    <small>Computer Science | Percentage : 75 %</small>
                </div>
            </div> -->
            <div class="mt-5 resume_social">
                <h2 class="resume_contact">S O C I A L </h2>
                <div class="social_media_icon pt-3">
                    <a target="_blank" href="<?php echo $this->getAboutPageDate['facebook']; ?>"><i class="fab fa-facebook"></i></a>
                    <a target="_blank" href="<?php echo $this->getAboutPageDate['whatsapp']; ?>"> <i class="fab fa-whatsapp"></i></a>
                    <a target="_blank" href="<?php echo $this->getAboutPageDate['instagram']; ?>"> <i class="fab fa-instagram-square"></i></a>
                    <a target="_blank" href="<?php echo $this->getAboutPageDate['linkdin']; ?>"> <i class="fab fa-linkedin"></i></a>
                    <a target="_blank" href="<?php echo $this->getAboutPageDate['youtub']; ?>"> <i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="mt-5 resume_skils_main">
                <h2 class="resume_contact">S K I L S</h2>
                <div class="row skils_icon_and_text">
                    <?php
                    foreach ($this->getSkilsDate as $k => $val) {
                        echo '<i class="fas fa-angle-double-right"> ' .  $val['skils_name'] . '</i>';
                    }
                    ?>
                </div>
            </div>

            <div class="mt-5 resume_hobby">
                <h2 class="resume_hobby_text">H O B B Y</h2>
                <div class="resume_hobby_icon pt-3">
                    <i class="fas fa-laptop-code"></i>
                    <i class="fas fa-motorcycle"></i>
                    <i class="fas fa-headphones"></i>
                    <i class="fas fa-gamepad"></i>
                </div>
            </div>

            <div class="mt-5 resume_hobby">
                <h2 class="resume_hobby_text">G A L L E R Y</h2>
                <div class="container gallery_main_box pt-4">
                    <div class="row">
                        <?php
                        foreach ($this->getGalleryDate as $k => $val) {
                            echo '<div class="col-lg-4 col-md-4 col-4 mb-4">';
                            echo '<div class="gallery_box">';
                            echo '<img src="' . URL . '/uploads/about/' . $val['file'] . '" class=" img-fluid" alt="...">';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->


        <div class="col-lg-8 col-md-8 col-12">
            <div class="main_resume_right_side mt-5">
                <i class="fas fa-user-circle"></i>
                <div class=" resume_profile_main">
                    <h2 class="resume_profile">P R O F I L E</h2>
                    <p><?php echo $this->getAboutPageDate['description']; ?></p>
                </div>
            </div>


            <div class="main_resume_right_side">
                <i class="fas fa-briefcase"></i>
                <div class="resume_work_main">
                    <h2 class="resume_work">W O R K - E X P E R I E N C E</h2>
                    <div class="resume_work_sub">
                        <?php
                        foreach ($this->getWorkExperienceDate as $k => $val) {
                            echo '<div class="">';
                            echo '<i class="fas fa-circle"></i>';
                            echo '<p>' . $val['start_date'] . ' - ' . $val['end_date'] . '</p>';
                            echo '<h2>' . $val['position'] . '</h2>';
                            echo '<h3>' . $val['company'] . '</h3>';
                            echo '<small>' . $val['description'] . '</small>';
                            echo ' </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="main_resume_right_side">
                <i class="fas fa-university"></i>
                <div class="resume_education_main pb-5">
                    <h2 class="resume_education">E D U C A T I O N</h2>
                    <?php
                    foreach ($this->getEducationDate as $k => $val) {
                        echo '<div class="row mb-3 resume_education_text">';
                        echo '<strong>' . $val['degree'] . '</strong>';
                        echo '<small>' . $val['insititute'] . ' | Year :' . $val['subject'] . ' | ' . $val['passing_year'] . ' | Percentage :' . $val['percentage'] . ' %</small>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="main_resume_right_side">
                <i class="fas fa-address-card"></i>
                <div class="resume_education_main pb-5">
                    <h2 class="resume_education">P E R S O N A L - I N F O R M A T I O N </h2>
                    <div class="row mb-3 resume_education_text">
                        <div class="table-responsive-sm">
                            <table class=" ">
                                <thead>
                                    <tr>
                                        <th scope="col">Father`s Name</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['fathers_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Date Of Birth </th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['date_of_birth']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['email_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Marital Status</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['marital_status']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Vill</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['vill']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Po</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['po']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">District</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['dist']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Police Station</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['ps']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">G.P</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['gp']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Pin </th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['pin']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">State</th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['state']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Language </th>
                                        <th scope="col">:</th>
                                        <td scope="col"><?php echo $this->getPersonalInfoPageDate['language']; ?></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_resume_right_side">
                <i class="fas fa-arrows-alt-h"></i>
            </div>
        </div>
    </div>
</div>
<!-- About Our Charity section end -->