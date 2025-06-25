

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Update Services Detail</h3>
							</div>
							<div class="module-body">

									

									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>services/update_services" enctype="multipart/form-data">

										<?php foreach ($services_data as $value) {?>
										
						<input type="hidden" name="service_id" value="<?php echo $value->servise_id;?>">
						<input type="hidden" name="old_img1" value="<?php echo $value->small_image;?>">
						<input type="hidden" name="old_img2" value="<?php echo $value->long_image;?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="on_screen" required>
													<option value="">Select Here.....</option>
													<option value="Y" <?php if($value->on_screen == 'Y'){?>selected="selected"<?php }?>>Yes</option>
													<option value="N" <?php if($value->on_screen == 'N'){?>selected="selected"<?php }?>>No</option>
													
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Header Main Menu </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="header_manu_id" id="header_main_menu" required>
													<option value="">Select Here.....</option>
													<?php foreach ($headre_main_menu as  $value1) { if($value1->main_header_id == $value->header_manu_fk_id){?>
								<option value="<?php echo $value1->main_header_id;?>" selected><?php echo $value1->main_header_name;?></option>
													<?php } else { ?>
													<option value="<?php echo $value1->main_header_id;?>"><?php echo $value1->main_header_name;?></option>
												<?php }}?>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Header Sub Menu </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="header_sub_menu_id" id="sub_menu" required>
													<option value="">Select Here.....</option>
													<?php foreach ($headre_sub_menu as $key) { if($key->sub_menu_id == $value->header_sub_menu_fk_id){?>
														<option value="<?php echo $key->sub_menu_id;?>" selected><?php echo $key->sub_menu_name;?></option>
													<?php } }?> 
													
												</select>
											</div>
										</div>

										

										

										

										

											<div class="control-group">
											<label class="control-label" for="basicinput">Short Description</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="short_description" maxlength="200" required><?php echo $value->short_description;?></textarea>
											</div>
										</div>

										<div class="control-group">
											
											
												<textarea class="span8" rows="5" name="description" id="description"><?php echo $value->description;?></textarea>
											
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput"> Image</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image1"  class="span8">
												
											</div>
										</div>

										<div class="control-group">
											
											<div class="controls">
												 <img  align="center" src="<?php echo base_url().'services_img/'.$value->small_image;?>" width="150" height="150"/> 
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput"> Image</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image2"  class="span8"  >
												
											</div>
										</div>
										<div class="control-group">
											
											<div class="controls">
												 <img  align="center" src="<?php echo base_url().'services_img/'.$value->long_image;?>" width="150" height="150" /> 
												
											</div>
										</div>


											<?php } ?>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Submit</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 $('#header_main_menu').change(function(){
  var header_menu = $('#header_main_menu').val();


  if(header_menu != '')
  {
     $.ajax({
                    url: "<?php echo base_url();?>admin/get_sub_menu/",
                     dataType:'json',
                    method: "POST",
                    data:{header_menu:header_menu},
                    success: function (data) {

                            
                            
                              var z='';
                              var z='<option value="">Select Here.....</option>';
          
            for(var i =0;i<data.length; i++) {
                 z += 
             '<option value="' + data[i].sub_menu_id + '">' + data[i].sub_menu_name + '</option>';
            } 

                       
                        $('#sub_menu').html(z);
                    }
                });
  
   
  }
 
  
  else
  {
$('#sub_menu').html('<option value="">Select Here.....</option>');
  }
 });
 
});
 </script>


	 <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
          <script type="text/javascript">

         CKEDITOR.replace('description');
        
        
        
        
      
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['description'].getData().replace(/<[^>]*>/gi, '').length;
          
            
            
            if( !messageLength ) {
                alert( 'Please Enter Deatil' );
                e.preventDefault();
            }
            
        });
          
       
    </script>