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
          if($i == 0) {
                  $tab_menu .= '
                  <span class="filter-item active" data-filter=".'.$ids.'"> '.$row['jdl_album'].' </span> 
                  ';
                  $tab_content .= '
                  <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 '.$ids.'">
                  ';
                  } else {
                  $tab_menu .= '
                  <span class="filter-item" data-filter=".'.$ids.'"> '. $row['jdl_album'].' </span> 
                  ';
                  $tab_content .= '
                  <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 '.$ids.'">
                  ';
          }
      $product_query = $this->db->query("SELECT * FROM gallery WHERE id_album = $ids LIMIT 4");
      foreach($product_query->result_array() as $sub_row )
      {
          $isi_layanan = strip_tags($sub_row['jdl_gallery']); 
                              $isi = substr($isi_layanan,0,150); 
                              $isi = substr($isi_layanan,0,strrpos($isi," "));

      $url = base_url();
      $tab_content .= '
                    <div class="grid-item-inner fesa"> <span class="hover-effect cms-over"> <img class="" src="asset/img_galeri/'.$sub_row['gbr_gallery'].'" style="width:500px; height:300px;" alt="shutterstock_682632427" title="shutterstock_682632427" /> </span>
                        <div class="grid-item-content">
                            <div class="up-icon">
                                <a class="light-box" href="'.$url.'/gallery/detail/'.$row['album_seo'].'"> <i class="zmdi zmdi-plus"></i> </a>
                            </div>
                        </div>
                    </div>

          ';
        }
        $tab_content .= '</div>';
        $i++;
        }
        ?>




<div id="content" class="site-content">
            <div class="content-inner">
                <div class="container content-container">
                    <div class="row content-row">
                        <div id="primary" class="content-area content-full-width col-12">
                            <main id="main" class="site-main">
                                <article id="post-38" class="post-38 page type-page status-publish hentry">
                                    <div class="entry-content clearfix">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-gallery" class="cms-grid cms-gallery-grid images-light-box clearfix ">
                                                            
                                                        <div class="grid-filter-wrap filter-primary align-left"> 
                                                        <?php echo $tab_menu; ?>
                                                          <!-- <span class="filter-item active" data-filter="*">All</span> 
                                                          <span class="filter-item" data-filter=".distribution"> Distribution </span> 
                                                          <span class="filter-item" data-filter=".warehousing"> Warehousing </span>                                                                
                                                          <span class="filter-item" data-filter=".optimization"> Optimization </span> 
                                                          <span class="filter-item" data-filter=".logistics"> Logistics </span> 
                                                          <span class="filter-item" data-filter=".analystics"> Analystics </span> -->
                                                        </div>
                                                            
                                                        <div class="cms-grid-inner cms-grid-masonry row" data-gutter="15">
                                                                <div class="grid-sizer col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12"></div>
                                                                  <!-- <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 distribution"> -->
                                                                      <!-- isi -->
                                                                      <?php echo $tab_content; ?>
                                                                  <!-- </div> -->
                                                                <!-- <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 warehousing">
                                                                    <div class="grid-item-inner"> <span class="hover-effect cms-over"> <img class="" src="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/shutterstock_682632460-715x600.jpg" width="715" height="600" alt="shutterstock_682632460" title="shutterstock_682632460" /> </span>
                                                                        <div class="grid-item-content">
                                                                            <div class="up-icon">
                                                                                <a class="light-box" href="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/shutterstock_682632460.jpg"> <i class="zmdi zmdi-plus"></i> </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <!-- <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 optimization">
                                                                    <div class="grid-item-inner"> <span class="hover-effect cms-over"> <img class="" src="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/shutterstock_301750778-715x600.jpg" width="715" height="600" alt="shutterstock_301750778" title="shutterstock_301750778" /> </span>
                                                                        <div class="grid-item-content">
                                                                            <div class="up-icon">
                                                                                <a class="light-box" href="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/shutterstock_301750778.jpg"> <i class="zmdi zmdi-plus"></i> </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <!-- <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 logistics">
                                                                    <div class="grid-item-inner"> <span class="hover-effect cms-over"> <img class="" src="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/shutterstock_682632511-715x600.jpg" width="715" height="600" alt="shutterstock_682632511" title="shutterstock_682632511" /> </span>
                                                                        <div class="grid-item-content">
                                                                            <div class="up-icon">
                                                                                <a class="light-box" href="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/shutterstock_682632511.jpg"> <i class="zmdi zmdi-plus"></i> </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <!-- <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 analystics">
                                                                    <div class="grid-item-inner"> <span class="hover-effect cms-over"> <img class="" src="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/shutterstock_722794939-715x600.jpg" width="715" height="600" alt="shutterstock_722794939" title="shutterstock_722794939" /> </span>
                                                                        <div class="grid-item-content">
                                                                            <div class="up-icon">
                                                                                <a class="light-box" href="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/shutterstock_722794939.jpg"> <i class="zmdi zmdi-plus"></i> </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <!-- <div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 distribution">
                                                                    <div class="grid-item-inner"> <span class="hover-effect cms-over"> <img class="" src="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/case1-715x600.jpg" width="715" height="600" alt="case1" title="case1" /> </span>
                                                                        <div class="grid-item-content">
                                                                            <div class="up-icon">
                                                                                <a class="light-box" href="<?= base_url(); ?>plugin/wp-content/uploads/2019/03/case1.jpg"> <i class="zmdi zmdi-plus"></i> </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            <!-- </div> -->
                                                        </div>
                                                        <div class="cms-inline-css" style="display:none" data-css="#cms-gallery .cms-grid-inner {
                                                            margin: 0 -15px;
                                                            }
                                                            #cms-gallery .cms-grid-inner .grid-item, #cms-gallery .cms-grid-inner .grid-sizer {
                                                            padding: 15px !important;
                                                            }
                                                            ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .entry-content -->
                                </article>
                                <!-- #post-38 -->
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