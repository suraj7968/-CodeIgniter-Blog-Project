<?php $this->load->view('front/header.php'); ?>
<div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Categories</h2>
                                <img src="<?php echo base_url('public/') ?>images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php if (!empty($categories)) { ?>
                            <?php foreach ($categories as $category_Row ) { ?>
                                <?php 
                                $date_str = $category_Row['created_at'];
                                $date = new DateTime($date_str);
                                $formatted_date = $date->format('d M Y');
                            ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="<?php echo base_url('public/') ?>images/blogpost1.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html"><?php echo $category_Row['name'] ?></a></h4>
                                        <span><?php echo $formatted_date; ?></span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
<?php $this->load->view('front/footer.php'); ?>
