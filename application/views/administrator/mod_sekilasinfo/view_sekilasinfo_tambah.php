<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Info</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_sekilasinfo',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Info</th>        <td><textarea class='form-control' name='a' style='height:120px'></textarea></td></tr>
                    <tr><th width='120px' scope='row'>Isi</th>        <td><textarea id='editor1' class='form-control' name='e' style='height:120px'></textarea></td></tr>
                    <tr><th scope='row'>Gambar</th>                    <td><input type='file' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Aktif</th>               <td><input type='radio' name='c' value='Y' checked> Y &nbsp; <input type='radio' name='c' value='N'> N</td></tr>
                    <tr><th width='50px' scope='row'>Urutan</th>   <td><input type='number' class='form-control' name='d'></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/sekilasinfo'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";
