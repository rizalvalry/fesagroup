<div id="content" class="site-content">
            <div class="content-inner">
                <div class="container content-container">
                    <div class="row content-row">
                        <div id="primary" class="content-area content-full-width col-12">
                            <main id="main" class="site-main">
                                <article id="post-69" class="post-69 page type-page status-publish hentry">
                                    <div class="entry-content clearfix">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms_grid_blog" class="cms-grid cms-grid-blog layout1 cms-grid-layout-modern  ">
                                                            <div class="cms-grid-inner cms-grid-masonry row animation-time" data-gutter="15">
                                                                <div class="grid-sizer col-lg-4 col-md-6 col-sm-12 col-12"></div>
                                                                <!-- loop here -->
                                                                <?php 
                                                                $no = 1;
                                                                foreach ($kategori->result_array() as $row){
                                                                  $isi_berita = strip_tags($row['isi_berita']); 
                                                                  $isi = substr($isi_berita,0,150); 
                                                                  $isi = substr($isi_berita,0,strrpos($isi," "));
                                                                  $tanggal = tgl_indo($row['tanggal']);
                                                                  if ($row['gambar'] == ''){ $foto = 'small_no-image.jpg'; }else{ $foto = $row['gambar']; }
                                                                  ?>
                                                                <div class="grid-item col-lg-4 col-md-6 col-sm-12 col-12 " style="margin-bottom: 5em !important;">
                                                                    <div class="grid-item-inner wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                                        <a href="<?= base_url(); ?>berita/detail/<?= $row['judul_seo']; ?>">
                                                                            <div class="item-featured">
                                                                                <div class="item-background bg-image" style="background: url('<?= base_url(); ?>asset/foto_berita/<?= $foto; ?>')"></div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="item-holder">
                                                                            <div class="entry-meta">
                                                                                <div class="cats-meta"> <a href="../category/distribution/index.html" rel="tag">Distribution</a> <a href="../category/logistic/index.html" rel="tag">Logistics</a></div> <span><?= $row['hari']; ?>, <?= $tanggal ?></span></div>
                                                                            <h3 class="item-title"> <a href="<?= base_url(); ?>berita/detail/<?= $row['judul_seo']; ?>"><?= $row['judul']; ?></a></h3>
                                                                              <div class="item-content">
                                                                                    <?= $isi; ?>
                                                                              </div>
                                                                            <div class="item-readmore"> <a href="<?= base_url(); ?>berita/detail/<?= $row['judul_seo']; ?>">Read More</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php $no++; 
                                                              } ?>
                                                                <!-- end here -->
                                                                
                                                            </div>
                                                            <div class="cms-load-more text-center">
                                                                <div class="btn"> <span class="text">Load More</span> <span class="loading-icon"><i class="fa"></i></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="cms-inline-css" style="display:none" data-css="#cms_grid_blog .cms-grid-inner {
                                                            margin: 0 -15px;
                                                            }
                                                            #cms_grid_blog .cms-grid-inner .grid-item, #cms_grid_blog .cms-grid-inner .grid-sizer {
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
                                <!-- #post-69 -->
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