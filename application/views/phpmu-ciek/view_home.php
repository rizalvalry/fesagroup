<!-- body awal -->
<?php $homepages = $this->model_utama->homepage(1); 
    foreach ($homepages->result_array() as $row){ ?>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1554718981365 row-overflow-unset">
    <div class="wpb_column vc_column_container vc_col-sm-7">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="cms-heading" class="cms-heading close-spacing  ">
                    <div class="title-heading">
                        <h2 class="heading-tag" style="font-size:43px;line-height:57px;font-weight:700; ">
                        
                            <?= $row['info']; ?>
 
                    </h2>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1554718695319">
                    <div class="wpb_column vc_column_container vc_col-sm-5">
                        <div class="vc_column-inner vc_custom_1555314753180">
                            <div class="wpb_wrapper">
                                <div id="cms-fancybox-carousel" class="cms-fancybox-carousel default owl-carousel  "
                                    data-item-xs=1 data-item-sm=1 data-item-md=1 data-item-lg=1 data-margin=30
                                    data-loop=false data-autoplay=false data-autoplaytimeout=5000 data-smartspeed=250
                                    data-center=false data-arrows=false data-bullets=true data-stagepadding=0
                                    data-rtl=false>

                                    <!-- start looping -->
                                    <?php $visimision = $this->model_utama->visimisi(); 
                                        foreach ($visimision->result_array() as $slidevisimisi){ ?>
                                    <div class="cms-fancybox-item ">
                                        <div class="cms-fancybox-icon"> <img
                                                src="plugin/wp-content/uploads/2019/04/c_fancybox_1.png"
                                                alt="Our Mission" /></div>
                                        <div class="cms-fancybox-content">
                                            <h5 class="cms-fancybox-title" style=""> <?= $slidevisimisi['judul'];?></h5>
                                            <div class="cms-fancybox-description">
                                                <!-- <p><?= $slidevisimisi['isi_halaman']; ?></p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- end looping -->

                                    <!-- <div class="cms-fancybox-item ">
                                        <div class="cms-fancybox-icon"> <img
                                                src="plugin/wp-content/uploads/2019/04/c_fancybox_2.png"
                                                alt="Our Vision" /></div>
                                        <div class="cms-fancybox-content">
                                            <h5 class="cms-fancybox-title" style=""> Our Vision</h5>
                                            <div class="cms-fancybox-description">
                                                <p>The best possible service in
                                                    the sphere of optimized
                                                    route of cargo &amp;
                                                    transportation worldwide.
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $row['isi']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-5">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div
                    class="wpb_single_image wpb_content_element vc_align_right  vc_custom_1556333197709  cms-single-image-load inherit">
                    <figure class="wpb_wrapper vc_figure">
                        <div class="vc_single_image-wrapper box-overlay-right  vc_box_border_grey">
                            <img width="420" height="495" src="<?= base_url(); ?>asset/foto_info/<?=  $row['gambar']; ?>"
                                class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" />
                        </div>
                    </figure>
                </div>
                <div id="cms-space-6367027251bbc">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-6367027251bbc .cms-space {
                        height: 11px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-6367027251bbc .cms-space {
                        height: 40px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-6367027251bbc .cms-space {
                        height: 40px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-6367027251bbc .cms-space {
                        height: 45px;
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
<?php } ?>
<!-- end body awal  -->

<!-- body kedua -->
<?php $homepages = $this->model_utama->homepage(2); 
    foreach ($homepages->result_array() as $row){ ?>
<div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cms-space-6367027252103">
                        <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                            #cms-space-6367027252103 .cms-space {
                            height: 42px;
                            }
                            }
                            "></div>
                        <div class="cms-space"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
        class="vc_row wpb_row vc_row-fluid vc_custom_1555647705266 vc_row-has-fill" style="background-image: url(<?= base_url(); ?>asset/foto_info/<?=  $row['gambar']; ?>) !important;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cms-space-636702725261e">
                        <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                            #cms-space-636702725261e .cms-space {
                            height: 104px;
                            }
                            }
                            @media (min-width: 768px) and (max-width: 991px) {
                            #cms-space-636702725261e .cms-space {
                            height: 40px;
                            }
                            }
                            @media (min-width: 576px) and (max-width: 767px) {
                            #cms-space-636702725261e .cms-space {
                            height: 40px;
                            }
                            }
                            @media screen and (max-width: 575px) {
                            #cms-space-636702725261e .cms-space {
                            height: 40px;
                            }
                            }
                            ">
                        </div>
                        <div class="cms-space"></div>
                    </div>
                </div>
            </div>
        </div>
    <div class="wpb_column vc_column_container vc_col-sm-6">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="cms-video-popup-5" class="cms-video-popup  inline-block ">
                    <div class="cms-video-popup-content bg-image"> 
                        <a class="default video-no-autoplay play-video-button " href="data/vimeo.com/192332438.html">
                            <div class="icon size-default"> <i class="fa fa-play"></i> <span class="radar"></span></div>
                        </a>
                    </div>
                </div>
                <div id="cms-space-6367027252ca0">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-6367027252ca0 .cms-space {
                        height: 40px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-6367027252ca0 .cms-space {
                        height: 40px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-6367027252ca0 .cms-space {
                        height: 40px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-6367027252ca0 .cms-space {
                        height: 40px;
                        }
                        }
                        ">
                    </div>
                    <div class="cms-space"></div>
                </div>
                <div id="cms-heading-2" class="cms-heading layout3   ">
                <?= $row['info']; ?>
                    
                </div>
                <div class="cms-inline-css" style="display:none" data-css="    #cms-heading-2.layout3 .title-underline:after {
    background-color: #ff5e14!important;
    }
    "></div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-6">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="cms-space-6367027253850">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-6367027253850 .cms-space {
                        height: 114px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-6367027253850 .cms-space {
                        height: 114px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-6367027253850 .cms-space {
                        height: 20px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-6367027253850 .cms-space {
                        height: 20px;
                        }
                        }
                        ">
                    </div>
                    <div class="cms-space"></div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid flex-mobile">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner vc_custom_1555637510868">
                            <div class="wpb_wrapper">
                                <div id="cms-counter" class="cms-counter layout1   text-center-lg">
                                    <div class="cms-counter-inner">
                                        <div class="cms-counter-content">
                                            <div class="cms-counter-content-inner">
                                                <div class="cms-counter-icon">
                                                    <img src="plugin/wp-content/uploads/2019/04/counter1.png"
                                                        alt="Clients Worldwide" />
                                                </div> <span id="cms-counter-digit" class="cms-counter-digit"
                                                    data-grouping="1" data-separator="," data-digit="200"
                                                    data-prefix="" 
                                                    style="font-size: 43px; color: #ffffff; "></span>
                                                <p class="cms-counter-title" style="font-size: 14px; color: #ffffff; ">
                                                Klien di Seluruh Nusantara</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner vc_custom_1555637543729">
                            <div class="wpb_wrapper">
                                <div id="cms-counter-2" class="cms-counter layout1   text-center-lg">
                                    <div class="cms-counter-inner">
                                        <div class="cms-counter-content">
                                            <div class="cms-counter-content-inner">
                                                <div class="cms-counter-icon">
                                                    <img src="plugin/wp-content/uploads/2019/04/counter2.png"
                                                        alt="Delivered Goods" />
                                                </div> <span id="cms-counter-2-digit" class="cms-counter-digit"
                                                    data-grouping="1" data-separator="," data-digit="5154"
                                                    data-prefix=""
                                                    style="font-size: 43px; color: #ffffff; "></span>
                                                <p class="cms-counter-title" style="font-size: 14px; color: #ffffff; ">
                                                mitra dengan Kiriman Terbaik</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div id="cms-counter-3" class="cms-counter layout1   text-center-lg">
                                    <div class="cms-counter-inner">
                                        <div class="cms-counter-content">
                                            <div class="cms-counter-content-inner">
                                                <div class="cms-counter-icon">
                                                    <img src="plugin/wp-content/uploads/2019/04/counter3.png"
                                                        alt="Miles Driven" />
                                                </div> <span id="cms-counter-3-digit" class="cms-counter-digit"
                                                    data-grouping="1" data-separator="," data-digit="8845"
                                                    data-prefix="" data-suffix="m"
                                                    style="font-size: 43px; color: #ffffff; "></span>
                                                <p class="cms-counter-title" style="font-size: 14px; color: #ffffff; ">
                                                    Logistik Perjalanan Handal</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="cms-space-63670272552d2">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-63670272552d2 .cms-space {
                        height: 210px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-63670272552d2 .cms-space {
                        height: 55px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-63670272552d2 .cms-space {
                        height: 55px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-63670272552d2 .cms-space {
                        height: 55px;
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
<?php } ?>
<!-- end body kedua -->

<!-- body ketiga -->
<div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
        class="vc_row wpb_row vc_row-fluid vc_custom_1555381628937 vc_row-has-fill row-overflow-unset">
        <div class="negative-margin-responsive wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1555639260762">
                <div class="wpb_wrapper">
                    <div class="cms-contact-form-tab    ">
                        <?php 
                        $layananfesa = $this->model_utama->layanantrucking();
                        $layananretail = $this->model_utama->layananfesa();
                        $retailservices = $this->model_utama->retail();
                        
                        ?>
                                <div class="nav nav-tabs" role="tablist"> 
                                    <!-- looping -->
                                    <?php 
                                    $tab = 0;
                                    $loopicon = 1;
                                    
                                    foreach($layananretail->result_array() as $tablayanan) { ?>
                                    <a class="tab-item <?= ($tab == 0) ? 'active' : '' ?>" data-toggle="tab" href=".tab-<?=$tab; ?>"
                                        role="tab" aria-selected="true"> <img src="plugin/wp-content/uploads/2019/04/form-tab<?=$loopicon;?>.png"
                                             /> <span><?= $tablayanan['nama_menu']; ?></span>
                                    </a> 
                                    <!-- <a class="tab-item " data-toggle="tab" href=".tab-1" role="tab" aria-selected="true"> <img
                                            src="plugin/wp-content/uploads/2019/04/form-tab2.png" alt="tab-icon2" /> <span>Retail</span> 
                                        </a> -->
                                        <?php $tab++; $loopicon++; } ?>
                                        <!-- end looping -->
                                </div>
                    <div class="tab-content">
                        <div class="tab-pane fade tab-0 active show" role="tabpanel">
                                <div class="cms-case-studies-carousel layout3 logisti-carousel owl-carousel animation-time"
                                    data-item-xs=1 data-item-sm=2 data-item-md=3
                                    data-item-lg=3 data-margin=30 data-loop=false
                                    data-autoplay=false data-autoplaytimeout=5000
                                    data-smartspeed=250 data-center=false
                                    data-arrows=false data-bullets=true
                                    data-stagepadding=0 data-rtl=false>
                                    <!-- start looping -->
                                    <?php foreach ($layananfesa->result_array() as $slidelayanan){ ?>
                                    <div class="grid-item-inner">
                                        <div class="item-featured"
                                            style="background: url('asset/foto_banner/<?= $slidelayanan['gambar'];?>')">
                                            <a
                                                href="<?= base_url()."page/detail/".seo_title($slidelayanan['judul'])?>">
                                                <div class="overlay-gradient"></div>
                                                <i class="zmdi zmdi-plus"></i>
                                            </a></div>
                                        <div class="item-holder has-exerpt">
                                            <!-- <div class="cat"> <a
                                                    href="plugin/portfolio-category/distribution/index.html"
                                                    rel="tag">Distribution</a>, <a
                                                    href="plugin/portfolio-category/warehousing/index.html"
                                                    rel="tag">Warehousing</a></div> -->
                                            <h5> <a
                                                    href="<?= base_url()."page/detail/".seo_title($slidelayanan['judul'])?>"><?= $slidelayanan['judul'] ?></a></h5>
                                            <!-- <div class="item-content"> Cost savings
                                                is crucial, innovative technology
                                                minimizes your overall spend by
                                                utilizing an extensive consolidation
                                                schedule.</div> -->
                                            <div class="item-readmore"> <a
                                                    href="<?= base_url()."page/detail/".seo_title($slidelayanan['judul'])?>">Read
                                                    More</a></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- end looping -->
                                   
                                </div>
                        </div>
                        <div class="tab-pane fade tab-1 " role="tabpanel">
                            <div class="cms-contact-form cms-contact-form-default    ">
                                <div role="form" class="wpcf7" id="wpcf7-f1028-p20-o2" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <!-- isi tombol ya -->
                                    <!-- <a style="padding-right:20px;padding-left:20px;margin-top:34px;"
                        href="galeri" target="_blank" class="btn btn-default"> <span>Lihat
                            Galeri</span> </a> -->

                            <div class="cms-case-studies-carousel layout3 logisti-carousel owl-carousel animation-time"
                                    data-item-xs=1 data-item-sm=2 data-item-md=3
                                    data-item-lg=3 data-margin=30 data-loop=false
                                    data-autoplay=false data-autoplaytimeout=5000
                                    data-smartspeed=250 data-center=false
                                    data-arrows=false data-bullets=true
                                    data-stagepadding=0 data-rtl=false>
                                    <!-- start looping -->
                                    <?php foreach ($retailservices->result_array() as $slideretail){ ?>
                                    <div class="grid-item-inner">
                                        <div class="item-featured"
                                            style="background: url('asset/foto_banner/<?= $slideretail['gambar'];?>')">
                                            <a
                                                href="<?= base_url()."page/detail/".seo_title($slideretail['judul'])?>">
                                                <div class="overlay-gradient"></div>
                                                <i class="zmdi zmdi-plus"></i>
                                            </a></div>
                                        <div class="item-holder has-exerpt">
                                            <!-- <div class="cat"> <a
                                                    href="plugin/portfolio-category/distribution/index.html"
                                                    rel="tag">Distribution</a>, <a
                                                    href="plugin/portfolio-category/warehousing/index.html"
                                                    rel="tag">Warehousing</a></div> -->
                                            <h5> <a
                                                    href="<?= base_url()."page/detail/".seo_title($slideretail['judul'])?>"><?= $slideretail['judul'] ?></a></h5>
                                            <!-- <div class="item-content"> Cost savings
                                                is crucial, innovative technology
                                                minimizes your overall spend by
                                                utilizing an extensive consolidation
                                                schedule.</div> -->
                                            <div class="item-readmore"> <a
                                                    href="<?= base_url()."page/detail/".seo_title($slideretail['judul'])?>">Read
                                                    More</a></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- end looping -->
                                   
                                </div>
                                        <!-- end isi ya -->

                                </div>
                            </div>
                            <!-- <div class="cms-contact-box widget"
                                style="background-image: url('plugin/wp-content/themes/logisti/assets/images/contact-box-widget.png');">
                                <h2 class="widget-title"> How Can<br /> We Help
                                    You!</h2>
                                <div class="cms-contact-text">
                                    <p>We understand the importance approaching
                                        each work integrally and believe in the
                                        power of simple and easy communication.
                                    </p>
                                </div>
                                <div class="cms-contact-button"> <a href="plugin/contacts/index.html" target="_self"
                                        class="btn btn--icon hover--slide"><i class="zmdi zmdi-email"></i>Contact
                                        Us</a></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end body ketiga -->

<!-- body ke-empat -->
<?php $homepages = $this->model_utama->homepage(3); 
    foreach ($homepages->result_array() as $row){ ?>
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false"
    class="vc_row wpb_row vc_row-fluid vc_custom_1555918074438 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-6">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="cms-heading-3" class="cms-heading layout3   ">
                    <?= $row['info']; ?>
                </div>
                <div class="cms-inline-css" style="display:none" data-css="    #cms-heading-3.layout3 .title-underline:after {
                background-color: #ff5e14!important;
                }
                "></div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-6">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="cms-space-63670272575bd">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-63670272575bd .cms-space {
                        height: 40px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-63670272575bd .cms-space {
                        height: 40px;
                        }
                        }
                        ">
                    </div>
                    <div class="cms-space"></div>
                </div>
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                    <?= $row['isi']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php } ?>
<!-- end ke-empat -->

<!-- body kelima -->

    <div class="vc_row-full-width vc_clearfix"></div>
        <div data-vc-full-width="true" data-vc-full-width-init="false"
        class="vc_row wpb_row vc_row-fluid vc_custom_1553937727764 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cms-services-grid" class="cms-grid cms-services-grid layout1  ">
                        <div class="cms-grid-inner cms-grid-masonry row animation-time" data-gutter="15">
                            <div class="grid-sizer col-lg-4 col-md-6 col-sm-12 col-12">
                            </div>

                            <?php $headline = $this->model_utama->headlinetwo(0,3);
                            $no = 1;
                            $slider = 3;
                            $layer = 5;
                            foreach ($headline->result_array() as $row){
                                $isi_layanan = strip_tags($row['isi_layanan']); 
                                $isi = substr($isi_layanan,0,150); 
                                $isi = substr($isi_layanan,0,strrpos($isi," "));
                            if ($no==1){ $active = 'active'; }else{ $active = ''; }
                                if ($row['gambar'] ==''){ $foto_slide = 'no-image.jpg'; }else{ $foto_slide = $row['gambar']; }
                                $tgl = tgl_indo($row['tanggal']); ?>
                            <div class="grid-item col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                                <div class="grid-item-inner style1 wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                    <div class="item-featured bg-image"
                                        style="background: url('<?=base_url()?>asset/foto_layanan/<?= $foto_slide; ?>')">
                                        <a href="#">
                                            <div class="primary-overlay"></div>
                                        </a>
                                        <div class="item-holder">
                                            <div class="icon-wrap"> <img class="svg service-icon"
                                                    src="<?=base_url()?>asset/foto_layanan/<?= $foto_slide; ?>" alt="" style="border-radius:20%;">
                                            </div>
                                            <h4> <a href="#"><?= $row['nama_kategori']; ?></a></h4>
                                            <div class="item-content"> <?= $isi; ?>&hellip;</div>
                                            <div class="item-readmore"> <a href="#">Read
                                                    More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- <div class="grid-item col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                            <div class="grid-item-inner style1 wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                <div class="item-featured bg-image"
                                    style="background: url('plugin/wp-content/uploads/2019/03/service3-980x650.jpg')">
                                    <a href="plugin/service/road-freight/index.html">
                                        <div class="primary-overlay"></div>
                                    </a>
                                    <div class="item-holder">
                                        <div class="icon-wrap"> <img class="svg service-icon"
                                                src="plugin/wp-content/uploads/2019/03/truck.svg" alt=""></div>
                                        <h4> <a href="plugin/service/road-freight/index.html">Road
                                                Freight</a></h4>
                                        <div class="item-content"> Road
                                            transportation has a crucial role.
                                            coordinated transportation in the
                                            countries of origin destination
                                            makes all the difference.</div>
                                        <div class="item-readmore"> <a
                                                href="plugin/service/road-freight/index.html">Read
                                                More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="cms-inline-css" style="display:none" data-css="#cms-services-grid .cms-grid-inner {
                    margin: 0 -15px;
                    }
                    #cms-services-grid .cms-grid-inner .grid-item, #cms-services-grid .cms-grid-inner .grid-sizer {
                    padding: 15px !important;
                    }
                    ">
                </div>
                <div class="cms-button-wrapper  align-center align-center-md align-center-sm align-center-xs  ">
                    <a style="padding-right:20px;padding-left:20px;margin-top:34px;"
                        href="plugin/request-a-quote/index.html" target="_blank" class="btn btn-default"> <span>Schedule
                            An
                            Appointment</span> </a>
                </div>
                <div id="cms-space-63670272598f7">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-63670272598f7 .cms-space {
                        height: 110px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-63670272598f7 .cms-space {
                        height: 110px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-63670272598f7 .cms-space {
                        height: 110px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-63670272598f7 .cms-space {
                        height: 110px;
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

<!-- end body kelima -->

<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1555385548962">
            <div class="wpb_wrapper">
                <div id="cms-space-6367027259e5b">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-6367027259e5b .cms-space {
                        height: 90px;
                        }
                        }
                        "></div>
                    <div class="cms-space"></div>
                </div>
                <div id="cms-heading-4"
                    class="cms-heading layout3 close-spacing   wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="subtitle">
                        <p style="font-size:17px;margin-bottom:13px;color:#ff5e14;">
                            Paket Kamu, Kamu yang Bebas Atur</p>
                    </div>
                    <div class="title-heading">
                        <h3 class="heading-tag" style="font-size:24px;line-height:35px;font-weight:700; ">
                        Kami terus mengejar inti<br /> visi yang sama untuk setiap hari ini,<br /> dunia yang tidak pasti,<br />  bekerja setiap
                        hari demi prioritas layanan kami’</h3>
                    </div>
                </div>
                <div class="cms-inline-css" style="display:none" data-css="    #cms-heading-4.layout3 .title-underline:after {
 background-color: #ff5e14!important;
 }
 "></div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1554805525840">
    <div class="wpb_column vc_column_container vc_col-sm-3">
        <div class="vc_column-inner vc_custom_1554109495307">
            <div class="wpb_wrapper">
                <div class="cms-fancybox    wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="cms-fancybox-inner clearfix">
                        <div class="cms-fancybox-icon"> <img src="plugin/wp-content/uploads/2019/03/Credit-Icon.png"
                                alt="Transparent Pricing" style=""></div>
                        <div class="cms-fancybox-content" style="margin-top:27px;">
                            <h5 class="cms-fancybox-title" style="font-size:17px; "> Transparent Pricing
                            </h5>
                            <div class="cms-fancybox-description">
                                <p style="font-size:14px; ">Dunia rantai pasokan internasional melibatkan segudang risiko yang tidak diketahui dan peraturan yang menantang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3">
        <div class="vc_column-inner vc_custom_1554109500618">
            <div class="wpb_wrapper">
                <div class="cms-fancybox    wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="cms-fancybox-inner clearfix">
                        <div class="cms-fancybox-icon"> <img src="plugin/wp-content/uploads/2019/03/Worldwide-Icon.png"
                                alt="Real-Time Tracking" style=""></div>
                        <div class="cms-fancybox-content" style="margin-top:27px;">
                            <h5 class="cms-fancybox-title" style="font-size:17px; "> Real-Time Tracking
                            </h5>
                            <div class="cms-fancybox-description">
                                <p style="font-size:14px; ">Kami memastikan kami
                                     rantai pasokan pelanggan sepenuhnya sesuai
                                     oleh praktik dan program kami yang komprehensif.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3">
        <div class="vc_column-inner vc_custom_1554109505032">
            <div class="wpb_wrapper">
                <div class="cms-fancybox    wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="cms-fancybox-inner clearfix">
                        <div class="cms-fancybox-icon"> <img src="plugin/wp-content/uploads/2019/03/Boxes-Icon.png"
                                alt="Warehouse Storage" style=""></div>
                        <div class="cms-fancybox-content" style="margin-top:27px;">
                            <h5 class="cms-fancybox-title" style="font-size:17px; "> Warehouse Storage</h5>
                            <div class="cms-fancybox-description">
                                <p style="font-size:14px; ">Tergantung pada Anda
                                     produk, kebutuhan dan persyaratan, kami menyediakan
                                     kegiatan gudang profesional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3">
        <div class="vc_column-inner vc_custom_1554109509156">
            <div class="wpb_wrapper">
                <div class="cms-fancybox    wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="cms-fancybox-inner clearfix">
                        <div class="cms-fancybox-icon"> <img src="plugin/wp-content/uploads/2019/03/Balance-Icon.png"
                                alt="Security For Cargo" style=""></div>
                        <div class="cms-fancybox-content" style="margin-top:27px;">
                            <h5 class="cms-fancybox-title" style="font-size:17px; "> Security For Cargo
                            </h5>
                            <div class="cms-fancybox-description">
                                    <p style="font-size:14px; ">Fasilitas kami bertemu
                                         persyaratan keamanan tinggi dan bersertifikat
                                         dengan standar lokal tertinggi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-3">
        <div class="vc_column-inner vc_custom_1553938664572">
            <div class="wpb_wrapper">
                <div class="cms-fancybox    wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="cms-fancybox-inner clearfix">
                        <div class="cms-fancybox-icon"> <img src="plugin/wp-content/uploads/2019/03/Target-Icon.png"
                                alt="Easy Payment Methods" style=""></div>
                        <div class="cms-fancybox-content" style="margin-top:27px;">
                            <h5 class="cms-fancybox-title" style="font-size:17px; "> Easy Payment Methods
                            </h5>
                            <div class="cms-fancybox-description">
                                <p style="font-size:14px; ">Anda dapat menggunakan
                                     pilihan pembayaran yang mudah dan nyaman, terdaftar
                                     di bawah ini, yang tersedia di negara Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3">
        <div class="vc_column-inner vc_custom_1553938670932">
            <div class="wpb_wrapper">
                <div class="cms-fancybox    wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="cms-fancybox-inner clearfix">
                        <div class="cms-fancybox-icon"> <img src="plugin/wp-content/uploads/2019/03/Telephone-Icon.png"
                                alt="24/7 Hours Support" style=""></div>
                        <div class="cms-fancybox-content" style="margin-top:27px;">
                            <h5 class="cms-fancybox-title" style="font-size:17px; "> 24/7 Hours Support
                            </h5>
                            <div class="cms-fancybox-description">
                                <p style="font-size:14px; ">Kami meningkatkan kami
                                     operasi logistik dengan membebaskan Anda dari
                                     kekhawatiran yang terkait dengan pengiriman barang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3">
        <div class="vc_column-inner vc_custom_1553938674905">
            <div class="wpb_wrapper">
                <div class="cms-fancybox    wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="cms-fancybox-inner clearfix">
                        <div class="cms-fancybox-icon"> <img src="plugin/wp-content/uploads/2019/03/Delivery-Icon.png"
                                alt="Fast &amp; Efficient Delivery" style="">
                        </div>
                        <div class="cms-fancybox-content" style="margin-top:27px;">
                            <h5 class="cms-fancybox-title" style="font-size:17px; "> Fast &amp; Efficient
                                Delivery</h5>
                            <div class="cms-fancybox-description">
                                <p style="font-size:14px; ">Kami meningkatkan kami
                                     operasi logistik dengan membebaskan Anda dari
                                     kekhawatiran yang terkait dengan pengiriman barang.
                                </p>
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
                <div class="cms-fancybox layout2    wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                    <div class="cms-fancybox-inner clearfix" style="background-color:#ff5e14;">
                        <div class="cms-fancybox-icon"> <img src="plugin/wp-content/uploads/2019/05/Stamp-Icon.png" alt="Awards &amp;&lt;br /&gt;
Milestones" style=""></div>
                        <div class="cms-fancybox-content" style="margin-top:12px;">
                            <h5 class="cms-fancybox-title" style="font-size:25px; color:#fff;"> <a
                                    href="plugin/why-choose-us/index.html" target="_blank"> Awards &amp;<br />
                                    Milestones </a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-vc-full-width="true" data-vc-full-width-init="false"
    class="vc_row wpb_row vc_row-fluid vc_custom_1554805607833 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1555035439178">
            <div class="wpb_wrapper">
                <div id="cms-partner-carousel" class="cms-partner-carousel layout1  default owl-carousel  "
                    data-item-xs=1 data-item-sm=3 data-item-md=4 data-item-lg=6 data-margin=30 data-loop=false
                    data-autoplay=false data-autoplaytimeout=5000 data-smartspeed=250 data-center=false
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
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false"
    class="vc_row wpb_row vc_row-fluid vc_custom_1555658502891 vc_row-has-fill row-overflow-unset">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1554104211341">
            <div class="wpb_wrapper">
                <div id="cms-space-636702725f3d9">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-636702725f3d9 .cms-space {
                        height: 90px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-636702725f3d9 .cms-space {
                        height: 40px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-636702725f3d9 .cms-space {
                        height: 40px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-636702725f3d9 .cms-space {
                        height: 40px;
                        }
                        }
                        ">
                    </div>
                    <div class="cms-space"></div>
                </div>
                <div id="cms-heading-5" class="cms-heading layout2   ">
                    <div class="subtitle">
                        <p style="font-size:14px;color:#ffffff;margin-bottom:10px;">
                            Latest Case Studies</p>
                    </div>
                    <div class="title-heading">
                        <h2 class="heading-tag title-underline" style="color:#ffffff;font-weight:700; "> Featured
                            & Galeri</h2>
                    </div>
                </div>
                <div class="cms-inline-css" style="display:none" data-css="    #cms-heading-5.layout2 .title-underline:after {
                    background-color: #ffffff!important;
                    }
                    ">
                </div>
            </div>
        </div>
    </div>

    <style>
        /* * {
        box-sizing: border-box;
        }

        body {
        font-family: Arial, Helvetica, sans-serif;
        } */

        /* Float four columns side by side */
        .column {
        float: left;
        width: 33.3%;
        padding: 0 5px;
        margin-bottom:1em;
        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        .row.tree {
            margin: 2em !important;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
        }

        .object-project {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            /* border-radius:5px; */
        }

        /* Style the counter cards */
        .card-project {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        
        /* padding: 10px; */
        min-height: 20vw;
        text-align: center;
        /* background-color: #f1f1f1; */
        }
    </style>


    <!-- codee here -->
            <?php

        $tab_result = $this->db->query("SELECT * FROM album where aktif='Y'");
        $tab_menu = '';
        $tab_content = '';
        $i = 0;
        $firstItem = true;
        foreach($tab_result->result_array() as $row)
        {
            $ids = $row['id_album'];
            // var_dump($row['jdl_album']);die();
        if($i == 0)
        {
        $tab_menu .= '
        <a class="filter-item active" data-toggle="tab" href=".'.$ids.'" role="tab" aria-selected="true"
                                style="color: #ffffff">'.$row['jdl_album'].'</a>
        ';
        $tab_content .= '
        <div class="'.$ids.' tab-pane fade show active" role="tabpanel">
        ';
        }
        else
        {
        $tab_menu .= '
        <a class="filter-item" data-toggle="tab" href=".'.$ids.'" role="tab" aria-selected="true"
        style="color: #ffffff">'. $row['jdl_album'].'</a> 
        ';
        $tab_content .= '
        <div class="tab-pane fade '.$ids.'" role="tabpanel">
        ';
        }
        $product_query = $this->db->query("SELECT * FROM gallery WHERE id_album = $ids LIMIT 4");
        $tab_content .= '<div class="row tree">';
        foreach($product_query->result_array() as $sub_row )
        {
            $isi_layanan = strip_tags($sub_row['jdl_gallery']); 
                                $isi = substr($isi_layanan,0,150); 
                                $isi = substr($isi_layanan,0,strrpos($isi," "));
        $tab_content .= '

        
        <div class="column">
            <div class="card-project">
                <img class="object-project" src="asset/img_galeri/'.$sub_row['gbr_gallery'].'" alt="Avatar" style="width:100%; height:200px;">
                <div class="container">
                <p class="cms-fancybox-title" style="margin-top:1vw; color:#ff5e158f;"><b>'.$sub_row['jdl_gallery'].'</b></p> 
                
                </div>
            </div>
        </div>
  
  
                        
        ';
        }
        $tab_content .= '</div><div style="clear:both"></div></div>';
        $i++;
        }
        ?>
    <!-- end code here -->

    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1558319230930">
            <div class="wpb_wrapper">
                <div id="cms-case-studies-carousel" class="cms-case-studies-carousel-wrap  ">
                        <div class="grid-filter-wrap filter-primary nav nav-tabs align-left" role="tablist"> 
                                <!-- <a class="filter-item active" data-toggle="tab" href=".all" role="tab" aria-selected="true"
                                style="color: #ffffff">All
                                Works</a> -->
                                <?php echo $tab_menu; ?>

                                
                        </div>
                    <div class="tab-content">
                       
                        
                        <?php echo $tab_content; ?>
                        
                        

                        <!-- end here blog -->

                    </div>
                </div>
                <div class="cms-inline-css" style="display:none" data-css="#cms-case-studies-carousel .nav-tabs .filter-item.active,#cms-case-studies-carousel .nav-tabs .filter-item:hover {
                    color: #ffffff!important;
                    }#cms-case-studies-carousel .nav-tabs .filter-item:after {
                    background-color: #ffffff!important;
                    }">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false"
    class="vc_row wpb_row vc_row-fluid vc_custom_1554806955529 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="cms-space-6367027265c4b">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-6367027265c4b .cms-space {
                        height: 295px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-6367027265c4b .cms-space {
                        height: 276px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-6367027265c4b .cms-space {
                        height: 276px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-6367027265c4b .cms-space {
                        height: 276px;
                        }
                        }
                        ">
                    </div>
                    <div class="cms-space"></div>
                </div>
                <div class="cms-testimonial-title align-center">
                    <h2 style="color:#ff5e14;">Our Gallery</h2>
                </div>
                <div id="cms-testimonial-carousel" class="cms-testimonial-carousel layout1 owl-carousel  "
                    data-item-xs=1 data-item-sm=1 data-item-md=1 data-item-lg=1 data-margin=30 data-loop=false
                    data-autoplay=false data-autoplaytimeout=5000 data-smartspeed=250 data-center=false
                    data-arrows=false data-bullets=true data-stagepadding=0 data-rtl=false data-dotscontainer="true"
                    data-drag="false">
                    <div class="cms-testimonial-item ">
                        <div class="cms-testimonial-item-inner">
                            <div class="cms-testimonial-content clearfix" style="color:#9b9b9b;">
                                <div class="testimonials-icon" style="color:#f1f1f1;"> <i class="zmdi zmdi-quote"></i>
                                </div>
                                <p class="content">Tim Logisti adalah yang terbaik dari yang terbaik, dan anggota tim yang terlatih secara ahli yang mengambil langkah ekstra dan bekerja lebih keras, semua untuk memenuhi janji khusus kami untuk memberikan solusi inovatif dan dinamis kepada pelanggan kami agar sesuai dengan kebutuhan lingkungan global yang berubah dengan cepat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cms-testimonial-item ">
                        <div class="cms-testimonial-item-inner">
                            <div class="cms-testimonial-content clearfix" style="color:#9b9b9b;">
                                <div class="testimonials-icon" style="color:#f1f1f1;"> <i class="zmdi zmdi-quote"></i>
                                </div>
                                <p class="content">Logisti team is the best of
                                    the best, and expertly trained team members
                                    who take the extra step and go the extra
                                    mile, all to fulfill our dedicated promise
                                    to deliver innovative and dynamic solutions
                                    to our customers to fit the needs of a
                                    rapidly changing global environment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cms-testimonial-item ">
                        <div class="cms-testimonial-item-inner">
                            <div class="cms-testimonial-content clearfix" style="color:#9b9b9b;">
                                <div class="testimonials-icon" style="color:#f1f1f1;"> <i class="zmdi zmdi-quote"></i>
                                </div>
                                <p class="content">Logisti team is the best of
                                    the best, and expertly trained team members
                                    who take the extra step and go the extra
                                    mile, all to fulfill our dedicated promise
                                    to deliver innovative and dynamic solutions
                                    to our customers to fit the needs of a
                                    rapidly changing global environment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav">
                    <div class="thumbs">
                        <div class="thumb"> <img src="plugin/wp-content/uploads/2019/03/avatar2.jpg" alt="Sami Wade" />
                            <p class="name" style="color:#282828;">Sami Wade</p>
                            <p class="position" style="color:#616161;">WhiteMov
                            </p>
                        </div>
                        <div class="thumb"> <img src="plugin/wp-content/uploads/2019/03/avatar.jpg" alt="John Peter" />
                            <p class="name" style="color:#282828;">John Peter
                            </p>
                            <p class="position" style="color:#616161;">Mov Inc
                            </p>
                        </div>
                        <div class="thumb"> <img src="plugin/wp-content/uploads/2019/03/avatar3.jpg"
                                alt="Martin Hope" />
                            <p class="name" style="color:#282828;">Martin Hope
                            </p>
                            <p class="position" style="color:#616161;">ProMov
                            </p>
                        </div>
                    </div>
                </div>
                <div id="cms-space-6367027266d00">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-6367027266d00 .cms-space {
                        height: 168px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-6367027266d00 .cms-space {
                        height: 168px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-6367027266d00 .cms-space {
                        height: 168px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-6367027266d00 .cms-space {
                        height: 168px;
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
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="cms-space-63670272672a0">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-63670272672a0 .cms-space {
                        height: 90px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-63670272672a0 .cms-space {
                        height: 40px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-63670272672a0 .cms-space {
                        height: 40px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-63670272672a0 .cms-space {
                        height: 40px;
                        }
                        }
                        ">
                    </div>
                    <div class="cms-space"></div>
                </div>
                <div id="cms-heading-6" class="cms-heading layout2   ">
                    <div class="subtitle">
                        <p style="font-size:14px;color:#ff5e14;margin-bottom:10px;">
                            Insight and Trends</p>
                    </div>
                    <div class="title-heading">
                        <h2 class="heading-tag title-underline" style="font-weight:700; "> Berita dan Artikel Terbaru</h2>
                    </div>
                    <div class="description">
                        <p>Ikuti berita dan pemikiran terbaru kami yang fokus
                             secara eksklusif pada<br /> insight, tren industri, teratas
                             berita utama.</p>
                    </div>
                </div>
                <div class="cms-inline-css" style="display:none" data-css="    #cms-heading-6.layout2 .title-underline:after {
                    background-color: #ff5e14!important;
                    }
                    ">
                </div>
                <div id="cms-space-63670272677dd">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-63670272677dd .cms-space {
                        height: 26px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-63670272677dd .cms-space {
                        height: 26px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-63670272677dd .cms-space {
                        height: 26px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-63670272677dd .cms-space {
                        height: 26px;
                        }
                        }
                        ">
                    </div>
                    <div class="cms-space"></div>
                </div>
                <div id="cms-grid-blog" class="cms-grid cms-grid-blog layout1 cms-grid-layout-modern  ">
                    <div class="cms-grid-inner cms-grid-masonry row animation-time" data-gutter="15">
                        <div class="grid-sizer col-lg-4 col-md-6 col-sm-6 col-12">
                        </div>

                        <?php 
                    $terbaru = $this->db->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.dibaca DESC LIMIT 3"); ?>
                    
                        <!-- start looping -->
                        <?php foreach ($terbaru->result_array() as $row){
                            $isi_berita = strip_tags($row['isi_berita']); 
                            $description = substr($isi_berita,0,360); 
                            $description = substr($isi_berita,0,strrpos($description," "));

                            $tanggaldetail = tgl_indo($row['tanggal']); 
                      if ($row['gambar'] == ''){ $fotodetail = 'small_no-image.jpg'; }else{ $fotodetail = $row['gambar']; }
                      ?>
                        <div class="grid-item col-lg-4 col-md-6 col-sm-6 col-12 ">
                            <div class="grid-item-inner wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                <a
                                    href="<?php echo base_url() ?>berita/detail/<?= $row['judul_seo']; ?>">
                                    <div class="item-featured">
                                        <div class="item-background bg-image"
                                            style="background: url('asset/foto_berita/<?= $fotodetail; ?>')">
                                        </div>
                                    </div>
                                </a>
                                <div class="item-holder">
                                    <div class="entry-meta">
                                        <div class="cats-meta"> 
                                            <!-- <a href="plugin/category/distribution/index.html"
                                                rel="tag">Distribution</a>
                                                 <a href="plugin/category/logistic/index.html"
                                                rel="tag">Logistics</a> -->
                                            <a href="#"
                                                rel="tag">Distribution</a>
                                                 <a href="#"
                                                rel="tag">Logistics</a>
                                            </div>
                                        <span>Nov 2, 2022</span>
                                    </div>
                                    <h3 class="item-title"> 
                                        <a
                                            href="<?php echo base_url() ?>berita/detail/<?= $row['judul_seo']; ?>">
                                            <?= $row['judul']; ?></a>
                                        </h3>
                                    <div class="item-content"> <?= $description; ?>
                                    </div>
                                    <div class="item-readmore"> 
                                        <!-- <a
                                            href="plugin/importance-of-specialized-focus-in-projects-oil-gas-logistics/index.html"> -->
                                            <a
                                            href="<?php echo base_url() ?>berita/detail/<?= $row['judul_seo']; ?>">
                                            Read
                                            More
                                            </a>
                                        <!-- </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- end looping -->
                        
                    </div>
                </div>
                <div class="cms-inline-css" style="display:none" data-css="#cms-grid-blog .cms-grid-inner {
                    margin: 0 -15px;
                    }
                    #cms-grid-blog .cms-grid-inner .grid-item, #cms-grid-blog .cms-grid-inner .grid-sizer {
                    padding: 15px !important;
                    }
                    ">
                </div>
                <div id="cms-space-6367027269573">
                    <div class="cms-inline-css" style="display:none" data-css="    @media screen and (min-width: 992px) {
                        #cms-space-6367027269573 .cms-space {
                        height: 57px;
                        }
                        }
                        @media (min-width: 768px) and (max-width: 991px) {
                        #cms-space-6367027269573 .cms-space {
                        height: 57px;
                        }
                        }
                        @media (min-width: 576px) and (max-width: 767px) {
                        #cms-space-6367027269573 .cms-space {
                        height: 57px;
                        }
                        }
                        @media screen and (max-width: 575px) {
                        #cms-space-6367027269573 .cms-space {
                        height: 57px;
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