<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");
?>
<div class="container2">
    <h1 class="text-center my-5 blog_and_artical">Blog & Articals</h1>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
            <div class=" main_blog_content">
                <img src="<?php echo URL ?>uploads/blog/<?php echo $this->getBlogDate['file']; ?> " class="blog_image" alt="...">

                <div class="blog_content">
                    <h1 class="blog_heading py-3"><?php echo $this->getBlogDate['heading']; ?></h1>
                    <p class="blog_sub_heading"><?php echo $this->getBlogDate['sub_heading']; ?></p>
                </div>
                <hr>
                <div class="blog_action">
                    <span class="blog_like_disLike">
                        <i class="fas fa-thumbs-up"> <?php echo $this->getBlogDate['likes']; ?></i>
                        <i class="fas fa-thumbs-down"> <?php echo $this->getBlogDate['dis_like']; ?></i>
                    </span>
                    <i class="fas fa-comments"> <?php echo $this->getBlogCommentCount['total_count']; ?> comments</i>
                    <a href="https://api.whatsapp.com/send?text=<?php echo URL . CURRENT_URI . '&id=' . $this->getBlogDate['id'] ?>" data-action="share/whatsapp/share"><i class="fas fa-share"> share</i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="">
                <div class="form_comment_box">
                    <h2>Comment : <strong><?php echo $this->getBlogCommentCount['total_count']; ?></strong></h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="textHelp">
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="comment" rows="3"></textarea>
                        </div>
                        <div class="text-end">
                            <a type="button" id="sand" class="btn btn-primary">Send <i class="fas fa-paper-plane"></i></a>
                        </div>

                    </form>
                </div>
                <div class="comment_list_box_main">
                    <?php
                    foreach ($this->getBlogCommentData as $k => $val) { ?>
                        <div class="comment_list_box my-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-3">
                                            <div class="comment_user_img_box">
                                                <img src="<?php echo URL ?>/uploads/blog/<?php echo $val['file'] ?>" class="comment_user_img" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-9">
                                            <div class="comment_user_details_box">
                                                <h2><?php echo $val['name'] ?></h2>
                                                <span><i class="fas fa-calendar-alt"></i> <?php echo $val['date_time'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p><?php echo $val['message'] ?></p>
                                </div>
                                <!-- <div class="card-footer d-flex ">
                                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
                                    <a type="button" class="btn btn-primary">Reply <i class="fas fa-paper-plane"></i></a>
                                </div> -->
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>
    </div>

</div>