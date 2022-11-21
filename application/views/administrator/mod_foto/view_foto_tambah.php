<div class="container my-5">
		<div class="row">
			<div class="col-md-8">
      <?php echo validation_errors();?>
        <?php echo form_open_multipart('administrator/proses_tambahfoto');?>

        <select name='id_halaman' class='form-control' required>
                    <option value='' selected>- Pilih Kategori -</option>
                    <?php foreach ($record->result_array() as $row){
                        echo "<option value='$row[id_halaman]'>$row[judul]</option>";
                    } ?>
                    </select>
        
				    <div class="form-group fieldGroup">
				        <div class="input-group">
                <input type="file" multiple="multiple" name="nama_foto[]" class="form-control" />
                <input type="text" name="deskripsi[]" class="form-control" placeholder="Enter Your deskripsi"/>
				            <div class="input-group-addon ml-3"> 
				                <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
				            </div>
				        </div>
				    </div>
				    
				    <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit"/>				    
				</form>
				<div class="form-group fieldGroupCopy" style="display: none;">
				    <div class="input-group">
            <input type="file" multiple="multiple" name="nama_foto[]" class="form-control" />
            <input type="text" name="deskripsi[]" class="form-control" placeholder="Enter Your deskripsi"/>
				       
				        <div class="input-group-addon"> 
				            <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
         
     
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function(){
    // membatasi jumlah inputan
    var maxGroup = 10;
    
    //melakukan proses multiple input 
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
	</script>