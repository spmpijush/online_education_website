<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");
?>
<div class="main_portfolio_section mt-5">
    <h1 class="text-center mt-4">Portfolio</h1>
    <p class="text-center">Take a look at my design portfolio</p>
    <div class="container mt-4">
        <div class="row">
            <?php
            foreach ($this->getPortfolioDate as $k => $val) { ?>
                <div class="col-lg-4 col-md-4 col-12 mb-4">
                    <div class="portfolio_box">
                        <div class="">
                            <img src="<?php echo URL . $val['path'] . $val['file'] ?>" class="portfolio_img_style " alt="...">
                            <div class="hover_view_more">
                                <a class="" href="<?php echo URL ?>single_portfolio<?php echo $k ?>">View More</a>
                            </div>
                        </div>
                        <div class="px-3">
                            <div class="portfolio_item_heading">
                                <h2 class=""><?php echo $val['title'] ?> </h2>
                                <small>By <?php echo $val['upload_by'] . " | 01/02/1999" ?> </small>
                            </div>
                            <strong class="price">$<?php echo $val['price'] ?> </strong>
                            <div class="start_and_preview">
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <p><?php echo $val['rating'] ?> Sales</p>
                                </div>
                                <div>
                                    <i class="fas fa-cart-plus"></i>
                                    <button type="button" class="live_preview_button">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="portfolio_box">
                    <div class="">
                        <img src="<?php echo URL ?>/uploads/images/pic3.jpeg" class="portfolio_img_style " alt="...">
                        <div class="hover_view_more">
                            <a class="" href="#">View More</a>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="portfolio_item_heading">
                            <h2 class="">School Website </h2>
                            <small>By Pijush Kanti Mandal</small>
                        </div>
                        <strong class="price">$80</strong>
                        <div class="start_and_preview">
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <p>154 Sales</p>
                            </div>
                            <div>
                                <i class="fas fa-cart-plus"></i>
                                <button type="button" class="live_preview_button">Live Preview</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="portfolio_box">
                    <div class="">
                        <img src="<?php echo URL ?>/uploads/images/pic3.jpeg" class="portfolio_img_style " alt="...">
                        <div class="hover_view_more">
                            <a class="" href="#">View More</a>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="portfolio_item_heading">
                            <h2 class="">School Website </h2>
                            <small>By Pijush Kanti Mandal</small>
                        </div>
                        <strong class="price">$80</strong>
                        <div class="start_and_preview">
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <p>154 Sales</p>
                            </div>
                            <div>
                                <i class="fas fa-cart-plus"></i>
                                <button type="button" class="live_preview_button">Live Preview</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="portfolio_box">
                    <div class="">
                        <img src="<?php echo URL ?>/uploads/images/pic3.jpeg" class="portfolio_img_style " alt="...">
                        <div class="hover_view_more">
                            <a class="" href="#">View More</a>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="portfolio_item_heading">
                            <h2 class="">School Website </h2>
                            <small>By Pijush Kanti Mandal</small>
                        </div>
                        <strong class="price">$80</strong>
                        <div class="start_and_preview">
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <p>154 Sales</p>
                            </div>
                            <div>
                                <i class="fas fa-cart-plus"></i>
                                <button type="button" class="live_preview_button">Live Preview</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="portfolio_box">
                    <div class="">
                        <img src="<?php echo URL ?>/uploads/images/pic3.jpeg" class="portfolio_img_style " alt="...">
                        <div class="hover_view_more">
                            <a class="" href="#">View More</a>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="portfolio_item_heading">
                            <h2 class="">School Website </h2>
                            <small>By Pijush Kanti Mandal</small>
                        </div>
                        <strong class="price">$80</strong>
                        <div class="start_and_preview">
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <p>154 Sales</p>
                            </div>
                            <div>
                                <i class="fas fa-cart-plus"></i>
                                <button type="button" class="live_preview_button">Live Preview</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="portfolio_box">
                    <div class="">
                        <img src="<?php echo URL ?>/uploads/images/pic3.jpeg" class="portfolio_img_style " alt="...">
                        <div class="hover_view_more">
                            <a class="" href="#">View More</a>
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="portfolio_item_heading">
                            <h2 class="">School Website </h2>
                            <small>By Pijush Kanti Mandal</small>
                        </div>
                        <strong class="price">$80</strong>
                        <div class="start_and_preview">
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <p>154 Sales</p>
                            </div>
                            <div>
                                <i class="fas fa-cart-plus"></i>
                                <button type="button" class="live_preview_button">Live Preview</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>

        <div class="my-3">
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
    </div>
</div>