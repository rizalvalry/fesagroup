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
  width: 25%;
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
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
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

<?php
            echo "<p class='sidebar-title'> &nbsp; $title</p><hr>";
                $no = 1;
                foreach ($berita->result_array() as $row){
                    $isi_berita = strip_tags($row['isi_berita']); 
                    $isi = substr($isi_berita,0,100); 
                    $isi = substr($isi_berita,0,strrpos($isi," "));
                    $tanggal = tgl_indo($row['tanggal']);
                    if ($row['gambar'] == ''){ $foto = 'small_no-image.jpg'; }else{ $foto = $row['gambar']; }
                    echo "<div class='col-md-12'>
                    
                    <a href='".base_url()."berita/detail/$row[judul_seo]'>
            <div class='column'>
            <div class='card-project'>
                <img class='object-project' src='asset/foto_berita/".$foto."' alt='Avatar' style='width:100%; height:200px;'>
                <div class='container'>
                <p class='cms-fancybox-title' style='margin-top:1vw; color:#ff5e158f;'><b>".$row['judul']."</b></p> 
                </div>
                </div>
            </div>
                    </a>
                          

                        </div>";
                        if ($no % 3 == 0){
                            echo "<div style='clear:both'><hr></div>";
                        }
                    $no++;
                }
            ?>
            <div style="clear:both"></div>
            <?php echo $this->pagination->create_links(); ?>
