<?php $this->load->view('front/header.php'); ?>
<?php if (!empty($articles)) { ?>
<div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Services</h2>
                                <span>Home / <a href="about-us.html"><?php echo $articles[0]['category_name'] ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Single Blog Post</h2>
                                <img src="<?php echo base_url('public/') ?>images/under-heading.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div id="single-blog" class="page-section first-section">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                                <div class="image">
                                                    <div class="image-post">
                                                        <img style="height: 330px; width: 100%; object-fit: cover;" src="<?php if (!empty($articles[0]['image'])) {
                      echo base_url().'public/uploads/articles/'. $articles[0]['image'];
                    } else
                    {
                      echo base_url().'public/uploads/articles/noimage.jpg';
                    }
                     ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h3><?php echo $articles[0]['title']; ?></h3>
                                                        <span class="subtitle">4 comments</span>
                                                    </div>
                                                    <p><?php echo $articles[0]['description']; ?></p>
                                                </div>
                                                
                                                <div class="divide-line">
                                                <img src="<?php echo ''. $articles[0]['image']; ?>" alt="" />
                                                </div>
                                                <div class="comments-title">
                                                    <div class="comment-section">
                                                        <h4>4 comments</h4>
                                                    </div>
                                                </div>
                                                <div class="all-comments">
                                                    <div class="view-comments">
                                                        <div class="comments">
                                                            <div class="author-thumb">
                                                                <img src="<?php echo base_url('public/') ?>images/author-comment1.jpg" alt="">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h6>Cindy Venna</h6>
                                                                <span class="date">11 Sep 2084 - 12:25 PM</span>
                                                                <a href="#" class="hidden-xs">Reply</a>
                                                                <p>Nulla ac elementum nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Donec rhoncus quam sit amet sodales finibus. Donec pellentesque non massa eu maximus. In non tellus id sem tempor gravida.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="replyed-form">
                                                        <div class="comments replyed">
                                                            <div class="author-thumb">
                                                                <img src="<?php echo base_url('public/') ?>images/author-comment2.jpg" alt="">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h6>George Tanya</h6>
                                                                <span class="date">12 Sep 2084 - 8:48 AM</span>
                                                                <a href="#" class="hidden-xs">Reply</a>
                                                                <p>In pulvinar venenatis odio. Sed in ex sit amet ipsum posuere mollis. Nam nec risus feugiat dui ultrices dignissim. Morbi ex purus, commodo a tristique eu, mollis a nisi. Pellentesque in enim sit amet tellus ornare fringilla eget eu arcu.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="view-comments">
                                                        <div class="comments">
                                                            <div class="author-thumb">
                                                                <img src="<?php echo base_url('public/') ?>images/author-comment3.jpg" alt="">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h6>Brooker Aung</h6>
                                                                <span class="date">12 Sep 2084 - 10:40 AM</span>
                                                                <a href="#" class="hidden-xs">Reply</a>
                                                                <p>Duis rutrum, libero eu blandit gravida, massa orci cursus nisi, vehicula facilisis purus neque dignissim urna. Etiam molestie elementum elit at tempus. Suspendisse quis consectetur nisi, vitae consequat sem. In et quam id libero venenatis venenatis. Morbi vitae justo vulputate, auctor augue eu, pulvinar augue.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="view-comments">
                                                        <div class="comments">
                                                            <div class="author-thumb">
                                                                <img src="<?php echo base_url('public/') ?>images/author-comment4.jpg" alt="">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h6>Crystal Mya</h6>
                                                                <span class="date">14 Sep 2084 - 05:16 PM</span>
                                                                <a href="#" class="hidden-xs">Reply</a>
                                                                <p>Suspendisse vitae maximus nisl, non finibus ante. Suspendisse neque nisl, luctus ullamcorper erat a, fermentum mollis nibh. Aliquam vulputate augue vel metus suscipit euismod. Quisque id purus massa. Sed condimentum facilisis eros, ultrices tincidunt libero facilisis eget. Integer eget cursus velit.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divide-line">
                                                <img src="images/div-line.png" alt="" />
                                                </div>
                                            <div class="leave-comment">
                                                <div class="leave-one">
                                                    <h4>Leave a comment</h4>
                                                </div>
                                            </div>
                                            <div class="leave-form">
                                                <form action="#" method="post" class="leave-comment">
                                                    <div class="row">
                                                    <div class="name col-md-4">
                                                        <input type="text" name="name" id="name" placeholder="Name" />
                                                    </div>
                                                    <div class="email col-md-4">
                                                        <input type="text" name="email" id="email" placeholder="Email" />
                                                    </div>
                                                    <div class="subject col-md-4">
                                                        <input type="text" name="subject" id="subject" placeholder="Subject" />
                                                    </div>
                                                    </div>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                            <textarea name="text" placeholder="Comment"></textarea>
                                                        </div>   
                                                    </div>                              
                                                    <div class="send">
                                                        <button type="submit">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
            <?php } ?>

<?php $this->load->view('front/footer.php'); ?>
