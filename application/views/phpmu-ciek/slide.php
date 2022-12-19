<div class="wpb_revslider_element wpb_content_element">
  <!-- START Slider Home 1 REVOLUTION SLIDER 6.0.5 -->
  <p class="rs-p-wp-fix"></p>
  
  <rs-module-wrap id="rev_slider_3_1_wrapper"
      data-source="gallery"
      style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
      <rs-module id="rev_slider_3_1" style="display:none;"
          data-version="6.0.5">
          <rs-slides>

          <?php
    $headline = $this->model_utama->headline(0,4);
    $no = 1;
    $slider = 3;
    $layer = 5;
    foreach ($headline->result_array() as $row){
    if ($no==1){ $active = 'active'; }else{ $active = ''; }
        if ($row['gambar'] ==''){ $foto_slide = 'no-image.jpg'; }else{ $foto_slide = $row['gambar']; }
        $tgl = tgl_indo($row['tanggal']);
        // echo "<div class='item $active'>          
        //         <a class='hover-effect' href='".base_url()."layanan/detail/$row[judul_seo]'><img style='width:100%; height:265px' src='".base_url()."asset/foto_berita/$foto_slide' alt='$row[judul]' class='img-responsive center-block'></a>
        //         <div style='text-align:left; top:190px; left:15px; right:10px; width:100%' class='carousel-caption wrapper container'>
        //             <span class='glyphicon glyphicon-th-list' aria-hidden='true'></span> <a style='color:#fff' href='#'>$row[nama_kategori]</a>, <span class='glyphicon glyphicon-time' aria-hidden='true'></span> $row[hari], $tgl | $row[jam] WIB
        //             <a style='color:#fff' href='".base_url()."layanan/detail/$row[judul_seo]'><h4 style='margin-top:0px !Important'>$row[judul]</h4></a>
        //         </div>
        //     </div>"; 
            ?>
       

            <!-- start looping -->
              <rs-slide data-key="rs-<?= $no; ?>"
                  data-title="<?= $row['nama_kategori']; ?>"
                  data-thumb="<?=base_url()?>asset/foto_layanan/<?= $foto_slide; ?>"
                  data-anim="ei:d;eo:d;s:d;r:0;t:fade;sl:d;">
                  <img src="<?=base_url()?>asset/foto_layanan/<?= $foto_slide; ?>"
                      title="<?= $row['judul'];?>"
                      data-panzoom="ss:100;se:105;"
                      class="rev-slidebg" data-no-retina>
                  <!--
-->
                  <rs-group id="slider-<?= $slider; ?>-slide-<?= $no; ?>-layer-<?= $layer; ?>"
                      data-type="group"
                      data-xy="xo:-1px,-2px,0,0;y:m;yo:-4px,20px,0,0;"
                      data-text="l:22;a:inherit;"
                      data-dim="w:100%,1167px,765px,764px;h:305px,305px,240px,420px;"
                      data-frame_0="tp:600;"
                      data-frame_1="tp:600;sR:10;"
                      data-frame_999="o:0;tp:600;st:w;sR:8690;sA:9000;"
                      style="z-index:6;font-family:Roboto;">
                      <!--
-->
                      <rs-layer id="slider-<?= $slider; ?>-slide-<?= $no; ?>-layer-<?= $layer; ?>"
                          data-type="text"
                          data-xy="x:l,c,c,c;xo:-3px,0,0,1px;yo:-13px,-12px,-12px,-7px;"
                          data-text="w:normal;s:75,60,43,55;l:85,70,53,60;fw:700;a:left,center,center,center;"
                          data-dim="w:765px,715px,525px,100%;h:171px,auto,auto,auto;"
                          data-frame_0="x:-50px;tp:600;"
                          data-frame_1="tp:600;st:450;sp:1800;sR:440;"
                          data-frame_999="o:0;tp:600;st:w;sR:6750;"
                          style="z-index:7;font-family:Work Sans;">
                          <?= $row['judul']; ?>
                      </rs-layer>
                      <!--
-->
                      <rs-layer id="slider-<?= $slider; ?>-slide-<?= $no; ?>-layer-<?= $layer; ?>"
                          data-type="text"
                          data-xy="x:l,c,c,c;y:m;yo:44px,24px,12px,-1px;"
                          data-text="w:normal;s:17,17,15,14;l:24,24,20,18;fw:700;a:inherit,center,center,center;"
                          data-dim="w:597px,601px,563px,300px;h:auto,43px,auto,auto;"
                          data-rsp_o="off" data-rsp_bd="off"
                          data-frame_0="x:-50px;tp:600;"
                          data-frame_1="tp:600;e:Power4.easeInOut;st:450;sp:1800;sR:440;"
                          data-frame_999="o:0;tp:600;st:w;sR:6750;"
                          style="z-index:8;font-family:Roboto;">
                          <?= $row['nama_kategori']; ?>
                          <?php echo $row['hari'] .' ', $tgl ?> WIB
                      </rs-layer>
                      <!--
-->
                      <rs-layer id="slider-<?= $slider; ?>-slide-<?= $no; ?>-layer-<?= $layer; ?>"
                          class="rev-btn" data-type="button"
                          data-color="#222222"
                          data-xy="x:l,c,c,c;xo:0,-90px,-90px,-50px;y:b;yo:0,1px,0,3px;"
                          data-text="s:14,14,14,13;l:17;fw:700;a:inherit;"
                          data-actions='o:click;a:simplelink;url:<?= base_url()."layanan/kategori/".$row['kategori_seo'] ?>;'
                          data-rsp_o="off" data-rsp_bd="off"
                          data-padding="t:16,16,16,10;r:44,44,44,15;b:16,16,16,10;l:44,44,44,15;"
                          data-frame_0="x:-50px;tp:600;"
                          data-frame_1="tp:600;st:1000;sp:1500;sR:990;"
                          data-frame_999="o:0;tp:600;st:w;sR:6500;"
                          data-frame_hover="c:#fff;bgc:#ff5e14;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;e:Power1.easeIn;"
                          style="z-index:9;background-color:#ffffff;font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                          Detail </rs-layer>
                      <!--
-->
                      <rs-layer
                          id="slider-<?= $slider; ?>-slide-<?= $no; ?>-layer-<?= $layer; ?>"
                          data-type="text"
                          data-xy="x:l,c,c,c;xo:203px,90px,90px,50px;y:b;yo:1px,1px,1px,-3px;"
                          data-text="s:14,14,14,13;l:22,22,22,22;fw:700;a:inherit;"
                          data-rsp_o="off" data-rsp_bd="off"
                          data-frame_0="x:50px;tp:600;"
                          data-frame_1="tp:600;st:1400;sp:1500;sR:1390;"
                          data-frame_999="o:0;tp:600;st:w;sR:6100;"
                          style="z-index:10;font-family:Roboto;">
                          <div id="cms-video-popup"
                              class="cms-video-popup  inline-block ">
                              <div
                                  class="cms-video-popup-content bg-image">
                                  <a class="default video-no-autoplay play-video-button "
                                      href="data/vimeo.com/192332438.html">
                                      <div
                                          class="icon size-small">
                                          <i
                                              class="fa fa-play"></i>
                                          <span
                                              class="radar"></span>
                                      </div>
                                      <p class="button-text">
                                          Video Kami!</p>
                                  </a></div>
                          </div>
                      </rs-layer>
                      <!--
-->
                  </rs-group>
                  <!--
-->
                  <rs-layer id="slider-<?= $slider; ?>-slide-<?= $no; ?>-layer-<?= $layer; ?>"
                      class="tp-shape tp-shapewrapper"
                      data-type="shape" data-rsp_ch="on"
                      data-xy="xo:-1000px;"
                      data-text="fw:100;a:inherit;"
                      data-dim="w:5000px;h:800px;"
                      data-frame_0="tp:600;"
                      data-frame_1="tp:600;st:470;sR:470;"
                      data-frame_999="o:0;tp:600;st:w;sR:8230;"
                      style="z-index:5;background:linear-gradient(rgba(27,26,26,0.35) 0%, rgba(27,26,26,0.15) 33%, rgba(27,26,26,0.15) 82%);font-family:Roboto;">
                  </rs-layer>
                  <!--
-->
              </rs-slide>
              <!-- end looping -->
             <?php 
             $slider++;
             $no++;
             $layer++;
            }
        ?>   

              
          </rs-slides>
          <rs-progress class="rs-bottom"
              style="visibility: hidden !important;">
          </rs-progress>
      </rs-module>
  </rs-module-wrap> <!-- END REVOLUTION SLIDER -->
</div>