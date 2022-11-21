<?php
$tanggal = tgl_indo($record['tanggal']); ?>

<div id="content" class="site-content">
            <div class="content-inner">
                <div class="container content-container">
                    <div class="row content-row">
                        <div id="primary" class="content-area content-has-sidebar float-right col-xl-8 col-lg-8 col-md-12">
                            <main id="main" class="site-main">
                                <article id="post-185" class="single-hentry post-185 post type-post status-publish format-standard has-post-thumbnail hentry category-industry category-news tag-business tag-corporate tag-modern tag-responsive">
                                    <div class="entry-featured">
                                        <div class="post-image"> <img width="1024" height="683" src="<?= base_url(); ?>asset/foto_berita/<?= $record['gambar']; ?>" class="attachment-full size-full wp-post-image" alt="" decoding="async" srcset=" <?= base_url(); ?>asset/foto_berita/<?= $record['gambar']; ?> 1024w, <?= base_url(); ?>asset/foto_berita/<?= $record['gambar']; ?> 768w"
                                                sizes="(max-width: 1024px) 100vw, 1024px" /></div>
                                    </div>
                                    <!-- .entry-featured -->
                                    <div class="entry-hoder">
                                        <div class="post-meta">
                                            <div class="meta-categories"> 
                                              <!--  <a href="../category/industry/index.html" rel="category tag">Industry</a>,  -->
                                              <a href="<?= base_url(); ?>berita/kategori/<?= $record['kategori_seo']; ?>" rel="category tag"><?= $record['nama_kategori']; ?></a> 

                                          </div>
                                            <div class="data">
                                                <h3 class="entry-title"> <?= $record['judul']; ?> </h3>
                                            </div>
                                            <ul class="entry-meta">
                                                <li> <span>By:</span> <a href="../author/admin/index.html" title="Posts by Mike Dooley" rel="author"><?= $record['nama_lengkap']; ?></a></li>
                                                <li> <?= $tanggal; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="entry-body">
                                        <div class="entry-content clearfix">
                                            <div class="vc_row wpb_row vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1555746268059">
                                                                <div class="wpb_wrapper">
                                                                   <?= $record['isi_berita']; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .entry-content -->
                                        <div class="entry-content-bottom clearfix">
                                            <div class="blog-single-tags-share">
                                                <div class="row">
                                                    <div class="blog-single-tags col-lg-8 col-md-8 col-sm-12">
                                                        <div class="entry-tags">
                                                          
                                                          <a href="#" rel="tag"><?= $record['tag']; ?></a> 
                                                          <!-- <a href="../tag/corporate/index.html" rel="tag">Corporate</a> 
                                                          <a href="../tag/modern/index.html" rel="tag">Modern</a> 
                                                          <a href="../tag/responsive/index.html" rel="tag">Responsive</a> -->
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="blog-single-social col-lg-4 col-md-4 col-sm-12 ">
                                                        <ul>
                                                            <li>Share:</li>
                                                            <li>
                                                                <a class="fb-social" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://demo.farost.net/logisti/changes-to-our-trade-credit-policy-and-procedures/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                            </li>
                                                            <li><a class="tw-social" title="Twitter" target="_blank" href="https://twitter.com/home?status=https://demo.farost.net/logisti/changes-to-our-trade-credit-policy-and-procedures/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a class="g-social" title="Google Plus" target="_blank" href="https://plus.google.com/share?url=https://demo.farost.net/logisti/changes-to-our-trade-credit-policy-and-procedures/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                            <li>
                                                                <a class="pin-social" title="Pinterest" target="_blank" href="https://pinterest.com/pin/create/button/?url=https://demo.farost.net/logisti/wp-content/uploads/2019/03/shutterstock_638769307.jpg&amp;media=&amp;description=Changes+to+our+Trade+Credit+Policy+and+Procedures"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-previous-next default">
                                                <div class="nav-links row clearfix">
                                                    <div class="line-gap"></div>
                                                    <!-- <div class="nav-link-prev grid-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="grid-item-inner">
                                                            <div class="item-featured">
                                                                <a href="../how-an-efficient-warehouse-operation-could-save-you-a-sale/index.html" class="image-link"> <img src="../wp-content/uploads/2019/03/shutterstock_682632361-300x300.jpg" alt="How an efficient warehouse operation could save you a sale" /> </a>
                                                            </div>
                                                            <div class="item-holder"> <span>Previous</span>
                                                                <h4 class="item-title"> <a href="../how-an-efficient-warehouse-operation-could-save-you-a-sale/index.html">How an efficient warehouse operation could save you a sale</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nav-link-next grid-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="grid-item-inner">
                                                            <div class="item-holder"> <span>Next</span>
                                                                <h3 class="item-title"> <a href="../importance-of-specialized-focus-in-projects-oil-gas-logistic/index.html">Importance of specialized focus in Projects, Oil &#038; Gas Logistics?</a></h3>
                                                            </div>
                                                            <div class="item-featured">
                                                                <a href="../importance-of-specialized-focus-in-projects-oil-gas-logistic/index.html" class="image-link"> <img src="../wp-content/uploads/2019/03/shutterstock_682632538-300x300.jpg" alt="Importance of specialized focus in Projects, Oil &#038; Gas Logistics?" /> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- .nav-links -->
                                            </div>
                                            <!-- <div class="admin-info">
                                                <div class="avatar-info"> <img data-del="avatar" src='../wp-content/uploads/2019/03/avatar.jpg' class='avatar pp-user-avatar avatar-70 photo ' height='70' width='70' /></div>
                                                <div class="main-info">
                                                    <h3 class="name">Mike Dooley</h3>
                                                    <p class="desc">Founded by Begha over many cups of tea at her kitchen table in 2009, our brand promise is simple: to provide powerful digital marketing solutions to small and medium businesses.</p>
                                                    <div class="socials">
                                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </article>
                                <!-- #post -->
                                <!-- <div id="comments" class="comments-area">
                                    <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title">Leave A Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel Comment</a></small></h3>
                                        <form action="https://demo.farost.net/logisti/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                                            <div class="row">
                                                <div class="comment-form-author col-lg-4 col-md-4 col-sm-12"><input id="author" name="author" type="text" value="" size="30" placeholder="Name *" /></div>
                                                <div class="comment-form-email col-lg-4 col-md-4 col-sm-12"><input id="email" name="email" type="text" value="" size="30" placeholder="Email *" /></div>
                                                <div class="comment-form-url col-lg-4 col-md-4 col-sm-12"><input id="url" name="url" type="url" value="" size="30" placeholder="Website" /></div>
                                            </div>
                                            <div class="row">
                                                <div class="comment-form-comment col-lg-12 col-md-12 col-sm-12"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment *" aria-required="true"></textarea></div>
                                            </div>
                                            <div class="row">
                                                <p class="form-submit col-12"><input name="submit" type="submit" id="submit" class="submit" value="Submit Comment" /> <input type='hidden' name='comment_post_ID' value='185' id='comment_post_ID' /> <input type='hidden' name='comment_parent'
                                                        id='comment_parent' value='0' /></p>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div> -->
                                <!-- #comments -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                        <aside id="secondary" class="widget-area widget-has-sidebar col-xl-4 col-lg-4 col-md-12">
                        <?php include "sidebar.php"; ?>
                            
                        </aside>
                    </div>
                </div>
            </div>
            <!-- #content inner -->
        </div>
        <!-- #content -->