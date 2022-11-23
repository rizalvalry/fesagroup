<?php 
$tanggal = tgl_indo($record['tgl_posting']);
$coba=1;
if ($validate > 0) { ?>

<!-- start content -->
<div id="content" class="site-content">
            <div class="content-inner">
                <div class="container content-container">
                    <div class="row content-row">
                        <div id="primary" class="content-area content-full-width col-12">
                            <main id="main" class="site-main">
                                <article id="post-34" class="post-34 page type-page status-publish hentry">
                                    <div class="entry-content clearfix">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                        <?= $record['isi_halaman']; ?>
                                            
                                        </div>
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-space-6367028390d2d">
                                                            <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                                                                #cms-space-6367028390d2d .cms-space {
                                                                height: 58px;
                                                                }
                                                                }
                                                                @media (min-width: 768px) and (max-width: 991px) {
                                                                #cms-space-6367028390d2d .cms-space {
                                                                height: 58px;
                                                                }
                                                                }
                                                                @media (min-width: 576px) and (max-width: 767px) {
                                                                #cms-space-6367028390d2d .cms-space {
                                                                height: 58px;
                                                                }
                                                                }
                                                                @media screen and (max-width: 575px) {
                                                                #cms-space-6367028390d2d .cms-space {
                                                                height: 58px;
                                                                }
                                                                }
                                                                ">
                                                            </div>
                                                            <div class="cms-space"></div>
                                                        </div>
                                                        <div id="cms-team-grid" class="cms-team-grid  animation-time  ">
                                                            <div class="row">
                                                                <!-- looping here -->
                                                                <?php foreach($addcontent as $org) { ?>
                                                                <div class="cms-team-item animation-time  col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                                                    <div class="cms-team-item-inner">
                                                                        <div class="cms-member-image"> <img src="<?php echo base_url(); ?>asset/multiple_foto/<?= $org['nama_foto'];?>" alt="Mike Dooley">
                                                                            <div class="overlay-info">
                                                                                <ul>
                                                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cms-team-content">
                                                                            <h3 class="member-name"><?= $org['deskripsi']; ?></h3>
                                                                            <p class="member-occupation">fesagroup</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                                <!-- end here -->
                                                                
                                                            </div>
                                                        </div>
                                                        <div id="cms-space-636702839245b">
                                                            <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                                                                #cms-space-636702839245b .cms-space {
                                                                height: 70px;
                                                                }
                                                                }
                                                                @media (min-width: 768px) and (max-width: 991px) {
                                                                #cms-space-636702839245b .cms-space {
                                                                height: 70px;
                                                                }
                                                                }
                                                                @media (min-width: 576px) and (max-width: 767px) {
                                                                #cms-space-636702839245b .cms-space {
                                                                height: 70px;
                                                                }
                                                                }
                                                                @media screen and (max-width: 575px) {
                                                                #cms-space-636702839245b .cms-space {
                                                                height: 70px;
                                                                }
                                                                }
                                                                ">
                                                            </div>
                                                            <div class="cms-space"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1554286104250 vc_row-has-fill row-overflow-unset">
                                            <div class="z-index-high wpb_column vc_column_container vc_col-sm-5 vc_col-md-4">
                                                <div class="vc_column-inner vc_custom_1555907926158">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-contact-location" class="cms-contact-location layout1  ">
                                                            <div class="title"> <img src="<?php echo base_url(); ?>plugin/wp-content/themes/logisti/assets/images/location_icon.png" alt="location_icon">
                                                                <h3>Global Locations</h3>
                                                            </div>
                                                            <div class="card-wrap">
                                                                <div class="card">
                                                                    <div class="card-header" id="heading-0">
                                                                        <div class="collapse-item" data-toggle="collapse" role="button" data-target="#collapse-0" aria-expanded="true" aria-controls="collapse-0"> London Office</div>
                                                                    </div>
                                                                    <div id="collapse-0" class="collapse  show" aria-labelledby="heading-0" data-parent="#cms-contact-location">
                                                                        <div class="card-body">
                                                                            <p>Phone: 010612457410</p>
                                                                            <p>Email: Logisti@farost.com</p>
                                                                            <p>Address: 2307 Beverley Rd Brooklyn, NY</p>
                                                                            <p>Hours: Mon-Fri: 8am – 7pm</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header" id="heading-1">
                                                                        <div class="collapse-item" data-toggle="collapse" role="button" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1"> Berlin Office</div>
                                                                    </div>
                                                                    <div id="collapse-1" class="collapse  " aria-labelledby="heading-1" data-parent="#cms-contact-location">
                                                                        <div class="card-body">
                                                                            <p>Phone: 010612457410</p>
                                                                            <p>Email: Logisti@farost.com</p>
                                                                            <p>Address: 2307 Beverley Rd Brooklyn, NY</p>
                                                                            <p>Hours: Mon-Fri: 8am – 7pm</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header" id="heading-2">
                                                                        <div class="collapse-item" data-toggle="collapse" role="button" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> Manchester Office</div>
                                                                    </div>
                                                                    <div id="collapse-2" class="collapse  " aria-labelledby="heading-2" data-parent="#cms-contact-location">
                                                                        <div class="card-body">
                                                                            <p>Phone: 010612457410</p>
                                                                            <p>Email: Logisti@farost.com</p>
                                                                            <p>Address: 2307 Beverley Rd Brooklyn, NY</p>
                                                                            <p>Hours: Mon-Fri: 8am – 7pm</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-heading-2" class="cms-heading text-right-lg  ">
                                                            <div class="title-heading">
                                                                <h3 class="heading-tag" style="color:#222222;font-size:17px;line-height:26px;font-weight:600; "> Sign up for industry alerts,<br /> news and insights from Logisti.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-md-5">
                                                <div class="vc_column-inner vc_custom_1555907917792">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-space-636702839320c">
                                                            <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                                                                #cms-space-636702839320c .cms-space {
                                                                height: 30px;
                                                                }
                                                                }
                                                                @media (min-width: 768px) and (max-width: 991px) {
                                                                #cms-space-636702839320c .cms-space {
                                                                height: 30px;
                                                                }
                                                                }
                                                                ">
                                                            </div>
                                                            <div class="cms-space"></div>
                                                        </div>
                                                        <div class="cms-newsletter placeholder-white   ">
                                                            <div class="cms-newsletter-inner">
                                                                <div class="tnp tnp-subscription">
                                                                    <form method="post" action="https://demo.farost.net/logisti/?na=s"> <input type="hidden" name="nlang" value="">
                                                                        <div class="tnp-field tnp-field-email"><label for="tnp-1">Your Email Address</label> <input class="tnp-email" type="email" name="ne" id="tnp-1" value="" required></div>
                                                                        <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Sign Up!"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="cms-space-63670283937ce">
                                                            <div class="cms-inline-css" style="display:none" data-css="    @media (min-width: 768px) and (max-width: 991px) {
                                                                #cms-space-63670283937ce .cms-space {
                                                                height: 38px;
                                                                }
                                                                }
                                                                ">
                                                            </div>
                                                            <div class="cms-space"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner vc_custom_1554285962130">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-space-6367028393d0c">
                                                            <div class="cms-inline-css" style="display:none" data-css="    @media (min-width: 576px) and (max-width: 767px) {
                                                                #cms-space-6367028393d0c .cms-space {
                                                                height: 60px;
                                                                }
                                                                }
                                                                @media screen and (max-width: 575px) {
                                                                #cms-space-6367028393d0c .cms-space {
                                                                height: 60px;
                                                                }
                                                                }
                                                                ">
                                                            </div>
                                                            <div class="cms-space"></div>
                                                        </div>
                                                        <div class="cms-google-map style-default ">
                                                            <div class="map-render" data-address='49 Tadema Rd, Chelsea, London SW10 0NY, United Kingdom' data-marker='%7B%22markercoordinate%22%3A%2251.4803538%2C-0.1823356%22%2C%22markericon%22%3A%22https%3A%5C%2F%5C%2Fdemo.farost.net%5C%2Flogisti%5C%2Fwp-content%5C%2Fthemes%5C%2Flogisti%5C%2Fassets%5C%2Fimages%5C%2Fmarker.png%22%7D'
                                                                data-loader='%7B%7D' data-coordinate='51.4803538,-0.1823356' data-type='TERRAIN' data-zoom='13' data-template='JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJhbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyd2VpZ2h0JTIyJTNBJTIwJTIyMi4wMCUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjM5YzljOWMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMmFsbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9uJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJsYW5kc2NhcGUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmFsbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2YyZjJmMiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5maWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJsYW5kc2NhcGUubWFuX21hZGUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMnBvaSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyYWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMnJvYWQlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmFsbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzYXR1cmF0aW9uJTIyJTNBJTIwLTEwMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDQ1JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5maWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZWVlZWVlJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJsYWJlbHMudGV4dC5maWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzN2I3YjdiJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJsYWJlbHMudGV4dC5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMnJvYWQuaGlnaHdheSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyYWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJzaW1wbGlmaWVkJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmFydGVyaWFsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJsYWJlbHMuaWNvbiUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJ2aXNpYmlsaXR5JTIyJTNBJTIwJTIyb2ZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ0cmFuc2l0JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJhbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyd2F0ZXIlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmFsbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyMzQ2YmNlYyUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvbiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyd2F0ZXIlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNjOGQ3ZDQlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMndhdGVyJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJsYWJlbHMudGV4dC5maWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzMDcwNzA3JTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ3YXRlciUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTBBJTVE'
                                                                data-controls='%7B%22scrollwheel%22%3A0%2C%22pancontrol%22%3Afalse%2C%22zoomcontrol%22%3Atrue%2C%22scalecontrol%22%3Afalse%2C%22maptypecontrol%22%3Atrue%2C%22streetviewcontrol%22%3Atrue%2C%22overviewmapcontrol%22%3Afalse%2C%22infoclick%22%3Afalse%2C%22infowidth%22%3A%22200%22%2C%22style%22%3A%22custom%22%7D'
                                                                style="width:auto;height: 620px"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                    </div>
                                    <!-- .entry-content -->
                                </article>
                                <!-- #post-34 -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                </div>
            </div>
            <!-- #content inner -->
        </div>
        <!-- #content -->

<?php } else { ?>
    <!-- start content -->
    <div id="content" class="site-content">
            <div class="content-inner">
                <div class="container content-container">
                    <div class="row content-row">
                        <div id="primary" class="content-area content-full-width col-12">
                            <main id="main" class="site-main">
                                <article id="post-30" class="post-30 page type-page status-publish hentry">
                                    <div class="entry-content clearfix">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1556338624154 row-overflow-unset">
                                            <div class="wpb_column vc_column_container vc_col-sm-5">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1556335427674  cms-single-image-load inherit">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper box-overlay-left  vc_box_border_grey"><img width="420" height="495" src="<?php echo base_url(); ?>asset/foto_banner/<?= $record['gambar']; ?>" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" /></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-7">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-heading" class="cms-heading close-spacing  ">
                                                            <div class="title-heading">
                                                                <h2 class="heading-tag" style="font-size:43px;line-height:57px;font-weight:700; "> <?= $record['judul']; ?></h2>
                                                            </div>
                                                        </div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1554718695319">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_text_column wpb_content_element  vc_custom_1554718785309">
                                                                            <div class="wpb_wrapper">
                                                                                <p style="color: #393939; font-size: 17px; font-weight: 500;">We Grow with The Customer Trust, Through Quality, Cost and Delivery Time!</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpb_text_column wpb_content_element  vc_custom_1556765992632">
                                                                            <div class="wpb_wrapper">
                                                                                <?= $record['isi_halaman']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left  inherit">
                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper default  vc_box_border_grey"><img width="123" height="43" src="../wp-content/uploads/2019/04/John-Peter.png" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" /></div>
                                                                            </figure>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1554712704177 vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text"><span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#eaeaea;" class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  style="border-color:#eaeaea;" class="vc_sep_line"></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1555040324819">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner vc_custom_1555039988428">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-partner-carousel" class="cms-partner-carousel layout1  default owl-carousel  " data-item-xs=1 data-item-sm=3 data-item-md=4 data-item-lg=6 data-margin=30 data-loop=false data-autoplay=false data-autoplaytimeout=5000 data-smartspeed=250 data-center=false
                                                            data-arrows=false data-bullets=false data-stagepadding=0 data-rtl=false>

                                                            <!-- loop here -->
                                                                <?php 
                                                                $banner = $this->model_utama->banner(0, 6); 
                                                                foreach ($banner->result_array() as $rows){ 
                                                                ?>
                                                                    <div class="cms-partner-item "> 
                                                                        <a href="#" target="_self">
                                                                            <img src="<?= base_url(); ?>asset/foto_banner/<?= $rows['gambar']; ?>" alt="brand-image" /> 
                                                                        </a>
                                                                    </div>
                                                                    <!-- <div class="cms-partner-item "> <a href="#" target="_self">
                                                                            <img src="plugin/wp-content/uploads/2019/04/partner02.png" alt="brand-image" /> </a></div>
                                                                    <div class="cms-partner-item "> <a href="#" target="_self">
                                                                            <img src="plugin/wp-content/uploads/2019/04/partner03.png" alt="brand-image" /> </a></div>
                                                                    <div class="cms-partner-item "> <a href="#" target="_self">
                                                                            <img src="plugin/wp-content/uploads/2019/04/partner04.png" alt="brand-image" /> </a></div>
                                                                    <div class="cms-partner-item "> <a href="#" target="_self">
                                                                            <img src="plugin/wp-content/uploads/2019/04/partner05.png" alt="brand-image" /> </a></div>
                                                                    <div class="cms-partner-item "> <a href="#" target="_self">
                                                                            <img src="plugin/wp-content/uploads/2019/04/partner06.png" alt="brand-image" /> </a></div> -->
                                                                    <?php } ?>
                                                                    <!-- end loop -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ending content -->





<?php } ?>