<section id="search-2" class="widget widget_search">
                                <div class="widget-content">
                                    <h2 class="widget-title">Search</h2>
                                    <?php 
                                      $attributes = array('id' => 'formku','role'=>'form', 'class'=>'search-form');
                                      echo form_open('berita',$attributes); 
                                    ?>
                                    <!-- <form role="search" method="get" class="search-form" action="https://demo.farost.net/logisti/"> -->
                                        <div class="searchform-wrap"> 
                                          <input type="text" placeholder="Search Keywords" name="cari" class="search-field" /> 
                                        <button type="submit" class="search-submit" name="submit"><i class="fa fa-search"></i></button>
                                      </div>
                                    <!-- </form> -->
                                    <?php echo form_close(); ?>
                                </div>
                            </section>
                            <section id="cms_recent_posts-3" class="widget widget_cms_recent_posts">
                                <div class="widget-content">
                                    <h2 class="widget-title">Recent Posts</h2>
                                    <div class="posts-list layout-default">
                                        <!-- loop here  -->
                                        <?php 
                    $terbaru = $this->db->query("SELECT * FROM berita a JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.dibaca DESC LIMIT 5");
                    foreach ($terbaru->result_array() as $row){
                      $tanggaldetail = tgl_indo($row['tanggal']);
                      if ($row['gambar'] == ''){ $fotodetail = 'small_no-image.jpg'; }else{ $fotodetail = $row['gambar']; } ?>
                       
                    
                                      <div class="entry-brief clearfix">
                                            <div class="entry-media">
                                                <a style="background-image: url('<?= base_url(); ?>asset/foto_berita/<?= $fotodetail; ?>');" href="<?= base_url(); ?>berita/detail/<?= $row['judul_seo']; ?>"></a>
                                            </div>
                                            <div class="entry-content">
                                                <h4 class="entry-title"><a href="<?= base_url(); ?>berita/detail/<?= $row['judul_seo']; ?>" title="Importers achieve cost savings through the First Sale rule!"><?= $row['judul']; ?></a></h4>
                                                <div class="entry-meta"> <span>Mar 30, 2019</span></div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- end here -->
                                        <!-- <div class="entry-brief clearfix">
                                            <div class="entry-media">
                                                <a style="background-image: url('../wp-content/uploads/2019/03/shutterstock_682632511.jpg');" href="../cargo-flow-through-better-supply-chain-visibility-control/index.html"></a>
                                            </div>
                                            <div class="entry-content">
                                                <h4 class="entry-title"><a href="../cargo-flow-through-better-supply-chain-visibility-control/index.html" title="Cargo flow through better supply chain visibility, control.">Cargo flow through better supply chain visibility, control.</a></h4>
                                                <div class="entry-meta"> <span>Mar 29, 2019</span></div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="entry-brief clearfix">
                                            <div class="entry-media">
                                                <a style="background-image: url('../wp-content/uploads/2019/03/shutterstock_682632538.jpg');" href="../importance-of-specialized-focus-in-projects-oil-gas-logistic/index.html"></a>
                                            </div>
                                            <div class="entry-content">
                                                <h4 class="entry-title"><a href="../importance-of-specialized-focus-in-projects-oil-gas-logistic/index.html" title="Importance of specialized focus in Projects, Oil &#038; Gas Logistics?">Importance of specialized focus in Projects, Oil &#038; Gas Logistics?</a></h4>
                                                <div class="entry-meta"> <span>Mar 28, 2019</span></div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </section>