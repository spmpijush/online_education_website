<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<!-- Our Blog section html code start  -->
<div class="container2">
    <h1 class="text-center my-5 blog_and_artical">Blog & Articals</h1>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
            <div class="container main_blog_artical_section_section">
                <?php
                foreach ($this->getBlogDate as $k => $val) { ?>
                    <div class="row main_blog_artical_section">
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="blog_img_box">
                                <img src="<?php echo URL ?>uploads/blog/<?php echo $val['file'] ?>" class="img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-12">
                            <div class="">
                                <h1 class="py-3"><?php echo $val['heading'] ?></h1>
                                <div class="py-2 blog_tag_user">
                                    <span><i class="fas fa-tags"> </i> <?php echo $val['tag'] ?> </span>
                                    <span><i class="fas fa-calendar-alt"> </i> <?php echo $val['date'] ?> </span>
                                    <span><i class="fas fa-user"> </i> <?php echo $val['upload_by'] ?></span>
                                </div>
                                <div class="py-3">
                                    <p><?php echo $val['sub_heading'] ?></p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="<?php echo URL ?>singleBlog?id=<?php echo $val['id'] ?>" type="button" class="btn btn-primary blog_read_more_button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php
                }
                ?>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="">
                <div class="search_box_color">
                    <h3 class="py-2">S E A R C H - B O X</h3>
                    <div class="mb-3 search_box_main">
                        <input type="text" class="form-control" id="search_box" aria-describedby="textHelp" placeholder="Search Here ...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="category_main_section my-5">
                    <h3>C A T E G O R Y</h3>
                    <div class="container">
                        <ul class="">
                            <?php
                            foreach ($this->getBlogCategoryDate as $k => $val) { ?>
                                <li class="nav-link"><a href="#" class=""><?php echo $val['category_name'] ?> </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="recent_post_main">
                    <h3>R E C E N T - P O S T</h3>
                    <div class="container recent_post_content_box_main">
                        <?php
                        foreach ($this->getRecentBlogDate as $k => $val) { ?>
                            <div class="row recent_post_content_box my-3">
                                <div class="col-lg-3 col-md-3 col-3">
                                    <div class="">
                                        <div class="recent_post_img_box">
                                            <img src="<?php echo URL ?>uploads/blog/<?php echo $val['file'] ?>" class="img-fluid" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="">
                                        <h4><?php echo $val['heading'] ?> </h4>
                                        <small> <?php echo $val['sub_heading'] ?> </small>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- <div class="row recent_post_content_box my-3">
                            <div class="col-lg-3 col-md-3 col-3">
                                <div class="">
                                    <div class="recent_post_img_box">
                                        <img src="<?php echo URL ?>uploads/blog/bg.jpg" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-9">
                                <div class="">
                                    <h4>Web Developement</h4>
                                    <small> use the “share” icon in your projects, whether they’re apps, interfaces, or print designs</small>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<!-- Our Blog section html code end  -->